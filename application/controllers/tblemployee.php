<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TblEmployee extends CI_Controller {
  
  public function __construct() {        
    parent::__construct();
    $this->load->library("tblemployeefactory");
  }

  public function index() {
    echo "This is the index";
  }
  
  public function show() {
    $flagEmpl = filter_input(INPUT_POST,"flagEmpl");
    $userId = filter_input(INPUT_POST,"userId");
    $gol = filter_input(INPUT_POST,"gol");
    $data = array(
        "employees" => $this->tblemployeefactory->getEmployees($flagEmpl,$userId,$gol)
    );
    $this->load->view("showemployees",$data);
  }
}

