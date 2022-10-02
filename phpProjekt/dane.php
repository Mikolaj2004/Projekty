<?php
session_start();
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';

if(!isset($_SESSION["useruid"])){
    header("location: logowanie.php?error=notLogged");
    exit();
}

?>

<!DOCTYPE html>
<head>
        
        <link rel="stylesheet" href="CSS/dane.css">

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
            <section class="konto">
                <section class="rezerwacje">
                    <div class="litera">
                    <?php
                        $login = $_SESSION["useruid"];
                        echo $login[0];
                    ?>
                    </div>
                    <p class="nick"><?php echo $login; ?></p>

                    <?php
                    include_once('includes/daneh.inc.php');                //error handlers
                    ?>

                    <button class="b_rezer" onclick="location.href='historia.php'">Rezerwacje</button>
                </section>
            <?php
                include_once('uzyskajdane.php');                //gathering information of user from database
            ?>
                <form class="dane" action = "includes/profilowedane.inc.php" method="post">         <!-- Post method for sending new email/patent number -->
                    <section class="info">
                        Imię<br/>
                        <div class="banner">
                        <?php 
                        echo $userName;
                        ?>
                        </div>
                    </section>
                    <section class="info">
                        Nazwisko<br/>
                        <div class="banner">
                        <?php 
                        echo $userSurname;
                        ?>
                        </div>
                    </section>
                    <section class="info">
                        Login<br/>
                        <div class="banner">
                        <?php 
                        echo $_SESSION["useruid"];
                        ?>
                    </section>
                    <section class="info">
                        Data urodzenia<br/>
                        <div class="banner">
                        <?php 
                        echo $userBirthday;
                        ?>
                    </section>
                    <section class="info">
                        E-mail<br/>
                        <div class="banner">
                        <?php 
                        echo $userEmail;
                        ?>
                    </section>
                    <section class="info">
                        Numer patentu<br/>
                        <div class="banner">
                        <?php 
                        echo $numPatent;
                        ?>
                    </section>
                    <section class="info">
                        Zmień E-mail<br/>
                        <input type="text" name="zEmail" class="input"  placeholder = "Nowy adres email"/>
                    </section>
                    <section class="info">
                        Zmień Numer patentu<br/>
                        <input type="text" name="zPatent" class="input"  placeholder = "Nowy numer patentu"/>
                    </section>
                    <section class="info">
                        Hasło<br/>
                        <input type="password" name="zpwd" class="input"  placeholder = "Nowe hasło"/>
                    </section>
                    <section class="info">
                        <button class="b_sub" name="submit" type="submit">Potwierdź</button>
                    </section>
                </form>
            </section>
        </main>
        <footer>
        <?php
        include_once('footer.php');
        ?> 
    </footer>
    </body>
    
</html>