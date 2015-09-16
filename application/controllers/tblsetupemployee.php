<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TblSetupEmployee extends CI_Controller {
  
  public function __construct() {        
    parent::__construct();
    $this->load->library("tblsetupemployeefactory");
    $this->load->library("tbllamakerjafactory");
  }

  public function index() {
    echo "This is the index";
  }
  
  public function show() {
    $golongan = filter_input(INPUT_POST,"golongan");
    $data = array(
        "employees" => $this->tblsetupemployeefactory->getEmployeesByGolongan($golongan)
    );
    $this->load->view("showsetupemployees",$data);
  }
  
  public function update() {
    $id = filter_input(INPUT_POST,"id");
    $lamakerjath = filter_input(INPUT_POST,"lamakerjath");
    $umur = filter_input(INPUT_POST,"umur");
    $desc = filter_input(INPUT_POST,"desc");
    $lamakerja = $this->tbllamakerjafactory->getNameByValue($lamakerjath);    
    $this->tblsetupemployeefactory->updateEmployee($id,$lamakerja,$lamakerjath,$umur,$desc);
  }
}

