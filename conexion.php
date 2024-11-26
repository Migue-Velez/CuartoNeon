<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "guiasinfo";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
} else {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM guias WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        if($email == "daniela@gmail.com"){
            header("Location: edit1.html");
        }elseif($email == "kevin@gmail.com"){
            header("Location: edit2.html");
        }elseif($email == "mariana@gmail.com"){
            header("Location: edit3.html");
        }
    } else { 
        header("Location: ñaoñao.html");
    }
}

?>
