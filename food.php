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
    <link rel="stylesheet" href="css/food-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header -->
    <?php include("header-food.php") ?>

    <!-- main -->
    <main>
        <nav class="navbar navbar-light search-food">
            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!-- Start menu food -->
        <div class="container-fluid ctn-fluid-main">
            <h2>Food Menu</h2>

            <div class="container">
                <div class="row row-ctn">
                    <div class="col-6">
                        <div class="row food-item">
                            <div class="col-3 food-item-img">
                                <img src="img/food/momo.jpg" class="img-fluid" alt="...">
                            </div>

                            <div class="col food-item-infor">
                                <h6>Dumplings Specials</h6>
                                <p>$5.00</p>
                                <p>Chicken Dumpling with herbs from Mountains </p>
                                <a href="./order.php" type="button" class="btn btn-primary">Order Now</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-6">
                        <div class="row food-item">
                            <div class="col-3 food-item-img">
                                <img src="img/food/burger.jpg" class="img-fluid" alt="...">
                            </div>

                            <div class="col food-item-infor">
                                <h6>Best Burger</h6>
                                <p>$4.00</p>
                                <p>Burger with Ham, Pineapple and lots of Cheese.</p>
                                <a href="./order.php" type="button" class="btn btn-primary">Order Now</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row row-ctn">
                    <div class="col-6">
                        <div class="row food-item">
                            <div class="col-3 food-item-img">
                                <img src="img/food/pizza.jpg" class="img-fluid" alt="...">
                            </div>

                            <div class="col food-item-infor">
                                <h6>Smoky BBQ Pizza</h6>
                                <p>$6.00</p>
                                <p>Best Firewood Pizza in Town.</p>
                                <a href="./order.php" type="button" class="btn btn-primary">Order Now</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-6">
                        <div class="row food-item">
                            <div class="col-3 food-item-img">
                                <img src="img/food/momo.jpg" class="img-fluid" alt="...">
                            </div>

                            <div class="col food-item-infor">
                                <h6>Sadeko Momo</h6>
                                <p>$6.00</p>
                                <p>Best Spicy Momo for Winter</p>
                                <a href="./order.php" type="button" class="btn btn-primary">Order Now</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row row-ctn">
                    <div class="col-6">
                        <div class="row food-item">
                            <div class="col-3 food-item-img">
                                <img src="img/food/pizza.jpg" class="img-fluid" alt="...">
                            </div>

                            <div class="col food-item-infor">
                                <h6>Mixed Pizza</h6>
                                <p>$10.00</p>
                                <p>Pizza with chicken, Ham, Buff, Mushroom and Vegetables</p>
                                <a href="./order.php" type="button" class="btn btn-primary">Order Now</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-6">
                        <div class="row food-item">
                            <div class="col-3 food-item-img">
                                <img src="img/food/burger.jpg" class="img-fluid" alt="...">
                            </div>

                            <div class="col food-item-infor">
                                <h6>Mixed Burger</h6>
                                <p>$9.00</p>
                                <p>Burger max ngonn</p>
                                <a href="./order.php" type="button" class="btn btn-primary">Order Now</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>


        </div>
        <!--  -->
    </main>

    <!-- footer -->

    <?php include("footer-food.php") ?>

    <!-- Đặt Jquery trước Bootstrap -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>