<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TblSetupRecruitFactory {
    private $_ci;
    //private $_jumlahEmpl = 3000;
    
    function __construct() {
      $this->_ci =& get_instance();
      $this->_ci->load->model("tblsetuprecruitmodel");
    }
    
    public function getRecruits() {
      $query = $this->_ci->db->get("tbl_setup_recruit");
      if($query->num_rows() > 0) {
        $recruits = array();
        foreach($query->result() as $row) {
          $recruits[] = $this->createObjectFromData($row);
        }
        return $recruits;
      }
      return false;
    }
    
    public function getRecruit($id = 0) {
      if($id > 0) {
        $query = $this->_ci->db->get_where("tbl_setup_recruit",array("id" => $id));
        if($query->num_rows() > 0) {
          return $this->createObjectFromData($query->row());
        }
      }
      return false;
    }
    
    public function getRecruitByLamaKerjaUmur($lamakerja,$umur) {
      if($lamakerja != "" && $umur != 0) {
        $query = $this->_ci->db->get_where("tbl_setup_recruit",array("lama_kerja" => $lamakerja,"umur" => $umur));
        if($query->num_rows() > 0) {
          return $this->createObjectFromData($query->row());
        }
      }
      return new TblSetupRecruitModel();
    }
    
    public function getSum() {
      $this->_ci->db->select_sum("jumlah");
      $query = $this->_ci->db->get("tbl_setup_recruit");
      foreach ($query->result() as $row) {
        return $row->jumlah;
      }
      return 0;
    }

    public function saveRecruit($lamakerja,$umur,$jumlah,$desc) {
      $recruit = new TblSetupRecruitModel();
      $recruit->setLamaKerja($lamakerja);
      $recruit->setUmur($umur);
      $recruit->setJumlah($jumlah);
      $recruit->setDescription($desc);
      $recruit->setCreatedBy("admin");
      $recruit->setCreatedDate(date("y-m-d"));
      $recruit->setUpdatedBy("admin");
      $recruit->setUpdatedDate(date("y-m-d"));
      $recruit->commit();
      $this->updateDefault();
    }
    
    public function updateRecruit($id,$lamakerja,$umur,$jumlah,$desc,$count) {
      $recruit = $this->getRecruit($id);
      $jumlahFlag = false;
      if($lamakerja != $recruit->getLamaKerja()) {
        $recruit->setLamaKerja($lamakerja);
      }
      if($umur != $recruit->getUmur()) {
        $recruit->setUmur($umur);
      }
      if($jumlah != $recruit->getJumlah()) {
        $recruit->setJumlah($jumlah);
        $jumlahFlag = true;
      }
      if($desc != $recruit->getDescription()) {
        $recruit->setDescription($desc);
      }
      $recruit->commit();
      if($jumlahFlag) {
        $this->updateDefault($count);
      }
    }
    
    public function updateDefault($count,$lamakerja = "F",$umur = 22) {
      $recruit = $this->getRecruitByLamaKerjaUmur($lamakerja,$umur);
      $newJumlah = $recruit->getJumlah()+$count-$this->getSum();
      //echo "<script type='text/javascript'>alert('$newJumlah');</script>";
      $recruit->setJumlah($newJumlah);
      $recruit->setUpdatedBy("admin");
      $recruit->setUpdatedDate(date("y-m-d"));
      $recruit->commit();      
    }
    
    public function createObjectFromData($row) {
      $recruit = new TblSetupRecruitModel();
      $recruit->setId($row->id);
      $recruit->setLamaKerja($row->lama_kerja);
      $recruit->setUmur($row->umur);
      $recruit->setJumlah($row->jumlah);
      $recruit->setDescription($row->description);
      $recruit->setCreatedBy($row->created_by);
      $recruit->setCreatedDate($row->created_date);
      $recruit->setUpdatedBy($row->updated_by);
      $recruit->setUpdatedDate($row->updated_date);  
      return $recruit;
    }
    
    public function deleteRecruit($id) {
      $recruit = new TblSetupRecruitModel();
      $recruit->setId($id);
      $recruit->delete();
    }
    
    public function processSetup() {
      $this->_ci->db->query("call setup_empl_proc();");
    }
  }

