<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <div>
        <?php 
        if (isset($_SESSION['error_message'])) {
        ?>
            <div><?php echo $_SESSION['error_message']; ?></div>
        <?php
        }
        ?>
        
        <form action="register.php" method="post">
            Username:<br />
            <input type="text" name="username_input" /><br />
            Password:<br />
            <input type="passwordInput" name="password_input" /><br />
            <button type="submit">Créer un compte</button>
        </form>
    </div>
    
</body>
</html>

<?php 

$user = 'groupe5';
$pass = 'aGx039r^';
$usernameInput = $_POST ['username_input']; 
$passwordInput = $_POST ['password_input'];

try {
    $dbh = new PDO('mysql:host=2eurhost.com;dbname=eurh_groupe5', $user, $pass);
    $userdb = $dbh->query('SELECT username, password FROM Utilisateur');
    $data = $userdb->fetchAll();
    
    for ($i = 0; $i < sizeof($data); $i++) {
        
        if ($data[$i]["username"] == $usernameInput) {
            echo "HE NON MEC IL Y A DEJA UN PSEUDO EXISTANT COMME CA XDDDDDDDDDDDDDDDDDDD";
            $usernameInput = null;
            $passwordInput = null;
            exit();

        } else if ($i == sizeof($data) - 1) {
            echo "Accompte successufeluye createred";
            $stmt = $dbh->prepare ("INSERT INTO Utilisateur (username, password) VALUES (:name, :value)");
            $stmt->bindParam(':name', $usernameInput);
            $stmt->bindParam(':value', $passwordInput);
            $stmt->execute();
            $usernameInput = null;
            $passwordInput = null;
            exit();
        }        
    } 

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>

