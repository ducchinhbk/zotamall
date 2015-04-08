<?php
class LanguageLoader
{
    function initialize() {
        
        $ci =& get_instance();
        $ci->load->helper('language');
        
 
        $site_lang = $ci->session->userdata('language');
        if ($site_lang) {
            $ci->lang->load('message',$ci->session->userdata('language'));
        } else {
            $ci->lang->load('message','english');
        }
    }
}