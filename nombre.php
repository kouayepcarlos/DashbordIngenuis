<?php


include("connexion.php");
$requeteCount = "SELECT count(DISTINCT(idAdresse)) as countAdresse FROM adresse_client" ;
$requeteCount1 = "SELECT count(DISTINCT(idContact)) as countContact FROM contact ";
$requeteCount2= "SELECT count(DISTINCT(idMessage)) as countMessage FROM messages ";

$requeteCount3= "SELECT count(DISTINCT(id)) as countEquipe FROM equipe ";

$resultCount = $db->query($requeteCount);
$CountAdresse = $resultCount->fetch();
$nbreAdresse = $CountAdresse['countAdresse'];

$resultCount1 = $db->query($requeteCount1);
$CountContact= $resultCount1->fetch();
$nbreContact = $CountContact['countContact'];


$resultCount2 = $db->query($requeteCount2);
$CountMessage= $resultCount2->fetch();
$nbreMessage = $CountMessage['countMessage'];


$resultCount3 = $db->query($requeteCount3);
$CountEquipe= $resultCount3->fetch();
$nbreEquipe = $CountEquipe['countEquipe'];







?>