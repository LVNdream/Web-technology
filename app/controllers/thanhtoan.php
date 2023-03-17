<?php
class thanhtoan extends DControlller {
    public function __construct()
    {
        parent::__construct();
    }
    public function showthanhtoan(){
        //$this->load->model('thanhtoanmodel');
        $this->load->view('thanhtoan');
    }
    public function insertOrder(){
        $thanhtoanmodel = $this->load->model('thanhtoanmodel');
        $tableHoadon = 'hoadon';
        $tableChitiethd = 'chitiethd';
        $data = array(
            'hovaten'=>$_POST['hovaten'],
            'diachi'=>$_POST['diachi'],
            'sodienthoai'=>$_POST['sodienthoai'],
            'email'=>$_POST['email'],
            'ghichu'=>$_POST['ghichu'],
            'thanhtoan'=>$_POST['thanhtoan'],
            'tongtien'=>$_POST['tongtien'],
            'trangthai'=>'Chờ xác nhận'

        ); 
        //print_r($data);
        // // thong tin chi tiết hoa đơn
        // echo $_POST['idsp'].'</br>';
        $arrayIdsp = explode(',',$_POST['idsp']);
        // print_r($arrayIdsp);
        // echo'</br>';
        // echo $_POST['soluong'].'</br>';
        $arraySoluong = explode(',',$_POST['soluong']);
        // print_r($arraySoluong);
        
        //Thêm vào bảng hóa đơn
        $resulthd = $thanhtoanmodel->insertOrderMD($tableHoadon, $data);
        echo $resulthd;

        //thêm vào bảng chi tiết hóa đơn
        $dataHD['hoadon'] = $thanhtoanmodel->selectOrderMD($tableHoadon);
        $idhd = '';

        foreach ($dataHD['hoadon'] as $key => $value) {
            $idhd =$value['idhd'];
        }

        foreach ($arrayIdsp as $key => $value) {
            $dataInChitiethd = array(
                'idhd'=>$idhd,
                'idsp'=>$value,
                'soluong'=>$arraySoluong[$key],
            ); 
                $resultcthd = $thanhtoanmodel->insertChitiethd($tableChitiethd, $dataInChitiethd);
                echo $resultcthd;
        }
        
    }
}