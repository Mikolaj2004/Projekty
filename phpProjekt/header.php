<section class="containerLogo">
            <img src="IMG/logo.png" alt="logo" onclick="location.href='index.php'">
        </section>

        <section class="containerFlota">
            <hr>
            <button class="dropbtn" onclick="location.href='flota.php'">Flota <i class="fas fa-anchor"></i></button>
        </section>

        <section class="containerAbout">
            <hr>
            <button class="dropbtn" onclick="location.href='#Foot'">O nas <i class="fas fa-users"></i></button>
        </section>

        <section class="containerContact">
            <hr>
            <button class="dropbtn" onclick="location.href='kontakt.php'">Kontakt <i class="fas fa-phone"></i></button>
        </section>

        

        

            <?php                                       
            /////////////// Zmiana Strony Podczas bycia zalogowanym / Changing site style while logged in ///////////////
            
            
            
            
                if (isset($_SESSION["useruid"])) {
                    echo ' 
                    <section class="containerLogin">
                    <hr>

                    <div class="dropdown">
                    <button class="dropbtn">Konto <i class="fas fa-id-card"></i></button>
                    <div class="dropdown-content">
                        <a href="dane.php">Dane</a>
                        <a href="odzyskiwanie.php">Zmień hasło</a>
                        <a href="regulamin.php">Regulamin</a>
                        <a href="includes/logout.inc.php">Wyloguj się</a>
                      
                    </div>
                  </div>';
                }
                else{
                    
                    echo ' 
                    <section class="containerLogin">
                    <hr>

                    <div class="dropdown">
                    <button class="dropbtn">Konto <i class="fas fa-id-card"></i></button>
                    <div class="dropdown-content">
                      <a href="rejestracja.php">Zarejestruj się</a>
                      <a href="logowanie.php">Zaloguj się</a>
                    </div>
                  </div>';
                }
            ?>

           
        </section>