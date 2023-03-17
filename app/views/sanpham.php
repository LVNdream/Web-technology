<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/public/css/Trangchu.css">
    <link rel="stylesheet" href="/public/css/base.css">
    <link rel="stylesheet" href="/public/css/Laptop.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="app">
        <?php
        include 'app/views/layout/header.php'
        ?>

        <div class="main">
            <div class="main__heading">
                <div class="main__heading-link">
                    <span class="gray-color">Trang chủ /</span>
                    <span>Laptop</span>
                </div>

                <div class="main__heading-sort">
                    <span>Xem tất cả 10 kết quả</span>
                    <div class="heading__sort-dropdown">
                        <input type="text" placeholder="Thứ tự mặc định">
                        <i class="fa-solid fa-caret-down dropdown-icon"></i>
                        <div class="heading__sort-dropdown-menu">
                            <ul hidden>
                                <li><a class="dropdown__menu-link" href="">Thứ tự mặc định</a></li>
                                <li><a class="dropdown__menu-link" href="">Thứ tự theo mức độ phổ biến</a></li>
                                <li><a class="dropdown__menu-link" href="">Thứ tự theo điểm đánh giá</a></li>
                                <li><a class="dropdown__menu-link" href="">Thứ tự theo sản phẩm mới</a></li>
                                <li><a class="dropdown__menu-link" href="">Thứ tự theo giá: Thấp đến cao</a></li>
                                <li><a class="dropdown__menu-link" href="">Thứ tự theo giá: Cao đến thấp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <p>San pham:
                <?php
                //echo '<br/>';
                //foreach ($data as $key => $value) {
                //print_r($value) . '<br/>';
                //  foreach ($value as $key => $result) {
                //    print_r($result['idsp'] .';'.$result['ten'].';'.$result['gia'].';'.$result['mausac'].';'.$result['nhasanxuat'].';'.$result['xuatxu'].';'.$result['img'].'<br/>');
                // }
                //}
                ?>
            </p> -->

            <div class="row mt-30">
                <?php
                foreach ($data as $key => $value) {
                    foreach ($value as $key => $result) {
                        print('<div class="col-lg-3 main__product-content main__product-content-fix">
                    <img class="main__product-img img__of-poduct" src="' . $result['img'] . '" alt="">
                    <p class="main__product-id main__product-id-fix" hidden>' . $result['idsp'] . '</p>
                    <p class="main__product-name main__product-name-fix">' . $result['ten'] . '</p>
                    <p class="main__product-price main__product-price-fix">' . $result['gia'] . ' <i class="fa-solid fa-dong-sign"></i></p>
                    <button style="font-size: 1.2rem;" onclick="themvaogiohang(this)" class="main__product-button">Thêm vào giỏ</button>
                    <div class="main__product-infor">
                        <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                        <p class="infor">Màu sắc: <span>' . $result['mausac'] . '</span></p>
                        <p class="infor">Nhà sản xuất: <span>' . $result['nhasanxuat'] . '</span></p>
                        <p class="infor">Xuất xứ: <span>' . $result['xuatxu'] . '</span></p>
                        <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                        <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                    </div>
                </div>');
                    }
                }
                ?>
                <!-- <div class="col-lg-2 main__product-content main__product-content-fix">
                        <img class="main__product-img" src="/img/lenovo-ThinkPad-T470-01-300x300.jpg" alt="">
                        <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                        <p class="main__product-price main__product-price-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                        <button onclick="themvaogiohang(this)" class="main__product-button">Thêm vào giỏ</button>
                        <div class="main__product-infor">
                            <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                            <p class="infor">Màu sắc: <span>Đen</span></p>
                            <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                            <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                            <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                            <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                        </div>
                    </div> -->


                <div class="main__policy">
                    <div class="row main__policy-content">
                        <div class="col-lg-4 policy-content">
                            <span>Đổi trả trong vòng 30 ngày</span>
                        </div>
                        <div class="col-lg-4 policy-content">
                            <span>Giao hàng toàn quốc</span>
                        </div>
                        <div class="col-lg-4 policy-content">
                            <span>Thanh toán khi nhận hàng</span>
                        </div>
                    </div>
                </div>
                <?php
                include 'app/views/layout/footer.php'
                ?>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="/public/js/sanpham.js"></script>
</body>>
</html>