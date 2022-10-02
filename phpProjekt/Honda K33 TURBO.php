<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        
        <link rel="stylesheet" href="CSS/jacht.css">

        <?php
        include_once('head.php');
        ?>

    </head>
<body>

    <header class="menu_bg">

    <?php
    include_once('header.php');
    ?>
        
    </header>
    <hr>
    <main>
        <section class="containerJacht">
            <section class="containerIMG">
                <img src="IMG/JACHTY/Honda K33 TURBO.png" alt="jacht">
            </section>
            <section class="containerTXT">
                <h1>Dane techniczne Honda K33 TURBO:</h1>
                <ul>
                    <li>Długość całkowita: 2,50m</li><br>
                    <li>Szerokość: 1,00m</li><br>
                    <li>Zanurzenie: 0,10m</li><br>
                    <li>Wysokość: 0,80m</li><br>
                    <li>Balast: 20kg</li><br>
                    <li>Silnik: Yamaha 340kM</li>
                </ul>
            </section>
            <section class="containerTechniczne">
                <h1>Wyposażenie:</h1>
                <ul>
                    <li>Silnik wysokoprężny 340kM</li>
                    <li>Nowa zrywka</li>
                    <li>Nowe siedzisko</li>
                    <li>Kamizelki ratunkowe 1 szt.</li>
                    <li>Maty antypoślizgowe</li>
                    <li>Wskaźnik poziomu paliwa</li>
                    <li>GPS</li>
                </ul>
            </section>
            <section class="containerCennik">
                <h1>Cennik:</h1>
                <ul>
                    <li>Cennik czarteru:</li><br/>
                    <li>od 31.03 do 29.04 80zł za godzinę</li><br/>
                    <li>od 30.04 do 30.05 100zł za godzinę</li><br/>
                    <li>od 31.05 do 31.08 120zł za godzinę</li><br/>
                    <li>po 31.08 70zł za godzinę</li>
                </ul>
            </section>
        </section>
        <form action="includes/flota.inc.php" method="post">
            <button class="cofaj" type="submit" name="rhondak33">Zarezerwuj</button>
        </form>
    </main>
    <footer>
        <?php
        include_once('footer.php');
        ?> 
    </footer>
</body>
<foot>
</foot>
</html>