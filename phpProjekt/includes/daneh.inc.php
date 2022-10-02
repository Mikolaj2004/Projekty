<?php

    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p style='color:red; font-size:48px; text-align:center;'>Uzupełnij potrzebne pola! <br> Fill needed fields!</p>";
        }
        elseif ($_GET["error"] == "emptyinput") {
            echo "<p style='color:red; font-size:48px; text-align:center;'>Uzupełnij potrzebne pola! <br> Fill needed fields!</p>";
        }
        elseif($_GET["error"] == "wrongemail") {
            echo "<p style='color:red; font-size:24px; text-align:center;'>Podany błędny email! <br> Typed wrong email!</p>";
        }
        elseif ($_GET["error"] == "wrongpassword") {
            echo "<p style='color:red; font-size:48px; text-align:center;'>Błęne hasło! <br> Wrong password!</p>";
        }
        elseif($_GET["error"] == "stmtE1") {
            echo "<p style='color:red; font-size:24px; text-align:center;'>Oops! Coś poszło nie tak, spróbuj ponownie! <br> Oops! Something went wrong, try again!</p>";
        }
        elseif($_GET["error"] == "stmtE2") {
            echo "<p style='color:red; font-size:24px; text-align:center;'>Hasło jest puste! <br> Password field is empty!</p>";
        }
        elseif($_GET["error"] == "stmtE3") {
            echo "<p style='color:red; font-size:24px; text-align:center;'>Hasło jest puste! <br> Password field is empty!</p>";
        }
        elseif($_GET["error"] == "emptyPwd") {
            echo "<p style='color:red; font-size:24px; text-align:center;'>Hasło jest puste! <br> Password field is empty!</p>";
        }
        elseif($_GET["error"] == "emailtaken") {
            echo "<p style='color:red; font-size:24px; text-align:center;'>Email jest już używany! <br> This email is already in use!</p>";
        }
        elseif($_GET["error"] == "userdaneE") {
            echo "<p style='color:red; font-size:24px; text-align:center;'>Błąd przy szukaniu danych w bazie! <br> Error while searching in database!</p>";
        }
        elseif($_GET["error"] == "changedone") {
            echo "<p style='color:green; font-size:48px; text-align:center;'>Dane zostały zmienione! <br> Data has been changed!</p>";
        }
    }
?>