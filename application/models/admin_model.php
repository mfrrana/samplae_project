<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_model
 *
 * @author Mangrove
 */
class Admin_Model extends CI_Model{
    
    public function admin_login_check_info($admin_email_address,$admin_password){
        
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email_address',$admin_email_address);
        $this->db->where('admin_password',md5($admin_password));
        
        $query_result= $this->db->get();
        $result=$query_result->row();
        return $result;
        
        
    }
}
