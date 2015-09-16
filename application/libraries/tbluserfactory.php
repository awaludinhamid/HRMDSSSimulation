<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TblUserFactory {
    private $_ci;
    
    function __construct() {
      $this->_ci =& get_instance();
      $this->_ci->load->model("tblusermodel");     
      $this->_ci->load->library("authentication");
    }
    
    public function getUsers() {
      $query = $this->_ci->db->get("tbl_user");
      if($query->num_rows() > 0) {
        $users = array();
        foreach($query->result() as $row) {
          $users[] = $this->createObjectFromData($row);
        }
        return $users;
      }
      return false;
    }
    
    public function getViewUsers() {
      $this->_ci->db->where("session_id !=",0);
      $this->_ci->db->from("tbl_user");
      $this->_ci->db->join("tbl_session","tbl_user.session_id = tbl_session.id");
      $this->_ci->db->select("tbl_user.id,tbl_user.name username,tbl_user.password,tbl_session.name session_name");
      $query = $this->_ci->db->get();
      if($query->num_rows() > 0) {
        return $query->result();
      }
      return false;
    }
    
    public function getUser($id = 0) {
      if($id > 0) {
        $query = $this->_ci->db->get_where("tbl_user",array("id" => $id));
        if($query->num_rows() > 0) {
          return $this->createObjectFromData($query->row());
        }
      }
      return false;
    }
    
    public function getUserByName($name) {
      if($name != "") {
        $query = $this->_ci->db->get_where("tbl_user",array("name" => $name));
        if($query->num_rows() > 0) {
          return $this->createObjectFromData($query->row());
        }
      }
      return new TblUserModel();
    }

    public function createObjectFromData($row) {
      $user = new TblUserModel();
      $user->setId($row->id);
      $user->setName($row->name);
      $user->setPassword($row->password);
      $user->setSessionId($row->session_id);
      $user->setDescription($row->description);
      $user->setCreatedBy($row->created_by);
      $user->setCreatedDate($row->created_date);
      $user->setUpdatedBy($row->updated_by);
      $user->setUpdatedDate($row->updated_date);  
      return $user;
    }

    public function saveUser($name,$password,$session,$desc) {
      $user = new TblUserModel();
      $user->setName($name);
      $user->setPassword($password);
      $user->setSessionId($session);
      $user->setDescription($desc);
      $user->setCreatedBy("admin");
      $user->setCreatedDate(date("y-m-d"));
      $user->setUpdatedBy("admin");
      $user->setUpdatedDate(date("y-m-d"));  
      $user->commit();
    }

    public function deleteUser($id) {
      $user = new TblUserModel();
      $user->setId($id);
      $user->delete();
    }
    
    public function verifyLogin($name,$password) {
      $user = $this->getUserByName($name);
      if($user->getPassword() == $password) {
        $sessArray = array(
          "username" => $name,
          "password" => $password
        );
        $this->_ci->authentication->setUserData($sessArray);
        return true;
      }
      return false;
    }
  }

