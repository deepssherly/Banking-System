<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPARKS BANK</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .btn {
            background-color: #00b0ff;
            font-weight: bold;
        }

        .home-body {
            height: 100%;
            width: 100%;
            background: url('images/banner.jpg')no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        nav {
            position: fixed;
        }

        .home-body .section {
            padding-top: 36vh;
            margin-left: 6vw;
        }

        .home-body .section h4,
        .home-body .section h5 {
            font-size: 45px;
            font-weight: bold;
        }

        .right li a {
            font-weight: 400;
        }
    </style>

</head>

<body>
    <div class="body blue lighten-4 " style="min-height:95%">
        <header id="header">
            <nav class="light-blue darken-1">
                <div>
                    <div class="nav-wrapper">
                        <img src="images/logo1.png" width="90px" height="70px">
                        <a href="index.php" class="brand-logo" style="font-weight:bold;">SPARKS BANK</a>
                        <ul class="right">
                            <li>
                                <a href="index.php" style="font-weight:bold;">HOME</a>
                            </li>
                            <li>
                                <a href="create.php" style="font-weight:bold;">CREATE USER</a>
                            </li>
                            <li>
                                <a href="transaction.php" style="font-weight:bold;">CUSTOMERS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="home-body light-blue-text text-lighten-5">
                <div class="section left">
                    <div class="center">
                        <h4>The Bank you can trust!!</h4>
                    </div>
                    <h5>Save your earnings, Save for your future</h5>
                    <br>
                    <div class="container center"><a href="getstarted.php" class="btn">GET STARTED</a></div>

                </div>
            </div>

        </header>
        <?php include('reusables/footer.php') ?>