<?php
    include("database.php");
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Welcome to Our Academic Event Management System!</h2>
        Email:<br>
        <input type="text" name="email"><br>
        Password:<br>
        <input type="password" name="password"><br> <!-- Use type="password" for password input -->
        <input type="submit" name="submit" value="register">
    </form>
  </div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($email) || empty($password)) {
        echo "Please enter both email and password";
    } else {
        // Check if the email already exists
        $check_query = "SELECT * FROM users WHERE Email = '$email'";
        $result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($result) > 0) {
            echo "Email already exists. Please choose a different email.";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (Email, Pwd) VALUES ('$email', '$hash')";

            if (mysqli_query($conn, $sql)) {
                header("Location: home.php");
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
}

mysqli_close($conn);

?>
