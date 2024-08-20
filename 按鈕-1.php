<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自定義大按鈕示例</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- 引入自定義 CSS 樣式表 -->
</head>
<style>
    .btn-xl {
        padding: 1rem 2rem;
        /* 調整按鈕的內邊距 */
        font-size: 1.5rem;
        /* 調整按鈕的字體大小 */
        border-radius: 0.3rem;
        /* 調整按鈕的邊角半徑 */
    }
</style>

<body>
    <!-- navbar-start -->
    <?php include("./DEMO-nav.php"); ?>
    <!-- navbar-end -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-primary btn-xl btn-block">Primary</button>
            </div>
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-secondary btn-xl btn-block">Secondary</button>
            </div>
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-success btn-xl btn-block">Success</button>
            </div>
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-danger btn-xl btn-block">Danger</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-primary btn-xl btn-block">Primary</button>
            </div>
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-secondary btn-xl btn-block">Secondary</button>
            </div>
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-success btn-xl btn-block">Success</button>
            </div>
            <div class="col-md-3 mb-2">
                <button type="button" class="btn btn-danger btn-xl btn-block">Danger</button>
            </div>
        </div>
    </div>

    <!-- 引入 Bootstrap 的 JavaScript 依賴 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>