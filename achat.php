
<?php 

$user = 'groupe5';
$pass = 'aGx039r^';


try {
    $dbh = new PDO('mysql:host=2eurhost.com;dbname=eurh_groupe5', $user, $pass);

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
} 
?>

<!DOCTYPE html>
<html>
<head>
<title>E-SHOP</title>
<meta hcharset=utf-8>
<link rel="stylesheet" href="achat.css" type="text/css" media="all" />
<link rel="stylesheet" href="bouton.css" type="text/css" media="all" />
</head>
<h2><button class="favorite styled" type="button"> CONNEXION/INSCRIPTION </button></h2>
<body>
<h1>E-SHOP</h1> 


<img src="css/images/renard.webp" alt="image" /><strong>PRIX DE LA PELUCHE RENARD : 25E</strong> &nbsp&nbsp <button class="favorite styled"
  type="button"> Add to caddy </button> </br>


<img src="css/images/shiba.webp" alt="image" /><strong>PRIX DE LA PELUCHE SHIBA : 20E</strong> &nbsp&nbsp <button class="favorite styled"
        type="button"> Add to caddy </button> </br>

<img src="css/images/sushi.webp" alt="image" /><strong>PRIX DE LA PELUCHE SUSHI : 30E</strong> &nbsp&nbsp <button class="favorite styled"
        type="button"> Add to caddy </button> </br>

<img src="css/images/tortue.webp" alt="image" /><strong>PRIX DE LA PELUCHE TORTUE : 15E</strong> &nbsp&nbsp <button class="favorite styled"
        type="button"> Add to caddy </button>  </br>

<img src="css/images/cheshire.jpg" alt="image" /><strong>PRIX DE LA PELUCHE CHESHIRE : 35E</strong> &nbsp&nbsp <button class="favorite styled"
        type="button"> Add to caddy </button>  </br>

 </body>
 </html>