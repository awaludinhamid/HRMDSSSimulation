<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TblEmployee extends CI_Controller {
  
  public function __construct() {        
    parent::__construct();
    $this->load->library("tblemployeefactory");
    $this->load->library("tbluserfactory");
  }

  public function index() {
    echo "This is the index";
  }
  
  public function show() {
    $user = $this->tbluserfactory->getUserByName(filter_input(INPUT_POST,"userName"));
    $flagEmpl = filter_input(INPUT_POST,"flagEmpl");
    $userId = $user->getId();
    $gol = filter_input(INPUT_POST,"gol");
    $data = array(
        "employees" => $this->tblemployeefactory->getEmployees($flagEmpl,$userId,$gol)
    );
    $this->load->view("showemployees",$data);
  }
  
  public function showpaging() {
    $limit = filter_input(INPUT_POST,"limit");
    $offset = filter_input(INPUT_POST,"offset");
    header('Content-Type: application/json');
    echo json_encode($this->tblemployeefactory->getAllEmployees($limit,$offset));
  }
  
  public function countall() {
    echo $this->tblemployeefactory->getCountAll();
  }
}

