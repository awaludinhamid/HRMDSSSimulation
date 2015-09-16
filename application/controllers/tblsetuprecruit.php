<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TblSetupRecruit extends CI_Controller {
  
  public function __construct() {        
    parent::__construct();
    $this->load->library("tblsetuprecruitfactory");
    $this->load->library("tblemployeefactory");
  }

  public function index() {
    echo "This is the index";
  }
  
  public function show() {
    $data = array(
        "recruits" => $this->tblsetuprecruitfactory->getRecruits()
        //"recruits" => $this->tblsetuprecruitfactory->getRecruitByLamaKerjaUmur("F",22)
    );
    $this->load->view("showrecruits",$data);
  }
  
  public function getrecruit($lamakerja = "", $umur = 0) {
    echo $this->tblsetuprecruitfactory->getRecruitByLamaKerjaUmur($lamakerja,$umur);
  }
  
  public function save() {
    $lamakerja = filter_input(INPUT_POST,"lamakerja");
    $umur = filter_input(INPUT_POST,"umur");
    $jumlah = filter_input(INPUT_POST,"jumlah");
    $desc = filter_input(INPUT_POST,"desc");
    $this->tblsetuprecruitfactory->saveRecruit($lamakerja,$umur,$jumlah,$desc);
  }
  
  public function update() {
    $id = filter_input(INPUT_POST,"id");
    $lamakerja = filter_input(INPUT_POST,"lamakerja");
    $umur = filter_input(INPUT_POST,"umur");
    $jumlah = filter_input(INPUT_POST,"jumlah");
    $desc = filter_input(INPUT_POST,"desc");
    $count = $this->tblemployeefactory->getCount(null);
    $this->tblsetuprecruitfactory->updateRecruit($id,$lamakerja,$umur,$jumlah,$desc,$count);
  }
  
  public function process() {
    $this->tblsetuprecruitfactory->processSetup();
  }
}

