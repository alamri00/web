<?php

$conn = mysqli_connect("localhost", "root", "", "hotelbooking");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
        WHERE username='$username'
        AND password='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    header("Location: home.html");
    exit();

} else {

    echo "<h2>Invalid Username or Password</h2>";
    echo "<a href='login.html'>Try Again</a>";

}

mysqli_close($conn);

?>