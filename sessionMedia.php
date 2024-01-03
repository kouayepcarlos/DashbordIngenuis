<?php 
session_start();
if(!isset($_SESSION["logger"]) || !$_SESSION["logger"]){
   $veri = isset($_SESSION["logger"])? $_SESSION["logger"] : 0;

}
else{
    
    $nomUser = isset($_SESSION["nomUser"]) ? $_SESSION["nomUser"] : "";
    $profil = isset($_SESSION["imageProfil"]) ? $_SESSION["imageProfil"] : "";
    $role = isset($_SESSION["role"]) ? $_SESSION["role"] : "";
}



?>