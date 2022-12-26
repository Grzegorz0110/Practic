<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Melan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>

    <div class="site-section">
        <div class="container">
  
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-10">
              <div class="heading-39101 mb-5">
                <h3>Подключение:</h3>
              </div>
            </div>
          </div>
         
          <div class="row">
            <div class="col-lg-8 mb-5" >
              <form action="zakaz.php" method="post">
                   <div class="form-group">
                            <label for="exampleFormControlSelect1">Выберите заказчика</label>

                            <?php $conn = new mysqli("localhost", "root", "", "practice");

                            $sql = "SELECT * FROM lichnoe";
                            $sql2 = "SELECT * FROM tarifs";
                            $result = $conn->query($sql);
                            $result2 = $conn->query($sql2);

                            echo "<select name='name' class='form-control'><option>Выберите...</option>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<option>" . $row['name'] . "</option>";
                            }
                            echo "</select>";
                            echo "</div>";
                            echo "<div class='form-group'>";
                            echo "<label for='exampleFormControlInput3'>Выберите тариф</label>";
                            echo "<select name='tarif' class='form-control'><option>Выберите...</option>";
                            while ($row = mysqli_fetch_array($result2)) {
                                echo "<option>" . $row['nametarif'] . "</option>";
                            }
                            echo "</select>";
                            echo "</div>";
                            ?>

                        <div class="form-group">
                            <label for="exampleFormControlInput3">Номер телефона</label>
                            <input id="phone" name="phone" type='text' onkeypress='validate(event)' class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Адрес подключения</label>
                            <input id="time" name="address" type='text' class="form-control" placeholder="г Санкт-Петербург, пр Большевиков, д 22">
                        </div>
                        <input type="submit" value="Отправить" class="btn btn-success">
                    </form>
                    </div>
            <div class="col-lg-4 ml-auto">
            </div>
          </div>
          
        </div>
      </div>


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>