<?php                /////////// A lot of error handlers, very... useful.. / Przydatne Error handlery, na większość przypadków głupoty użytkownika ;) ////////
    if (isset($_GET["error"])) {
        
        if($_GET["error"]=="emailsendsuccess"){
            echo '<p> Mail Send! Please check your email.  /  Mail został wysłany! Prosimy sprawdzić konto email. </p>';
        }
        elseif ($_GET["error"] == "empty") {
            echo "<p style='color:red; font-size:48px; text-align:center;'>Uzupełnij wszystkie pola! <br> Fill in all fields!</p>";
        }
        elseif ($_GET["error"] == "tokenresetE") {
            echo "<p style='color:red; font-size:48px; text-align:center;'>Błędna próba zresetowania tokenów! <br> Unsuccessful token reset!</p>";
        }
        elseif($_GET["error"] == "stmtemailE"){
            echo "<p style='color:red; font-size:48px; text-align:center;'>Błędne zapytanie o email! <br> Wrong e-mail stmt!</p>";
        }
        elseif($_GET["error"] == "pwdnotsame"){
            echo "<p style='color:red; font-size:48px; text-align:center;'>Powtórz poprawnie hasło! <br> Repeat corectly your password!</p>";
        }
        elseif($_GET["error"] == "stmtE1"){
            echo "<p style='color:red; font-size:24px; text-align:center;'>Oops! Coś poszło nie tak, spróbuj ponownie! <br> Oops! Something went wrong, try again!</p>";
        }
        elseif($_GET["error"] == "stmtE2"){
            echo "<p style='color:red; font-size:24px; text-align:center;'>Oops! Coś poszło nie tak, spróbuj ponownie! <br> Oops! Something went wrong, try again!</p>";
        }
        elseif($_GET["error"] == "stmtE3"){
            echo "<p style='color:red; font-size:24px; text-align:center;'>Oops! Coś poszło nie tak, spróbuj ponownie! <br> Oops! Something went wrong, try again!</p>";
        }
        elseif($_GET["error"] == "stmtE4"){
            echo "<p style='color:red; font-size:24px; text-align:center;'>Oops! Coś poszło nie tak, spróbuj ponownie! <br> Oops! Something went wrong, try again!</p>";
        }
        elseif($_GET["error"] == "stmtE5"){
            echo "<p style='color:red; font-size:24px; text-align:center;'>Oops! Coś poszło nie tak, spróbuj ponownie! <br> Oops! Something went wrong, try again!</p>";
        }
        elseif($_GET["error"] == "tokenNotMatch"){
            echo "<p style='color:red; font-size:24px; text-align:center;'>Tokeny nie są takie same! <br> Tokens are not the same!</p>";
        }
        elseif($_GET["error"] == "wrongEmail"){
            echo "<p style='color:red; font-size:24px; text-align:center;'>Błędny adres email! <br> Entered email wrongly!</p>";
        }
        elseif($_GET["error"] == "stmtE6"){
            echo "<p style='color:red; font-size:24px; text-align:center;'>Oops! Coś poszło nie tak, spróbuj ponownie! <br> Oops! Something went wrong, try again!</p>";
        }
        elseif($_GET["error"] == "stmtE7"){
            echo "<p style='color:red; font-size:24px; text-align:center;'>Oops! Coś poszło nie tak, spróbuj ponownie! <br> Oops! Something went wrong, try again!</p>";
        }
        elseif($_GET["error"] == "enteredWrongly"){
            echo "<p style='color:red; font-size:24px; text-align:center;'>Błędne wejście od strony! <br> Entered site wrongly!</p>";
        }
        
    }
?>