<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TblSession extends CI_Controller {
  
  public function __construct() {        
    parent::__construct();
    $this->load->library("tblsessionfactory");
  }

  public function index() {
    echo "This is the index";
  }
  
  public function show() {
    $data = array(
        "sessions" => $this->tblsessionfactory->getSessions()
    );
    $this->load->view("showsessions",$data);
  }
  
  public function showlist() {
    $sessions = $this->tblsessionfactory->getSessions();
    $select = array();
    foreach ($sessions as $session) {
      $select[$session->getId()] = "Session " . $session->getName();
    }
    echo form_dropdown("session",$select,'','class="form-control" style="font-size: 10px; height: 30px"');    
  }
  
  public function getsession($id = 0) {
    echo $this->tblsessionfactory->getSession($id);
  }
  
  public function save() {
    $name = filter_input(INPUT_POST,"name");
    $status = filter_input(INPUT_POST,"status");
    $desc = filter_input(INPUT_POST,"desc");
    $this->tblsessionfactory->saveSession($name,$status,$desc);
  }
  
  public function delete() {
    $id = filter_input(INPUT_POST,"id");
    $this->tblsessionfactory->deleteSession($id);
  }
}