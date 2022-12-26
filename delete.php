<?php

$conn = mysqli_connect("localhost", "root", "", "practice");
if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
}

    $sql = "DELETE   FROM itog  ";
if(mysqli_query($conn, $sql)){

    require 'info.php';
    echo "<script>alert(\"Вы отключили все тарифы.\");</script>";
} else{
echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);

?>