<?php
class adminmodel extends DModel
{

    public function __construct()
    {
        parent::__construct();
    }
    // public function hienthisanpham(){
    //     $sql = "select * from sanpham";
    //     $rows = $this->db->query($sql);
    //     $result = $rows->fetchAll();
    //     return $result;
    // }
    //Lấy dữ liệu từ hóa đơn
    // public function selectOrderMD($tableHoadon)
    // { 
    //     return $this->db->select($tableHoadon);

    // }
    // //Thêm đơn hàng vào DB
    // public function insertOrderMD($tableHoadon, $data)
    // { 
    //     return $this->db->insertOrderDB($tableHoadon, $data);

    // }
    // Thêm sảm phẩm vào DB
    public function addSanpham($tablePD, $data)
    {
        return $this->db->addPD($tablePD, $data);
    }
    // chọn sản phẩm theo ID
    public function selectPD_ById($tablePD, $idsp)
    {
        return $this->db->selectPD_ByIdBD($tablePD, $idsp);
    }
    ////update giá sản phẩm
    public function updatePriceMD($tableUD, $idsp)
    {
        return $this->db->updatePriceDB($tableUD, $idsp);
    }



    //chọn hóa đơn theo ID
    public function selectOD_ById($tableOD, $idhd)
    {
        return $this->db->selectOD_ByIdBD($tableOD, $idhd);
    }
    
    ///
    public function updateStatusMD($tableHD, $idsp)
    {
        return $this->db->updateStatusDB($tableHD, $idsp);
    }
}
