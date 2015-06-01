<?php

class Checkout extends CI_Controller {

    public function index() {


        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('checkout_content', $data, true);
        $data['title'] = "CHECKOUT";
        $this->load->view('master', $data);
    }

    public function save_shipping() {
        
        $data = array();
        $data['title'] = 'checkout';
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email_address', 'Email Address', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('mobile_no', 'Contact Number', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data['main_content'] = $this->load->view('checkout_content', '', true);
            $this->load->view('master', $data);
        } else {

        $data = array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['email_address'] = $this->input->post('email_address', true);

        $data['address'] = $this->input->post('address', true);
        $data['mobile_no'] = $this->input->post('mobile_no', true);

        $this->checkout_model->save_shipping_info($data);
        redirect('checkout/payment_form');
    }
    }

    public function payment_form() {

        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('payment_form', $data, true);
        $data['title'] = "Payment Form";
        $this->load->view('master', $data);
    }

    public function confirm_order() {
     
        $payment_type = $this->input->post('payment_type', true);
        $data = array();
        if ($payment_type == 'bks') {
            $data['payment_type'] = 'bKash';
            $this->checkout_model->save_payment_info($data);
            $this->checkout_model->save_order_info();
            redirect('checkout/confirmation_message');
        }
        if ($payment_type == 'cod') {
            $data['payment_type'] = 'cash_on_delivary';
            $this->checkout_model->save_payment_info($data);
            $this->checkout_model->save_order_info();
            redirect('checkout/confirmation_message');
        }
    }
    
    public function confirmation_message(){
           
        #to destroy cart 
        
        $this->cart->destroy();
        
        #to destroy cart end here
        
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('confirmation_message', $data, true);
        $data['title'] = "Complete Form";
        $this->load->view('master', $data);
        
    }
    
    
    
   

}
