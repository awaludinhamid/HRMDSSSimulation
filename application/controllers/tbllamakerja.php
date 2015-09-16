<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TblLamaKerja extends CI_Controller {
  
  public function __construct() {        
    parent::__construct();
    $this->load->library("tbllamakerjafactory");
  }

  public function index() {
    echo "This is the index";
  }
  
  public function show() {
    $name = filter_input(INPUT_POST,"name");
    $lamakerjas = $this->tbllamakerjafactory->getLamaKerjas();
    $select = array();
    foreach ($lamakerjas as $value) {
      $select[$value->getName()] = $value->getName();
    }
    /*$data = array(
        "lamakerjas" => $this->tbllamakerjafactory->getLamaKerjas()
    );
    $this->load->view("showlamakerja",$data);*/
    echo form_dropdown("lamakerja",$select,$name);
  }
  
  public function getlamakerja($id = 0) {
    echo $this->tbllamakerjafactory->getLamaKerja($id);
  }
}

