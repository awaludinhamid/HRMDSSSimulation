<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start(); //we need to call PHP's session object to access it through CI
class Authentication {
    private $_ci;
 
 function __construct()
 {
   $this->_ci =& get_instance();
 }
 
 function setUserData($sessArray) {
   $this->_ci->session->set_userdata('logged_in', $sessArray);
 }
 
 function login()
 {
   if(!$this->_ci->session->userdata('logged_in'))
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 
 function logout()
 {
   $this->_ci->session->unset_userdata('logged_in');
   session_destroy();
   //redirect('login', 'refresh');
 }
 
}