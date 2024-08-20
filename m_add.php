<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>新增會員</title>
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

<div>
    <!-- navbar-start -->
    <?php include ("./nav.php"); ?>
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

    <!--輸入資料開始-->

    <div class="container text-center mt-5">
        <h1 style="margin-top:50px;">新增會員資料</h1>
        <hr>


        <div style="width:500px;" class="mx-auto; text-center mt-3">
            <form  action="./m_add_detail.php" method="post">

                <table class="container text-center mt-3 align-items-center justify-content-center">
                    <tr>
                        <td width="120"><label for="cName" class="form-label">姓  名</label>

                        </td>
                        <td><input type="text" class="form-control" id="cName" name="cName" placeholder=""></td>
                    </tr>
                    <tr>
                        <td width="120"><label for="cSex" class="form-label">性 別</label></td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cSex" id="inlineRadio1" value="M" checked>
                                <label class="form-check-label" for="inlineRadio1">男</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cSex" id="inlineRadio2" value="F">
                                <label class="form-check-label" for="inlineRadio2">女</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="cPhone" class="form-label">電 話</label></td>
                        <td>
                            <input type="tel" class="form-control" name="cPhone" id="cPhone" placeholder="">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="cEmail" class="form-label">電子信箱</label></td>
                        <td><input type="email" class="form-control" name="cEmail" id="cEmail" placeholder=""></td>
                    </tr>
                    <tr>
                        <td><label for="cBirthday" class="form-label">生日</label></td>
                        <td><input type="date" class="form-control" name="cBirthday" id="cBirthday" placeholder=""></td>
                    </tr>
                    <tr>
                        <td width="120"><label for="cHeight" class="form-label">身高</label></td>
                        <td><input tyep="text" class="form-control" id="cHeight" name="cHeight"></td>
                    </tr>
                    <tr>
                        <td width="120"><label for="cWeignt" class="form-label">體重</label></td>
                        <td><input tyep="text" class="form-control" id="cWeight" name="cWeight"></td>
                    </tr>
                    <tr>
                        <td width="120"><label for="cAddr" class="form-label">地址</label></td>
                        <td><input tyep="text" class="form-control" id="cAddr" name="cAddr"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" class="btn btn-info mb-3">新增會員</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <!--輸入資料結束-->
        <!--card start-->

        <!--card end-->


        <script src="./Jscss/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        </body>

</html>