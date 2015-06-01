<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of welcome_model
 *
 * @author Mangrove
 */
class welcome_model extends CI_Model {

    public function select_all_published_category() {

        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_manufacturer() {

        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('publication_status', 1);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function all_category_info() {

        $this->db->select('*');
        $this->db->from('tbl_category');


        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_product() {

        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->order_by("product_id", "desc"); 

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_product_info_by_id($product_id) {

        // $this->db->select('*');
        // $this->db->from('tbl_product');
        // $this->db->where('product_id',$product_id);
        // $query_result= $this->db->get();
        // $result= $query_result->row();
        // return $result;

        $sql = "SELECT p.*,m.manufacturer_name,c.category_name FROM tbl_product as p, tbl_manufacturer as m, tbl_category as c WHERE p.manufacturer_id=m.manufacturer_id AND p.category_id=c.category_id AND p.product_id='$product_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }

    public function all_published_product_by_category_id_info($category_id) {

        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('category_id', $category_id);
        $this->db->where('publication_status', 1);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function all_published_product_by_manufacturer_id_info($manufacturer_id) {

        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('manufacturer_id', $manufacturer_id);
        $this->db->where('publication_status', 1);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function dispaly_published_product_by_search($src) {

        $this->db->select('*');
        $this->db->from('tbl_product');
        $whereCondition = array('product_name' => $src);
        $this->db->like($whereCondition);


        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function selected_manufacturer_info() {

        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('publication_status', 1);
        $this->db->where('special_id', 1);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_product_by_manufacturer($manufacturer_id) {

        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('manufacturer_id', $manufacturer_id);
        // $this->db->where('special_id',1);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

     public function slider_all_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $this->db->where('activation_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_rand_published_product() {

        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->order_by('product_name', 'RANDOM');
        $this->db->limit(3);

        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    
    #save user sign up info into the database

    public function save_user_info($data){
        $this->db->insert('tbl_user',$data);

    }
    #user login check

    public function user_login_check_info($e_mail,$u_pass){

        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('e_mail',$e_mail);
        $this->db->where('u_pass',md5($u_pass));

        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }

    #email-address check for user

    public function check_email_address($e_mail)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('e_mail',$e_mail);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    
}
