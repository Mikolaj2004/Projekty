<?php                /////////// A lot of error handlers, very... useful.. / Przydatne Error handlery, na większość przypadków głupoty użytkownika ;) ////////
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p style='color:red; font-size:48px; text-align:center;'>Uzupełnij wszystkie pola! <br> Fill in all fields!</p>";
        }
        elseif ($_GET["error"] == "invalidDate") {
            echo "<p style='color:red; font-size:48px; text-align:center;'>Wprowadź poprawną datę! <br> Choose a proper date values!</p>";
        }
        elseif($_GET["error"] == "alreadyBooked"){
            echo "<p style='color:red; font-size:48px; text-align:center;'>Data wynajmu zajęta! <br> Yacht rent date already taken!</p>";
        }
        elseif($_GET["error"] == "stmtcreatebookfailed"){
            echo "<p style='color:red; font-size:48px; text-align:center;'>Błąd przy tworzeniu wynajmu! <br> Error occured while booking!</p>";
        }
        elseif($_GET["error"] == "creatingRowError"){
            echo "<p style='color:red; font-size:48px; text-align:center;'>Błędne zapytanie mysql ! <br> Wrong mysql statement!</p>";
        }
        elseif($_GET["error"] == "limit"){
            echo "<p style='color:red; font-size:48px; text-align:center;'>Osiągnąłeś limit rezerwacji ! <br> Reached reservation limit!</p>";
        }
        elseif($_GET["error"] == "fetchrowE"){
            echo "<p style='color:red; font-size:48px; text-align:center;'>Błąd przy szukaniu jachtId! <br> Error while fetching jachtId!</p>";
        }
    }
?>