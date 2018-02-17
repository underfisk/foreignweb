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
     * Returns json account data by username
     * @param $_POST['username']
     */
    public function get_account()
    {
        $usr = $this->input->post('username');

        if ($usr == null)
            die('No direct access allowed.');

        $result = $this->users->byUsr($usr);
        if ($result)
            die(json_encode($result));
        else
            die('0x1f');
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

        if ($usr == null || $pwd == null)
            die('No direct access allowed.');

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
     * Returns boolean reply and receives user id as main key
     * @param $_POST['char_id']
     * @param $data as json node and covert to php array
     */
    public function updateCharacter()
    {
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
        //async unity call
        /**
         * Achive id
         * Account id
         * Character name which obtained it
         * Datetime
         */
    }

    public function BindCharacter()
    {
        //add new character to account
        /**
         * Character data
         */
        $acc_id = $this->input->post('acc_id');
        $char_id = $this->input->post('char_data');
        //the data of char is created here so
    }

    /**
     * Deletes the character by id in a request
     * @param $_POST['character_id']
     */
    public function DeleteCharacter()
    {
        $c_id = $this->input->post('char_id');
        if ($c_id == null)
            die('No direct access allowed.');

        $exists = $this->characters->existsById($c_id);
        if ($exists)
        {
            $result = $this->characters->delete($c_id);
            if ($result)
                die(true);
            else
                die('0x3f');
        }
        else
            die('0x3f');
    }

}
