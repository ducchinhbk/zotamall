<?php

class ControllerProductPromotionDeal extends Controller{
    public function index(){
        $data = array();
        return $this->load->view('default/template/product/promotion_deal.tpl', $data);
    }
}

?>