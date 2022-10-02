<?php
if (isset($_GET["error"])) {
        
        if ($_GET["error"] == "emptyinput") {
            echo "<p style='color:red; font-size:24px; text-align:center;'>Uzupełnij wszystkie pola! <br> Fill in all fields!</p>";

        }
        
        if ($_GET["error"] == "invalidemail") {
            echo "<p style='color:red; font-size:24px; text-align:center;'>Wprowadź poprawny adres email! <br> Enter a proper e-mail address!</p>";
        }

        if($_GET["error"] == "none"){
            echo "<p style='color:green; font-size:24px; text-align:center;'>Email dostarczony! <br> Email Sent!</p>";
        }
    }
?>