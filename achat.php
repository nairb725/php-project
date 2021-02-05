
<?php 
require_once("dataModifier.php");
$user = 'groupe5';
$pass = 'aGx039r^';
$host = "2eurhost.com";
$dbName = 'eurh_groupe5';
$dataBase = new dataBasePDO($user, $pass, $host, $dbName);
$fetch = $dataBase -> request("SELECT nomProd, Prix FROM Produit WHERE Nprod = 1");
// try {
//     $dbh = new PDO('mysql:host=2eurhost.com;dbname=eurh_groupe5', $user, $pass);
//     $userdb = $dbh->query('SELECT nomProd, Prix, catégorie password FROM Produit');
//     $data = $userdb->fetchAll();

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
</head>
<h2><button class="favorite styled" href="logIn.php" type="button" onclick="window.location.href = 'logIn.html';"> CONNEXION/INSCRIPTION </button></h2>
<body>
<h1>E-SHOP</h1> 


<img src="/image/renard.webp" alt="image" /><strong><?php echo $fetch[0]["nomProd"]. $fetch[0]["Prix"]; ?></strong> &nbsp&nbsp <button class="favorite styled"
        type="button"> Add to caddy </button> </br>


<img src="/image/shiba.webp" alt="image" /><strong>PRIX DE LA PELUCHE SHIBA : 20E</strong> &nbsp&nbsp <button class="favorite styled"
        type="button"> Add to caddy </button> </br>

<img src="/image/sushi.webp" alt="image" /><strong>PRIX DE LA PELUCHE SUSHI : 30E</strong> &nbsp&nbsp <button class="favorite styled"
        type="button"> Add to caddy </button> </br>

<img src="/image/tortue.webp" alt="image" /><strong>PRIX DE LA PELUCHE TORTUE : 15E</strong> &nbsp&nbsp <button class="favorite styled"
        type="button"> Add to caddy </button>  </br>

<img src="/image/cheshire.jpg" alt="image" /><strong>PRIX DE LA PELUCHE CHESHIRE : 35E</strong> &nbsp&nbsp <button class="favorite styled"
        type="button"> Add to caddy </button>  </br>

 </body>
 </html>