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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="app">
        <?php
        include 'app/views/layout/header.php'
        ?>

        <div class="main">
            <!-- <div class="account mt-30">
                <span>Bạn đã có tài khoản?<a style="text-decoration: none; color: #2e3192;" href="">Ấn vào đây để đăng nhập</a></span>
                <form style="display: none;" class="login__form">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên đăng nhập hoặc email*</label>
                        <input style="height: 30px;" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu*</label>
                        <input style="height: 30px;" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ghi nhớ tôi</label>
                    </div>
                    <button style="font-size: 1.6rem; background-color: #2e3192; border: none;" type="submit" class="btn btn-primary">Đăng nhập</button>
                    <p style="margin-bottom: 0; margin-top: 10px;"><a style="text-decoration: none; color: #2e3192;" href="">Quên mật khẩu?</a></p>
                </form>
            </div> -->

            <div style="margin-top: 50px;" class="row form__pay">
                <div class="col-lg-7 form__pay-left">
                    <form method="POST" action="/?url=thanhtoan/insertOrder" class="needs-validation" novalidate>
                        <h4>Thông tin thanh toán</h4>
                        <div id="thongtinkh" class="row form__pay-infor">
                            <div class="form__input col-lg-12">

                                <input required class="form__input-text" type="text" name="hovaten">
                                <label for="">Tên đầy đủ...*</label>
                                <div class="valid-feedback">
                                    Bạn đã nhập thông tin, vui lòng xem lại thông tin trước khi submit!
                                </div>
                                <div class="invalid-feedback">
                                    Bạn vui lòng nhập thông tin!
                                </div>

                            </div>

                            <div class="form__input col-lg-12">

                                <input required class="form__input-text" type="text" name="diachi">
                                <label for="">Địa chỉ...*</label>
                                <div class="valid-feedback">
                                    Bạn đã nhập thông tin, vui lòng xem lại thông tin trước khi submit!
                                </div>
                                <div class="invalid-feedback">
                                    Bạn vui lòng nhập thông tin!
                                </div>
                            </div>

                            <div class="form__input col-lg-6">

                                <input required class="form__input-text" type="tel" name="sodienthoai">
                                <label for="">Số điện thoại...*</label>
                                <div class="valid-feedback">
                                    Bạn đã nhập thông tin, vui lòng xem lại thông tin trước khi submit!
                                </div>
                                <div class="invalid-feedback">
                                    Bạn vui lòng nhập thông tin!
                                </div>
                            </div>

                            <div class="form__input col-lg-6">

                                <input required class="form__input-text" type="email" name="email">
                                <label for="">Địa chỉ email...*</label>
                                <div class="valid-feedback">
                                    Bạn đã nhập thông tin, vui lòng xem lại thông tin trước khi submit!
                                </div>
                                <div class="invalid-feedback">
                                    Bạn vui lòng nhập thông tin!
                                </div>
                            </div>

                            <div class="form__input col-lg-12">

                                <textarea style="height: 120px; padding: 5px;" class="form__input-text" placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn giao hàng chi tiết hơn." name="ghichu"></textarea>
                                <label for="">Ghi chú đơn hàng</label>
                            </div>

                            <div style="margin-bottom: 20px;">
                                <div style="border-bottom: 1px solid #ccc; margin-top: 10px;">
                                    <input required style="margin-right: 10px; margin-bottom: 10px;" name="thanhtoan" type="radio" value="Chuyển khoản ngân hàng">
                                    <label for="">Chuyển khoản ngân hàng</label>
                                    <div class="valid-feedback">
                                        Bạn đã chọn thông tin, vui lòng xem lại thông tin trước khi submit!
                                    </div>
                                    <div class="invalid-feedback">
                                        Bạn vui lòng chọn thông tin!
                                    </div>
                                </div>

                                <div style="border-bottom: 1px solid #ccc; margin-top: 10px;">
                                    <input required style="margin-right: 10px; margin-bottom: 10px;" name="thanhtoan" type="radio" value="Thanh toán tại cửa hàng">
                                    <label for="">Thanh toán tại cửa hàng</label>
                                    <div class="valid-feedback">
                                        Bạn đã chọn thông tin, vui lòng xem lại thông tin trước khi submit!
                                    </div>
                                    <div class="invalid-feedback">
                                        Bạn vui lòng chọn thông tin!
                                    </div>
                                </div>

                                <div style="border-bottom: 1px solid #ccc; margin-top: 10px;">
                                    <input required style="margin-right: 10px; margin-bottom: 10px;" name="thanhtoan" type="radio" value="Trả tiền mặt khi nhận hàng">
                                    <label for="">Trả tiền mặt khi nhận hàng</label>
                                    <div class="valid-feedback">
                                        Bạn đã chọn thông tin, vui lòng xem lại thông tin trước khi submit!
                                    </div>
                                    <div class="invalid-feedback">
                                        Bạn vui lòng chọn thông tin!
                                    </div>
                                </div>

                            </div>

                            <div id="tongsanpham">

                            </div>

                        </div>
                        <button class="order-btn" type="submit">Dặt hàng</button>
                    </form>
                </div>

                <div class="col-lg-1"></div>

                <div class="col-lg-4 form__pay-right">
                    <h4>Đơn hàng của bạn</h4>
                    <table style="width: 100%;">
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
                            <td class="fw-6"><span>Giao hàng 1</span></td>
                            <td><span>Giao hàng miễn phí</span></td>
                        </tr>

                        <tr>
                            <td class="fw-6"><span>Tổng cộng</span></td>
                            <td class="fw-6"><span id="tongtiendonhang">57,590,000</span><sup>đ</sup></td>
                        </tr>
                    </table>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/public/js/thanhtoan.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <script>
        var gh = sessionStorage.getItem("giohang");
        var giohang = JSON.parse(gh);
        var tongtien = 0;
        var soluong = [];
        var idsp = [];
        let payForm = $('#tongsanpham');
        //console.log(payForm);
        if (giohang.length != 0) {
            // console.log(customerCart);
            for (let i = 0; i < giohang.length; i++) {
                idsp.push(parseInt(giohang[i][1]));
                soluong.push(giohang[i][4]);
                tongtien += ((giohang[i][3]) * (giohang[i][4]));

            }
            // idsp=JSON.stringify(idsp);
            // console.log(idsp);
            // soluong=JSON.stringify(soluong);
            // console.log(soluong);    
            
            payForm.append($(`<input type="text" class="form-control input--infor" name="idsp" value="${idsp}">`));
            payForm.append($(`<input type="text" class="form-control input--infor" name="soluong" value="${soluong}">`));
            payForm.append($(`<input type="text" class="form-control input--infor" name="tongtien" value="${tongtien}">`));


        }
    </script>
</body>

</html>