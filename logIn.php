<?php 
$user = 'groupe5';
$pass = 'aGx039r^';
$username = $_POST["username"];
$password = $_POST["password"];

try {
    $dbh = new PDO('mysql:host=2eurhost.com;dbname=eurh_groupe5', $user, $pass);
    $userdb = $dbh->query('SELECT username, password FROM Utilisateur');
    $data = $userdb->fetchAll();
    
    for ($i = 0; $i < sizeof($data); $i++) {
        
        if ($data[$i]["username"] == $username && $data[$i]["password"] == $password) {
            $dbh = null;
            $userdb = null;
            header('Location: achat.php');
            exit(); 

        } else if ($i == sizeof($data) - 1) {
            header('Location: logIn.html');
            exit();
        }
    } 

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();  
}

?>

