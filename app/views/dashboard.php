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
                <p onclick="hienThiChucNang1()" class="main__content-left-prdname">Sản phẩm <i class="fa-solid fa-caret-down"></i></p>
                <ul id="list-feature" class="main__content-left-list">
                    <li class="main__content-left-item">Sửa thông tin sản phẩm</li>
                    <li onclick="showthemsp()" class="main__content-left-item">Thêm sản phẩm</li>
                    <li class="main__content-left-item">Xóa sản phẩm</li>
                </ul>
            </div>
            <div>
                <p onclick="hienThiChucNang2()" class="main__content-left-prdname">Đơn hàng <i class="fa-solid fa-caret-down"></i></p>
                <ul id="list-feature" class="main__content-left-list">
                    <li class="main__content-left-item">Cập nhật trạng thái đơn hàng</li>
                    <li class="main__content-left-item">Xóa đơn hàng</li>
                    <!-- onclick="showcapnhatdh()" -->
                </ul>
            </div>
        </div>
        <div class="main__content-right">


            <div id="suasp">
                <h4>Cập nhật thông tin sản phẩm</h4>
                <?php
                if (isset($data) == true) {
                    foreach ($data as $key => $value) {
                        print_r('<form method=POST action="/?url=dangnhap/productById">
                    <div class="form__feature-group">
                        <label class="label" for="">Tìm kiếm sản phẩm*</label>
                        <input required class="input" type="text" placeholder="ID sản phẩm" name="idsp">
                        <button type="submit" id="search-btn" style="margin-top: 20px;" class="submit-input">Tìm</button>
                    </div>
                </form>
                <form id="update-product" class="form__feature" method="POST" action="/?url=dangnhap/updatePrice">
                    <div id="infor_product-update">
                        <h5 style="text-align: center;">Thông tin sản phẩm</h5>
                        <p>ID sản phẩm: ' . $value['idsp'] . '</p>
                        <p>Tên: ' . $value['ten'] . '</p>
                        <p>Giá: ' . $value['gia'] . '</p>
                        <p>Màu sắc: ' . $value['mausac'] . '</p>
                        <p>Hãng sản xuất: ' . $value['nhasanxuat'] . '</p>
                        <p>Xuất xứ: ' . $value['xuatxu'] . '</p>
                        <p>Source-img: ' . $value['idsp'] . '</p>
                    </div>
                    <div class="form__feature-group">
                        <label class="label" for="">Giá mới*</label>
                        <input class="input" type="text" placeholder="" name="idsp" value="' . $value['idsp'] . '" hidden>
                        <input required class="input" type="text" placeholder="" name="giamoi">
                    </div>
                    <button id="update-submit" class="submit-input" type="" value="">Cập nhật</button>
                </form>');
                    }
                } else {
                    // if(isset($mesage)){
                    //     print_r('<p>'.$mesage['thongbao'].'</p>');
                    // }
                    print_r('<form method=POST action="/?url=dangnhap/productById">
                    <div class="form__feature-group">
                        <label class="label" for="">Tìm kiếm sản phẩm*</label>
                        <input required class="input" type="text" placeholder="ID sản phẩm" name="idsp">
                        <button type="submit" id="search-btn" style="margin-top: 20px;" class="submit-input">Tìm</button>
                    </div>
                </form>');
                }
                ?>
            </div>

            <div id="themsp">
                <h4>Thêm sản phẩm</h4>
                <form class="form__feature" method="POST" action="/?url=dangnhap/addProduct">
                    <div class="form__feature-group">
                        <label class="label" for="">Tên*</label>
                        <input required class="input" type="text" name="ten" placeholder="">
                    </div>
                    <div class="form__feature-group">
                        <label class="label" for="">Giá*</label>
                        <input required class="input" type="text" name="gia" placeholder="">
                    </div>
                    <div class="form__feature-group">
                        <label class="label" for="">Màu*</label>
                        <input required class="input" type="text" name="mausac" placeholder="">
                    </div>
                    <div class="form__feature-group">
                        <label class="label" for="">Tên hãng*</label>
                        <input required class="input" type="text" name="nhasanxuat" placeholder="">
                    </div>
                    <div class="form__feature-group">
                        <label class="label" for="">Xuất xứ*</label>
                        <input required class="input" type="text" name="xuatxu" placeholder="">
                    </div>
                    <div class="form__feature-group">
                        <label class="label" for="">Hình ảnh*</label>
                        <input required class="input" type="text" name="img" placeholder="Source">
                    </div>

                    <input class="submit-input" type="submit" value="Thêm">
                </form>
            </div>

            <form method="POST" action="/?url=dangnhap/orderById">
                <div class="form__feature-group">
                    <label class="label" for="">Tìm kiếm đơn hàng*</label>
                    <input required class="input" type="text" placeholder="ID sản phẩm" name="idhd">
                    <button id="search-btn" style="margin-top: 20px;" class="submit-input">Tìm</button>
                </div>
            </form>
            <!-- <div>
                <h4>Cập nhật thông tin đơn hàng</h4>
                //<?php
                    //if (isset($HD)) {
                    //     print_r('<form class="form__feature" action="">

                    //     <button id="update-submit" class="submit-input" type="" value="">Cập nhật</button>
                    //     <div id="infor_receipt-update">
                    //         <h5 style="text-align: center;">Thông tin đơn hàng đã cập nhật</h5>
                    //         <p>ID đơn hàng: '.$HD['HD']['idhd'].'</p>
                    //         <p>Tên: '.$HD['HD']['hovaten'].'</p>
                    //         <p>Địa chỉ: '.$HD['HD']['diachi'].'</p>
                    //         <p>Số điện thoại: '.$HD['HD']['sodienthoai'].'</p>
                    //         <p>Email: '.$HD['HD']['email'].'</p>
                    //         <p>Ghi chú: '.$HD['HD']['ghichu'].'</p>
                    //         <p>Thanh toán: '.$HD['HD']['thanhtoan'].'</p>
                    //         <p>Tổng tiền: '.$HD['HD']['tongtien'].'</p>
                    //         <p>Trạng thái: '.$HD['HD']['trangthai'].'</p>
                    //         <p>Mã sản phẩm/số lượng;</p>
                    //     </div>
                    //     <div class="form__feature-group">
                    //         <label class="label" for="">Trạng thái*</label>
                    //         <input required class="input" type="text" placeholder="">
                    //     </div>
                    // </form>');
                    // } else {
                    //     print_r(' <form method="POST" action="/?url=dangnhap/orderById">
                    //     <div class="form__feature-group">
                    //         <label class="label" for="">Tìm kiếm đơn hàng*</label>
                    //         <input required class="input" type="text" placeholder="ID sản phẩm" name="idhd">
                    //         <button id="search-btn" style="margin-top: 20px;" class="submit-input">Tìm</button>
                    //     </div>
                    // </form>');
                    // }
                    // 
                    ?> -->
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