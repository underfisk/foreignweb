<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class API
 * @description Protected class with Unity Requests and protected parameters so no one outside can access
 * @author Enigma
 * @package Game API

 */
class API extends CI_Controller
{
    /**
     * @var Token used to verify if it's an Unity request
     */
    private $secretkey = '7uq3yLHOoT';

     /**
     * API password encryptor initializer
     */
    public function init_encryption()
    {
        //Iniatilize encryption configs
        $this->encryption->initialize(array(
            'cipher' 	=> 'aes-256',
            'mode' 		=> 'ctr',
            'key' 		=> 'pwd-my-web',
            'driver'	=> 'openssl'
        ));
    }

    /**
     * API constructor.
     * Every api call we verify the token before reply
     */
    public function __construct()
    {
        parent::__construct();
        $token = $this->input->post('tkn');
        if ($token == null)
            die('No direct access allowed.');
        else if ($token != $this->secretkey)
            die('Invalid token key!');
    }


    /**
     * Returns boolean reply
     * @param $_POST['username']
     * @param $_POST['password']
     */
    public function auth()
    {
        $this->init_encryption();
        $usr = $this->input->post('username');
        $pwd = $this->input->post('password');

        $acc = $this->users->byUsr($usr);

        if ($acc) {
            $acc_pwd = $this->encryption->decrypt($acc[0]['pwd']);
            if ($pwd == $acc_pwd) {
                $data = $this->users->byUsr($usr);
                if ($data)
                    die(json_encode($data));
                else
                    die('0x2f');
            }
        }
        else
            die('0x2f');
    }

    /**
     * Returns json characters data as the reply and receives the user id and the key
     * @param $_POST['user_id']
     */
    public function characters()
    {
        $u_id = $this->input->post('user_id');

        $accExists = $this->users->byId($u_id,true);
        if ($accExists)
        {
            $charsData = $this->characters->byUserID($u_id);
            if ($charsData)
                die(json_encode($charsData));
            else
                die('0x66f'); //this means we have no chars so we dont throw error
        }
        else
            die('0x4f');
    }

     /**
     * test for json data fom c#, i'll delete after
     */
    public function test()
    {
        $js = $this->input->post('jsdata');
        $jsArray = json_decode($js);
        die("Json Array is => " . $jsArray[0]->name);
    }

     /**
     * Returns msg code as the result of the creation
     * @param $_POST['c_name'], class and user id
     */
    public function character_create()
    {
        $name = $this->input->post('c_name',TRUE);
        $class = $this->input->post('c_class');
        $user_id = $this->input->post('u_id');

        
        //Max hp is set by items in a sum so by default the max hp its equal
        //to a default number like 500 but it will be affected according to items
        
        $data = array(
            'c_name'    =>  $name,
            'user_id'   =>  $user_id,
            'c_class'   =>  $class,
            'c_level'   =>  1,
            'c_exp'     =>  0,
            'c_rdate'   =>  date('Y-m-d H:m:s'),
            'c_gold'    =>  0,
            'c_silver'  =>  0,
            'c_bronze'  =>  0,
            'c_str'     =>  10,
            'c_agi'     =>  10,
            'c_spr'     =>  10,
            'c_def'     =>  10,
            'c_hp'      =>  500,
            'c_mana'    =>  200,
            'c_energy'  =>  100
        );

        $result = $this->characters->Create($data);
        if ($result)
        {
            $c_id = $this->characters->NewInventory($result); //returns the inv id
            if ($c_id)
            {
                die('success');
            }
            else
                die('error');
        }
        else
            die("error");
    }

    
    public function character_delete()
    {
        $char_id = $this->input->post('char_id');

        if ($char_id == null)
            die("No direct access allowed.");
        
        $result = $this->characters->delete($char_id); //also in the delete we remove everything like inv, items etc
        if ($result)
            die('success');
        else
            die('error');
    }

     /**
     * Returns yes or not according to the result
     * @param $_POST['char_name']
     */
    public function character_exists()
    {
        $cname = $this->input->post('char_name');
        if ($cname == null)
            die("No direct access allowed.");
        
        $exists = $this->characters->existsByName($cname);
        if ($exists)
            die("yes");
        else
            die("no");

    }

    /**
     * Returns boolean reply and receives user id as main key
     * @param $_POST['char_id']
     * @param $data as json node and covert to php array
     */
    public function updateCharacter()
    {
        $jsData = $this->input->post('c_jsdata');
        $c_id = $this->input->post('char_id');

        //function will be used to update the user data in the database
        /**
         * Inventory
         * Stats
         * Currency
         * Level
         * EXP
         * Equipped items
         * Map position
         * etc...
         */
    }

    public function updateAchivements()
    {
        $acc_id = $this->input->post('acc_id');
        $achive = $this->input->post('achive_id');
        $char_name = $this->input->post('char_name');
        $dt = date('Y-m-d H:m:s');

        //async unity call
        /**
         * Achive id
         * Account id
         * Character name which obtained it
         * Datetime
         */
    }
}
