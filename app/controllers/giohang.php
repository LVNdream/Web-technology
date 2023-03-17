<?php
class giohang extends DControlller {
    public function __construct()
    {
        parent::__construct();
    }
    public function showgiohang(){
        //$this->load->model('giohangmodel');
        $this->load->view('giohang');
    }
}