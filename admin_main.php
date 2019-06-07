<!doctype html><html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>WeWe order</title>
</head>
<body>
<?php

if ($_POST["username"] != 'admin') {
    echo "<h1>Sorry, you do not have access!</h1>";
    exit;
}

?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Cakes order</h3>

            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3>Frankfurt</h3>
            <?php
                $file1 = "orders/Frankfurt/".date('Y-m-d').".html";
                $myfile = fopen($file1, "r");
                echo fread($myfile,filesize($file1));
            ?>
        </div>
        <div class="col-md-6">
            <h3>Bad Vilbel</h3>
            <?php
                $file2 = "orders/Bad Vilbel/".date('Y-m-d').".html";
                $myfile = fopen($file2, "r");
                echo fread($myfile,filesize($file1));
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3>Lessing</h3>
            <?php
                $file3 = "orders/Lessing/".date('Y-m-d').".html";
                $myfile = fopen($file3, "r");
                echo fread($myfile,filesize($file1));
            ?>
        </div>
        <div class="col-md-6">
            <h3>Alice</h3>
            <?php
                $file4 = "orders/Alice/".date('Y-m-d').".html";
                $myfile = fopen($file4, "r");
                echo fread($myfile,filesize($file1));
            ?>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5mdXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
