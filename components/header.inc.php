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
            <button class="hamburger-icon" onclick="toggleMenu()">&#9776;</button>
            <div class="menu-container">
                <ul class="navlist">
                    <li class="navlist-item"><a class="<?php if($page=='oppna-data'){echo 'active';} ?>" href="oppna-data.php">Öppna data</a></li>
                    <li class="navlist-item"><a class="<?php if($page=='vad'){echo 'active';} ?>" href="vad.php">Vad är ett API?</a></li>
                    <li class="navlist-item"><a class="<?php if($page=='postman-guide'){echo 'active';} ?>" href="postman-guide.php">Hur använder man ett API?</a></li>
                    <li class="navlist-item"><a class="<?php if($page=='varfor'){echo 'active';} ?>" href="varfor.php">Varför vill man använda ett API?</a></li>
                    <li class="navlist-item"><a class="<?php if($page=='quiz'){echo 'active';} ?>" href="test.quiz.php">Quiz</a></li>
                    <!-- <li class="navlist-item" onclick="toggleSubmenu(this)"><a href="#">Hur man använder ett API<i class="fas fa-angle-down drop-down"></i></a>
                        <ul class="submenu d-none">
                            <li><a href="">Öppna data</a></li>
                            <li><a href="">Öppna data</a></li>
                            <li><a href="">Öppna data</a></li>
                            <li><a href="">Öppna data</a></li>
                        </ul>
                    </li>    -->     
                </ul>
            </div>
        </div>
        <div class="logo-container" onclick="hide_menu()">
            <a class="logo" href="index.php">
            <?xml version="1.0" encoding="UTF-8" standalone="no"?><!-- Generator: Gravit.io --><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate" viewBox="0 0 400 150" width="150pt" height="50pt"><defs><clipPath id="_clipPath_45aeEg2OIR3Idpd3DCc7R6SSJbtx7caC"><rect width="400" height="150"/></clipPath></defs><g clip-path="url(#_clipPath_45aeEg2OIR3Idpd3DCc7R6SSJbtx7caC)"><g clip-path="url(#_clipPath_iWPbHGcrY7PdhLwt6TmfBS6MW3cbbMMf)"><text transform="matrix(1,0,0,1,38,94.146)" style="font-family:'Quicksand';font-weight:400;font-size:60px;font-style:normal;fill:#000000;stroke:none;">APISKOLAN</text></g><defs><clipPath id="_clipPath_iWPbHGcrY7PdhLwt6TmfBS6MW3cbbMMf"><rect x="0" y="0" width="325" height="75" transform="matrix(1,0,0,1,38,34.146)"/></clipPath></defs><path d="M 30 21.15 L 370 21.15 C 373.587 21.15 376.5 24.063 376.5 27.65 L 376.5 27.65 C 376.5 31.237 373.587 34.15 370 34.15 L 30 34.15 C 26.413 34.15 23.5 31.237 23.5 27.65 L 23.5 27.65 C 23.5 24.063 26.413 21.15 30 21.15 Z" style="stroke:none;fill:#ED6C05;stroke-miterlimit:10;"/><path d="M 30 115.85 L 370 115.85 C 373.587 115.85 376.5 118.763 376.5 122.35 L 376.5 122.35 C 376.5 125.937 373.587 128.85 370 128.85 L 30 128.85 C 26.413 128.85 23.5 125.937 23.5 122.35 L 23.5 122.35 C 23.5 118.763 26.413 115.85 30 115.85 Z" style="stroke:none;fill:#ED6C05;stroke-miterlimit:10;"/></g></svg>
            </a>

        </div>
    </header>