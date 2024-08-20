<?php
require('./conn_1.php');
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>交易管理平台</title>
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
    <div class="contaner-fluid sticky-top" style="background-color:#02A676;">
        <div class="container">
            <!--NAV start-->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-gear" viewBox="0 0 16 16">
                            <path
                                d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                            <path
                                d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                        </svg></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    客戶管理
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./m_view_1.php">客戶資料</a>
                                    </li><a class="dropdown-item" href="./m_edit.php">未耗記錄</a>
                                    <li><a class="dropdown-item" href="./m_del.php">消費紀錄</a></li>
                                    <li><a class="dropdown-item" href="./m_del.php">產品紀錄</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    廠商管理
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./m_add.php">廠商資料</a>
                                    </li><a class="dropdown-item" href="./m_edit.php">廠商網合分析</a>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    倉庫管理
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./m_add.php">產品管理</a>
                                    </li><a class="dropdown-item" href="./m_edit.php">入出庫管理</a>
                                    <li><a class="dropdown-item" href="./m_del.php">門店進貨台帳</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    門店管理
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./m_add.php">直營店管理</a>
                                    </li><a class="dropdown-item" href="./m_edit.php">加盟店管理</a>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    人事管理
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./m_add.php">人事資料</a>
                                    </li><a class="dropdown-item" href="./m_edit.php">人事分析查找</a>
                                    <li><a class="dropdown-item" href="./m_del.php">備用欄位</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    產品項目管理
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./m_add.php">基礎項目管理</a>
                                    </li><a class="dropdown-item" href="./m_edit.php">協作項目管理</a>
                                    <li><a class="dropdown-item" href="./m_del.php">體驗卡項管理</a></li>
                                    <li>
                                    <li><a class="dropdown-item" href="./m_del.php">贈送項目管理</a></li>
                                    <li></li>
                                    <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                交易管理
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./m_add.php">會員</a>
                                </li><a class="dropdown-item" href="./m_edit.php">非會員</a>
                                <li><a class="dropdown-item" href="./m_del.php">營收現金管理</a></li>
                                <li>
                                <li><a class="dropdown-item" href="./m_del.php">員購</a></li>

                                <li></li>
                                <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                財務管理
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="./m_add.php">營業收退款</a>
                                </li><a class="dropdown-item" href="./m_edit.php">非營業入出帳</a>
                                <li><a class="dropdown-item" href="./m_del.php">營收現金管理</a></li>
                                <li>
                                <li><a class="dropdown-item" href="./m_del.php">管銷收支管理</a></li>
                                <li><a class="dropdown-item" href="./m_del.php">薪資管理</a></li>
                                <li><a class="dropdown-item" href="./m_del.php">收開發票管理</a></li>
                                <li><a class="dropdown-item" href="./m_del.php">結算管理</a></li>
                                <li></li>
                                <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <!--NAV1 end-->

        </div>
        <!--NAV2 start-->

        <!--NAV2 End-->

    </div>
    <!--輪播廣告開始-->
    <div id="carouselExample" class="carousel slide">
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
    </div>
    <!--輪播廣告結束-->

    <!--card start-->
    <div class="container">
        <div class="RWDProduct015__head">
            <!-- <div class="RWDProduct015__head__imgbox"><img class="RWDProduct015__head__img"
                    src="https://www.panny.com.tw/archive/image/tw1RWDProduct015_45/tw1RWDProduct015_45_photo.webp"
                    alt="TOP熱銷商品"></div> -->
            <div class="RWDProduct015__head__h1">
                <h1>會員資料</h1>
            </div>
            <div class="RWDProduct015__head__h2">
                <h1></h1>
            </div>
        </div>
        <!-- <h1>！！！最新消息！！！</h1> -->
        <table class="table table-striped">
            <tr class="table-active">
                <th scope="row">NO</th>
                <th scope="row">員工編號</th>
                <th scope="row">姓名</th>
                <th scope="row">職位</th>
                <th scope="row">電話</th>
                <th scope="row">住址</th>
                <th scope="row">信箱</th>
                <th scope="row">編輯</th>
                <!-- <th scope="row">照片</th> -->
            </tr>
            <?php
            // for ($i=1;$i<=6; $i++){
            $sql_query="SELECT * FROM `custom` ORDER BY `cus_no`ASC;";


            $result=$db_link->query($sql_query);
            $sn=1;
            while($row_result=$result->fetch_assoc()){
             ?>
            <tr class="table-active">
                <td scope="row"><?php echo $sn; $sn++;?></td>
                <td scope="row"><?php echo $row_result['cus_no'];?></td>
                <td scope="row"><?php echo $row_result['cus_name'];?></td>
                <td scope="row"><?php echo $row_result['cus_title'];?></td>
                <td scope="row"><?php echo $row_result['cus_phone'];?></td>
                <td scope="row"><?php echo $row_result['cus_address'];?></td>
                <td scope="row"><?php echo $row_result['cus_email'];?></td>
                <!-- <img src="./img/icon_<?php 
                 
                    

                ?>.png" alt=""width="300" height="300">' -->
                <td scope="row">
                    <a class="btn btn-info" href="m_edit.php">編輯</a>
                    <a class="btn btn-danger" href="m_del.php">刪除</a>
                </td>
            </tr>
        <?php    
        }
            ?>


        <table class="table table-dark">
            <thead>
                ...
            </thead>
            <tbody>
                <tr class="table-active">
                    <th scope="row">3</th>
                    <td colspan="2" class="table-active">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2" class="table-active">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2" class="table-active">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
        <div class="table-responsive">
            <table class="table">
                ...
            </table>
        </div>

        <div class="table-responsive-sm">
            <table class="table">
                ...
            </table>
        </div>

        <div class="table-responsive-md">
            <table class="table">
                ...
            </table>
        </div>

        <div class="table-responsive-lg">
            <table class="table">
                ...
            </table>
        </div>

        <div class="table-responsive-xl">
            <table class="table">
                ...
            </table>
        </div>

        <div class="table-responsive-xxl">
            <table class="table">
                ...
            </table>
        </div>

    </div>
    <!--card end-->


    <script src="./Jscss/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>