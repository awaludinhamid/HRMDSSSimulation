<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TblLamaKerjaFactory {
    private $_ci;
    
    function __construct() {
      $this->_ci =& get_instance();
      $this->_ci->load->model("tbllamakerjamodel");      
    }
    
    public function getLamaKerjas() {
      $query = $this->_ci->db->get("tbl_lama_kerja");
      if($query->num_rows() > 0) {
        $lamakerjas = array();
        foreach($query->result() as $row) {
          $lamakerjas[] = $this->createObjectFromData($row);
        }
        return $lamakerjas;
      }
      return false;
    }
    
    public function getLamaKerja($id = 0) {
      if($id > 0) {
        $query = $this->_ci->db->get_where("tbl_lama_kerja",array("id" => $id));
        if($query->num_rows() > 0) {
          return $this->createObjectFromData($query->row());
        }
      }
      return false;
    }
    
    public function getLamaKerjaByName($name) {
      if($name != "") {
        $query = $this->_ci->db->get_where("tbl_lama_kerja",array("name" => $name));
        if($query->num_rows() > 0) {
          return $this->createObjectFromData($query->row());
        }
      }
      return new TblLamaKerjaModel();
    }
    
    public function getMax() {
      $this->_ci->db->select_max("value");
      $query = $this->_ci->db->get("tbl_lama_kerja");
      foreach ($query->result() as $row) {
        return $row->value;
      }
      return 0;
    }
    
    public function getNameByValue($value) {
      if($value >= 0) {
        $maxValue = $this->getMax();
        if($value >= $maxValue) {
          $value = $maxValue;
        }
        $this->_ci->db->select("name");
        $query = $this->_ci->db->get_where("tbl_lama_kerja",array("value" => $value));
        if($query->num_rows() > 0) {
          return $query->row()->name;
        }
      }
      return "F";
    }

    public function createObjectFromData($row) {
      $lamakerja = new TblLamaKerjaModel();
      $lamakerja->setId($row->id);
      $lamakerja->setName($row->name);
      $lamakerja->setValue($row->value);
      $lamakerja->setDescription($row->description);
      $lamakerja->setCreatedBy($row->created_by);
      $lamakerja->setCreatedDate($row->created_date);
      $lamakerja->setUpdatedBy($row->updated_by);
      $lamakerja->setUpdatedDate($row->updated_date);  
      return $lamakerja;
    }
  }

