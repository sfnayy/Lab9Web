<?php
include "config/koneksi.php";
//session_start();

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = MD5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $query = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['login'] = $username;
        echo "<script>location='index.php'</script>";
    } else {
        echo "<p style='color:red;'>Username atau password salah!</p>";
    }
}
?>

<h2>Login</h2>

<form method="POST">
    <label>Username</label>
    <input type="text" name="username" required>

    <label>Password</label>
    <input type="password" name="password" required>

    <button type="submit" name="submit">Login</button>
</form>
