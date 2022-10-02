<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">

<head>

    <link rel="stylesheet" href="CSS/main.css">

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
        <div class="image">
            <img src="https://blog.clickandboat.com/pl/wp-content/uploads/2018/10/Jacht-na-jeziorze.jpg"
                alt="fotografia Jachtu na pełnych żaglach">
            <p>
                Witaj na stronie jachciarze.pl<br>
                Najtańsze jachty na pomorzu!<br>
                Oferujemy do Twojej dyspozycji 9 jachtów w idealnym stanie technicznym!<br>
                Pomagamy klientom zaplanować wymarzone żeglarskie wakacje, dzięki którym ich urlop będzie bezpieczny i udany!<br>
                Jeśli masz doświadczenie w żeglowaniu i chcesz wynająć jacht wybierz i zarezerwuj go, korzystając z naszej floty!<br>
                Wszystko realizujemy elektronicznie!<br>
            </p>
        </div>
        <hr>
        <section class="add">
            <img src="IMG/reklamy/reklama3.png">
        </section>
        <div class="propositions">
            <h1> Propozycje Jachtów:</h1>
            <div class="content">

                <div class="grid-item">
                    
                    <div class="element1">
                        <img src="IMG/JACHTY/240 SUN SPORT.png">
                    </div>
                    <div class="element2">
                        Nazwa: 240 SUN SPORT<br>
                        Maksymalna ilość osób: 4+1<br>
                        Silnik: 140 kM<br>
                        Długość: 7,20m<br>
                        Szerokość: 3,20m<br>
                    </div>
                    <div class="element3">
                        <button class="bt" onclick="location.href='240 SUN SPORT.php'">Zarezerwuj</button>
                        
                    </div>
                    <div class="element4">
                        Cena: 600 zł za dobę<br>
                    </div>
                
                </div>
                <div class="grid-item">
                    <div class="element1">
                        <img src="IMG/JACHTY/1900 BOWRIDER.png">
                    </div>
                    <div class="element2">
                        Nazwa: 1900 BOWRIDER<br>
                        Maksymalna ilość osób: 7+1<br>
                        Silnik: 220 kM<br>
                        Długość: 11,00m<br>
                        Szerokość: 4,00m<br>
                    </div>
                    <div class="element3">
                        <button class="bt" onclick="location.href='1900 BOWRIDER.php'">Zarezerwuj</button>
                        
                    </div>
                    <div class="element4">
                        Cena: 890 zł za dobę<br>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="element1">
                        <img src="IMG/JACHTY/MEWA.png">
                    </div>
                    <div class="element2">
                        Nazwa: MEWA<br>
                        Maksymalna ilość osób: 8+1<br>
                        Silnik: 20 kM<br>
                        Długość: 10,00m<br>
                        Szerokość: 3,80m<br>
                    </div>
                    <div class="element3">
                        <button class="bt" onclick="location.href='MEWA.php'">Zarezerwuj</button>
                        
                    </div>
                    <div class="element4">
                        Cena: 220 zł za dobę<br>
                    </div>
                </div>


            </div>
        </div>

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