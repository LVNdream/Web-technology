<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/public/css/Trangchu.css">
    <link rel="stylesheet" href="/public/css/base.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <div>
        <!-- <p>category:
            <?php
               //foreach ($data as $key) {
                 // echo $key['catOne'].'<br/>';
                  // echo $key['catTwo'].'<br/>';
                   // echo $key['catThree'].'<br/>';
                    //echo $key['catFour'].'<br/>';
               // }
            ?>
        </p> -->
    </div>
    <div class="app">

        <?php
        include 'app/views/layout/header.php'
        ?>
        <div class="main">
            <!-- ADV -->
            <div class="row">
                <div class="col-lg-8 adv">
                    <img class="adv-img" src="/img/banner-laptoppro-01.jpg" alt="">
                    <span class="adv-content">Mua Macbook trúng sổ tiết kiệm</span>
                </div>
                <div class="col-lg-4">
                    <div class="">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="adv-img" src="/img/100000_banner-sony-xa1-plus-400x200.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img class="adv-img" src="/img/100000_banner-j7-prime-400x200.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img class="adv-img" src="/img/100000_banner-galaxy-c9-pro-a5-a7-400x200.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="adv-img" src="/img/100000_iphone8-8plus-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img class="adv-img" src="/img/100000_banner-vui-xmax-trung-x-phone-v2-400x200.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img class="adv-img" src="/img/100000_banner-tra-gop-100pt-trung-qua-400x200.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PRODUCT -->
            <div class="row main__product">
                <div class="col-lg-8">
                    <div class="row">
                        <h1 class="main__product-heading">Sản phẩm mới</h1>
                        <div class="col-lg-3 main__product-content">
                            <img class="main__product-img" src="/img/10034083-1-300x300.jpg" alt="">
                            <p class="main__product-name">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 main__product-content">
                            <img class="main__product-img" src="/img/may-tinh-de-ban-dell-vostro-3650mt-pyypd1-01-300x300.jpg" alt="">
                            <p class="main__product-name">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price">10,090,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 main__product-content">
                            <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                            <p class="main__product-name">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price">10,990,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 main__product-content">
                            <img class="main__product-img" src="/img/may-tinh-de-ban-hp-pavilion-570-p021l-z8h79aa-1-300x300.jpg" alt="">
                            <p class="main__product-name">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price">17,790,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 main__product-content">
                            <img class="main__product-img" src="/img/may-tinh-de-ban-acer-aspire-atc-710-01-300x300.jpg" alt="">
                            <p class="main__product-name">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price">17,790,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 main__product-content">
                            <img class="main__product-img" src="/img/may-tinh-de-ban-apple-imac-mmqa2sa-a-1-300x300.jpg" alt="">
                            <p class="main__product-name">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price">17,790,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 main__product-content">
                            <img class="main__product-img" src="/img/may-tinh-de-ban-dell-vostro-3650mt-pyypd1-01-300x300.jpg" alt="">
                            <p class="main__product-name">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price">17,790,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-3 main__product-content">
                            <img class="main__product-img" src="/img/may-tinh-de-ban-hp-pavilion-570-p021l-z8h79aa-1-300x300.jpg" alt="">
                            <p class="main__product-name">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price">17,790,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 main__news">
                    <h1 class="main__news-heading">Tin tức</h1>
                    <div class="main__news-content">
                        <div class="main__news-title">
                            <img class="main__news-img" src="/img/hinh-nen-mate-10-pro-.jpg" alt="">
                            <p class="main__news-infor">Trọn bộ hình nền Huawei Mate 10 đệp miễn chê cho mọi smartphone</p>
                        </div>
                        <div class="main__news-more">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="main__news-img special" src="/img/hinh-nen-mate-10-pro-.jpg" alt="">
                                </div>
                                <div class="col-lg-8">
                                    <p class="main__news-infor special">Trọn bộ hình nền Huawei Mate 10 đệp miễn chê cho mọi smartphone</p>
                                </div>
                            </div>
                        </div>
                        <div class="main__news-more">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="main__news-img special" src="/img/Nokia-6-TA-1054-cover-300x150.jpg" alt="">
                                </div>
                                <div class="col-lg-8">
                                    <p class="main__news-infor special">Rò rỉ thông tin Nokia 6 (2018): Màn hình tràn viền, tỉ lệ 18:9, Snapdragon 6XX, RAM 4GB</p>
                                </div>
                            </div>
                        </div>
                        <div class="main__news-more">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="main__news-img special" src="/img/meizu-note-8-fptshop-300x150.jpg" alt="">
                                </div>
                                <div class="col-lg-8">
                                    <p class="main__news-infor special">Meizu Note 8 bất ngờ xuất hiện trong diện mạo đẹp hoàn hảo</p>
                                </div>
                            </div>
                        </div>
                        <div class="main__news-more">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="main__news-img special" src="/img/danh-gia-asus-zenfone-4-max-pro-pin-sieu-trau-kha-bat-ngo-ve-camera-2-300x150.jpg" alt="">
                                </div>
                                <div class="col-lg-8">
                                    <p class="main__news-infor special">Tại sao nên mua “phiên bản thu nhỏ” Asus Zenfone 4 Max?</p>
                                </div>
                            </div>
                        </div>
                        <div class="main__news-more">
                            <div class="row">
                                <div class="col-lg-3">
                                    <img class="main__news-img special" src="/img/danh-gia-asus-zenfone-4-max-pro-pin-sieu-trau-kha-bat-ngo-ve-camera-2-300x150.jpg" alt="">
                                </div>
                                <div class="col-lg-8">
                                    <p class="main__news-infor special">Tại sao nên mua “phiên bản thu nhỏ” Asus Zenfone 4 Max?</p>
                                </div>
                            </div>
                        </div>
                        <div class="main__news-seemore">
                            <a class="news__seemore-link" href=""><span>Xem thêm tin tức >></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-30 main__product-laptop">
                <div class="product__laptop-heading">
                    <div class="product__laptop-title">
                        <h1>Máy tính xách tay</h1>
                        <div class="bgride">
                            <i class="fa-solid fa-briefcase"></i>
                        </div>
                    </div>
                    <div class="product__laptop-link">
                        <a href="">Apple /</a>
                        <a href="">Asus /</a>
                        <a href="">HP /</a>
                        <a href="">Lenovo /</a>
                        <a href="">Dell</a>
                    </div>
                </div>

                <div class="product__laptop-infor">
                    <div class="row">
                        <div class="col-lg-4 disable-padding">
                            <img class="product__laptop-adv-img" src="/img/100000_homebanner-laptop-dell-ins-15-n3567-1-1.jpg" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="row  product__laptop-display">
                                <div class="col-lg-3 main__product-content main__product-content-fix">
                                    <img class="main__product-img" src="/img/lenovo-ThinkPad-T470-01-300x300.jpg" alt="">
                                    <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                                    <p class="main__product-price main__product-price-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                                    <button class="main__product-button">Thêm vào giỏ</button>
                                    <div class="main__product-infor">
                                        <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                        <p class="infor">Màu sắc: <span>Đen</span></p>
                                        <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                        <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                        <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                        <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 main__product-content main__product-content-fix">
                                    <img class="main__product-img" src="/img/may-tinh-de-ban-acer-aspire-atc-710-01-300x300.jpg" alt="">
                                    <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                                    <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                                    <button class="main__product-button">Thêm vào giỏ</button>
                                    <div class="main__product-infor">
                                        <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                        <p class="infor">Màu sắc: <span>Đen</span></p>
                                        <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                        <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                        <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                        <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 main__product-content main__product-content-fix">
                                    <img class="main__product-img" src="/img/macbook-air-2017-01-300x300.jpg" alt="">
                                    <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                                    <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                                    <button class="main__product-button">Thêm vào giỏ</button>
                                    <div class="main__product-infor">
                                        <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                        <p class="infor">Màu sắc: <span>Đen</span></p>
                                        <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                        <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                        <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                        <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 main__product-content main__product-content-fix">
                                    <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                                    <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                                    <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                                    <button class="main__product-button">Thêm vào giỏ</button>
                                    <div class="main__product-infor">
                                        <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                        <p class="infor">Màu sắc: <span>Đen</span></p>
                                        <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                        <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                        <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                        <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 main__product-content main__product-content-fix">
                            <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                            <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-2 main__product-content main__product-content-fix">
                            <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                            <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-2 main__product-content main__product-content-fix">
                            <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                            <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-2 main__product-content main__product-content-fix">
                            <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                            <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-2 main__product-content main__product-content-fix">
                            <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                            <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-2 main__product-content main__product-content-fix">
                            <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                            <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-30 main__product-accessory">
                <div class="product__laptop-heading">
                    <div class="product__laptop-title">
                        <h1>Link phụ kiện</h1>
                        <div class="bgride">
                            <i class="fa-solid fa-gift"></i>
                        </div>
                    </div>
                    <div class="product__laptop-link">
                        <a href="">Bao da - Ốp lưng - Miếng dán màn hình /</a>
                        <a href="">Loa /</a>
                        <a href="">Máy nghe nhạc /</a>
                        <a href="">Phụ kiện âm thanh /</a>
                        <a href="">Tai nghe</a>
                    </div>
                </div>

                <div class="product__laptop-infor">
                    <div class="row">
                        <div class="col-lg-4 disable-padding">
                            <img class="product__laptop-adv-img" src="/img/100000_lpk-sac-khong-day-giam-25pt-380x262.jpg" alt="">
                        </div>
                        <div class="col-lg-8">
                            <div class="row  product__laptop-display">
                                <div class="col-lg-3 main__product-content main__product-content-fix">
                                    <img class="main__product-img" src="/img/lenovo-ThinkPad-T470-01-300x300.jpg" alt="">
                                    <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                                    <p class="main__product-price main__product-price-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                                    <button class="main__product-button">Thêm vào giỏ</button>
                                    <div class="main__product-infor">
                                        <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                        <p class="infor">Màu sắc: <span>Đen</span></p>
                                        <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                        <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                        <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                        <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 main__product-content main__product-content-fix">
                                    <img class="main__product-img" src="/img/may-tinh-de-ban-acer-aspire-atc-710-01-300x300.jpg" alt="">
                                    <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                                    <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                                    <button class="main__product-button">Thêm vào giỏ</button>
                                    <div class="main__product-infor">
                                        <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                        <p class="infor">Màu sắc: <span>Đen</span></p>
                                        <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                        <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                        <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                        <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 main__product-content main__product-content-fix">
                                    <img class="main__product-img" src="/img/macbook-air-2017-01-300x300.jpg" alt="">
                                    <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                                    <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                                    <button class="main__product-button">Thêm vào giỏ</button>
                                    <div class="main__product-infor">
                                        <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                        <p class="infor">Màu sắc: <span>Đen</span></p>
                                        <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                        <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                        <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                        <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 main__product-content main__product-content-fix">
                                    <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                                    <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                                    <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                                    <button class="main__product-button">Thêm vào giỏ</button>
                                    <div class="main__product-infor">
                                        <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                        <p class="infor">Màu sắc: <span>Đen</span></p>
                                        <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                        <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                        <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                        <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 main__product-content main__product-content-fix">
                            <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                            <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-2 main__product-content main__product-content-fix">
                            <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                            <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-2 main__product-content main__product-content-fix">
                            <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                            <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-2 main__product-content main__product-content-fix">
                            <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                            <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-2 main__product-content main__product-content-fix">
                            <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                            <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                        <div class="col-lg-2 main__product-content main__product-content-fix">
                            <img class="main__product-img" src="/img/LENOVO-1076-300x300.jpg" alt="">
                            <p class="main__product-name main__product-name-fix">Máy tính để bàn Lenovo 510S-08IKL (90GB007LVN)</p>
                            <p class="main__product-price main__product-name-fix">7,190,000 <i class="fa-solid fa-dong-sign"></i></p>
                            <button class="main__product-button">Thêm vào giỏ</button>
                            <div class="main__product-infor">
                                <p class="infor">Model: <span>510S-08IKL/90GB007LVN</span></p>
                                <p class="infor">Màu sắc: <span>Đen</span></p>
                                <p class="infor">Nhà sản xuất: <span>Lenovo</span></p>
                                <p class="infor">Xuất xứ: <span>Trung quốc</span></p>
                                <p class="infor">Thời gian bảo hành: <span>12 tháng</span></p>
                                <p class="infor">Địa điểm bảo hành: <span>Laptoppro</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main__adv-banner">
                <div class="adv__banner">
                    <div class="adv__banner-img">
                        <img src="/img/100000_lpk-sac-khong-day-giam-25pt-570x90.jpg" alt="">
                    </div>
                    <div class="adv__banner-img">
                        <img src="/img/100000_banner-phu-kien-570x90.jpg" alt="">
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </div>
    <script>
        var gh = sessionStorage.getItem("giohang");
        var giohangt = JSON.parse(gh);
        if(giohangt.length !=0){
            document.getElementById("cart-count").innerText = giohangt.length;
        }
    </script>
</body>

</html>