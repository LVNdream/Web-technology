<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>
        <?php
        //include('system/libs/main.php');
        include('system/libs/DController.php');
        include('system/libs/Database.php');
        include('system/libs/DModel.php');
        include('system/libs/load.php');
        include('system/libs/Session.php');
        //$main = new Main();
    
        $url = isset($_GET['url'])? $_GET['url']:null;

        if($url!=null){
            $url = rtrim($url, '/');
            $url = explode('/', filter_var($url,FILTER_SANITIZE_URL));
        }
        else{
            unset($url);
        }

        if(isset($url[0])){
            include('app/controllers/'.$url[0].'.php');
            $ctrl = new $url[0]();
            if (isset($url[2])) {
                $ctrl->{$url[1]}($url[2]);
            }else{
                if(isset($url[1])){
                    $ctrl->{$url[1]}();
                }
                else{

                }
            }
        }else{
            include 'app/controllers/index.php';
            $index = new index();
            $index->trangchu();
        }




        
        // echo '<pre>';
        // print_r($url);

        ?>
    </h1>

</body>

</html>