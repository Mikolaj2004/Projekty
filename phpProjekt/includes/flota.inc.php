<?php

session_start();

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

    ///////////////////////////////    r39ipol    ///////////////////////////////////////


    if(isset($_POST["r39ipol"])){

        if(isset($_SESSION["userid"])){
            
            header("location: ../r39ipol.php");    
        }
        else{
            header("location: ../logowanie.php?error=notLogged");
        }
    }

    ///////////////////////////////    r39ipol    ///////////////////////////////////////


    ///////////////////////////////    rsunsport    ///////////////////////////////////////


    if(isset($_POST["rsunsport"])){

        if(isset($_SESSION["userid"])){
            
            header("location: ../rsunsport.php");    
        }
        else{
            header("location: ../logowanie.php?error=notLogged");
        }  
    }

    ///////////////////////////////    rsunsport    ///////////////////////////////////////


    ///////////////////////////////    r500cab    ///////////////////////////////////////


    if(isset($_POST["r500cab"])){

        if(isset($_SESSION["userid"])){
            
            header("location: ../r500cab.php");
        }
        else{
            header("location: ../logowanie.php?error=notLogged");
        }      
    }

    ///////////////////////////////    r500cab    ///////////////////////////////////////


    ///////////////////////////////    rbowrider    ///////////////////////////////////////


    if(isset($_POST["rbowrider"])){

        if(isset($_SESSION["userid"])){
            
            header("location: ../rbowrider.php");
        }
        else{
            header("location: ../logowanie.php?error=notLogged");
        }
    }


    ///////////////////////////////    rbowrider    ///////////////////////////////////////


    ///////////////////////////////    rmewa    ///////////////////////////////////////


    if(isset($_POST["rmewa"])){

        if(isset($_SESSION["userid"])){
            header("location: ../rmewa.php");
        }
        else{
            header("location: ../logowanie.php?error=notLogged");
        }  
    }

    ///////////////////////////////    rmewa    ///////////////////////////////////////


    ///////////////////////////////    rchallenger    ///////////////////////////////////////


    if(isset($_POST["rchallenger"])){

        if(isset($_SESSION["userid"])){ 
            header("location: ../rchallenger.php");
        }
        else{
            header("location: ../logowanie.php?error=notLogged");
        }
    }

    ///////////////////////////////    rchallenger    ///////////////////////////////////////


    ///////////////////////////////    rlordjim    ///////////////////////////////////////


    if(isset($_POST["rlordjim"])){

        if(isset($_SESSION["userid"])){
            header("location: ../rlordjim.php");
        }
        else{
            header("location: ../logowanie.php?error=notLogged");
        }
    }
    ///////////////////////////////    rlordjim    ///////////////////////////////////////


    ///////////////////////////////    rabies18    ///////////////////////////////////////

    
    if(isset($_POST["rabies18"])){

        if(isset($_SESSION["userid"])){
            header("location: ../rabies18.php");
        }
        else{
            header("location: ../logowanie.php?error=notLogged");
        }
    }

    ///////////////////////////////    rabies18    ///////////////////////////////////////

    ///////////////////////////////    rhondak33    ///////////////////////////////////////


    if(isset($_POST["rhondak33"])){

        if(isset($_SESSION["userid"])){
            header("location: ../rhondak33.php");
        }
        else{
            header("location: ../logowanie.php?error=notLogged");
        }
    }


     ///////////////////////////////    rhondak33    ///////////////////////////////////////
