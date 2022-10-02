<?php
session_start();
?>

<!DOCTYPE html>
    <head>
        
        <link rel="stylesheet" href="CSS/odzyskiwanie.css">

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
            <form class="reg" action="includes/reset-request.inc.php" method="post">
                <section class="">
                    <img src="IMG/logo.png">
                    </section>
            <h1>Reset your password / Zresetuj swoje hasło</h1>
        
            <p class = "containerEmail" > 
                An e-mail will be send to your email address with future steps on how to reset your password. 
            <br>
                E-mail zostanie wysłany na podany adres, z dalszą instrukcją w celu zresetowania hasła.
            <br>
            <br>
                Email
            <br>
                <input type="text" name="email" class="input" placeholder = "xyz@.com">
                <button class="dropbtn" type="submit" name="reset-request-submit">Wyślij / Send</button>
            </p>
            
            
            </form>
            <?php
            include_once('includes/odzyskiwanieh.inc.php');         //error handeling
            ?>
        </main>

        <footer>
        <?php
        include_once('footer.php');
        ?> 
    </footer>
    </body>
    
</html>