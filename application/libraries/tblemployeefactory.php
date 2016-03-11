<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TblEmployeeFactory {
    private $_ci;
    
    function __construct() {
      $this->_ci =& get_instance();
      $this->_ci->load->model("tblemployeemodel");      
    }

    public function getEmployees($flagEmpl,$userId,$gol) {
      if(!($userId == null || $userId == "")) {
        $this->_ci->db->where("user_id",$userId);
      }
      if(!($flagEmpl == null || $flagEmpl == "")) {
        $this->_ci->db->where("IFNULL(flag_empl,'N')",$flagEmpl);
      }
      if(!($gol == null || $gol == "")) {
        $this->_ci->db->where("golongan",$gol);
      } 
      /*if($this->getCount($userId) == 0) {
        
      }*/
      $query = $this->_ci->db->get("tbl_employee");
      if($query->num_rows() > 0) {
        $employees = array();
        foreach($query->result() as $row) {
          $employees[] = $this->createObjectFromData($row);
        }
        return $employees;
      }
      return false;        
    }
    
    public function getAllEmployees($limit,$start) {
      $this->_ci->db->limit($limit,$start);
      $query = $this->_ci->db->get("tbl_employee");
      if($query->num_rows() > 0) {
        /*$employees = array();
        foreach($query->result() as $row) {
          $employees[] = $this->createObjectFromData($row);
        }
        return $employees;*/
        return $query->result();
      }
      return false;  
    }
    
    public function getEmployee($id = 0) {
      if($id > 0) {
        $query = $this->_ci->db->get_where("tbl_employee",array("id" => $id));
        if($query->num_rows() > 0) {
          return $this->createObjectFromData($query->row());
        }
      }
      return false;
    }
    
    public function getCountAll() {
      return $this->_ci->db->count_all("tbl_employee");
    }
    
    public function getCount($userId) {
      if($userId == null) {
        $this->_ci->db->where("user_id IS NULL");
      } else {
        $this->_ci->db->where("user_id",$userId);
      }
      return $this->_ci->db->count_all_results("tbl_employee");
    }
    
    public function createObjectFromData($row) {
      $employee = new TblEmployeeModel();
      $employee->setId($row->id);
      $employee->setName($row->name);
      $employee->setNik($row->nik);
      $employee->setUserId($row->user_id);
      $employee->setLamaKerja($row->lama_kerja);
      $employee->setUmur($row->umur);
      $employee->setGolongan($row->golongan);
      $employee->setFlagEmpl($row->flag_empl);
      $employee->setDescription($row->description);
      $employee->setCreatedBy($row->created_by);
      $employee->setCreatedDate($row->created_date);
      $employee->setUpdatedBy($row->updated_by);
      $employee->setUpdatedDate($row->updated_date);  
      return $employee;
    }
    
    public function processSetup() {
      $this->_ci->db->query("call setup_empl_proc()");
    }
  }

