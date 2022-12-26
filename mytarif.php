<html>

<head>
    <title>Подключение услуг</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
</head>

<body>
    <a href="info.php"><img src="img/logo.png"></a>
    <div class="service_area">
        <div class="container">
            <div class="row">
                <form style="padding: 10px 10px; border-radius: 10px;">
                    <?php $conn = new mysqli("localhost", "root", "", "practice");

                    if ($conn->connect_error) {
                        die("Ошибка: " . $conn->connect_error);
                    }
                    $sql = "SELECT * FROM itog";
                    $result = $conn->query($sql);
                    if ($result->num_rows==0)
                    {
                        echo "У вас нет подключённых тарифов";
                    }

                    if ($result = $conn->query($sql)) {
                        
                        foreach ($result as $row) {
                            echo "<div class='col-xl-4 col-md-4'>";
                        echo "<div class='single_service text-center'>";
                        echo "<div class='icon'>";
                        echo "</div>";
                        echo "<br><h3>ФИО абонента: </h3>";
                        echo "<output>" . "  " . $row['nameclient'] . "</output>";
                        echo "<h3>Тариф: </h3>";
                        echo "<output>" . "  " . $row['tarif'] . "</output>";
                        echo "<br><h3>Телефон: </h3>";
                        echo "<output>" . "  " . $row['phone'] .  "</output>";
                        echo "</div>";
                        echo "</div>";
                        }
                        
                        $result->free();
                    } else {
                        echo "Ошибка: " . $conn->error;
                    }
                   
                    $conn->close();

                    ?>
                    
                </form>
            </div>
        </div>
    </div>
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/jquery.maskedinput.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/aos.js"></script>
</body>
</head>

</html>