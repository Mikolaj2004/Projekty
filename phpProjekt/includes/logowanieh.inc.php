<?php
        if (isset($_GET["error"])) {                            //Error Handlers//
            if($_GET["error"] == "none"){
                echo "<p style='color:green; font-size:48px; text-align:center;'>Zostałeś pomyślnie zarejestrowany! <br> You have sign up!</p>";
            }
            elseif ($_GET["error"] == "emptylogininput") {
                echo "<p style='color:red; font-size:48px; text-align:center;'>Uzupełnij wszystkie pola! <br> Fill in all fields!</p>";
            }
            elseif ($_GET["error"] == "wronglogin") {
                echo "<p style='color:red; font-size:48px; text-align:center;'>Niepoprawny login lub email! <br> Wrong login or email!</p>";
            }
            elseif ($_GET["error"] == "wrongpassword") {
                echo "<p style='color:red; font-size:48px; text-align:center;'>Błędne hasło! <br> Incorrect password!</p>";
            }
            elseif ($_GET["error"] == "notLogged") {
                echo "<p style='color:red; font-size:48px; text-align:center;'>Do złożenia zamówienia potrzebne jest konto! <br> You need to have an account!</p>";
            }
            elseif ($_GET["error"] == "movedWrongly") {
                echo "<p style='color:red; font-size:48px; text-align:center;'>Do stworzenia zmian potrzebne jest konto! <br> You need to have an account!</p>";
            }
        }

        if (isset($_GET["newpwd"])) {                            
            if($_GET["newpwd"] == "passwordupdate"){
                echo "<p style='color:green; font-size:48px; text-align:center;'>Hasło zostało zmienione! <br> Password has been updated!</p>";
            }
        }
?>