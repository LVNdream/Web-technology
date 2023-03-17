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
    <link rel="stylesheet" href="/public/css/Giohang.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="app">
        <?php
        include 'app/views/layout/header.php'
        ?>

        <div class="main">
            <div class="row cart">
                <h2>Giỏ hàng</h2>
                <div class="col-lg-8 cart-left">
                    <div style="width:100%;">
                        <table style="width:100%;">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <td></td>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>

                            <tbody id="mycart">
                                <!-- <tr>
                                    <td>
                                        <img class="product__item-img" src="/img/mac-pro-2017-01-300x300.jpg" alt="">
                                    </td>
                                    <td><span class="product__item-name">Apple Macbook Air 2017 13.3 inch MQD32</span></td>
                                    <td><span class="product__item-price>">20,890,000</span><sup>đ</sup></td>
                                    <td><input class="product__item-count" type="number" min="0" value="1"></td>
                                    <td><i class="product__item-delete fa-regular fa-circle-xmark"></i></td>
                                </tr> -->

                            </tbody>
                        </table>
                        <button onclick="update()" style="margin-top: 20px; border: 1px solid #000; background-color: rgb(45, 45, 250); padding: 5px 10px; color: white; border-radius: 2px;">Cập nhật</button>
                    </div>
                </div>
                <div class="col-lg-4 cart-right">
                    <h4>Tổng số lượng</h4>
                    <div class="cart-sum">
                        <span>Tổng cộng</span>
                        <span id="tongtien">60,000,000 <sup>đ</sup></span>
                    </div>
                    <input class="cart__discout-code" type="text" placeholder="Mã giảm giá">
                    <button class="cart__discout-button">Áp dụng mã giảm giá</button>
                    <a style="text-decoration: none; color:white" href="/?url=thanhtoan/showthanhtoan"><button class="cart__pay-button">Tiến hành thanh toán</button></a>
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
    <script src="/public/js/giohang.js"></script>
</body>


</html>