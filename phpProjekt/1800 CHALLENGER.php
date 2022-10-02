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
                <img src="IMG/JACHTY/1800 CHALLENGER.png" alt="jacht">
            </section>
            <section class="containerTXT">
                <h1>Dane techniczne 1800 CHALLENGER:</h1>
                <ul>
                    <li>Długość całkowita: 10,5m</li><br>
                    <li>Szerokość: 3,80m</li><br>
                    <li>Zanurzenie: 0,60m</li><br>
                    <li>Wysokość: 2,95m</li><br>
                    <li>Balast: 350kg</li><br>
                    <li>Liczba koi: 7+1</li><br>
                    <li>Wysokość w kabinach: 1,75m</li><br>
                    <li>Silnik: Yamaha 180kM</li>
                </ul>
            </section>
            <section class="containerTechniczne">
                <h1>Wyposażenie:</h1>
                <ul>
                    <li>Silnik wysokoprężny 180kM</li>
                    <li>Ster strumienowy(dziób i rufa)</li>
                    <li>Kotwica 30kg</li>
                    <li>Elektryczna winda kotwicy</li>
                    <li>Kamizelki ratunkowe 7+1 szt.</li>
                    <li>Pełne wyposażenie kambuza na 8 osób</li>
                    <li>Zaopatrzenie przeciwpożarowe</li>
                    <li>Wskaźnik poziomu paliwa</li>
                    <li>Radio</li>
                    <li>Wycieraczki przedniej szyby</li>
                    <li>Bosak</li>
                    <li>Wiosło</li>
                    <li>Odbijacze burtowe 12szt.</li>
                    <li>Lodówka</li>
                    <li>Elektryczny sygnał dźwiękowy</li>
                    <li>Instalacja 230V</li>
                </ul>
            </section>
            <section class="containerCennik">
                <h1>Cennik:</h1>
                <ul>
                    <li>Cennik czarteru:</li><br/>
                    <li>od 31.03 do 29.04 750zł za dobę</li><br/>
                    <li>od 30.04 do 30.05 820zł za dobę</li><br/>
                    <li>od 31.05 do 31.08 900zł za dobę</li><br/>
                    <li>po 31.08 700zł za dobę</li>
                </ul>
            </section>
        </section>
        <form action="includes/flota.inc.php" method="post">
            <button class="cofaj" type="submit" name="rchallenger">Zarezerwuj</button>
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