<?php
class donhangmodel extends DModel {

    public function __construct(){
        parent::__construct();
    }
    // public function hienthisanpham(){
    //     $sql = "select * from sanpham";
    //     $rows = $this->db->query($sql);
    //     $result = $rows->fetchAll();
    //     return $result;
    // }
    public function insertTest($tableInsert, $data)
    { 
        echo 'Insert thử thành công';
        return $this->db->insert($tableInsert, $data);
       
    }
    
}
