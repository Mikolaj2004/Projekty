<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
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
        
           <section class="reg">
                <section class="">
                    <img src="IMG/logo.png">
                    </section>
            <h1>Enter new passwords / Wprowadź nowe hasła</h1>
        
            <div class = "containerEmail"> 
            
              
            <?php
            $selector = $_GET["selector"];          //collecting values
            $validator = $_GET["validator"];

            if (empty($selector) || empty($validator)) {            //if variables are empty
                header("location: ../odzyskiwanie.php?error=empty");        ///ERROR HANDLER
                exit();
            }
            else{
                if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                    ?>
                    
                <form action="includes/reset-password.inc.php" method="post">
                    <input type="hidden" name="selector" value="<?php echo $selector ?>">
                    <input type="hidden" name="validator" value="<?php echo $validator ?>">
                    <input type="password" name="pwd" placeholder="Wprowadź nowe hasło">
                    <input type="password" name="pwd-repeat" placeholder="Powtórz nowe hasło">
                    <button class="dropbtn" type="submit" name="reset-password-submit">Zatwierdź</button>

                </form>

                    <?php
                }
            }
            ?>
            
            </div>
            
            
            </section>
        </main>

        <footer>
        <?php
        include_once('footer.php');
        ?> 
    </footer>
    </body>
    
</html>