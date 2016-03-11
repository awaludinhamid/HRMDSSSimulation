<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UserHistory extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->helper("url");
        $this->load->library("authentication");
        /*$this->load->library("pagination");
        $this->load->library("tblemployeefactory");*/
  }

  public function index(){
    $this->authentication->login();
    /*$config = array();
    $config["base_url"] = base_url() . "userhistory";
    $config["total_rows"] = $this->tblemployeefactory->getCountAll();
    $config["per_page"] = 20;
    $config["uri_segment"] = 3;
    $this->pagination->initialize($config);
    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    $data["results"] = $this->tblemployeefactory->getAllEmployees($config["per_page"],$page);
    $data["links"] = $this->pagination->create_links();
    $this->load->view("userhistorypage",$data);*/
    $this->load->view('userhistorypage');
  }
}