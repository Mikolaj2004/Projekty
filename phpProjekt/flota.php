<?php
session_start();
?>

<!DOCTYPE html>

<head>

    <link rel="stylesheet" href="CSS/flota.css">

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

    <?php
    include_once('includes/flotah.inc.php');        //error handlers from booking system
    ?>
    
            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <section class="content">
            <section class="add1">
                <a href="http://marental.cba.pl" target="_blank"><img src="IMG/REKLAMY/reklama1.png"></a>
            </section>

            <form class="grid-container" action="includes/flota.inc.php" method="post">
                <div class="item">
                    <img src="IMG/JACHTY/39 I POL.PNG" class="zdj">

                    <p class="txt">39 I PÓŁ</p>

 
                    <div class="param">
                        <i class="fas fa-ruler-horizontal"></i> <a> 8,00 m</a></br></br>
                        <i class="fas fa-users"></i> <a> 7+1</a> </br></br>
                        <i class="fas fa-coins"></i><a> 160zł / doba</a>
                    </div>
                    <hr>
                    <section class="buttons">
                    <button type="button" onclick="location.href='39 I POL.php'">Czytaj więcej</button>
                    <button type="submit" name="r39ipol">Zarezerwuj</button>
                    </section>
                </div>
            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                <div class="item">
                    <img src="IMG/JACHTY/240 SUN SPORT.PNG" class="zdj">

                    <p class="txt">240 SUN SPORT</p>

                    <div class="param">
                        <i class="fas fa-ruler-horizontal"></i> <a> 7,20 m</a></br></br>
                        <i class="fas fa-users"></i> <a> 4+1</a> </br></br>
                        <i class="fas fa-coins"></i><a> 600zł / doba</a>
                    </div>
                    <hr>
                    <section class="buttons">
                        <button type="button" onclick="location.href='240 SUN SPORT.php'">Czytaj więcej</button>
                        <button type="submit" name="rsunsport">Zarezerwuj</button>
                    </section>
                </div>
                </div>
            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                <div class="item">
                    <img src="IMG/JACHTY/500 CAB.PNG" class="zdj">

                    <p class="txt">500 CAB</p>

                    <div class="param">
                        <i class="fas fa-ruler-horizontal"></i> <a> 8,00 m</a></br></br>
                        <i class="fas fa-users"></i> <a> 6</a> </br></br>
                        <i class="fas fa-coins"></i><a> 600zł / doba</a>
                    </div>
                    <hr>
                    <section class="buttons">
                        <button type="button" onclick="location.href='500 CAB.php'">Czytaj więcej</button>
                        <button type="submit" name="r500cab">Zarezerwuj</button>
                    </section>
                </div>
            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->                
                <div class="item">
                    <img src="IMG/JACHTY/1900 BOWRIDER.PNG" class="zdj">

                    <p class="txt">1900 BOWRIDER</p>

                    <div class="param">
                        <i class="fas fa-ruler-horizontal"></i> <a> 11,00 m</a></br></br>
                        <i class="fas fa-users"></i> <a> 7+1</a> </br></br>
                        <i class="fas fa-coins"></i><a> 700zł / doba</a>
                    </div>
                    <hr>
                    <section class="buttons">
                        <button type="button" onclick="location.href='1900 BOWRIDER.php'">Czytaj więcej</button>
                        <button type="submit" name="rbowrider" >Zarezerwuj</button>
                    </section>
                </div>
            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                <div class="item">
                    <img src="IMG/JACHTY/MEWA.PNG" class="zdj">

                    <p class="txt">MEWA</p>

                    <div class="param">
                        <i class="fas fa-ruler-horizontal"></i> <a> 10,00 m</a></br></br>
                        <i class="fas fa-users"></i> <a> 8+1</a> </br></br>
                        <i class="fas fa-coins"></i><a> 220zł / doba</a>
                    </div>
                    <hr>
                    <section class="buttons">
                        <button type="button" onclick="location.href='MEWA.php'">Czytaj więcej</button>
                        <button type="submit" name="rmewa" >Zarezerwuj</button>
                    </section>
                </div>
            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                <div class="item">
                    <img src="IMG/JACHTY/1800 CHALLENGER.PNG" class="zdj">

                    <p class="txt">1800 CHALLEGNER</p>

                    <div class="param">
                        <i class="fas fa-ruler-horizontal"></i> <a> 10,50 m</a></br></br>
                        <i class="fas fa-users"></i> <a> 7+1</a> </br></br>
                        <i class="fas fa-coins"></i><a> 700zł / doba</a>
                    </div>
                    <hr>
                    <section class="buttons">
                        <button type="button" onclick="location.href='1800 CHALLENGER.php'">Czytaj więcej</button>
                        <button type="submit" name="rchallenger" >Zarezerwuj</button>
                    </section>

                </div>
            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                <div class="item">
                    <img src="IMG/JACHTY/LORD JIM.PNG" class="zdj">

                    <p class="txt">LORD JIM</p>

                    <div class="param">
                        <i class="fas fa-ruler-horizontal"></i> <a> 10,50 m</a></br></br>
                        <i class="fas fa-users"></i> <a> 7+1</a> </br></br>
                        <i class="fas fa-coins"></i><a> 300zł / doba</a>
                    </div>
                    <hr>
                    <section class="buttons">
                        <button type="button" onclick="location.href='LORD JIM.php'">Czytaj więcej</button>
                        <button type="submit" name="rlordjim">Zarezerwuj</button>
                    </section>

                </div>
            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                <div class="item">
                    <img src="IMG/JACHTY/ABIES 18.PNG" class="zdj">

                    <p class="txt">ABIES 18</p>

                    <div class="param">
                        <i class="fas fa-ruler-horizontal"></i> <a> 6,50 m</a></br></br>
                        <i class="fas fa-users"></i> <a> 2</a> </br></br>
                        <i class="fas fa-coins"></i><a> 440zł / doba</a>
                    </div>
                    <hr>
                    <section class="buttons">
                        <button type="button" onclick="location.href='ABIES 18.php'">Czytaj więcej</button>
                        <button type="submit" name="rabies18" >Zarezerwuj</button>
                    </section>

                </div>
            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                <div class="item">
                    <img src="IMG/JACHTY/Honda K33 TURBO.PNG" class="zdj">

                    <p class="txt">Honda K33 TURBO</p>

                    <div class="param">
                        <i class="fas fa-ruler-horizontal"></i> <a> 2,50m</a></br></br>
                        <i class="fas fa-users"></i> <a> 1+1</a> </br></br>
                        <i class="fas fa-coins"></i><a> 70zł / godzina</a>
                    </div>
                    <hr>
                    <section class="buttons">
                        <button type="button" onclick="location.href='Honda K33 TURBO.php'">Czytaj więcej</button>
                        <button type="submit" name="rhondak33">Zarezerwuj</button>
                    </section>

                </div>
            </form>

                <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <section class="add2">
                 <a href="http://schroniskodabrowka.pl/" target="_blank"><img src="IMG/REKLAMY/reklama2.png"></a>
            </section>
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