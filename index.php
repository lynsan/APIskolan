<?php require('components/header.inc.php'); ?>

<div class="wrapper">
    <nav>
        <ul class="navlist d-none">
            <li class="navlist-item" onclick="toggleSubmenu(this)"><a href="#">Vad är ett API?<i class="fas fa-angle-down drop-down"></i></a>
                <div class="submenu d-none">
                    <a href="">Öppna data</a>
                    <a href="">Olika typer av API</a>
                    <a href="">Terminologi</a>
                </div>
            </li>        
            <li class="navlist-item"><a href="#">Hur man använder ett API?</a></li>
            <li class="navlist-item"><a href="#">Varför ska man använda ett API??</a></li>
            <li class="navlist-item"><a href="#">Kodexempel</a></li>
            <li class="navlist-item"><a href="#">Quiz</a></li>
        </ul>
    </nav>
    
    <div class="main-content">
        <h1>Välkommen till APIskolan!</h1>
        <p>Har du hört talas om API men vet inte riktigt vad det är för något? Eller du vill kanske lära en kompis hur API fungerar? I den här webbplatsen kan du hitta de grundläggande information du behöver för att lära om API.</p>
        <button type="button" class="btn btn-primary">Kom igång!</button>
    </div>
</div>
<?php require('components/footer.inc.php'); ?>