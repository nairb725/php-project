<!DOCTYPE html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="index.css">
<title>eShop</title>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                    
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    Log In</p>
                <form action="connexion.php" class="login" method="post"> 
                <input type="text" placeholder="Username" name="username" />
                <input type="password" placeholder="Password" name="password"/>
                <input type="submit" value="Log in" class="btn btn-success btn-sm" />
                <div class="remember-forgot">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" />
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 forgot-pass-content">
                            <a href="javascription:void(0)" class="forgot-pass">Forgot Password</a>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="posted-by">Posted By: <a href="http://www.jquery2dotnet.com">Bhaumik Patel</a></div>

</body>

</html>

<?php 

$user = 'groupe5';
$pass = 'aGx039r^';
$username = $_POST["username"];
$password = $_POST["password"];

// echo $username;
// echo $password;

try {
    $dbh = new PDO('mysql:host=2eurhost.com;dbname=eurh_groupe5', $user, $pass);
    $userdb = $dbh->query('SELECT username, password FROM Utilisateur');
    $wesh = $userdb->fetchAll();
    
    for ($i = 0; $i < sizeof($wesh); $i++) {
        
        if ($wesh[$i]["username"] == $username && $wesh[$i]["password"] == $password) {
            $dbh = null;
            $userdb = null;
            header('Location: index.php');
            exit();   
        } 
    } 
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
    
}

?>
