<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <!-- css nên đặt đây để ghi đè các tác động của CSS bootstrap -->
    <link rel="stylesheet" href="css/categories-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header -->
    <?php include("header-food.php") ?>


    <main>
        <div class="container ctn-categories">
            <h2 class="food-title">Explore Foods</h2>
            <div class="row food-list">
                <div class="col-sm-4">
                    <a href="">
                        <div class="food-img">
                            <img src="img/category/cate-burger.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="food-text">
                            <p class="text-center">Burger</p>
                        </div>
                    </a>

                </div>

                <div class="col-sm-4">
                    <a href="">
                        <div class="food-img">
                            <img src="img/category/cate_pizza.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="food-text">
                            <p class="text-center">Pizza</p>
                        </div>
                    </a>
                </div>

                <div class="col-sm-4">
                    <a href="">
                        <div class="food-img">
                            <img src="img/category/cate_momo.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="food-text">
                            <p class="text-center">Momo</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row food-order-website">
                <div class="col-sm-4">
                    <a href="">
                        <div class="food-img">
                            <img src="img/category/food-order-website.jpg" class="img-fluid" alt="">
                        </div>

                        <div class="food-text">
                            <p class="text-center">SQL</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->

    <?php include("footer-food.php") ?>
    <!-- Đặt Jquery trước Bootstrap -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>