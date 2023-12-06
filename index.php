<?php
    session_start();
?>

<style>
<?php include 'index.css'; ?>
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
  <div id="container">
    <h1>Sign In</h1>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" placeholder="Enter username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Enter password" required>
        <div><input type="submit" name="login" value="login"></div>
    </form>
  </div>
</body>
</html>
<?php
    if (isset($_POST["login"])){
     
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        header("Location: home.php");
    }
    else {
        echo"Missing username/password <br>";
    }
    }
?>