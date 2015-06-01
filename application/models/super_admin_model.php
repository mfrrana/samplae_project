<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of super_admin_model
 *
 * @author Mangrove
 */
class Super_Admin_Model extends CI_Model{

    public function save_category_info($data){
        
        $this->db->insert('tbl_category',$data);
    }
    
    public function save_manufacturer_info($data){
        
        $this->db->insert('tbl_manufacturer',$data);
    }
    
    public function update_unpublished_category($category_id){
        
        $this->db->set('publication_status',0);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
        
    }
    
    public function update_published_category($category_id){
        
        $this->db->set('publication_status',1);
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category');
    }
    
    public function delete_category_info($category_id){
        
        $this->db->where('category_id',$category_id);
        $this->db->delete('tbl_category');
    }
    
    public function edit_all_category_by_id($category_id){
        
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id',$category_id);
        
        $query_result=  $this->db->get();
        $result=$query_result->row();
        return $result;
        
    }
    
    public function update_category_info($data,$category_id){
        
        $this->db->where('category_id',$category_id);
        $this->db->update('tbl_category',$data);
        
    }
    
     public function select_all_manufacturer(){
        
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        
        $query_result=  $this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function update_unpublished_manufacturer($manufacturer_id){
        
        $this->db->set('publication_status',0);
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer');
    }
    
    public function update_published_manufacturer($manufacturer_id){
        $this->db->set('publication_status',1);
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer');
        
    }
    
    public function delete_manufacturer_info($manufacturer_id){
        
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->delete('tbl_manufacturer');
        
    }
    
    public function edit_all_manufacturer_by_id($manufacturer_id){
        
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('manufacturer_id',$manufacturer_id);
        
        $query_result=  $this->db->get();
        $result=$query_result->row();
        return $result;
        
    }
    
     public function update_manufacturer_info($data,$manufacturer_id){
        
        $this->db->where('manufacturer_id',$manufacturer_id);
        $this->db->update('tbl_manufacturer',$data);
    }
    
     public function select_all_published_category_info(){
        
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status',1);
        
        $query_result=  $this->db->get();
        $result= $query_result->result();
        return $result;
    }
    
    public function select_all_published_manufacturer_info(){
        
        $this->db->select('*');
        $this->db->from('tbl_manufacturer');
        $this->db->where('publication_status',1);
        
        $query_result=  $this->db->get();
        $result=$query_result->result();
        return $result;
        
    }
    
     public function save_product_info($data){
        
        $this->db->insert('tbl_product',$data);
    }
    
       public function select_all_product(){
        
        $this->db->select('*');
        $this->db->from('tbl_product');
        
        $query_result=  $this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    
     public function update_unpublished_product($product_id){
        $this->db->set('publication_status',0);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product');
        
    }
    
     public function update_published_product($product_id){
        
        $this->db->set('publication_status',1);
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product');
    }
    
     public function edit_all_product_by_id($product_id){
        
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id',$product_id);
        
        $query_result=  $this->db->get();
        $result=$query_result->row();
        return $result;
        
    }
    
     public function delete_product_info($product_id){
        
        $this->db->where('product_id',$product_id);
        $this->db->delete('tbl_product');
    }
    
     public function update_product_info($data,$product_id){
        
        $this->db->where('product_id',$product_id);
        $this->db->update('tbl_product',$data);
    }

    
    #slider part start from here 
    
     public function slider_info($data)
    {
        $this->db->insert('tbl_slider',$data);
    }
         public function select_all_slide()
    {
        $this->db->select('*');
        $this->db->from('tbl_slider');
        
        $query_result =$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    
    public function update_unpublished_slide($slide_id)
    {
        $this->db->set('activation_status',0);
        $this->db->where('slide_id',$slide_id);
        $this->db->update('tbl_slider');
    }
    
      public function update_published_slide($slide_id)
    {
        $this->db->set('activation_status',1);
        $this->db->where('slide_id',$slide_id);
        $this->db->update('tbl_slider');
    }
    
    public function delete_slide_info($slide_id)
    {
        $this->db->where('slide_id',$slide_id);
        $this->db->delete('tbl_slider');
    }
    
      public function select_slide_info_by_id($slide_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $this->db->where('slide_id',$slide_id);
        $query_result =$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
     public function update_slide_info($data,$slide_id)
    {
        $this->db->where('slide_id',$slide_id);
        $this->db->update('tbl_slider',$data);
    }
    
    public function select_order_info() {
        $sql="select o.*, c.first_name, c.last_name, p.payment_status, p.payment_type from tbl_order as o, tbl_shipping as c, tbl_payment as p  where o.shipping_id=c.shipping_id and o.payment_id=p.payment_id and o.publication_status= 1";
        $this->db->order_by("order_id", "desc"); 
        $query_result=$this->db->query($sql);
        $result=$query_result->result();
        return $result;
    }
    
    public function select_order_by_id($order_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->where('order_id',$order_id);
        
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function select_shipping_info_id($shipping_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_shipping');
        $this->db->where('shipping_id',$shipping_id);
        
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function order_details_info_by_id($order_id)
    {
         $this->db->select('*');
        $this->db->from('tbl_order_details');
        $this->db->where('order_id',$order_id);
        
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
   
    
    public function update_order_status($order_id){
        
        
        $this->db->set('order_status','Complete');
        $this->db->where('order_id',$order_id);
        $this->db->update('tbl_order');
    }
    public function delete_order_info($order_id){
        $this->db->set('publication_status',0);
        $this->db->where('order_id',$order_id);
        $this->db->update('tbl_order');
        
    }
}
