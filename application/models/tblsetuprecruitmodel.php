<?php
  class TblSetupRecruitModel extends CI_Model {
    
    private $_id;
    private $_lama_kerja;
    private $_umur;
    private $_jumlah;
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
    
    public function getJumlah() {
      return $this->_jumlah;
    }
    
    public function setJumlah($value) {
      $this->_jumlah = $value;
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
          "lama_kerja" => $this->_lama_kerja,
          "umur" => $this->_umur,
          "jumlah" => $this->_jumlah,
          "description" => $this->_description,
          "created_by" => $this->_created_by,
          "created_date" => $this->_created_date,
          "updated_by" => $this->_updated_by,
          "updated_date" => $this->_updated_date
      );
      if($this->_id > 0) {
        if($this->db->update("tbl_setup_recruit",$data,array("id" => $this->_id))) {
          return true;
        }
      } else {
        if($this->db->insert("tbl_setup_recruit",$data)) {
          $this->_id = $this->db->insert_id();
          return true;
        }
      }
      return false;
    }    
    
    public function delete() {
      if($this->_id > 0) {
        $this->db->delete("tbl_setup_recruit",array("id" => $this->_id));
        return true;
      }
      return false;
    }
  }
    
  

