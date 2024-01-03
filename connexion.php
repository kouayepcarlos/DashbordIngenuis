<?php

try
{
    $db = new PDO("mysql:host=localhost;dbname=ingenuis","root","");
}
catch(Exception $e)
{
    die("erreur"." ".$e->getMessage());
}

?>