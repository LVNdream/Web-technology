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
    <link rel="stylesheet" href="/public/css/Tuyendung.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="app">
        <?php
        include 'app/views/layout/header.php'
        ?>

        <div class="main">
            <div class="mt-30 headding-page">
                <h1>Tuyển dụng</h1>
            </div>

            <div class="row">
                <div class="col-lg-4 recruit">
                    <img class="width-100" src="/img/tuyen-dung-300x150.jpg" alt="">
                    <div class="recruit__infor">
                        <h4>Tuyển dụng nhân viên</h4>
                        <hr>
                        <p>Lương thưởng tốt (thưởng Tết tới 3 tháng, số liệu năm 2016) Cơ hội 6 [...]</p>
                    </div>
                    <div class="recruit__day">
                        <div class="text-center">
                            <span>05</span><br>
                            <span>Th2</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5"></div>

                <div class="col-lg-3 recruit__search">
                    <div class="recruit__search-input">
                        <input type="text" placeholder="Nhập thông tin cần tìm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <h3 class="recruit__search-news">Bài viết mới nhất</h3>
                    <hr>
                    <div>
                        <div class="row recruit__search-news-infor">
                            <div class="col-lg-3">
                                <div class="recruit__search-img">
                                    <img class="width-100 height-100" src="/img/repair-services-300x169.jpg" alt="">
                                    <div class="overlay">
                                        <div class="text-center">
                                            <span>05</span><br>
                                            <span>Th2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9 recruit__search-name">
                                <span>Dịch vụ sữa chữa</span>
                            </div>
                        </div>
                        <hr class="mt-0">

                        <div class="row recruit__search-news-infor">
                            <div class="col-lg-3">
                                <div class="recruit__search-img">
                                    <img class="width-100 height-100" src="/img/tuyen-dung-300x150.jpg" alt="">
                                    <div class="overlay">
                                        <div class="text-center">
                                            <span>05</span><br>
                                            <span>Th2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9 recruit__search-name">
                                <span>Tuyển dụng nhân viên</span>
                            </div>
                        </div>
                        <hr class="mt-0">

                        <div class="row recruit__search-news-infor">
                            <div class="col-lg-3">
                                <div class="recruit__search-img">
                                    <img class="width-100 height-100" src="/img/hinh-nen-mate-10-pro- (1).jpg" alt="">
                                    <div class="overlay">
                                        <div class="text-center">
                                            <span>07</span><br>
                                            <span>Th12</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9 recruit__search-name">
                                <span>Trọn bộ hình nền Huawei Mate 10 đẹp “miễn chê” cho mọi smartphone</span>
                            </div>
                        </div>
                        <hr class="mt-0">

                        <div class="row recruit__search-news-infor">
                            <div class="col-lg-3">
                                <div class="recruit__search-img">
                                    <img class="width-100 height-100" src="/img/Nokia-6-TA-1054-cover-300x150.jpg" alt="">
                                    <div class="overlay">
                                        <div class="text-center">
                                            <span>07</span><br>
                                            <span>Th12</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9 recruit__search-name">
                                <span>Rò rỉ thông tin Nokia 6 (2018): Màn hình tràn viền, tỉ lệ 18:9, Snapdragon 6XX, RAM 4GB</span>
                            </div>
                        </div>
                        <hr class="mt-0">

                        <div class="row recruit__search-news-infor">
                            <div class="col-lg-3">
                                <div class="recruit__search-img">
                                    <img class="width-100 height-100" src="/img/meizu-note-8-fptshop-300x150.jpg" alt="">
                                    <div class="overlay">
                                        <div class="text-center">
                                            <span>07</span><br>
                                            <span>Th12</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-9 recruit__search-name">
                                <span>Meizu Note 8 bất ngờ xuất hiện trong diện mạo đẹp hoàn hảo</span>
                            </div>
                        </div>
                    </div>
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
</body>

</html>