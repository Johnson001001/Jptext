<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 按鈕示例</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
        <!-- navbar-start -->
<?php include("./nav.php"); ?>
<!-- navbar-end -->
    <div class="container mt-5">
        <!-- 使用網格系統來排列按鈕 -->
        <div class="row">
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-primary btn-lg btn-block">Primary</button>
            </div>
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-secondary btn-sm btn-block">Secondary</button>
            </div>
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-success">Success</button>
            </div>
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-danger">Danger</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-warning">Warning</button>
            </div>
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-info">Info</button>
            </div>
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-light">Light</button>
            </div>
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-dark">Dark</button>
            </div>
        </div>
    </div>
    
    <!-- 引入 Bootstrap 的 JavaScript 依賴 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
