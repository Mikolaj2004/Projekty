<?php
session_start();
?>

<!DOCTYPE html>
    <head>
        
        <link rel="stylesheet" href="CSS/udana.css">

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
            <section class="reg">
                <section class="">
                    <img src="IMG/logo.png">
                    </section>
            <h1>INFORMACJA</h1>
            <p> 
            Rezerwacja wysłana poprawnie, za niedługo wyślemy odpowiedź na twój adres e-mail!  
            </p>
            </section>
        </main>

        <footer>
        <?php
        include_once('footer.php');
        ?> 
    </footer>
    </body>
    
</html>