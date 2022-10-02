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
                <img src="IMG/JACHTY/1900 BOWIRIDER.png" alt="jacht">
            </section>
            <section class="containerTXT">
                <h1>Dane techniczne 1900 BOWRIDER:</h1>
                <ul>
                    <li>Długość całkowita: 11,00m</li><br>
                    <li>Szerokość: 4,00m</li><br>
                    <li>Zanurzenie: 0,70m</li><br>
                    <li>Wysokość: 3,20m</li><br>
                    <li>Balast: 420kg</li><br>
                    <li>Liczba koi: 7+1</li><br>
                    <li>Wysokość w kabinach: 2,00m</li><br>
                    <li>Silnik: Yamaha 220kM</li>
                </ul>
            </section>
            <section class="containerTechniczne">
                <h1>Wyposażenie:</h1>
                <ul>
                    <li>Silnik wysokoprężny 220kM</li>
                    <li>Ster strumienowy(dziób i rufa)</li>
                    <li>Kotwica 30kg</li>
                    <li>Elektryczna winda kotwicy</li>
                    <li>Kamizelki ratunkowe 7+1 szt.</li>
                    <li>Pełne wyposażenie kambuza na 8 osób</li>
                    <li>Zaopatrzenie przeciwpożarowe</li>
                    <li>Wskaźnik poziomu paliwa</li>
                    <li>Nowe materace pokładowe</li>
                    <li>Nowy ster</li>
                    <li>GPS</li>
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
                    <li>od 31.03 do 29.04 920zł za dobę</li><br/>
                    <li>od 30.04 do 30.05 980zł za dobę</li><br/>
                    <li>od 31.05 do 31.08 1100zł za dobę</li><br/>
                    <li>po 31.08 890zł za dobę</li>
                </ul>
            </section>
        </section>
        <form action="includes/flota.inc.php" method="post">
            <button class="cofaj" type="submit" name="rbowrider">Zarezerwuj</button>
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