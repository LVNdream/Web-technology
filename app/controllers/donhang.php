<?php
class donhang extends DControlller {
    public function __construct()
    {
        parent::__construct();
    }
    public function showdonhang(){
        $this->load->view('donhang');
    }
    public function insertTest(){
        $donhangmodel = $this->load->model('donhangmodel');
        $tableInsert = 'test';
        $data = array(
            'ten' =>'Đồng hồ nam',
            'mota' =>'Đồng hồ nam Trung Quốc'
        );
        //print_r($data['sanpham']);
        // $result = 
        $donhangmodel->insertTest($tableInsert, $data);
    }
}