<?php
  class TblUserModel extends CI_Model {
    
    private $_id;
    private $_name;
    private $_password;
    private $_session_id;
    private $_description;
    private $_created_by;
    private $_created_date;
    private $_updated_by;
    private $_updated_date;
    
    function __construct() {
      parent::__construct();
    }
    
    public function getId() {
      return $this->_id;
    }
    
    public function setId($value) {
      $this->_id = $value;
    }
    
    public function getName() {
      return $this->_name;
    }
    
    public function setName($value) {
      $this->_name = $value;
    }
    
    public function getPassword() {
      return $this->_password;
    }
    
    public function setPassword($value) {
      $this->_password = $value;
    }
    
    public function getSessionId() {
      return $this->_session_id;
    }
    
    public function setSessionId($value) {
      $this->_session_id = $value;
    }
    
    public function getDescription() {
      return $this->_description;
    }
    
    public function setDescription($value) {
      $this->_description = $value;
    }
    
    public function getCreatedBy() {
      return $this->_created_by;
    }
    
    public function setCreatedBy($value) {
      $this->_created_by = $value;
    }
    
    public function getCreatedDate() {
      return $this->_created_date;
    }
    
    public function setCreatedDate($value) {
      $this->_created_date = $value;
    }
    
    public function getUpdatedBy() {
      return $this->_updated_by;
    }
    
    public function setUpdatedBy($value) {
      $this->_updated_by = $value;
    }
    
    public function getUpdatedDate() {
      return $this->_updated_date;
    }
    
    public function setUpdatedDate($value) {
      $this->_updated_date = $value;
    }
    
    public function commit() {
      $data = array(
          "name" => $this->_name,
          "password" => $this->_password,
          "session_id" => $this->_session_id,
          "description" => $this->_description,
          "created_by" => $this->_created_by,
          "created_date" => $this->_created_date,
          "updated_by" => $this->_updated_by,
          "updated_date" => $this->_updated_date
      );
      if($this->_id > 0) {
        if($this->db->update("tbl_user",$data,array("id" => $this->_id))) {
          return true;
        }
      } else {
        if($this->db->insert("tbl_user",$data)) {
          $this->_id = $this->db->insert_id();
          return true;
        }
      }
      return false;
    }   
    
    public function delete() {
      if($this->_id > 0) {
        $this->db->delete("tbl_user",array("id" => $this->_id));
        return true;
      }
      return false;
    } 
  }
    
  

