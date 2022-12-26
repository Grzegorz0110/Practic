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
    <a href="index.html"><img src="img/logo.png"></a>
    <div class="service_area">
        <div class="container">
            <div class="row">

                <form style="padding: 10px 10px; border-radius: 10px;">
                    <?php $conn = new mysqli("localhost", "root", "", "practice");

                    $sql = "SELECT * FROM lichnoe";
                    $result = $conn->query($sql);
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<div class='col-xl-4 col-md-4'>";
                        echo "<div class='single_service text-center'>";
                        echo "<div class='icon'>";
                        echo "</div>";
                        echo "<h3>Лицевой счет: </h3>";
                        echo "<output>" . "  " . $row['clientnum'] . "</output>";
                        echo "<br><h3>ФИО абонента: </h3>";
                        echo "<output>" . "  " . $row['name'] . "</output>";
                        echo "<br><h3>Ваш баланс: </h3>";
                        echo "<output>" . "  " . $row['balance'] . " руб." . "</output>";
                        echo "</div>";
                        echo "</div>";
                    }
                    ?>
                </form>
                <div class="col">
                    <a href="podkl.php" class="btn btn-success">Подключиться</a>
                    <a href="mytarif.php" class="btn btn-primary">Мои тарифы</a>
                    <form action='delete.php' method='post'>
                        <input type='hidden' name='id' value='" . $row["iditog"] . "' />
                        <input type='submit' value='Отключение'>
                    </form>
                </div>
            </div>

        </div>

    </div>
    </div>
    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-65">
                        <span>Предоставляемые услуги</span>
                        <h3>Интернет и цифровые сервисы</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                        </div>
                        <h3>Название тарифа:Игровой</h3>
                        <p>Скорость:800 Мб/сек</p>
                        <p>Стоимость (в мес.):990₽</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                        </div>
                        <h3>Название тарифа:Домашний интернет</h3>
                        <p>Скорость:200 Мб/сек</p>
                        <p>Стоимость (в мес.):200₽</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                        </div>
                        <h3>Название тарифа:Беспонтовый</h3>
                        <p>Скорость:300 Мб/сек</p>
                        <p>Стоимость (в мес.):300₽</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ service_area  -->

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