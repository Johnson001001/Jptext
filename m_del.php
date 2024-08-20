<?php
// 匯入連線設定
require ('./conn.php');

if (isset($_GET['cID']) && $_GET['cID'] != '') {
    $cID = $_GET['cID'];
} else {
    // 轉回原本頁面
    header("location:m_view.php");
}

// echo $id;

$sql_query = "SELECT * FROM `students` WHERE `cID`=  $cID";
$result = $db_link->query($sql_query);
$row_result = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./jscss/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link href="./jscss/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .tablewrap {
        white-space: nowrap;
    }

    .col-auto {
        mb-2;
    }
</style>

<body>

    <!-- navbar-start -->
    <?php include ("./nav.php"); ?>
    <!-- navbar-end -->
    <div class="container text-center mt-5">
        <h1 style="margin-top:100px;"> 會員資料-刪除</h1>
        <hr>

        <form action="m_del_detail.php" method="post">
            <div class="row mb-3 align-items-center justify-content-center">
                <div class="col-1">
                    <label for="name" class="col-form-label">姓名:</label>
                </div>
                <div class="col-2 ">
                    <?php echo $row_result['cName']; ?>
                </div>
            </div>
            <div class="row mb-3 align-items-center justify-content-center">
                <div class="col-1">
                    <label for="sex" class="col-form-label">性別:</label>

                </div>
                <div class="col-2">
                    <?php echo $row_result['cSex'] == 'M' ? '男' : '女'; ?>
                </div>
            </div>

            <div class="row  mb-3 align-items-center justify-content-center ">
                <div class="col-1">
                    <label for="phone" class="col-form-label">電話:</label>
                </div>
                <div class="col-2">
                    <?php echo $row_result['cPhone']; ?>
                </div>
            </div>
            <div class="row  mb-3  align-items-center justify-content-center">
                <div class="col-1">
                    <label for="mail" class="col-form-label">mail:</label>
                </div>
                <div class="col-2">
                    <?php echo $row_result['cEmail']; ?>
                </div>
            </div>
            <div class="row   mb-3 align-items-center justify-content-center">
                <div class="col-1">
                    <label for="height" class="col-form-label">身高:</label>
                </div>
                <div class="col-2">
                    <?php echo $row_result['cHeight']; ?>
                </div>
            </div>
            <div class="row   mb-3 align-items-center justify-content-center">
                <div class="col-1">
                    <label for="weight" class="col-form-label">體重:</label>
                </div>
                <div class="col-2">
                    <?php echo $row_result['cWeight']; ?>
                </div>
            </div>
            <div class="row  mb-3 align-items-center justify-content-center">
                <div class="col-1">
                    <label for="birth" class="col-form-label">生日:</label>
                </div>
                <div class="col-2">
                    <?php echo $row_result['cBirthday']; ?>
                </div>
            </div>
            <div class="row  mb-3 align-items-center justify-content-center">
                <div class="col-1">
                    <label for="addr" class="col-form-label">住址:</label>
                </div>
                <div class="col-2">
                    <?php echo $row_result['cAddr']; ?>
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-12">
                    <input type="hidden" name="cID" value="<?php echo $_GET['cID']; ?>">
                    <button type="submit" class="btn btn-danger">刪除</button>
                    <button type="button" class="btn btn-primary">上一頁</button>
                </div>
            </div>
        </form>

    </div>

</body>

</html>