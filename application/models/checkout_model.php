<?php

// session_start();
class Checkout_Model extends CI_Model {

    public function save_shipping_info($data) {

        $this->db->insert('tbl_shipping', $data);
        $shipping_id = $this->db->insert_id();

        $sdata = array();

        $sdata['shipping_id'] = $shipping_id;
        $this->session->set_userdata($sdata);
    }

    public function save_payment_info($data) {

        $this->db->insert('tbl_payment', $data);
        $payment_id = $this->db->insert_id();
        $sdata = array();
        $sdata['payment_id'] = $payment_id;
        $this->session->set_userdata($sdata);
    }

    public function save_order_info() {
        
           $odata=array();
        $odata['customer_id']=$this->session->userdata('customer_id');
        $odata['shipping_id']=$this->session->userdata('shipping_id');
        $odata['payment_id']=$this->session->userdata('payment_id');
        $odata['order_total']=$this->session->userdata('grand_total');
        $odata['order_comment']=$this->input->post('order_comment',true);
        $this->db->insert('tbl_order',$odata);
        $order_id=$this->db->insert_id();
        
        $cart_contents=$this->cart->contents() ;
        $oddata=array();
        foreach($cart_contents as $v_contents)
        {
            $oddata['order_id']=$order_id;
            $oddata['product_id']=$v_contents['id'];
            $oddata['product_name']=$v_contents['name'];
            $oddata['product_price']=$v_contents['price'];
            $oddata['product_sales_quantity']=$v_contents['qty'];
            $this->db->insert('tbl_order_details',$oddata);
        }
          $sql = "update tbl_product as p, tbl_order_details as od
                set p.product_quantity = p.product_quantity - od.product_sales_quantity 
                where p.product_id = od.product_id
                AND od.order_id = '$order_id'";
              $this->db->query($sql);
    }

}
