<?php
session_start();
//定義
if(isset($_SESSION["admin_name"])){

}else{
    header('location:index_login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首頁</title>
    <link href="./Jscss/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .carousel-item img {
            min-width: auto;
            min-height: 200px;
            width: 100vw;
            height: 40vh;
            object-fit: cover;
            object-position: 50% 50%;
        }

        .card img {
            width: auto;
            height: 100%;
            overflow: hidden;

        }
    </style>
</head>



<body>
    <!-- navbar-start -->
<?php include("./nav.php"); ?>
<!-- navbar-end -->
   
    <!--輪播廣告開始-->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/1.jpg" class="d-block w-100" alt="照片1">
            </div>
            <div class="carousel-item">
                <img src="./img/2.jpg" class="d-block w-100" alt="照片2">
            </div>
            <div class="carousel-item">
                <img src="./img/3.jpg" class="d-block w-100" alt="照片3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--輪播廣告結束-->

    <!--card start-->
    <div class="container">
        <div class="RWDProduct015__head">
            <!-- <div class="RWDProduct015__head__imgbox"><img class="RWDProduct015__head__img"
                    src="https://www.panny.com.tw/archive/image/tw1RWDProduct015_45/tw1RWDProduct015_45_photo.webp"
                    alt="TOP熱銷商品"></div> -->
            <div class="RWDProduct015__head__h1"><h1>TOP熱銷商品</h1></div>
            <div class="RWDProduct015__head__h2"><h1>超夯嚴選好物</h1></div>
        </div>
        <!-- <h1>！！！最新消息！！！</h1> -->
        <hr style=width:80%; margin-left:auto;>

        <div class="d-flex flex-wrap justify-content-between">
            
        <?php
            for ($i = 4; $i <= 15; $i++) {
            ?>
                <div class="card" style="width: 18rem;">
                    <div class="d-flex justify-content-center" style="height:200px;">
                        <img src="./img/<?php echo $i;

                                        //如果小於等於9要加0，其他不用
                                        // if($i<=9){
                                        //     echo "0".$i;
                                        // }else{
                                        //     echo $i;
                                        // }

                                        ?>.webp" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">[我是產品名]</h5>
                        <p class="card-text">S【買大送小】亮白煥顏組 【青春露＋精華＋晚霜＋眼霜】</p>

                        <div class="select_box p_select">
                            <span class="arrow ii-arrow_b3"></span>
                            <select class="qty" name="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <a href="#" class="btn btn-primary">加入購物車</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
        <!--card end-->


        <script src="./Jscss/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>