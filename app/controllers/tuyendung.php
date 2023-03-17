<?php
class tuyendung extends DControlller {
    public function __construct()
    {
        parent::__construct();
    }
    public function showtuyendung(){
        //$this->load->model('tuyendungmodel');
        $this->load->view('tuyendung');
    }
}