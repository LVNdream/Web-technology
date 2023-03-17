<?php
class tincongnghe extends DControlller {
    public function __construct()
    {
        parent::__construct();
    }
    public function showtincongnghe(){
        //$this->load->model('tincongnghemodel');
        $this->load->view('tincongnghe');
    }
}