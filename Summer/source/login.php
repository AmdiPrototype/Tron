<?php

ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
$dbhost = "mysql";
$dbuser = "root";
$dbpass = "root";
$db = "ctf";
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
mysqli_set_charset($conn,"utf8");
$sql = NULL;

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username  = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password';";
    $res = $conn->query($sql);

    if($res && $res->num_rows - 0) {
      echo 'https://itakala.skyrock.com'."\n";
    } else {
      echo "Le nom d'utilisateur ou le mot de passe est incorrect"."\n";
    }
}
?>