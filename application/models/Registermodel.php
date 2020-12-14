<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Registermodel extends CI_Model {

      public function newreg($regData) 
      {
        $this->db->insert('register', $regData);
        return true;
      }

      //load all states
      public function fetchStates()
      {
         $this->db->select("*");
         $this->db->from('states');
         $query = $this->db->get();
         return $query->result();
      }

      //districts
      public function fetchDist($stateID)
      {
         $this->db->select("*");
         $this->db->from('districts');
         $this->db->where('stateID',$stateID);
         $this->db->order_by('distName','ASC');
         $query = $this->db->get();
         return $query->result();
      }
}