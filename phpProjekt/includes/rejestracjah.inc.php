<?php

if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
        echo "<p style='color:red; font-size:48px; text-align:center;'>Uzupełnij wszystkie pola! <br> Fill in all fields!</p>";
    }
    elseif ($_GET["error"] == "invaliduid") {
        echo "<p style='color:red; font-size:48px; text-align:center;'>Wprowadź poprawny Login! <br> Choose a proper username!</p>";
    }
    elseif($_GET["error"] == "invalidemail"){
        echo "<p style='color:red; font-size:48px; text-align:center;'>Wprowadź poprawny adres email! <br> Enter a proper e-mail address!</p>";
    }
    elseif($_GET["error"] == "passwordsdontmatch"){
        echo "<p style='color:red; font-size:48px; text-align:center;'>Powtórz poprawnie hasło! <br> Repeat corectly your password!</p>";
    }
    elseif($_GET["error"] == "usernametaken"){
        echo "<p style='color:red; font-size:48px; text-align:center;'>Nazwa użytkownika lub Email zajęty! <br> Login name/email already taken!</p>";
    }
    elseif($_GET["error"] == "statutenotmarked"){
        echo "<p style='color:red; font-size:24px; text-align:center;'>Pole z akceptacją warunków jest wymagana! <br> Terms of service checkbox is required!</p>";
    }
    elseif($_GET["error"] == "stmtfailed"){
        echo "<p style='color:red; font-size:24px; text-align:center;'>Oops! Coś poszło nie tak, spróbuj ponownie! <br> Oops! Something went wrong, try again!</p>";
    }
    elseif($_GET["error"] == "stmtcreateuserfailed"){
        echo "<p style='color:red; font-size:24px; text-align:center;'>Nie udało się utworzyć konta, spróbuj ponownie! <br> Couldn't create an account, please try again!</p>";
    }
    elseif($_GET["error"] == "stmtemailcheck"){
        echo "<p style='color:red; font-size:24px; text-align:center;'>Nie udało się sprawdzić emailu w bazie! <br> Couldn't try to find an existing email!</p>";
    }
}

?>