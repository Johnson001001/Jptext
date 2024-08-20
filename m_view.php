<?php

session_start();
if (isset($_SESSION["admin_name"])) {
} else {
    header('location:index_login.php');
}

require('./conn.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>檢視會員</title>
    <link href="./Jscss/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <!-- <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/1.jpg" class="d-block H-50" alt="照片1">
            </div>
            <div class="carousel-item">
                <img src="./img/2.jpg" class="d-block H-50" alt="照片2">
            </div>
            <div class="carousel-item">
                <img src="./img/3.jpg" class="d-block H-50" alt="照片3">
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
    </div> -->
    <!--輪播廣告結束-->

    <!--card start-->
    <div class="container">
        <div class="RWDProduct015__head">
            <!-- <div class="RWDProduct015__head__imgbox"><img class="RWDProduct015__head__img"
                    src="https://www.panny.com.tw/archive/image/tw1RWDProduct015_45/tw1RWDProduct015_45_photo.webp"
                    alt="TOP熱銷商品"></div> -->
            <div class="RWDProduct015__head__h1">
                <h1 style="margin-top:100px;"> 會員系統-資料檢視<?php echo $_SESSION['admin_name']; ?></h1>
            </div>
            <div class="RWDProduct015__head__h2">
                <h1></h1>
            </div>
        </div>
        <!-- <h1>！！！最新消息！！！</h1> -->
        <table class="table table-striped">
            <tr class="table-active">
                <th scope="row">NO</th>
                <th scope="row">姓名</th>
                <th scope="row">電話</th>
                <th scope="row">住址</th>
                <th scope="row">編輯</th>
            </tr>

            <?php
            // for ($i=1;$i<=6; $i++){
            //資料撈取
            $sql_query = "SELECT * FROM `students` ORDER BY `cID` ASC;";
            //資料集
            $result = $db_link->query($sql_query);
            //print_r($result);

            $sn = 1;
            while ($row_result = $result->fetch_assoc()) {
                //設定圖和稱謂
                if ($row_result['cSex'] == 'M') {
                    $sex = ' 先生 <img src="./img/icon_M.png" alt=""width="30" height="30"> ';
                } else {
                    $sex = ' 小姐  <img src="./img/icon_F.png" alt=""width="30" height="30">';
                }
            ?>
                <tr class="table-active">
                    <td scope="row"><?php echo $sn;
                                    $sn++; ?></td>
                    <td scope="row"><?php echo $row_result['cName'] . $sex; ?></td>
                    <td scope="row"><?php echo $row_result['cPhone']; ?></td>
                    <td scope="row"><?php echo $row_result['cAddr']; ?></td>
                    <td scope="row">
                        <a class="btn btn-info" href="m_edit.php?cID=<?php echo $row_result['cID']; ?>">編輯</a>
                        <a class="btn btn-danger" href="m_del.php?cID=<?php echo $row_result['cID']; ?>">刪除</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>


        <!--檢視會員資料 end-->

        <br><br><br><br>


        <script src="./Jscss/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>