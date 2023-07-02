<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $con = mysqli_connect("localhost", "root", "", "todolist") or die("connection fail");

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user["password"])) {
            $_SESSION["username"] = $username;
            header("Location: index.php");
            exit();
        } else {
            echo "Nieprawidłowe hasło!";
        }
    } else {
        echo "Nieprawidłowa nazwa użytkownika!";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Logowanie</title>
    <link rel="stylesheet" href="login.css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <img src="../toDoListPhp/register.png" alt="Your Image">
        <h2 class="text-center">Logowanie</h2>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="username">Nazwa użytkownika:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Hasło:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Zaloguj</button>
        </form>
        <p class="text-center">Nie masz jeszcze konta? <a href="register.php">Zarejestruj się</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>