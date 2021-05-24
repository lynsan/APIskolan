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
    <script type="text/javascript" src="styles/quiz.js"></script>
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
                    <li class="navlist-item"><a class="<?php if($page=='open-data'){echo 'active';} ?>" href="open-data.php">1. Öppna data</a></li>
                    <li class="navlist-item"><a class="<?php if($page=='what-is-apis'){echo 'active';} ?>" href="what-is-apis.php">2. Vad är ett API?</a></li>
                    <li class="navlist-item"><a class="<?php if($page=='why-use-apis'){echo 'active';} ?>" href="why-use-apis.php">3. Varför vill man använda ett API?</a></li>
                    
                    <li class="navlist-item"><a class="<?php if($page=='postman-guide'){echo 'active';} ?>" href="postman-guide.php">4. API i Postman</a></li>
                    <li class="navlist-item"><a class="<?php if($page=='code-examples'){echo 'active';} ?>" href="code-examples.php">5. Kodexempel</a></li>

                    <li class="navlist-item"><a class="<?php if($page=='terminology'){echo 'active';} ?>" href="terminology.php">6. Terminologi</a></li>
                    <li class="navlist-item"><a class="<?php if($page=='test-your-knowledge'){echo 'active';} ?>" href="test-your-knowledge.php">7. Testa dina kunskaper</a></li>                           
                </ul>
            </div>
        </div>
        <div class="logo-container" onclick="hide_menu()">
            <a class="logo" href="index.php">
                <img class="logga" src="images/logo_2.svg" alt="">
            </a>

        </div>
    </header>