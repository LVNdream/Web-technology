<?php
class sanpham extends DControlller {
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function showsanpham(){
        $tableName = 'sanpham';
        $sanphammodel = $this->load->model('sanphammodel');
        $data['sanpham'] = $sanphammodel->hienthisanpham($tableName);
        //print_r($data['sanpham']);
        $this->load->view('sanpham',$data);
    }

}