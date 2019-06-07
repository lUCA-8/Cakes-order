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

if (!in_array($_POST["username"], ['Frankfurt', 'Bad Vilbel', 'Lessing', 'Alice']))


{

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
        <div class="col-md-8">
            <form name="main" method="post" action="order_submit.php">
                <h4>  Branch: <input type="text" name="username" value="<?php echo $_POST["username"]; ?>" readonly></h4>
                <p>
                    <input type="text" name="order_date" value="<?php echo date('Y-m-d'); ?>" readonly>
                </p>
                <div class="row">
                    <table class="table table-striped table-bordered" width="100%">
                        <tr>
                            <th colspan="2" width="30%">Cakes</th>
                            <th width="40%">Qty</th>
                        </tr>

                        <tr>
                            <td width="20%"><img src="/challange/images/obsst.jpg" width="120" height="70"></td>
                            <td width="60%">
                                <h5>Obsttörtchen</h5>
                                <p>
                                    Gemischte Obsttörtchen
                                </p>
                            </td>
                            <td width="20%"><input type="text" class="form-control" id="Obsttorte" name="Obsttorte"></td>
                        </tr>

                        <tr>
                            <td width="20%"><img src="/challange/images/shokaladenkuchen.jpg" width="120" height="70"></td>
                            <td width="60%">
                                <h5>Schokoladenkuchen</h5>
                                <p>
                                    Schokoladenkuchen
                                </p>
                            </td>
                            <td width="20%"><input type="text" class="form-control" id="Schokoladenkuchen" name="Schokoladenkuchen"></td>
                        </tr>

                        <tr>
                            <td width="20%"><img src="/challange/images/käse.jpeg" width="120" height="70"></td>
                            <td width="60%">
                                <h5>Käsekuchen</h5>
                                <p>
                                    Käsekuchen
                                </p>
                            </td>
                            <td width="20%"><input type="text" class="form-control" id="Käsekuchen" name="Käsekuchen"></td>
                        </tr>

                        <tr>
                            <td width="20%"><img src="/challange/images/himbeer.jpg" width="120" height="70"></td>
                            <td width="60%">
                                <h5>Himbeertörtchen</h5>
                                <p>
                                  Himbeertörtchen
                                </p>
                            </td>
                            <td width="20%"><input type="text" class="form-control" id="Himbeertörtchen" name="Himbeertörtchen"></td>
                        </tr>

                        <tr>
                            <td colspan="3"><button type="submit" class="btn btn-primary">Submit</button></td>
                        </tr>
                    </table>

                </div>
            </form>

        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5mdXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
