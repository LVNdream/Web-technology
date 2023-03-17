<?php
class index extends DControlller {
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function trangchu(){
        $homemodel = $this->load->model('trangchumodel');
        $data['category'] = $homemodel->category();
        $this->load->view('trangchu',$data);
    }
}
