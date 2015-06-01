<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['published_slider'] = $this->welcome_model->slider_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['selected_published_manufacturer'] = $this->welcome_model->selected_manufacturer_info();
        // $data['product_info']=  $this->welcome_model->select_product_info_by_id($product_id);
        $data['all_published_product'] = $this->welcome_model->select_all_published_product();
        //$data['all_published_slider']=  $this->welcome_model->select_all_published_slider_info();
        // $data['all_product_by_manufacturer'] = $this->welcome_model->select_all_product_by_manufacturer($manufacturer_id);

        $data['title'] = 'Home';
        $data['slider_conten'] = 1;
        $data['main_content'] = $this->load->view('home_content', $data, true);

        $this->load->view('master', $data);
    }

    public function checkout_content() {
        $data = array();
            $data['title'] = 'Checkout';
        
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('checkout_content', $data, true);
        $this->load->view('master', $data);
    }

    public function cart_content() {
        $data = array();
        $data['title'] = 'Cart';
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('cart_content', $data, true);
        $this->load->view('master', $data);
    }

    public function login_content() {
        $data = array();
        $data['title'] = 'Login';
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('login_content', $data, true);
        $this->load->view('master', $data);
    }

    public function blog_content() {
        $data = array();
        $data['main_content'] = $this->load->view('blog_content', '', true);
        $this->load->view('master', $data);
    }

    public function product_details($product_id) {

        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['product_info'] = $this->welcome_model->select_product_info_by_id($product_id);
        $data['rand_published_product'] = $this->welcome_model->select_rand_published_product();
        $data['main_content'] = $this->load->view('product_details', $data, true);
        $this->load->view('master', $data);
    }

    public function products_by_category($category_id) {

        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['all_published_product_by_category_id'] = $this->welcome_model->all_published_product_by_category_id_info($category_id);
        $data['main_content'] = $this->load->view('product_by_category_content', $data, true);
        $this->load->view('master', $data);
    }

    public function products_by_manufacturer($manufacturer_id) {

        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['all_published_product_by_manufacturer_id'] = $this->welcome_model->all_published_product_by_manufacturer_id_info($manufacturer_id);
        $data['main_content'] = $this->load->view('product_by_manufacturer_content', $data, true);
        $this->load->view('master', $data);
    }

    public function search() {

        $data = array();
        $src = $this->input->post('search', true);
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['product_by_search'] = $this->welcome_model->dispaly_published_product_by_search($src);
        /* echo "<pre>";
          print_r($result);
          exit(); */
        $data['main_content'] = $this->load->view('product_by_search_content', $data, true);
        $this->load->view('master', $data);
    }

    public function products_by_selected_manufacturer($manufacturer_id) {

        $data = array();
        $data['all_products_by_selected_brands'] = $this->welcome_model->select_all_product_by_manufacturer($manufacturer_id);

        // $data['main_content'] = $this->load->view('home_content', $data, true);
        //$this->load->view('master', $data);
    }

    #Go to sign up link

    public function sign_up() {
        $data = array();
        $data['title'] = 'Sign Up';
         $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('sign_up', $data, true);
        $this->load->view('master', $data);
    }

    #save user sing up info with validation into the database

    public function save_user() {

        $data = array();
        $data['title'] = 'Sign Up';
        $this->form_validation->set_rules('f_name', 'First Name', 'required');
        $this->form_validation->set_rules('l_name', 'Last Name', 'required');
        $this->form_validation->set_rules('e_mail', 'Email Address', 'required');
        $this->form_validation->set_rules('u_pass', 'Password', 'required');
        $this->form_validation->set_rules('m_obile', 'Mobile', 'required');
        $this->form_validation->set_rules('a_ddress', 'Address', 'required');



        if ($this->form_validation->run() == FALSE) {
            $data['main_content'] = $this->load->view('sign_up', '', true);
            $this->load->view('master', $data);
        } else {
            $data = array();
            $data['f_name'] = $this->input->post('f_name', true);
            $data['l_name'] = $this->input->post('l_name', true);
            $data['e_mail'] = $this->input->post('e_mail', true);
            $data['m_obile'] = $this->input->post('m_obile', true);
            $data['a_ddress'] = $this->input->post('a_ddress', true);
            $data['u_pass'] = md5($this->input->post('u_pass', true));
            $this->welcome_model->save_user_info($data);

            $sdata = array();
            $sdata['message'] = 'Registration Successfully You May Login Now!';
            $this->session->set_userdata($sdata);

            redirect('welcome/sign_up');
        }
    }

    #user login check with valid registration

    public function user_login_check() {


        $e_mail = $this->input->post('e_mail', true);
        $u_pass = $this->input->post('u_pass', true);


        $result = $this->welcome_model->user_login_check_info($e_mail, $u_pass);

        /*  echo '<pre>';
          print_r($result);
          echo exit();
         */
        $sdata = array();
        if ($result) {


            $sdata['f_name'] = $result->f_name;
            $sdata['l_name'] = $result->l_name;
            $sdata['user_id'] = $result->user_id;
            $this->session->set_userdata($sdata);
            redirect('welcome');
        } else {

            $sdata['exception'] = 'Your Username or Password Invalid';
            $this->session->set_userdata($sdata);
            redirect('welcome/login_content');
        }
    }

    #using ajax email address check for registration

    public function ajax_email_check($e_mail = NULL) {
        $result = $this->welcome_model->check_email_address($e_mail);
        if ($result) {
            echo 'Email Address Alredy Exists';
        } else {
            echo 'Email Address Avilable';
        }
    }

    #user logout

    public function logout() { {
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('f_name');
            redirect('welcome');
        }
    }

    public function contact_us() {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('contact_us', $data, true);
        $this->load->view('master', $data);
    }

    public function terms_of_use() {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('terms_of_use', $data, true);
        $this->load->view('master', $data);
    }

    public function privecy_policy() {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('privecy_policy', $data, true);
        $this->load->view('master', $data);
    }

    public function refund_policy() {

        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('refund_policy', $data, true);
        $this->load->view('master', $data);
    }

    public function billing_system() {

        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('billing_system', $data, true);
        $this->load->view('master', $data);
    }

    public function company_information() {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('company_information', $data, true);
        $this->load->view('master', $data);
    }

    public function copyright() {
        $data = array();
        $data['all_published_category'] = $this->welcome_model->select_all_published_category();
        $data['all_published_manufacturer'] = $this->welcome_model->select_all_published_manufacturer();
        $data['main_content'] = $this->load->view('copyright', $data, true);
        $this->load->view('master', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */