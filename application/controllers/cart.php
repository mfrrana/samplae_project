<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart
 *
 * @author Mangrove
 */
class Cart extends CI_Controller {

    public function add_to_cart($product_id) {

        $product_info = $this->cart_model->select_product_by_id($product_id);
        $qty = $this->input->post('qty', true);

        $data = array(
            'id' => $product_info->product_id,
            'qty' => $qty,
            'code' => $product_info->product_code,
            'price' => $product_info->product_price,
            'name' => $product_info->product_name,
            'image' => $product_info->product_image
        );

        $this->cart->insert($data);
        redirect('cart/show_cart');
    }

    public function show_cart() {

        $data = array();
        $data['main_content'] = $this->load->view('cart_content', '', true);
        $this->load->view('master', $data);
    }

   public function update_cart($rowid) {
        $qty=$this->input->post('qty',true);
        if($_POST['btn1']){
            $data = array(
               'rowid' => $rowid,
               'qty'   => $qty+1,
            );
        }else if($_POST['btn2']){
            $data = array(
               'rowid' => $rowid,
               'qty'   => $qty-1,
            );
        }
        $this->cart->update($data); 
        redirect('cart/show_cart');
        
    }
    
    public function delete_cart($rowid) {
        $data = array(
               'rowid' => $rowid,
               'qty'   => 0
            );

        $this->cart->update($data); 
        redirect('cart/show_cart');
        
    }

}
