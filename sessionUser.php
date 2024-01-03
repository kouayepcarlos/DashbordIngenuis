<?php 
session_start();
if(!isset($_SESSION["logger"]) || !$_SESSION["logger"]){
   $veri = isset($_SESSION["logger"])? $_SESSION["logger"] : 0;

}
else{
    
    $nomUser = isset($_SESSION["username"]) ? $_SESSION["username"] : "";
    $profil = isset($_SESSION["profil"]) ? $_SESSION["profil"] : "";
}



?>