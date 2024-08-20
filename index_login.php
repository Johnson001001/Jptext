<?php
session_start();
// 引入連接資料庫的PHP檔案
require('./conn.php');



// 如果沒有按下送出按鈕，先不要取出資料不要比對
$check = '';
if (isset($_GET['email']) && isset($_GET['email']) != '' && isset($_GET['password']) && isset($_GET['password']) != '') {
    //資料庫連線
    $email = $_GET['email'];
    $sql_query = "SELECT * FROM `admin` WHERE `a_username` = '$email';";

    // print_r($result);
    // 資料集
    $result = $db_link->query($sql_query);

    
    
    
    
    // 有打mail跟密碼但是沒有查到任何資料
    if ($result->num_rows == 0) {
        $check = 'error';
    } else {
        $row_result = $result->fetch_assoc();
        if ($row_result['a_username'] == $_GET['email'] && $row_result['a_password'] == $_GET['password']) {
            // 比對成功，先建立$_SESSION['admin_name']
            $_SESSION['admin_name'] = $row_result['a_username'];
            // echo'帳號與密碼正確';
            // 轉址
            header("location:./DEMO_1.php");
        } else {
            // echo'帳號或密碼錯誤';
            $check = 'error';
        }
    }
} else {

}



//設定查詢資料表
// $sql_query = "SELECT * FROM `admin`";
// $result = $db_link->query($sql_query);
// print_r($result);
// $row_result = $result->fetch_assoc();
// $row_result = $result->fetch_array();
// $row_result = $result->fetch_row();
// print_r($row_result);
// echo '管理者的名稱是'.$row_result['a_username'];
// echo'</br>';
// echo '管理者的密碼是'.$row_result['a_password'];
// echo'</br>';
// 1.有沒有$_GET變數?沒有不做任何動作
// if(isset($_GET['email'])){
// echo'你輸入的帳號'.$_GET['email'];
// }
// echo'</br>';
// if(isset($_GET['password'])){
// echo'你輸入的密碼'.$_GET['password'];
// }
// echo'</br>';
// 2.有$_GET變數 >> 是否與帳號密碼相同>> 相同前往index_main.php登入成功

//注意這裡未來應該放入資料庫連線

//判斷$row_result['a_username'] 是否等於 $_GET['email']



?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    #login {
      width: 350px;
      border: solid 1px rgba(0, 0, 0, 0.6);
      border-radius: 10px;
      backdrop-filter: blur(5px);
      
    }

    #main {
      height: 100vh;
      background-image: url(./img/bg-image.jpg);
      background-position: center center;
      background-size: cover;
    }
    

    #body {
      background-image: url(./img/bg-image.jpg);
      background-position: center center;
      background-size: cover;
    }
  </style>
</head>

<body class="background-image: url('img/bg-image.jpg');
      background-position: center center;
      background-size: cover">
  <div id="main" class="d-flex justify-content-center align-items-center">
    <div>
      <h1>JP管理系統</h1>
      <div id="login" class="p-3">
        <?php
        if($check=='error'){
          // echo'錯誤';
          echo '<h3 class="m-3 text-center text-dager">帳號或密碼錯誤</h3>';
        
        }else{
          // echo '成功';
          echo '<h3 class="m-2 text-center">請輸入帳號密碼</h3>';
        }
        ?>


        <form action="./index_login.php" method="get">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">帳號</label>
            <input name="email"type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div> -->
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">密碼</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->
          <button type="submit" class="btn btn-primary mt-3">確認</button>
        </form>
        
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

  </script>
</body>

</html>