<?php require ('./conn.php');
$my_search='';
if(isset($_GET['my_search'])&& isset($_GET['my_search']) !=''){
    $my_search = $_GET['my_search'];
}

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

</style>

<body>

<!-- navbar-start -->
<?php include("./nav.php"); ?>
<!-- navbar-end -->
    <div class="container text-center mt-5">
        <h1 style="margin-top:100px;"> 會員-搜尋結果</h1>
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">姓名</th>
                    <th scope="col">電話</th>
                    <th scope="col">住址</th>
                    <th scope="col">編輯</th>
                </tr>
            </thead>
            <tbody>
                <?php

                // $my_search = $_GET['my_search'];
                // echo $my_search;

                // for ($i = 1; $i <= 6; $i++) {
                
                //設定查詢資料表
                // 資料撈取
                // SELECT * FROM `students` WHERE `cName` LIKE '%建%' OR `cAddr` LIKE '%建%';
                $sql_query = "SELECT * FROM `students` WHERE `cName` LIKE '%$my_search%' OR `cAddr` LIKE '%$my_search%'";
                // 資料集
                $result = $db_link->query($sql_query);
                // print_r($result);
                
                $sn = 1;
                // 當有資料的時候才繼續撈資料
                while ($row_result = $result->fetch_assoc()) {
                    //判斷性別加稱謂
                    if ($row_result['cSex'] == 'F') {
                        $sex = ' 小姐<img src="./img/ICON_F.png" width="30" height="30">';
                    } else {
                        $sex = ' 先生<img src="./img/ICON_M.png" width="30" height="30">';
                    }

                    ?>
                    <tr>
                        <td>
                            <?php echo $sn;
                            $sn++; ?>
                        </td>
                        <td>
                            <?php echo $row_result['cName'] . $sex; ?>
                        </td>
                        <td>
                            <?php echo $row_result['cPhone']; ?>
                        </td>
                        <td>
                            <?php echo $row_result['cAddr']; ?>
                        </td>
                        <td scope="row">
                    <a class="btn btn-info" href="m_edit.php?cID=<?php echo $row_result['cID'];?>">編輯</a>
                    <a class="btn btn-danger" href="m_del.php?cID=<?php echo $row_result['cID'];?>">刪除</a>
                </td>
                    </tr>
                    <?php
                }
                ?>


            </tbody>
        </table>
</body>

</html>