<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TblSetupEmployeeFactory {
    private $_ci;
    
    function __construct() {
      $this->_ci =& get_instance();
      $this->_ci->load->model("tblsetupemployeemodel");      
    }
    
    public function getEmployees() {
      $query = $this->_ci->db->get("tbl_setup_employee");
      if($query->num_rows() > 0) {
        $employees = array();
        foreach($query->result() as $row) {
          $employees[] = $this->createObjectFromData($row);
        }
        return $employees;
      }
      return false;
    }
    
    public function getEmployee($id = 0) {
      if($id > 0) {
        $query = $this->_ci->db->get_where("tbl_setup_employee",array("id" => $id));
        if($query->num_rows() > 0) {
          return $this->createObjectFromData($query->row());
        }
      }
      return false;
    }
    
    public function getEmployeesByGolongan($golongan) {
      if($golongan > 0) {
        $query = $this->_ci->db->get_where("tbl_setup_employee",array("golongan" => $golongan));
        if($query->num_rows() > 0) {
          $employees = array();
          foreach($query->result() as $row) {
            $employees[] = $this->createObjectFromData($row);
          }
          return $employees;
        }
      }
      return false;
    }
    
    public function updateEmployee($id,$lamakerja,$lamakerjath,$umur,$desc) {
      $employee = $this->getEmployee($id);
      if($lamakerja != $employee->getLamaKerja()) {
        $employee->setLamaKerja($lamakerja);
      }
      if($lamakerjath != $employee->getLamaKerjaTh()) {
        $employee->setLamaKerjaTh($lamakerjath);
      }
      if($umur != $employee->getUmur()) {
        $employee->setUmur($umur);
      }
      if($desc != $employee->getDescription()) {
        $employee->setDescription($desc);
      }
      $employee->commit();
    }
    
    public function createObjectFromData($row) {
      $employee = new TblSetupEmployeeModel();
      $employee->setId($row->id);
      $employee->setLamaKerja($row->lama_kerja);
      $employee->setLamaKerjaTh($row->lama_kerja_th);
      $employee->setGolongan($row->golongan);
      $employee->setUmur($row->umur);
      $employee->setDescription($row->description);
      $employee->setCreatedBy($row->created_by);
      $employee->setCreatedDate($row->created_date);
      $employee->setUpdatedBy($row->updated_by);
      $employee->setUpdatedDate($row->updated_date);  
      return $employee;
    }
    
    public function deleteEmployee($id) {
      $employee = new TblSetupEmployeeModel();
      $employee->setId($id);
      $employee->delete();
    }
  }

