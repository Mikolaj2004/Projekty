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
                <img src="IMG/JACHTY/39 I POL.png" alt="jacht">
            </section>
            <section class="containerTXT">
                <h1>Dane techniczne 39 I PÓŁ:</h1>
                <ul>
                    <li>Długość całkowita: 8,00m</li><br>
                    <li>Szerokość: 3,20m</li><br>
                    <li>Zanurzenie: 0,15m</li><br>
                    <li>Wysokość: 13,00m</li><br>
                    <li>Balast: Miecz 2,00m</li><br>
                    <li>Liczba koi: 7+1</li><br>
                    <li>Wysokość w kabinach: 1,8m</li><br>
                    <li>Powierzchnia żagla: 39,5m2</li><br>
                    <li>Silnik: Yamaha 15kM</li>
                </ul>
            </section>
            <section class="containerTechniczne">
                <h1>Wyposażenie:</h1>
                <ul>
                    <li>Silnik benzynowy 15kM</li>
                    <li>Kotwica 15kg</li>
                    <li>Kotwica pomocnicza 15kg</li>
                    <li>Nowy rumpel</li>
                    <li>Kamizelki ratunkowe 7+1 szt.</li>
                    <li>Pełne wyposażenie kambuza na 8 osób</li>
                    <li>Zaopatrzenie przeciwpożarowe</li>
                    <li>Nowy grot</li>
                    <li>Nowe fok</li>
                    <li>Nowy ster</li>
                    <li>GPS</li>
                    <li>Radio</li>
                    <li>Nowy sztormreling</li>
                    <li>Bosak</li>
                    <li>Wiosło</li>
                    <li>Odbijacze burtowe 8szt.</li>
                    <li>Lodówka</li>
                    <li>Nowy kambuz</li>
                    <li>Instalacja 230V</li>
                </ul>
            </section>
            <section class="containerCennik">
                <h1>Cennik:</h1>
                <ul>
                    <li>Cennik czarteru:</li><br/>
                    <li>od 31.03 do 29.04 180zł za dobę</li><br/>
                    <li>od 30.04 do 30.05 210zł za dobę</li><br/>
                    <li>od 31.05 do 31.08 230zł za dobę</li><br/>
                    <li>po 31.08 160zł za dobę</li>
                </ul>
            </section>
        </section>
        <form action="includes/flota.inc.php" method="post">
            <button class="cofaj" type="submit" name="r39ipol">Zarezerwuj</button>
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