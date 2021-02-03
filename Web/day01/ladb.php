<?php

try {
    $bdd = new PDO('mysql:host=2eurhost.com;port=3306;dbname=eurh_groupe5;charset=utf8', "groupe5", "aGx039r^");
}
catch (Exception $e)
{
    die('Erreur MySQL, veuillez patienter ou contactez un administrateur. <br /><br />' . $e->getMessage());
}



?>