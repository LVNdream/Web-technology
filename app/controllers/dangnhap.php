<?php
class dangnhap extends DControlller
{
    public function __construct()
    {
        $data = array();
        parent::__construct();
    }
    public function login()
    {
        //$this->load->model('dangnhapmodel');
        Session::init();
        if (Session::get('login') == true) {
            header("Location:/?url=dangnhap/dashboard");
        }
        $this->load->view('dangnhap');
    }

    public function dashboard()
    {
        Session::checkSession();
        $this->load->view('dashboard');
    }
    public function dangnhap()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $table = 'user_admin';
        $loginmodel = $this->load->model('loginmodel');
        $count = $loginmodel->login($table, $username, $password);
        if ($count == 0) {
            header("Location:/?url=dangnhap/login");
        } else {
            $result = $loginmodel->getLogin($table, $username, $password);
            Session::init();
            Session::set('login', true);
            Session::set('email', $result[0]['email']);
            Session::set('userid', $result[0]['admin_id']);
            header("Location:/?url=dangnhap/dashboard");
        }
    }

    public function dangxuat()
    {
        Session::init();
        Session::destroy();
        header("Location:/?url=dangnhap/login");
    }

    /// Hàm để thêm hóa đơn
    public function addProduct()
    {
        $adminmodel = $this->load->model('adminmodel');
        $tablePD = 'sanpham';
        $data = array(
            'ten' => $_POST['ten'],
            'gia' => $_POST['gia'],
            'mausac' => $_POST['mausac'],
            'nhasanxuat' => $_POST['nhasanxuat'],
            'xuatxu' => $_POST['xuatxu'],
            'img' => $_POST['img']
        );
        $resulthd = $adminmodel->addSanpham($tablePD, $data);
        echo $resulthd;
    }

    //hàm seclet sảm phẩm theo ID
    public function productById()
    {
        $adminmodel = $this->load->model('adminmodel');
        $tablePD = 'sanpham';
        $idsp = $_POST['idsp'];

        $result = $adminmodel->selectPD_ById($tablePD, $idsp);

        if ($result != null) {
            $data['PD'] = $result[0];
            $this->load->view('dashboard', $data);
        } else {
            $this->load->view('dashboard');
        }
    }
    // hàm Update giá SP
    public function updatePrice()
    {
        $adminmodel = $this->load->model('adminmodel');
        $tableUD = 'sanpham';
        $data = array(
            'giamoi' => $_POST['giamoi'],
            'idsp' => $_POST['idsp'],
        );
        $resutl = $adminmodel->updatePriceMD($tableUD,$data);
        if($resutl==1){
            header("Location:/?url=sanpham/showsanpham");
        }
        else{
           echo 'Cập nhật không thành công'; 
        }

    }

    //dơn hàng theo ID
    public function orderById()
    {
        $adminmodel = $this->load->model('adminmodel');
        $tableOD = 'hoadon';
        $idhd = $_POST['idhd'];

        $result = $adminmodel->selectOD_ById($tableOD, $idhd);
        //$dataHD['HD'] = $result[0];
        
        if ($result != null) {
            $data['HD'] = $result;
            //print_r($data);
            $this->load->view('updateHD', $data);
        }
        else{
            header("Location:/?url=dangnhap/dashboard");
        }
    }

// cập nhật trạng thái
public function updateStatus()
    {
        $adminmodel = $this->load->model('adminmodel');
        $tableHD = 'hoadon';
        $data = array(
            'trangthai' => $_POST['trangthaimoi'],
            'idhd' => $_POST['idhd'],
        );
        //print_r($data);
        $resutl = $adminmodel->updateStatusMD($tableHD,$data);
        if($resutl==1){
            header("Location:/?url=dangnhap/dashboard");
        }
        else{
           echo 'Cập nhật không thành công'; 
        }

    }

}
