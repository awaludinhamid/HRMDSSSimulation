<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AdminHome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library("authentication");
    }

    public function index(){
      $this->authentication->login();
      $this->load->view('adminhomepage');
    }
}
