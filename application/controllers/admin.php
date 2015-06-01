<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author Mangrove
 */
session_start();

class Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $admin_id=  $this->session->userdata('admin_id');
        if ($admin_id == !NULL){
            
            redirect('super_admin','refresh');
        }
    }

    
    public function index() {

        $this->load->view('admin/login');
    }

    public function admin_login_check() {


        $admin_email_address = $this->input->post('admin_email_address', true);
        $admin_password = $this->input->post('admin_password', true);

        $result = $this->admin_model->admin_login_check_info($admin_email_address, $admin_password);

        $sdata = array();
        if ($result) {
            $data = array();

            $sdata['admin_full_name'] = $result->admin_full_name;
            $sdata['admin_password'] = $result->admin_password;
            $sdata['admin_id']= $result->admin_id;
            $this->session->set_userdata($sdata);
            redirect('super_admin');
        } else {

            $sdata['login_fail'] = "Invalid Email or Password";
            $this->session->set_userdata($sdata);
            redirect('admin');
        }
    }

}
