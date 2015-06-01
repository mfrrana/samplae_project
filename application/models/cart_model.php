<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart_model
 *
 * @author Mangrove
 */
class Cart_Model extends CI_Model{

    public function select_product_by_id($product_id){
        
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $product_id);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
        
    }
    
}
