
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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Cakes order</h3>

            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h4>  Order Preview </h4>
                <div class="row">
                   <?php ob_start(); ?>
                    <table class="table table-striped table-bordered" width="100%">
                        <tr>
                            <th colspan="2" width="60%">Item</th>
                            <th width="40%">Qty</th>
                        </tr>
                        <tr>
                            <td width="20%"><img src="/challange/images/obsst.jpg" width="80" height="50"></td>
                            <td width="60%">
                                <h5>Obsttörtchen</h5>
                                <p>
                                  Gemischte Obsttörtchen
                                </p>
                            </td>
                            <td width="20%"><?php echo $_POST["Obsttorte"]; ?></td>
                        </tr>

                        <tr>
                            <td width="20%"><img src="/challange/images/shokaladenkuchen.jpg" width="80" height="50"></td>
                            <td width="60%">
                                <h5>Schokoladenkuchen</h5>
                                <p>
                                    Schokoladenkuchen
                                </p>
                            </td>
                            <td width="20%"><?php echo $_POST["Schokoladenkuchen"]; ?></td>
                        </tr>

                        <tr>
                            <td width="20%"><img src="/challange/images/käse.jpeg" width="80" height="50"></td>
                            <td width="60%">
                                <h5>Käsekuchen</h5>
                                <p>
                                    Käsekuchen
                                </p>
                            </td>
                            <td width="20%"><?php echo $_POST["Käsekuchen"]; ?></td>
                        </tr>

                        <tr>
                            <td width="20%"><img src="/challange/images/himbeer.jpg" width="80" height="50"></td>
                            <td width="60%">
                                <h5>Himbeertörtchen</h5>
                                <p>
                                    Himbeertörtchen
                                </p>
                            </td>
                            <td width="20%"><?php echo $_POST["Himbeertörtchen"]; ?></td>
                        </tr>
                    </table>
                    <?php file_put_contents('orders/'.$_POST["username"].'/'.$_POST["order_date"].'.html', ob_get_contents());  ?>
                </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5mdXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
