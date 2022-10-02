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
    <<main>
        <section class="containerJacht">
            <section class="containerIMG">
                <img src="IMG/JACHTY/LORD JIM.png" alt="jacht">
            </section>
            <section class="containerTXT">
                <h1>Dane techniczne LORD JIM:</h1>
                <ul>
                    <li>Długość całkowita: 5,00m</li><br>
                    <li>Szerokość: 2,00m</li><br>
                    <li>Zanurzenie: 0,10m</li><br>
                    <li>Wysokość: 1,80m</li><br>
                    <li>Balast: 100kg</li><br>
                    <li>Liczba koi: 0</li><br>
                    <li>Silnik: Yamaha 10kM</li>
                </ul>
            </section>
            <section class="containerTechniczne">
                <h1>Wyposażenie:</h1>
                <ul>
                    <li>Silnik benzynowy 10kM</li>
                    <li>Jacht dostępny bez patentu</li>
                    <li>Kotwica 15kg</li>
                    <li>Tent na stelażu</li>
                    <li>Kamizelki ratunkowe 4 szt.</li>
                    <li>Drabinka zejściowa</li>
                    <li>Zaopatrzenie przeciwpożarowe</li>
                    <li>Wskaźnik poziomu paliwa</li>
                    <li>Materac pokładowy</li>
                    <li>Nowy silnik</li>
                    <li>Radio</li>
                    <li>Bosak</li>
                    <li>Duży achterpik</li>
                    <li>Wiosło</li>
                    <li>Odbijacze burtowe 6szt.</li>
                    <li>Gniazdko 12V</li>
                </ul>
            </section>
            <section class="containerCennik">
                <h1>Cennik:</h1>
                <ul>
                    <li>Cennik czarteru:</li><br/>
                    <li>od 31.03 do 29.04 320zł za dobę</li><br/>
                    <li>od 30.04 do 30.05 360zł za dobę</li><br/>
                    <li>od 31.05 do 31.08 400zł za dobę</li><br/>
                    <li>po 31.08 300zł za dobę</li>
                </ul>
            </section>
        </section>
        <form action="includes/flota.inc.php" method="post">
            <button class="cofaj" type="submit" name="rlordjim">Zarezerwuj</button>
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