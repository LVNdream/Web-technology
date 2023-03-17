<?php
class dichvu extends DControlller {
    public function __construct()
    {
        parent::__construct();
    }
    public function showdichvu(){
        //$this->load->model('dichvumodel');
        $this->load->view('dichvu');
    }
}