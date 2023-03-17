<?php
class sanphammodel extends DModel {

    public function __construct(){
        parent::__construct();
    }
    public function hienthisanpham($tableName){
        return $rows = $this->db->select($tableName);
    }
}

?>