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
                <img src="IMG/JACHTY/500 CAB.png" alt="jacht">
            </section>
            <section class="containerTXT">
                <h1>Dane techniczne 500 CAB:</h1>
                <ul>
                    <li>Długość całkowita: 8,00m</li><br>
                    <li>Szerokość: 3,20m</li><br>
                    <li>Zanurzenie: 0,40m</li><br>
                    <li>Wysokość: 2,60m</li><br>
                    <li>Balast: 250kg</li><br>
                    <li>Liczba koi: 6</li><br>
                    <li>Wysokość w kabinach: 1,80m</li><br>
                    <li>Silnik: Yamaha 120kM</li>
                </ul>
            </section>
            <section class="containerTechniczne">
                <h1>Wyposażenie:</h1>
                <ul>
                    <li>Silnik wysokoprężny 120kM</li>
                    <li>Kotwica 30kg</li>
                    <li>Elektryczna winda kotwicy</li>
                    <li>Kamizelki ratunkowe 6 szt.</li>
                    <li>Pełne wyposażenie kambuza na 6 osób</li>
                    <li>Zaopatrzenie przeciwpożarowe</li>
                    <li>Wskaźnik poziomu paliwa</li>
                    <li>Nowe lakier</li>
                    <li>Nowa mesa</li>
                    <li>GPS</li>
                    <li>Radio</li>
                    <li>Wycieraczki przedniej szyby</li>
                    <li>Bosak</li>
                    <li>Wiosło</li>
                    <li>Odbijacze burtowe 8szt.</li>
                    <li>Lodówka</li>
                    <li>Elektryczny sygnał dźwiękowy</li>
                    <li>Instalacja 230V</li>
                </ul>
            </section>
            <section class="containerCennik">
                <h1>Cennik:</h1>
                <ul>
                    <li>Cennik czarteru:</li><br/>
                    <li>od 31.03 do 29.04 650zł za dobę</li><br/>
                    <li>od 30.04 do 30.05 700zł za dobę</li><br/>
                    <li>od 31.05 do 31.08 750zł za dobę</li><br/>
                    <li>po 31.08 600zł za dobę</li>
                </ul>
            </section>
        </section>
        <form action="includes/flota.inc.php" method="post">
            <button class="cofaj" type="submit" name="r500cab">Zarezerwuj</button>
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