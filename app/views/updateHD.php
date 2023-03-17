<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="header">
        <div>
            <h3>LAPTOPPRO</h3>
            <span>Admin</span>
        </div>
        <a title="Logout" class="login__link" href="/?url=dangnhap/dangxuat"><i style="font-size: 20px;" class="login-link-icon fa-solid fa-right-from-bracket"></i></a>
    </div>
    <div class="main__content">
        <div class=" main__content-left">
            <div class="main__content-left-user">
                <div class="user-icon">
                    <i class="icon fa-solid fa-user"></i>
                </div>
                <span>Minh Sang</span>
            </div>
            <div class="main__content-left-feature">
                <p onclick="hienThiChucNang1()" class="main__content-left-prdname"><a href="/?url=dangnhap/dashboard">Quay lại chỉnh sửa</a> <i class="fa-solid fa-caret-down"></i></p>
            </div>
        </div>
        <div class="main__content-right">

            <div>
                <h4>Cập nhật thông tin đơn hàng</h4>
                <?php
                if ($data) {
                    $soluong='';
                    foreach ($data as $key => $value) {
                        // $soluong = ''.$soluong.'<p>Mã sản phẩm/số lượng: '.$value['idsp'].'/'.$value['idsp'].'</p>';
                        foreach ($value as $key => $rsl) {
                            //print_r($rsl['idhd']);
                            $soluong = ''.$soluong.'<p>Mã sản phẩm: LP'.$rsl['idsp'].'/Số lượng'.$rsl['idsp'].'</p>';
                        };
                    }
                    //print_r($soluong);
                    //print_r($value);
                    print_r('<form class="form__feature" action="/?url=dangnhap/updateStatus" method="POST">

                    
                    <div id="infor_receipt-update">
                        <h5 style="text-align: center;">Thông tin đơn hàng đã cập nhật</h5>
                        <p>ID đơn hàng: ' . $data['HD'][0]['idhd'] . '</p>
                        <p>Tên: ' . $data['HD'][0]['hovaten'] . '</p>
                        <p>Địa chỉ: ' . $data['HD'][0]['diachi'] . '</p>
                        <p>Số điện thoại: ' . $data['HD'][0]['sodienthoai'] . '</p>
                        <p>Email: ' . $data['HD'][0]['email'] . '</p>
                        <p>Ghi chú: ' . $data['HD'][0]['ghichu'] . '</p>
                        <p>Thanh toán: ' . $data['HD'][0]['thanhtoan'] . '</p>
                        <p>Tổng tiền: ' . $data['HD'][0]['tongtien'] . '</p>
                        <p>Trạng thái: ' . $data['HD'][0]['trangthai'] . '</p>
                        '.$soluong.'
                        </div>
                    <div class="form__feature-group">
                        <label class="label" for="">Trạng thái mới*</label>
                        <input required class="input" type="text" placeholder="" name="idhd" value="'. $data['HD'][0]['idhd'] .'" hidden>
                        <input required class="input" type="text" placeholder="" name="trangthaimoi">
                        <button id="update-submit" class="submit-input mt-3" type="submit" value="">Cập nhật</button>
                    </div>
                </form>
                ');
                } else {
                    print_r(' <form method="POST" action="/?url=dangnhap/orderById">
                    <div class="form__feature-group">
                        <label class="label" for="">Tìm kiếm đơn hàng*</label>
                        <input required class="input" type="text" placeholder="ID sản phẩm" name="idhd">
                        <button id="search-btn" style="margin-top: 20px;" class="submit-input">Tìm</button>
                    </div>
                </form>');
                }
                ?>
                <!-- <form action="">
                    <div class="form__feature-group">
                        <label class="label" for="">Tìm kiếm đơn hàng*</label>
                        <input required class="input" type="text" placeholder="ID sản phẩm">
                        <button id="search-btn" style="margin-top: 20px;" class="submit-input">Tìm</button>
                    </div>
                </form> -->
                <!-- <form class="form__feature" action="">

                    <button id="update-submit" class="submit-input" type="" value="">Cập nhật</button>
                    <div id="infor_receipt-update">
                        <h5 style="text-align: center;">Thông tin đơn hàng đã cập nhật</h5>
                        <p>ID đơn hàng:</p>
                        <p>Tên:</p>
                        <p>Địa chỉ:</p>
                        <p>Số điện thoại:</p>
                        <p>Email:</p>
                        <p>Ghi chú:</p>
                        <p>Thanh toán:</p>
                        <p>Tổng tiền:</p>
                        <p>Trạng thái:</p>
                        <p>Mã sản phẩm/số lượng;</p>
                    </div>
                    <div class="form__feature-group">
                        <label class="label" for="">Trạng thái*</label>
                        <input required class="input" type="text" placeholder="">
                    </div>
                </form> -->

            </div>
        </div>
    </div>
    <script src="/public/js/admin.js"></script>
</body>

</html>