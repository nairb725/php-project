<?php 
require_once("dataModifier.php");
$user = 'groupe5';
$pass = 'aGx039r^';
$host = "2eurhost.com";
$dbName = 'eurh_groupe5';
$dataBase = new dataBasePDO($user, $pass, $host, $dbName);

//nomProd
$fetch2 = $dataBase -> request("SELECT nomProd, Prix, categorie FROM Produit WHERE Nprod = 2");
$fetch1 = $dataBase -> request("SELECT nomProd, Prix, categorie FROM Produit WHERE Nprod = 1");
$fetch3 = $dataBase -> request("SELECT nomProd, Prix, categorie FROM Produit WHERE Nprod = 3");
$fetch4 = $dataBase -> request("SELECT nomProd, Prix, categorie FROM Produit WHERE Nprod = 4");
$fetch5 = $dataBase -> request("SELECT nomProd, Prix, categorie FROM Produit WHERE Nprod = 5");









// try {
//     $dbh = new PDO('mysql:host=2eurhost.com;dbname=eurh_groupe5', $user, $pass);
//     $userdb = $dbh->query('SELECT nomProd, Prix, catégorie password FROM Produit');
//     $data = $userdb->fetch2All();

// } catch (PDOException $e) {
//     print "Erreur !: " . $e->getMessage() . "<br/>";
//     die();
// } 
?>

<!DOCTYPE html>
<html>
<head>
<title>E-SHOP</title>
<meta hcharset=utf-8>
<link rel="stylesheet" href="achat.css" type="text/css" media="all" />
<link rel="stylesheet" href="bouton.css" type="text/css" media="all" />

<h2><button class="favorite styled" href="logIn.php" type="button" onclick="window.location.href = 'logIn.html';"> CONNEXION/INSCRIPTION </button></h2>
</head>
<body>
<h1>E-SHOP</h1> 


<img src="/image/renard.webp" alt="image" /><strong> <?php echo $fetch2[0][ "categorie"]. (" "). $fetch2[0][ "nomProd"]. (" PRIX: "). $fetch2[0]["Prix"]. (" E") ?> </strong> &nbsp&nbsp <button class="favorite styled"
type="button"> Add to caddy </button> </br>


<img src="/image/shiba.webp" alt="image" /><strong> <?php echo $fetch1[0][ "categorie"]. (" "). $fetch1[0][ "nomProd"]. (" PRIX: "). $fetch1[0]["Prix"]. (" E") ?> </strong> &nbsp&nbsp <button class="favorite styled"
type="button"> Add to caddy </button> </br>

<img src="/image/sushi.webp" alt="image" /><strong> <?php echo $fetch3[0][ "categorie"]. (" ").$fetch3[0][ "nomProd"]. (" PRIX: ").  $fetch3[0]["Prix"]. (" E") ?> </strong> &nbsp&nbsp <button class="favorite styled"
type="button"> Add to caddy </button> </br>


<img src="/image/tortue.webp" alt="image" /><strong> <?php echo $fetch4[0][ "categorie"]. (" ").$fetch4[0][ "nomProd"]. (" PRIX: "). $fetch4[0]["Prix"]. (" E") ?> </strong> &nbsp&nbsp <button class="favorite styled"
type="button"> Add to caddy </button> </br>


<img src="/image/cheshire.jpg" alt="image" /><strong> <?php echo $fetch5[0][ "categorie"]. (" ").$fetch5[0][ "nomProd"]. (" PRIX: "). $fetch5[0]["Prix"]. (" E") ?> </strong> &nbsp&nbsp <button class="favorite styled"
type="button"> Add to caddy </button> </br>


 </body>
 </html>
