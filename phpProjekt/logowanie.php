<?php
session_start();
?>

<!DOCTYPE html>
    <head>

        <link rel="stylesheet" href="CSS/logowanie.css">

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
        
        <h1>Zaloguj się </h1>
        <hr>
        <form action="includes/login.inc.php" method="post">            <!-- Post method to get information & include login.inc   /   Pozyskiwanie informacji poprzez Post'a i wdrażanie działania login.inc  -->
            <section class="dane">
                
                    <input type = "text" name="uid" placeholder="Nick lub adres email">
                    <input type="password" name="pwd" placeholder = "Hasło">
                    <input type="submit" name="submit" value="Zaloguj">

                    </form>
            </section>
            <section class="inne">
                    <a href="rejestracja.php" class="a">Zarejestruj się</a>
                    &nbsp;
                    <a href="odzyskiwanie.php" class="a">Zapomniałeś hasła?</a>
                </section>
                
            
            <?php               //Error handlers
            include_once('includes/logowanieh.inc.php');
            ?>

        </main>

        <footer>
        <?php
        include_once('footer.php');
        ?> 
    </footer>
    </body>
    
</html>