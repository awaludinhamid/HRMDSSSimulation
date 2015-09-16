<?php
  class TblEmployeeModel extends CI_Model {
    
    private $_id;
    private $_name;
    private $_nik;
    private $_user_id;
    private $_lama_kerja;
    private $_umur;
    private $_golongan;    
    private $_flag_empl;
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
    
    public function getNik() {
      return $this->_nik;
    }
    
    public function setNik($value) {
      $this->_nik = $value;
    }
    
    public function getUserId() {
      return $this->_user_id;
    }
    
    public function setUserId($value) {
      $this->_user_id = $value;
    }
    
    public function getLamaKerja() {
      return $this->_lama_kerja;
    }
    
    public function setLamaKerja($value) {
      $this->_lama_kerja = $value;
    }
    
    public function getUmur() {
      return $this->_umur;
    }
    
    public function setUmur($value) {
      $this->_umur = $value;
    }
    
    public function getGolongan() {
      return $this->_golongan;
    }
    
    public function setGolongan($value) {
      $this->_golongan = $value;
    }
    
    public function getFlagEmpl() {
      return $this->_flag_empl;
    }
    
    public function setFlagEmpl($value) {
      $this->_flag_empl = $value;
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
          "nik" => $this->_nik,
          "user_id" => $this->_user_id,
          "lama_kerja" => $this->_lama_kerja,
          "umur" => $this->_umur,
          "golongan" => $this->_golongan,
          "flag_empl" => $this->_flag_empl,
          "description" => $this->_description,
          "created_by" => $this->_created_by,
          "created_date" => $this->_created_date,
          "updated_by" => $this->_updated_by,
          "updated_date" => $this->_updated_date
      );
      if($this->_id > 0) {
        if($this->db->update("tbl_employee",$data,array("id" => $this->_id))) {
          return true;
        }
      } else {
        if($this->db->insert("tbl_employee",$data)) {
          $this->_id = $this->db->insert_id();
          return true;
        }
      }
      return false;
    }    
    
    public function delete() {
      if($this->_id > 0) {
        $this->db->delete("tbl_employee",array("id" => $this->_id));
        return true;
      }
      return false;
    }
  }
    
  

