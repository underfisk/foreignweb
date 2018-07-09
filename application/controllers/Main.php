<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller 
{
    /**
     * Main route function for home
     * @params none
     */
	public function index()
	{
		$this->template->setTitle("Home");
		$data = array(
			"ndata"	=> $this->notices->all()
		);
		$content  = $this->template->loadPage("home.tpl",$data);
		die($this->template->view($content));
	}

	/**
	 * Route function to show download page
	 */
	public function download()
	{
		$this->template->setTitle("Download");
		die($this->template->view($this->template->loadPage('download.tpl')));
	}

	/**
	 * Route function defined to show characters
	 */
	public function characters()
	{
		if (!isLogged())
			redirect(base_url(),'refresh');

		$this->template->setTitle("Characters");
		$data = array(
			'nchars' => $this->characters->byUserID($this->users->getID($this->session->userdata('usr')))
		);
		die($this->template->view($this->template->loadPage('characters.tpl', $data)));
	}

	/**
	 * Route function for logout to destroy the current user session
     * @params none
	 */
	public function logout()
	{
		if (isLogged())
			$this->session->sess_destroy();

		redirect(base_url('login'));
	}

    /**
     * Route function for register page protected in various cases
     * @params none
     */
	public function register()
	{
		if (isLogged())
			redirect(base_url(),'refresh');

		//String helper to generated a sha key for email validation
		$this->load->helper('string');

		//encryption config initialization
		$this->encryption->initialize(array(
			'cipher' 	=> 'aes-256',
			'mode' 		=> 'ctr',
			'key' 		=> 'pwd-my-web',
			'driver'	=> 'openssl'
		));

		//Validation rules and error delimiters definition
		$this->form_validation->set_error_delimiters('<div style="color:red; margin:2px;">', '</div>');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[30]|alpha_numeric|is_unique[users.usr]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[50]|alpha_numeric');
        $this->form_validation->set_rules('confirm-password', 'Password Confirmation', 'trim|required|matches[password]|alpha_numeric');
		$this->form_validation->set_rules('email','Email address','trim|required|valid_email|is_unique[users.email]');

		//If everything goes right in form validation we submit the next code
        if ($this->form_validation->run())
        {
			$hash_generated = random_string('sha1', 40);
			$d = array(
				'usr'		=>	$this->input->post('username',TRUE),
				'email'		=>	$this->input->post('email',TRUE),
				'pwd'		=>	$this->encryption->encrypt($this->input->post('password')),
				'rdate'		=>	date('Y-m-d'),
				'hash'		=>	$hash_generated
			);

			$result = $this->users->Add($d);
			if ($result)
			{
				$msg = 'Thank you for join our platform, now to proceed into your account you\'ll need to confirm your account by clicking on this link :</br>'.
					   '<center> <a href="'. base_url('confirm/') .$hash_generated.'">Confirm account</a></center>';
				
				$from = $this->config->item('emailserver')['root_email'];
			
				SendHTMLEmail($from,$this->input->post('email'),'Foreign Sword','Account Registered',$msg);

				$this->session->set_flashdata('register-success','Your account was been registered, check your email to confirm the account.');
				redirect(base_url('login'));
			}
			else
			{
				$this->session->set_flashdata('register-error','There was an error registering your account, try later!');
				redirect(base_url('register'));
			}
		}
				
		$this->template->setTitle("Register");

		$content  = $this->template->loadPage("register.tpl");
		die($this->template->view($content));
	}

    /**
     * Route for login page (website only and not game api)
     * @params none
     */
	public function login()
	{	
		if (isLogged())
			redirect(base_url(),'refresh');
			
		$this->encryption->initialize(array(
			'cipher' 	=> 'aes-256',
			'mode' 		=> 'ctr',
			'key' 		=> 'pwd-my-web',
			'driver'	=> 'openssl'
		));

		$this->form_validation->set_error_delimiters('<div style="color:red; margin:2px;">', '</div>');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[30]|alpha_numeric');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[50]|alpha_numeric');

        if ($this->form_validation->run())
        {
			$usr = $this->input->post('username',TRUE);
			$pwd = $this->input->post('password');
		
			$acc = $this->users->byUsr($usr);
			
			if ($acc)
			{
				$acc_pwd = $this->encryption->decrypt($acc[0]['pwd']);
				if ($pwd == $acc_pwd)
				{
					if ($acc[0]['validated'] == 1)
					{
						if ($acc[0]['banned'] != 1)
						{
							$this->session->set_userdata( array(
								'usr' => $this->input->post('username',TRUE),
								'logged' => TRUE
							));
							redirect(base_url('account'));
						}
						else
						{
							$this->session->set_flashdata('login-error','Your account has been banned, please check your email to see the reason.');
							redirect(base_url('login'));
						}
					}
					else
					{
						$this->session->set_flashdata('login-error','Please confirm your account, verify your email box and click in the link we sent you.');
						redirect(base_url('login'));
					}
				}
				else
				{
					$this->session->set_flashdata('login-error','Invalid password please try again.');
				}
			}	
			else
			{
				$this->session->set_flashdata('login-error','Invalid username please try again.');
			}
		}
		
		$this->template->setTitle("Login");

		$content  = $this->template->loadPage("login.tpl");
		die($this->template->view($content));
	}

    /**
     * Route function for gallery page to display the game pictures
     * @params none
     */
	public function gallery()
	{
		$this->template->setTitle("Gallery");

		$content  = $this->template->loadPage("gallery.tpl");
		die($this->template->view($content));
	}

    /**
     * Route function for email validation which receives an hash key to verify in the database
     * and confirm the email after checking if some user has this key
     * @param null $hash
     */
	public function validate_hash($hash = null)
	{
		if ($hash != null)
		{
			//clear the hash
			$hash = trim($hash);

			$dbHash = $this->users->HashExists($hash);
			if ($dbHash)
			{
				if ($dbHash[0]['validated'] == 1){
					$this->session->set_flashdata('activate-success','Your account is already verified.');
					redirect(base_url('login'));
				}
				else
				{
					$data = array(
						'id'	=>	$dbHash[0]['id'],
						'validated' => 1
					);
					$update = $this->users->Update($dbHash[0]['id'],$data);
					if ($update)
					{
						$this->session->set_flashdata('activate-success','Account was been verified succesfully.');
						redirect(base_url('login'));
					}
					else
					{
						$this->session->set_flashdata('activate-error','There was an error activating your accounnt.');
						redirect(base_url('login'));
					}
				}
			}
			else
			{
				$this->session->set_flashdata('activate-error','Invalid activation code.');
				redirect(base_url('login'));
			}
		}
		
	}

    /**
     * Route function for user panel main page
     * @params none
     */
	public function ucp()
	{
		$this->template->setTitle("User Panel");

		$data = array(
		    'acc_data'  	=>  $this->users->byUsr($this->session->userdata('usr')),
			'chars_count'	=>	$this->characters->CountByUserId($this->users->byUsr($this->session->userdata('usr'))[0]['id'])
		);

		$content  = $this->template->loadPage("ucp.tpl",$data);
		die($this->template->view($content));
	}

    /**
     * Route function for account activity/log
     * @params none
     */
	public function account_log()
	{
		$this->template->setTitle("Activity");
        $data = array(
            'log_data'  =>  $this->logs->select($this->users->getID($this->session->userdata('usr')))
        );
		$content  = $this->template->loadPage("ucp-log.tpl",$data);
		die($this->template->view($content));
	}

    /**
     * Route function to change account details such as Password
     * @params none
     */
	public function change_details()
    {
        //Iniatilize encryption configs
        $this->encryption->initialize(array(
            'cipher' 	=> 'aes-256',
            'mode' 		=> 'ctr',
            'key' 		=> 'pwd-my-web',
            'driver'	=> 'openssl'
        ));

        $this->form_validation->set_error_delimiters('<div style="color:red; margin:2px;">', '</div>');
        $this->form_validation->set_rules('cur_pwd', 'Current Password', 'trim|required|min_length[3]|max_length[30]|alpha_numeric');
        $this->form_validation->set_rules('pwd', 'New Password', 'trim|required|min_length[3]|max_length[50]|alpha_numeric');
        $this->form_validation->set_rules('c_pwd', 'Confirm New Password', 'trim|required|min_length[3]|max_length[50]|alpha_numeric');


        if ($this->form_validation->run())
        {
            //lets verify if the password matches the database one
            $db_pwd = $this->encryption->decrypt($this->users->byUsr($this->session->userdata('usr'))[0]['pwd']);

            if ($db_pwd == $this->input->post('cur_pwd'))
            {
                $data = array(
                    'pwd'   =>  $this->encryption->encrypt($this->input->post('pwd'))
                );

                $result = $this->users->updateByUsr($this->session->userdata('usr'),$data);
                if ($result)
                {
                    $this->session->set_flashdata('change-success','Password has been changed succefully!');
                    redirect(base_url('account'));
                }
                else
                {
                    $this->session->set_flashdata('change-error','Internal Server Error updating the password, please try later!');
                    redirect(base_url('change_details'));
                }
            }
            else
            {
                $this->session->set_flashdata('change-error','Your current password does not match with given one!');
                redirect(base_url('change_details'));
            }
        }

        $this->template->setTitle("Change Details");

        $content  = $this->template->loadPage("ucp-change.tpl");
        die($this->template->view($content));
    }
}
