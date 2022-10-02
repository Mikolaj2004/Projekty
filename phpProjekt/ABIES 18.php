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
                <img src="IMG/JACHTY/ABIES 18.png" alt="jacht">
            </section>
            <section class="containerTXT">
                <h1>Dane techniczne ABIES 18:</h1>
                <ul>
                    <li>Długość całkowita: 6,50m</li><br>
                    <li>Szerokość: 2,40m</li><br>
                    <li>Zanurzenie: 0,30m</li><br>
                    <li>Wysokość: 2,30m</li><br>
                    <li>Balast: 150kg</li><br>
                    <li>Liczba koi: 2</li><br>
                    <li>Wysokość w kabinach: 1,70m</li><br>
                    <li>Silnik: Yamaha 60kM</li>
                </ul>
            </section>
            <section class="containerTechniczne">
                <h1>Wyposażenie:</h1>
                <ul>
                    <li>Silnik benzynowy 60kM</li>
                    <li>Reflektor ledowy</li>
                    <li>Kotwica 15kg</li>
                    <li>Kamizelki ratunkowe 2 szt.</li>
                    <li>Zaopatrzenie przeciwpożarowe</li>
                    <li>Wskaźnik poziomu paliwa</li>
                    <li>Duży pokład rufowy</li>
                    <li>Wymieniona śruba</li>
                    <li>Zamykany kokpit</li>
                    <li>Bosak</li>
                    <li>Wiosło</li>
                    <li>Odbijacze burtowe 6szt.</li>
                    <li>Pojemny kingston</li>
                    <li>Nowe kosze na odbijacze</li>
                    <li>Instalacja 230V</li>
                </ul>
            </section>
            <section class="containerCennik">
                <h1>Cennik:</h1>
                <ul>
                    <li>Cennik czarteru:</li><br/>
                    <li>od 31.03 do 29.04 460zł za dobę</li><br/>
                    <li>od 30.04 do 30.05 520zł za dobę</li><br/>
                    <li>od 31.05 do 31.08 600zł za dobę</li><br/>
                    <li>po 31.08 440zł za dobę</li>
                </ul>
            </section>
        </section>
        <form action="includes/flota.inc.php" method="post">
            <button class="cofaj" type="submit" name="rabies18">Zarezerwuj</button>
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