<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">

    <title>FAQ</title>
</head>

<body>
    <header class="<?= $home ? "fixed" : "" ?>">
        <div class="header">
            <div class="header-logo">
                <img src="./assets/img/ApylibBlanc.png" />
            </div>
            <div class="header-nav">
                <?php
                if (isset($_SESSION["user_name"])) {
                ?>
                    <a href="logout" class="btn btn-secondary">Se déconnecter</a>
                <?php
                } else {
                ?>
                    <a href="create-account" class="btn btn-secondary">S'inscrire</a>
                    <a href="login" class="btn btn-primary">Se connecter</a>
                <?php
                }
                ?>
            </div>
        </div>
    </header>