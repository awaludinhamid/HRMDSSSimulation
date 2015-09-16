<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TblSessionFactory {
    private $_ci;
    
    function __construct() {
      $this->_ci =& get_instance();
      $this->_ci->load->model("tblsessionmodel");      
    }
    
    public function getSessions() {
      $query = $this->_ci->db->get("tbl_session");
      if($query->num_rows() > 0) {
        $sessions = array();
        foreach($query->result() as $row) {
          $sessions[] = $this->createObjectFromData($row);
        }
        return $sessions;
      }
      return false;
    }
    
    public function getSession($id = 0) {
      if($id > 0) {
        $query = $this->_ci->db->get_where("tbl_session",array("id" => $id));
        if($query->num_rows() > 0) {
          return $this->createObjectFromData($query->row());
        }
      }
      return false;
    }
    
    public function getSessionByName($name) {
      if($name != "") {
        $query = $this->_ci->db->get_where("tbl_session",array("name" => $name));
        if($query->num_rows() > 0) {
          return $this->createObjectFromData($query->row());
        }
      }
      return new TblSessionModel();
    }

    public function createObjectFromData($row) {
      $session = new TblSessionModel();
      $session->setId($row->id);
      $session->setName($row->name);
      $session->setStatus($row->status);
      $session->setDescription($row->description);
      $session->setCreatedBy($row->created_by);
      $session->setCreatedDate($row->created_date);
      $session->setUpdatedBy($row->updated_by);
      $session->setUpdatedDate($row->updated_date);  
      return $session;
    }
    
    public function saveSession($name,$status,$desc) {
      $session = new TblSessionModel();
      $session->setName($name);
      $session->setStatus($status);
      $session->setDescription($desc);
      $session->setCreatedBy("admin");
      $session->setCreatedDate(date("y-m-d"));
      $session->setUpdatedBy("admin");
      $session->setUpdatedDate(date("y-m-d"));
      $session->commit();
    }
    
    public function deleteSession($id) {
      $session = new TblSessionModel();
      $session->setId($id);
      $session->delete();
    }
  }

