<?php 
$user = 'groupe5';
$pass = 'aGx039r^';
$usernameInput = $_POST["username"];
$passwordInput = $_POST["password"];

try {
    $dbh = new PDO('mysql:host=2eurhost.com;dbname=eurh_groupe5', $user, $pass);
    $userdb = $dbh->query('SELECT username, password FROM Utilisateur');
    $data = $userdb->fetchAll();
    
    for ($i = 0; $i < sizeof($data); $i++) {
        
        if ($data[$i]["username"] == $usernameInput) {
            $usernameInput = null;
            $passwordInput = null;
            header('Location: achat.php');
            exit();

        } else if ($i == sizeof($data) - 1) {
            $stmt = $dbh->prepare ("INSERT INTO Utilisateur (username, password) VALUES (:name, :value)");
            $stmt->bindParam(':name', $usernameInput);
            $stmt->bindParam(':value', $passwordInput);
            $stmt->execute();
            $usernameInput = null;
            $passwordInput = null;
            header('Location: achat.php');
            exit();
        }        
    } 

} catch (PDOException $e) {
    //print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>

