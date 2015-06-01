<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of super_admin
 *
 * @author Mangrove
 */
session_start();

class Super_Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {

            redirect('admin', 'refresh');
        }
    }

    public function index() {

        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/dashboard', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function logout() {

        $this->session->unset_userdata('admin_full_name');
        $this->session->unset_userdata('admin_password');
        $this->session->unset_userdata('admin_id');

        $data = array();
        $data['logout_msg'] = "Successfully Logged Out";
        $this->session->set_userdata($data);

        redirect('admin');
    }

    public function dashboard() {

        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/dashboard', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function add_category() {

        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/add_category_form', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category() {

        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);

        $this->super_admin_model->save_category_info($data);

        $sdata = array();
        $sdata['success_msg'] = "Category Added Successfully";
        $this->session->set_userdata($sdata);

        redirect('super_admin/add_category');
    }

    public function add_manufacturer() {

        $data = array();
        $data['admin_main_content'] = $this->load->view('admin/add_manufacturer_form', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_manufacturer() {

        $data = array();
        $data['manufacturer_name'] = $this->input->post('manufacturer_name', true);
        $data['manufacturer_description'] = $this->input->post('manufacturer_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);

        $this->super_admin_model->save_manufacturer_info($data);

        $sdata = array();
        $sdata['success_msg'] = "Manufacturer Added Successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_manufacturer');
    }

    public function manage_category() {

        $data = array();
        $data['all_category'] = $this->welcome_model->all_category_info();
        $data['admin_main_content'] = $this->load->view('admin/manage_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_category($category_id) {

        $this->super_admin_model->update_unpublished_category($category_id);
        redirect('super_admin/manage_category');
    }

    public function published_category($category_id) {

        $this->super_admin_model->update_published_category($category_id);
        redirect('super_admin/manage_category');
    }

    public function delete_category($category_id) {

        $this->super_admin_model->delete_category_info($category_id);
        redirect('super_admin/manage_category');
    }

    public function edit_category($category_id) {

        $data = array();
        $data['category_info'] = $this->super_admin_model->edit_all_category_by_id($category_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_category_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_category() {
        $data = array();
        $category_id = $this->input->post('category_id', true);
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);

        $this->super_admin_model->update_category_info($data, $category_id);
        redirect("super_admin/manage_category");
    }

    public function manage_manufacturer() {

        $data = array();
        $data['all_manufacturer'] = $this->super_admin_model->select_all_manufacturer();
        $data['admin_main_content'] = $this->load->view('admin/manage_manufacturer', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_manufacturer($manufacturer_id) {

        $this->super_admin_model->update_unpublished_manufacturer($manufacturer_id);
        redirect('super_admin/manage_manufacturer');
    }

    public function published_manufacturer($manufacturer_id) {

        $this->super_admin_model->update_published_manufacturer($manufacturer_id);
        redirect('super_admin/manage_manufacturer');
    }

    public function delete_manufacturer($manufacturer_id) {

        $this->super_admin_model->delete_manufacturer_info($manufacturer_id);
        redirect('super_admin/manage_manufacturer');
    }

    public function edit_manufacturer($manufacturer_id) {
        $data = array();
        $data['manufacturer_info'] = $this->super_admin_model->edit_all_manufacturer_by_id($manufacturer_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_manufacturer_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_manufacturer() {

        $data = array();
        $manufacturer_id = $this->input->post('manufacturer_id', true);
        $data['manufacturer_name'] = $this->input->post('manufacturer_name', true);
        $data['manufacturer_description'] = $this->input->post('manufacturer_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);

        $this->super_admin_model->update_manufacturer_info($data, $manufacturer_id);
        redirect('super_admin/manage_manufacturer');
    }

    public function add_product() {

        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category_info();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer_info();
        $data['admin_main_content'] = $this->load->view('admin/add_product_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_product() {

        $data = array();
        $data['product_code'] = $this->input->post('product_code', true);
        $data['product_name'] = $this->input->post('product_name', true);
        $data['manufacturer_id'] = $this->input->post('manufacturer_id', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['product_price'] = $this->input->post('product_price', true);
        $data['product_quantity'] = $this->input->post('product_quantity', true);
        $data['product_short_description'] = $this->input->post('product_short_description', true);
        $data['product_long_description'] = $this->input->post('product_long_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        /*
         *  Image Upload Start
         */

        $config['upload_path'] = 'images/product_image/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '9999';
        $config['max_width'] = '9999';
        $config['max_height'] = '9999';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('product_image')) {
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        } else {
            $fdata = $this->upload->data();
            $data['product_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        $this->super_admin_model->save_product_info($data);
        $sdata = array();
        $sdata['success_message'] = 'Product Added successfully';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_product');
        /*
         *  Image Upload End
         */
    }

    public function manage_product() {

        $data = array();
        $data['all_product'] = $this->super_admin_model->select_all_product();
        $data['admin_main_content'] = $this->load->view('admin/manage_product', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublished_product($product_id) {

        $this->super_admin_model->update_unpublished_product($product_id);
        redirect('super_admin/manage_product');
    }

    public function published_product($product_id) {

        $this->super_admin_model->update_published_product($product_id);
        redirect('super_admin/manage_product');
    }

    public function edit_product($product_id) {
        $data = array();
        $data['all_published_category'] = $this->super_admin_model->select_all_published_category_info();
        $data['all_published_manufacturer'] = $this->super_admin_model->select_all_published_manufacturer_info();
        $data['product_info'] = $this->super_admin_model->edit_all_product_by_id($product_id);
        $data['admin_main_content'] = $this->load->view('admin/edit_product_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function delete_product($product_id) {

        $this->super_admin_model->delete_product_info($product_id);
        redirect('super_admin/manage_product');
    }

    public function update_product() {

        $data = array();
        $product_id = $this->input->post('product_id', true);
        $data['product_code'] = $this->input->post('product_code', true);
        $data['product_name'] = $this->input->post('product_name', true);
        $data['manufacturer_id'] = $this->input->post('manufacturer_id', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['product_price'] = $this->input->post('product_price', true);
        $data['product_quantity'] = $this->input->post('product_quantity', true);
        $data['product_short_description'] = $this->input->post('product_short_description', true);
        $data['product_long_description'] = $this->input->post('product_long_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        /*
         *  Image Upload Start
         */

        $config['upload_path'] = 'images/product_image/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '9999';
        $config['max_width'] = '9999';
        $config['max_height'] = '9999';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = '';
        $fdata = array();
        if (!$this->upload->do_upload('product_image')) {
            $error = $this->upload->display_errors();
            echo $error;
            exit();
        } else {
            $fdata = $this->upload->data();
            $data['product_image'] = $config['upload_path'] . $fdata['file_name'];
        }

        $this->super_admin_model->update_product_info($data, $product_id);

        redirect('super_admin/manage_product');
    }
    
   #slider start from here
    
       public function slider_panel(){
          
          $data=array();
          $data['admin_main_content']=  $this->load->view('admin/slider_panel','',true);
          $this->load->view('admin/admin_master',$data);
      }

      
      public function save_slider_panel(){
        
        $data=array();
        $data['heading_name']=$this->input->post('heading_name',true);
        $data['caption_description']=$this->input->post('caption_description',true);
        $data['description']=$this->input->post('description',true);
        $data['slider_image']=$this->input->post('slider_image',true);
        $data['activation_status']=$this->input->post('activation_status',true);
         
          //uploade code start from here
        $config['upload_path'] = 'images/image_slide/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '300';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('slider_image'))
        {
                $error = $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['slider_image']=$config['upload_path'] .$fdata['file_name'];
               
          }
        //image upload code finish here....
          
          
          
       $this->super_admin_model->slider_info($data);
        
        $sdata=array();
        $sdata['message']='Save Slider Information Successfully !';
        $this->session->set_userdata($sdata);
        
        redirect('super_admin/slider_panel');
        
        
    }
    
      public function manage_slide(){
          
          $data=array();
          $data['all_slide']=$this->super_admin_model->select_all_slide();
          $data['admin_main_content']=  $this->load->view('admin/manage_slide',$data,true);
          $this->load->view('admin/admin_master',$data);
      }
       
    public function unpublished_slide($slide_id)
    {
        $this->super_admin_model->update_unpublished_slide($slide_id);
        redirect('super_admin/manage_slide');
    }
    
     public function published_slide($slide_id)
    {
        $this->super_admin_model->update_published_slide($slide_id);
        redirect('super_admin/manage_slide');
    }
    
    
      public function delete_slide($slide_id)
    {
        $this->super_admin_model->delete_slide_info($slide_id);
        redirect('super_admin/manage_slide');
    }
    
    
         public function edit_slide($slide_id)
    {
        $data=array();
        $data['slide_info']=$this->super_admin_model->select_slide_info_by_id($slide_id);
        $data['admin_main_content']=$this->load->view('admin/edit_slide_form',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
     public function update_slide()
    {
        $data=array();
        $slide_id=$this->input->post('slide_id',true);
         $data['heading_name']=$this->input->post('heading_name',true);
        $data['caption_description']=$this->input->post('caption_description',true);
        $data['description']=$this->input->post('description',true);
        $data['slider_image']=$this->input->post('slider_image',true);
        $data['slider_image']=$this->input->post('slider_image',true);
        $data['activation_status']=$this->input->post('activation_status',true);
        
          //uploade code start from here
        $config['upload_path'] = 'images/image_slide/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']	= '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error='';
        $fdata=array();
        if ( ! $this->upload->do_upload('slider_image'))
        {
                $error = $this->upload->display_errors();
                echo $error;
                exit();
        }
        else
        {
                $fdata = $this->upload->data();
                $data['slider_image']=$config['upload_path'] .$fdata['file_name'];
               
          }
        //image upload code finish here....
          
          
        $this->super_admin_model->update_slide_info($data,$slide_id);
        redirect('super_admin/manage_slide');
    }
    
    public function manage_order(){
        
        $data = array();
        $data['order_info'] = $this->super_admin_model->select_order_info();
        /*echo '<pre/>';
        print_r($data['order_info']);
        exit(); */
        $data['admin_main_content'] = $this->load->view('admin/manage_order_content', $data, true);
        $data['title']="MANAGE ORDER";
        $this->load->view('admin/admin_master', $data);
    }
    
     public function view_order_invoice($order_id)
    {
        $data = array();
        $data['order_info']=$this->super_admin_model->select_order_by_id($order_id);
        $customer_id=$data['order_info']->customer_id;
       // $data['billing_info']=$this->super_admin_model->select_customer_info_id($shipping_id);
        $shipping_id=$data['order_info']->shipping_id;
        $data['shipping_info']=$this->super_admin_model->select_shipping_info_id($shipping_id);
        $data['order_details_info']=$this->super_admin_model->order_details_info_by_id($order_id);
        $data['admin_main_content'] = $this->load->view('admin/order_invoice', $data, true);
        $data['title']="Invoice";
        $this->load->view('admin/admin_master', $data);
    }
    
     public function download_order_invoice($order_id)
    {
        $data = array();
        $data['order_info']=$this->super_admin_model->select_order_by_id($order_id);
        $customer_id=$data['order_info']->customer_id;
       // $data['billing_info']=$this->super_admin_model->select_customer_info_id($customer_id);
        $shipping_id=$data['order_info']->shipping_id;
        $data['shipping_info']=$this->super_admin_model->select_shipping_info_id($shipping_id);
        $data['order_details_info']=$this->super_admin_model->order_details_info_by_id($order_id);
      
        $this->load->helper('dompdf');
        $view_file=$this->load->view('admin/order_invoice', $data, true);
        $file_name=pdf_create($view_file, 'inv-00'.$order_id);
        echo $file_name;
    }
    
    
    
    
    
    public function edit_order_status($order_id){
        
         $this->super_admin_model->update_order_status($order_id);
        redirect('super_admin/manage_order');
        
    }
    
    public function delete_order($order_id){
        
        $this->super_admin_model->delete_order_info($order_id);
        redirect('super_admin/manage_order');
        
    }
}
