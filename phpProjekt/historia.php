<?php
session_start();
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';
$userid = $_SESSION["userid"];

if(!isset($_SESSION["useruid"])){
    header("location: logowanie.php?error=notLogged");
    exit();
}

?>

<!DOCTYPE html>
<head>
        
        <link rel="stylesheet" href="CSS/historia.css">

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
            <section class="pasek">
                <div>
                    Nazwa:
                </div>
                <div>
                    Od:
                </div>
                <div>
                    Do:
                </div>
            </section>
            
                <?php
                    getValues($conn, $userid);
                ?>
            
        </main>
        <footer>
        <?php
        include_once('footer.php');
        ?> 
    </footer>
    </body>
    
</html>