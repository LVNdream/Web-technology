<?php
class thanhtoanmodel extends DModel {

    public function __construct(){
        parent::__construct();
    }
    // public function hienthisanpham(){
    //     $sql = "select * from sanpham";
    //     $rows = $this->db->query($sql);
    //     $result = $rows->fetchAll();
    //     return $result;
    // }
    //Lấy dữ liệu từ hóa đơn
    public function selectOrderMD($tableHoadon)
    { 
        return $this->db->select($tableHoadon);
       
    }
    //Thêm đơn hàng vào DB
    public function insertOrderMD($tableHoadon, $data)
    { 
        return $this->db->insertOrderDB($tableHoadon, $data);
       
    }
    // Thêm thông tin chi tiết hóa đơn à DB
    public function insertChitiethd($tableChitiethd, $data)
    { 
        return $this->db->insertChitiethd($tableChitiethd, $data);
       
    }
    
}
