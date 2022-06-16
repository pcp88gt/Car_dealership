<?php { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <title>compair vehicles</title>
        <style>
            .banner-txt {
                position: absolute;
                bottom: 480px;
                left: 30px;
                color: white;
            }
        </style>
    </head>

    <body>
        <div class="container-fluid">
            <!-- banner -->
            <div class="row">
                <div class="col-md-12">
                    <img src="<?= base_url(); ?>assets/images/compimg.jpg" alt="compare image" width="100%" height="180px">
                    <h1 class="banner-txt">Compare Spec</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-2">
                    <div class="card text-center">
                        <img src="<?= base_url(); ?>assets/images/cardesig.png" class="card-img-top" alt="car select">
                        <div class="card-body">
                            <!--dropdown list 1-->
                            <div class="dropdown-center">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SELECT TYPE
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <!--dropdown list 2-->
                            <div class="dropdown-center">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SELECT BRAND
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <!--dropdown list 3-->
                            <div class="dropdown-center">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SELECT MODEL
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-2">&nbsp;</div>
                <div class="col-md-2">
                    <div class="card text-center">
                        <img src="<?= base_url(); ?>assets/images/cardesig.png" class="card-img-top" alt="car select">
                        <div class="card-body">
                            <!--dropdown list 1-->
                            <div class="dropdown-center">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SELECT TYPE
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <!--dropdown list 2-->
                            <div class="dropdown-center">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SELECT BRAND
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                            <!--dropdown list 3-->
                            <div class="dropdown-center">
                                <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    SELECT MODEL
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Option 1</a></li>
                                    <li><a class="dropdown-item" href="#">Option 2</a></li>
                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                    <li><a class="dropdown-item" href="#">Option 4</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">&nbsp;</div>
            </div>
            <div class="row">
                <div class="col-md-4">&nbsp;</div>
                <div class="col-md-4" style="text-align:center;">
                    <button type="button" class="btn btn-danger btn-lg">COMPARE</button>
                </div>
                <div class="col-md-4">&nbsp;</div>
            </div>
        </div>
    </body>

    </html>
<?php } ?>