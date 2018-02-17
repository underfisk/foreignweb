<?php
defined('BASEPATH') OR exit ('No direct script acess allowed');

/**
 * Checks wheter the user has session started or not
 */
if(!function_exists('check_login'))
{
    function isLogged()
    {
        $CI = & get_instance();
        return $CI->session->userdata('logged') != TRUE ? false : true;
    }
}

/**
 * Sends HTML email using html_template.tpl
 */
if ( !function_exists('SendHTMLEmail'))
{
    function SendHTMLEmail($from,$to,$name,$subject,$msg,$page = 'email-template.tpl')
    {
        $CI = & get_instance();
        $CI->email->initialize($CI->config->item('emailserver'));
        $CI->email->from('no-reply@foreignsword.com',$name);
        $CI->email->to($to);
        $CI->email->subject($subject);
        $CI->email->message($CI->template->loadPage($page,array('content' => $msg, 'title'  =>  'Account Activation')));
        
        return $CI->email->send() ? true : false;
    }
}

/**
 * Formats php date/db date to DOM Format
 */
if ( !function_exists('FormatDate'))
{
    function FormatDate($date)
    {
        return $date != null ? date_format(new Date($date),'d-m-Y') : '00:00:00';
    }
}

/**
 * Formats php date/db date to DOM Format
 */
if ( !function_exists('FormatDateTime'))
{
    function FormatDateTime($dateTime)
    {
        return $dateTime != null ? date_format(new DateTime($dateTime),'d-m-Y H:i:s') : '00:00:00';
    }
}
