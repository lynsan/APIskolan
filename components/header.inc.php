<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <script type="text/javascript" src="styles/main.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APIskolan</title>
</head>

<body>
    <header>
        <div class="menu">
            <button class="hamburger hamburger-icon" onclick="toggleMenu()">&#9776;</button>
            <button class="hamburger" onclick="toggleMenu()"><img class="close-icon" src="images/close-icon.svg" alt="close menu"></button>
            <div class="menu-container">
                <ul class="navlist">
                    <li class="navlist-item"><a class="<?php if($page=='oppna-data'){echo 'active';} ?>" href="oppna-data.php">Öppna data</a></li>
                    <li class="navlist-item"><a class="<?php if($page=='vad'){echo 'active';} ?>" href="vad.php">Vad är ett API?</a></li>
                    <li class="navlist-item" onclick="toggleSubmenu(this)"><a href="#">Hur använder man ett API<i class="fas fa-angle-down drop-down"></i></a>
                        <ul class="submenu d-none">
                            <li><a class="<?php if($page=='postman-guide'){echo 'active';} ?>" href="postman-guide.php">API i Postman</a></li>
                            <li><a href="">Kodexempel</a></li>
                        </ul>
                    </li>
                    <li class="navlist-item"><a class="<?php if($page=='varfor'){echo 'active';} ?>" href="varfor.php">Varför vill man använda ett API?</a></li>
                    <li class="navlist-item"><a class="<?php if($page=='quiz'){echo 'active';} ?>" href="test.quiz.php">Quiz</a></li>                           
                </ul>
            </div>
        </div>
        <div class="logo-container" onclick="hide_menu()">
            <a class="logo" href="index.php">
                <img src="images/logo.svg" alt="">
            </a>

        </div>
    </header>