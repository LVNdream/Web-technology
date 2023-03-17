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
    <link rel="stylesheet" href="/public/css/Thanhtoan.css">
    <link rel="stylesheet" href="/public/css/Donhang.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="app">
        <?php
        include 'app/views/layout/header.php'
        ?>

        <div class="main">
            <div class="row">
                <div class="col-lg-7 receipt-left">
                    <p>Trả tiền mặt khi nhận hàng</p>
                    <div class="receipt-infor">
                        <h4>Chi tiết đơn hàng</h4>
                        <table style="width:100%;">
                            <thead>
                                <tr>
                                    <td>Sản phẩm</td>
                                    <td>Tổng cộng</td>
                                </tr>
                            </thead>

                            <tbody id="donhang">
                                <!-- <tr>
                                    <td class="gray-color"><span>Apple Macbook Pro 2017 13.3 Inch <span>x1</span></span></td>
                                    <td class="fw-6"><span>46,600,000</span><sup>đ</sup></td>
                                </tr>
                                <tr>
                                    <td class="gray-color"><span>Máy tính bàn Lenovo Ideacenter 510S-08IKL <span>x1</span></span></td>
                                    <td class="fw-6"><span>10,990,000</span><sup>đ</sup></td>
                                </tr> -->

                            </tbody>
                            <tr>
                                <td class="fw-6"><span>Tổng cộng</span></td>
                                <td class="fw-6"><span id="tiendonhang">57,590,000</span><sup>đ</sup></td>
                            </tr>

                            <tr>
                                <td class="fw-6"><span>Giao nhận hàng</span></td>
                                <td><span>Giao hàng miễn phí</span></td>
                            </tr>

                            <tr>
                                <td class="fw-6"><span>Phương thức thanh toán</span></td>
                                <td><span id="phuongthucthanhtoan">Trả tiền mặt khi nhận hàng</span></td>
                            </tr>

                            <tr>
                                <td class="fw-6"><span>Tổng cộng</span></td>
                                <td class="fw-6"><span id="tongtiendonhang">57,590,000</span><sup>đ</sup></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-5 receipt-right">
                    <p>Cảm ơn bạn. Đơn hàng của bạn đã được nhận.</p>
                    <ul>
                        <li>Mã đơn hàng: <span class="fw-6">1234</span></li>
                        <li>Tên: <span class="fw-6" id="ten-kh"></span></li>
                        <li>Địa chỉ: <span class="fw-6" id="diachi-kh"></span></li>
                        <li>Số điện thoại: <span class="fw-6" id="sdt-kh"></span></li>
                        <li>Email: <span class="fw-6" id="email-kh"></span></li>
                        <li>Ghi chú: <span class="fw-6" id="ghichu-kh"></span></li>
                    </ul>
                </div>
            </div>
        </div>

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
    <script src="/public/js/donhang.js"></script>
</body>

</html>