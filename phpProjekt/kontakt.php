<?php
session_start();
?>

<!DOCTYPE html>
<head>
    
        <link rel="stylesheet" href="CSS/kontakt.css">

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
            <section class ="container">
                <section class="box">
                    <section class="obrazek">
                        <img src="IMG/image.jpg">
                    </section>  
                    <form class="text" action = "includes/contactform.inc.php" method="post">         <!-- Post method for sending emails -->
                            <h2>Formularz kontaktowy</h2>
                        <input type="email" name="mail" class="input"  maxlength="64" placeholder = "Email">
                        <input type="text" name ="subject" class="input" maxlength="64" placeholder = "Temat">
                        <textarea class="input" name="message" maxlength="512" placeholder="Twoja wiadomość..."></textarea>
                        <button type="submit" name="submitcontact" class="button">Wyślij</button>
                     
                        <?php                /////////// Invalid Email handler //////////
                            include_once('includes/contacth.inc.php');
                        ?>
                    
                    </form>
                </section>
             </section>
        </section>
        </main>
        <footer>
        <?php
        include_once('footer.php');
        ?> 
    </footer>
    </body>
    
</html>