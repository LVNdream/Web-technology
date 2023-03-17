<?php
class trangchu extends DControlller {
    public function __construct()
    {
        parent::__construct();
    }
    public function showtrangchu(){
        //$this->load->model('trangchumodel');
        $this->load->view('trangchu');
    }
}