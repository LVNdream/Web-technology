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
                <h1>Quên mật khẩu</h1>
            </div>

            <form style="width: 500px; margin: 30px auto 0; font-size: 1.6rem; background-color: #ddd; padding: 10px; border-radius: 2px;">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Tên đăng nhập hoặc email*</label>
                  <input style="height: 30px" required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button style="font-size: 1.6rem; font-weight: 600; text-transform:uppercase; background-color:#2e3192; border:none; padding: 5px 15px;" type="submit" class="btn btn-primary">Đặt lại mật khẩu</button>
              </form>

            
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