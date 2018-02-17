<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package RPGWeb
 * @author Enigma
 */

class Template 
{
    /**
    * Class variables and public ones
    */
	private     $CI;    
	private     $title; 
	private     $custom_description; 
	private     $custom_keywords; 
	public      $page_path; 
	public      $image_path;
	public      $base_url;
	public      $style_path;
	public      $view_path;
	public  	$gamename;

	/**
	 * Get the CI instance and create the paths
	 */
	public function __construct()
	{
		$this->CI = &get_instance();

		// Construct the paths
		$this->view_path    = "views/";
		$this->style_path   = base_url()."application/css/";
		$this->image_path   = base_url()."application/img/";
		$this->base_url     = base_url();
		$this->title        = "";
		$this->gamename 	="Foreign Sword";
	}


    /**
	 * Load a page template
	 * @param String $page Filename
	 * @param Array $data Array of additional template data
	 * @return html rendered page
	 */
	public function loadPage($file_name,$extra = array())
	{
		$data = array(
			'base_url'		=>	$this->base_url,
			'image_path'	=>	$this->image_path,
			'CI'			=>	$this->CI,
			'app_url'		=> 	$this->base_url . 'application/',
			'extra'			=>	$extra
		);
		return $this->CI->smartyengine->view($this->view_path. $file_name, $data, true, true);
    }
   
	public function view($page)
	{
		$header = $this->getHeader();

		// Gather the theme data
		$theme_data = array(
			"header"                => $header,
			"app_url" 				=> $this->base_url . 'application/',
			"CI"                    => $this->CI,
			"page"					=> $page,
			"image_path"            => $this->image_path,
			"footer"				=> $this->CI->smartyengine->view($this->view_path .'static/footer.tpl',array('server_name' => 'rpg'),true)
		);

		// Load the main template
		return $output = $this->CI->smartyengine->view($this->view_path.'static/template.tpl', $theme_data, true);
	}

	/**
	 * Gets the header completely loaded.
	 * @return mixed
	 */
	 private function getHeader()
	 {
		 // Gather the header data
		 $header_data = array(
			 "image_path" 			=> $this->image_path,
			 "base_url" 			=> $this->base_url,
			 "title" 				=> $this->gamename . ' - ' . $this->title ,
			 "keywords" 			=> 'words',
			 "description" 			=> 'desc',
			 "app_url" 				=> $this->base_url . 'application/',
			 "favicon" 				=> $this->image_path .'img/favicon.ico',
			 "csrf_cookie" 			=> $this->CI->input->cookie('csrf_token_name'),
			 "isOnline"				=> isLogged()
		 );
 
		 // Load the theme
		 return $this->CI->smartyengine->view($this->view_path."static/header.tpl", $header_data, true);
	 }
 

	/**
	 * Show the 404 error
	 */
	public function show404()
	{
		$this->setTitle('404 Error');

		$message = $this->loadPage("error.tpl", array('module' => 'error', 'is404' => true));
		$output = $this->custombox('404 Error', $message);

		$this->view($output);
	}

	/**
	 * Show an error message
	 * @param String $error
	 */
	public function showError($error = false)
	{
		$message = $this->loadPage("error.tpl", array('module' => 'error', 'errorMessage' => $error));
		$output = $this->box($error, $message);

		return $output;
    }



    /**
	 * Format text
	 * @param String $text
	 * @param Boolean $nl2br
	 * @param Boolean $smileys
	 * @param Boolean $xss
	 * @param Mixed $break
	 */
	public function format($text, $nl2br = false, $smileys = true, $xss = true, $break = false)
	{
		// Prevent Cross Site Scripting
		if($xss && is_string($text))
		{
			$text = $this->CI->security->xss_clean($text);
			$text = htmlspecialchars($text);
		}

		// Wordwrap
		if($break)
		{
			$text = wordwrap($text, $break, "<br />", true);
		}

		// Convert new lines to <br>
		if($nl2br)
		{
			$text = nl2br($text);
		}

		/*// Show emoticons temporary disabled
		if($smileys)
		{
			$text = parse_smileys($text, base_url().$this->CI->config->item('smiley_path'));
		}
		*/
		return $text;
	}

	 public function setTitle($t)
	 {
		 $this->title = $t;
	 }
}