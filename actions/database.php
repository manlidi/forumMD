<?php
try{
    $connexion = new PDO("mysql:host=localhost; dbname=forummd", "root", "");
}catch(Exception $e){
    die('Ue erreur a été trouver: ' .$e->getMessage());
}
?>