<?php
if (isset($_POST["name"]) && isset($_POST["family"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["tour"])) {
      
    $conn = new mysqli("127.0.0.1", "root", "", "tour");
    if($conn->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $nameclient = $conn->real_escape_string($_POST["name"]);
    $family = $conn->real_escape_string($_POST["family"]);
    $phone = $conn->real_escape_string($_POST["phone"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $tour = $conn->real_escape_string($_POST["tour"]);
    $sql = "INSERT INTO clients (nameclient, family, phone, email, tour) VALUES ('$nameclient', '$family', '$phone', '$email', '$tour')";
    if($conn->query($sql)){
        require 'contact.html';
        echo "<script>alert(\"Ваша заявка принята.\");</script>";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
}
?>
    