<?php
if (isset($_POST['submit'])) {
    include('config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    $sql = "insert into bank(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result = mysqli_query($conn, $sql);
    header('Location: index.php');
}
?>

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
        .row form label{
            font-size:20px;
        }
        .btn {
            background-color: #00b0ff;
        }

        .card-image>img {
            display: inline !important;
            max-height: 140px;
            max-width: 140px;
            text-align: center;
        }

        #create-card {
            top: 20px;
        }

        .st-img {
            max-height: 200px;
            max-width: 200px;
        }

        #to-center {
            margin: 0 !important;
            height: 80vh;
            width: 100vw !important;
            padding-top: 20vh;
        }

        .eq-size {
            padding: 30px 60px;
            height: 280px;
        }

        .create-body {
            height: 100%;
            width: 100%;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .card {
            background: linear-gradient(hsl(204, 100%, 80%, 0.3), hsl(204, 100%, 80%, 0.8)) !important;
        }
    </style>
</head>

<body>
    <div class="body blue lighten-4 create-body" style="min-height:98%; padding-bottom: 10px !important;">
        <header id="header">
            <nav class="light-blue darken-1">
                <div>
                    <div class="nav-wrapper">
                        <img src="images/logo1.png" width="90px" height="70px">
                        <a href="index.php" class="brand-logo" style="font-weight:bold;">SPARKS BANK</a>
                        <ul class="right" style="margin-right:20px">
                            <li><a href="index.php" style="font-weight:bold;">HOME</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="row ">
            <div class=" col s10 m8 l6 offset-s1 offset-m2 offset-l3 container">
                <div class="card" id="create-card">
                    <div class="card-image center">
                        <img class="center" src="images/createuser.png">
                    </div>
                    <div class="card-content">
                        <div class="card-title center black-text darken-3"><strong>CREATE USER</strong></div>
                        <div class="row">
                            <form action="create.php" method="POST" class="col s10 m8 l6 offset-s1 offset-m2 offset-l3">
                                <div class="input-field">
                                    <input type="text" placeholder="Name" id="name" name="name" autocomplete="new-pasword">
                                    <label for="name" class="active black-text"><strong>Name</strong></label>
                                </div>
                                <div class="input-field">
                                    <input type="email" placeholder="Email" id="mail" name="email" autocomplete="new-pasword">
                                    <label for="mail" class="active black-text"><strong>Email</strong></label>
                                </div>
                                <div class="input-field">
                                    <input type="text" placeholder="Balance" id="bal" name="balance" autocomplete="new-pasword">
                                    <label for="bal" class="active black-text"><strong>Balance</strong></label>
                                </div>
                                <div class="center">
                                    <input type="submit" value="submit" class="btn " name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php include('reusables/footer.php') ?>