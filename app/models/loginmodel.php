<?php
class loginmodel extends DModel {

    public function __construct(){
        parent::__construct();
    }
    public function login($table, $username, $password){
        $sql = "select * from $table where email=? and matkhau=?";
        return $this->db->affectedRows($sql, $username, $password);
    }
    public function getLogin($table, $username, $password){
        $sql = "select * from $table where email=? and matkhau=?";
        return $this->db->selectUser($sql, $username, $password);
    }
    
}