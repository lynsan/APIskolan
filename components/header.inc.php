<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
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
            <button class="hamburger-icon" onclick="toggleMenu()">&#9776;</button>
            <div class="menu-container">
                <ul class="navlist">
                    <li class="navlist-item"><a class="<?php if($page=='vad'){echo 'active';} ?>" href="vad.php">Vad är ett API?</a></li>
                    <li class="navlist-item" onclick="toggleSubmenu(this)"><a href="#">Hur man använder ett API<i class="fas fa-angle-down drop-down"></i></a>
                        <ul class="submenu d-none">
                            <li><a href="">Öppna data</a></li>
                            <li><a href="">Öppna data</a></li>
                            <li><a href="">Öppna data</a></li>
                            <li><a href="">Öppna data</a></li>
                        </ul>
                    </li>        
                    <li class="navlist-item"><a href="#">Varför ska man använda ett API??</a></li>
                    <li class="navlist-item"><a href="#">Kodexempel</a></li>
                    <li class="navlist-item"><a href="#">Quiz</a></li>
                </ul>
            </div>
        </div>
        <div class="logo-container" onclick="hide_menu()">
            <a class="logo" href="index.php">APIskolan</a>
        </div>
    </header>