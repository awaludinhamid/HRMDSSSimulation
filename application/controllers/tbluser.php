<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TblUser extends CI_Controller {
  
  public function __construct() {        
    parent::__construct();
    $this->load->library("tbluserfactory");
  }

  public function index() {
    echo "This is the index";
  }
  
  public function show() {
    $data = array(
        "users" => $this->tbluserfactory->getUsers()
    );
    $this->load->view("showusers",$data);
  }
  
  public function view() {
    $data = array (
      "users" => $this->tbluserfactory->getViewUsers()  
    );
    $this->load->view("viewusers",$data);
  }
  
  public function getpassbyname($name = "") {
    echo $this->tbluserfactory->getUserByName($name)->getPassword();
  }
  
  public function save() {
    $name = filter_input(INPUT_POST,"name");
    $password = filter_input(INPUT_POST,"password");
    $session = filter_input(INPUT_POST,"session");
    $desc = filter_has_var(INPUT_POST,"desc");
    $this->tbluserfactory->saveUser($name,$password,$session,$desc);
  }
  
  public function delete() {
    $id = filter_input(INPUT_POST,"id");
    $this->tbluserfactory->deleteUser($id);
  }
  
  public function login() {
    $name = filter_input(INPUT_POST,"name");
    $password = filter_input(INPUT_POST,"password");
    if($name == "" || $password == "") {
      echo false;
    } else {
      echo $this->tbluserfactory->verifyLogin($name,$password);
    }
  }
}

