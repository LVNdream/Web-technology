<?php

class Database extends PDO
{

    public function __construct($connect, $user, $pass)
    {
        parent::__construct($connect, $user, $pass);
    }

    public function select($tableName)
    {
        $sql = "select * from $tableName";
        $statment = $this->prepare($sql);
        $statment->execute();
        return $statment->fetchAll();
    }
    public function insert($tableHoadon, $data)
    {
        $sql = "insert into $tableHoadon(ten,mota) values(:ten,:mota)";
        $statment = $this->prepare($sql);
        $statment->bindParam('ten', $data['ten']);
        $statment->bindParam('mota', $data['mota']);
        return $statment->execute();
    }

    public function insertOrderDB($tableHoadon, $data)
    {
        $sql = "insert into $tableHoadon(hovaten,diachi,sodienthoai,email,ghichu,thanhtoan,tongtien,trangthai)
         values (:hovaten,:diachi,:sodienthoai,:email,:ghichu,:thanhtoan,:tongtien,:trangthai)";
        $statment = $this->prepare($sql);
        $statment->bindParam('hovaten', $data['hovaten']);
        $statment->bindParam('diachi', $data['diachi']);
        $statment->bindParam('sodienthoai', $data['sodienthoai']);
        $statment->bindParam('email', $data['email']);
        $statment->bindParam('ghichu', $data['ghichu']);
        $statment->bindParam('thanhtoan', $data['thanhtoan']);
        $statment->bindParam('tongtien', $data['tongtien']);
        $statment->bindParam('trangthai', $data['trangthai']);
        return $statment->execute();
    }

    public function insertChitiethd($tableChitiethd, $data)
    {
        $sql = "insert into $tableChitiethd(idhd,idsp,soluong) values(:idhd,:idsp,:soluong)";
        $statment = $this->prepare($sql);
        $statment->bindParam('idhd', $data['idhd']);
        $statment->bindParam('idsp', $data['idsp']);
        $statment->bindParam('soluong', $data['soluong']);
        return $statment->execute();
    }

    public function affectedRows($sql, $username, $password)
    {
        $statement = $this->prepare($sql);
        $statement->execute(array($username, $password));
        return $statement->rowCount();
    }

    public function selectUser($sql, $username, $password)
    {
        $statement = $this->prepare($sql);
        $statement->execute(array($username, $password));
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    //hàm thêm sản phẩm
    public function addPD($tablePD, $data)
    {
        $sql = "insert into $tablePD(ten,gia,mausac,nhasanxuat,xuatxu,img) values(:ten,:gia,:mausac,:nhasanxuat,:xuatxu,:img)";
        $statment = $this->prepare($sql);
        $statment->bindParam('ten', $data['ten']);
        $statment->bindParam('gia', $data['gia']);
        $statment->bindParam('mausac', $data['mausac']);
        $statment->bindParam('nhasanxuat', $data['nhasanxuat']);
        $statment->bindParam('xuatxu', $data['xuatxu']);
        $statment->bindParam('img', $data['img']);
        return $statment->execute();
    }
    public function selectPD_ByIdBD($tablePD, $idsp)
    {
        $sql = "select * from $tablePD where idsp=:id";
        $statment = $this->prepare($sql);
        $statment->bindParam(':id', $idsp);
        $statment->execute();
        return $statment->fetchAll();
    }

    /// Hàm update giá Database
    public function updatePriceDB($tableUpdate, $data)
    {
        $sql = " update $tableUpdate set gia=:gia where idsp=:idsp";
        $statment = $this->prepare($sql);
        $statment->bindParam('gia', $data['giamoi']);
        $statment->bindParam('idsp', $data['idsp']);
        return $statment->execute();
    }

    public function selectOD_ByIdBD($tableOD, $idhd)
    {
        $sql = "select * from $tableOD,chitiethd where $tableOD.idhd=chitiethd.idhd and chitiethd.idhd=:idhd";
        $statment = $this->prepare($sql);
        $statment->bindParam(':idhd', $idhd);
        $statment->execute();
        return $statment->fetchAll();
    }

    // chọn hóa đơn theo ID

    ///
    public function updateStatusDB($tableHD, $data)
    {
        $sql = " update $tableHD set trangthai=:trangthai where idhd=:idhd";
        $statment = $this->prepare($sql);
        $statment->bindParam('trangthai', $data['trangthai']);
        $statment->bindParam('idhd', $data['idhd']);
        return $statment->execute();
    }
    
}
