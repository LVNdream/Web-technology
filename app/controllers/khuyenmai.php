<?php
class khuyenmai extends DControlller {
    public function __construct()
    {
        parent::__construct();
    }
    public function showkhuyenmai(){
        //$this->load->model('khuyenmaimodel');
        $this->load->view('khuyenmai');
    }
}