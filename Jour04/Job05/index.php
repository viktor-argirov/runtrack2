<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username === 'John' && $password === 'Rambo') {
        echo "C'est pas ma guerre";
    } else {
        echo "Votre pire cauchemar";
    }
}
?>
<form method="post" action="index.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required /><br>
    
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required /><br>
    
    <input type="submit" value="Connexion" />
</form>
</body>
</html>