<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for dragging -->
    <style>
        .sortable {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            padding: 0;
        }
        .sortable li {
            width: calc(25% - 20px); /* Adjust as needed */
            margin: 10px;
            cursor: move;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="RWDProduct015__head">
        <div class="RWDProduct015__head__h1"><h1>TOP熱銷商品</h1></div>
        <div class="RWDProduct015__head__h2"><h1>超夯嚴選好物</h1></div>
    </div>
    <hr style="width:80%; margin-left:auto;">

    <ul class="sortable">
        <?php
        for ($i = 4; $i <= 15; $i++) {
            ?>
            <li>
                <div class="card">
                    <div class="d-flex justify-content-center" style="height:200px;">
                        <img src="./img/<?php echo $i; ?>.webp" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">[我是產品名]</h5>
                        <p class="card-text">S【買大送小】亮白煥顏組 【青春露＋精華＋晚霜＋眼霜】</p>

                        <div class="select_box p_select">
                            <span class="arrow ii-arrow_b3"></span>
                            <select class="qty" name="quantity">
                                <?php
                                for ($j = 1; $j <= 10; $j++) {
                                    echo "<option value='$j'>$j</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <a href="#" class="btn btn-primary">加入購物車</a>
                    </div>
                </div>
            </li>
            <?php
        }
        ?>
    </ul>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- jQuery UI for sorting -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Custom JavaScript for sorting -->
<script>
    $(document).ready(function () {
        $(".sortable").sortable();
    });
</script>

</body>
</html>
