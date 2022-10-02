<?php
session_start();
?>

<!DOCTYPE html>
    <head>
    
        <link rel="stylesheet" href="CSS/rejestracja.css">

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
                <h1>Rejestracja </h1>
                <hr>
                <section class ="klasa">
                    <section class="containerRejestracja">
                        <section class="containerPart"></section>
                            
                        <form action="includes/signup.inc.php" method="post">               <!-- Including signup.inc system & taking Post method / Pozyskiwanie informacji z post i uruchamianie signup.inc -->
                            <div div class="containerPart"  >
                                <label>Imie</label>
                            <input type="text" name="name" class="input"  placeholder = "Name"/>
                            </div>
                                                
                            <div class="containerPart"  >
                                <label>Nazwisko</label>
                                <input type="text" name="surname" class="input"  placeholder = "Surname" />
                            </div>
                                                
                            <div class="containerPart"  >
                                <label> Email</label>
                            <input type="text" name="email" class="input" placeholder = "xyz@.com">
                            </div>

                            <div class="containerPart"  >
                                <label> Login</label>
                                <input type="text" name="uid" class="input" placeholder = "Login">
                            </div>
                                                
                            <div class="containerPart"  >
                                <label>Hasło</label>
                                <input type="password" name="pwd" class="input"  placeholder = "Password"/>
                            </div>
                                                
                            <div class="containerPart">
                                <label>Potwierdz Hasło</label>
                                <input type="password" name="pwdrepeat" class="input" placeholder = "Confirm Password"/>
                            </div>

                            <div class="containerPart"  >
                                <label> numer patentu </label>
                            <input type="text" name="numPatent" class="input" placeholder = "Patent card number">
                            </div>

                            <div class="containerPart"  >
                                <label> Data urodzenia</label>
                            <input type="date" name="birthday" class="input"placeholder = "dd-mm-rrrr">
                            </div>

                            <div class="containerCheck"  >
                                    <input type = "checkbox" name="statute" value="Yes">
                                    <a href="regulamin.php"> Zapoznałem się z warunkami regulaminu </a>
                            </div>
                        </section>
                            <div class="containerRejestracja"  >
                                <input type="submit" name="submit" value="Zarejestruj się">


                        <?php /////////// A lot of error handlers, very... useful.. / Przydatne Error handlery, na większość przypadków głupoty użytkownika ;) ////////
                
                            include_once('includes/rejestracjah.inc.php');

                        ?>                 
                        </form>
                            </div>

                        </section>
                                        

                            
            </main>
            <footer>
                <?php
                include_once('footer.php');                                                                             //ciekawe czy ktoś to będzie czytał?   23.10.2021  Time: 04:23 am.   ~ Mateusz
                ?> 
            </footer>
    </body>
    
</html>