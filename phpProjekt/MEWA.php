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
                <img src="IMG/JACHTY/MEWA.png" alt="jacht">
            </section>
            <section class="containerTXT">
                <h1>Dane techniczne MEWA:</h1>
                <ul>
                    <li>Długość całkowita: 10,00m</li><br>
                    <li>Szerokość: 3,80m</li><br>
                    <li>Zanurzenie: 0,70m</li><br>
                    <li>Wysokość: 14,00m</li><br>
                    <li>Balast: Miecz 2,50m</li><br>
                    <li>Liczba koi: 8+1</li><br>
                    <li>Wysokość w kabinach: 2,00m</li><br>
                    <li>Powierzchnia żagla: 45,0m2</li><br>
                    <li>Silnik: Yamaha 20kM</li>
                </ul>
            </section>
            <section class="containerTechniczne">
                <h1>Wyposażenie:</h1>
                <ul>
                    <li>Silnik benzynowy 20kM</li>
                    <li>Nowa nadbudówka</li>
                    <li>Kotwica 30kg</li>
                    <li>Elektryczna winda kotwicy</li>
                    <li>Kamizelki ratunkowe 8+1 szt.</li>
                    <li>Pełne wyposażenie kambuza na 9 osób</li>
                    <li>Zaopatrzenie przeciwpożarowe</li>
                    <li>Przestronna mesa</li>
                    <li>Stolik kokpitowy</li>
                    <li>Nowy grot</li>
                    <li>Nowe materace pokładowe</li>
                    <li>Nowy ster</li>
                    <li>GPS</li>
                    <li>Radio</li>
                    <li>Nowy lazyjack</li>
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
                    <li>od 31.03 do 29.04 230zł za dobę</li><br/>
                    <li>od 30.04 do 30.05 250zł za dobę</li><br/>
                    <li>od 31.05 do 31.08 310zł za dobę</li><br/>
                    <li>po 31.08 220zł za dobę</li>
                </ul>
            </section>
        </section>
        <form action="includes/flota.inc.php" method="post">
            <button class="cofaj" type="submit" name="rmewa">Zarezerwuj</button>
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