<?php
class quenmatkhau extends DControlller {
    public function __construct()
    {
        parent::__construct();
    }
    public function showquenmatkhau(){
        //$this->load->model('quenmatkhaumodel');
        $this->load->view('quenmatkhau');
    }
}