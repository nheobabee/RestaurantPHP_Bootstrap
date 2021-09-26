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
    <link rel="stylesheet" href="css/index-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header -->
    <?php include("header-food.php") ?>
    <!-- main -->
    <main>
        <!-- start: search-food -->
        <nav class="navbar navbar-light search-food">
            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!-- end: search-food -->

        <!-- Start: Categories -->
        <div class="categories">
            <h2 class="categories__title ">Explore Food</h2>
            <div class="container container__categories">
                <div class="row">
                    <div class="col-md-4 ">
                        <a href="">
                            <div class="categories__img">
                                <img src="img/category/cate-burger.jpg" class="img-fluid" alt="...">

                            </div>
                            <div class="categories__name">
                                <p class="text-center">Burger</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ">
                        <a href="">
                            <div class="categories__img">
                                <img src="img/category/cate_momo.jpg" class="img-fluid" alt="...">

                            </div>
                            <div class="categories__name">
                                <p class="text-center">Momo</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ">
                        <a href="">
                            <div class="categories__img">
                                <img src="img/category/cate_pizza.jpg" class="img-fluid" alt="...">

                            </div>
                            <div class="categories__name">
                                <p class="text-center">Pizza</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: grid explore food -->

        <!-- Start Foodmenu -->
        <div class="foodmenu">

            <div class="container-fluid container__foodmenu">
                <h2 class="foodmenu__title">Food Menu</h2>
                <div class="container ctn__item">
                    <div class="row row__foodmenu_1">
                        <div class="col-6">
                            <div class="row row_in_item">
                                <div class="col-3 col__img">
                                    <img src="img/food/momo.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col col__infor">
                                    <h6>Dumplings Specials</h6>
                                    <p>$5.00</p>
                                    <p>Chicken Dumpling with herbs from Mountains</p>
                                    <a href="./order.php"  type="button"  class="btn btn-primary">Order Now</a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row row_in_item">
                                <div class="col-3 col_img">
                                    <img src="img/food/burger.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col col__infor">
                                    <h6>Best Burger</h6>
                                    <p>$4.00</p>
                                    <p>Burger with Ham, Pineapple and lots of Cheese</p>
                                    <a href="./order.php" type="button" class="btn btn-primary">Order Now</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row row__foodmenu_2">
                        <div class="col-6">
                            <div class="row row_in_item">
                                <div class="col-3 col__img">
                                    <img src="img/food/momo.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col col__infor">
                                    <h6>Sadeko Momo</h6>
                                    <p>$6.00</p>
                                    <p>Best Spicy Momo for Winter</p>
                                    <a href="./order.php" type="button" class="btn btn-primary">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row row_in_item">
                                <div class="col-3 col__img">
                                    <img src="img/food/pizza.jpg" class="img-fluid" alt="...">
                                </div>
                                <div class="col col__infor">
                                    <h6>Mixed Pizza</h6>
                                    <p>$10.00</p>
                                    <p>Pizza with chicken, Ham, Buff, Mushroom and Vegetables</p>
                                    <a href="./order.php" type="button" class="btn btn-primary">Order Now</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="see_all_foods">
                    <a href="">See All Foods</a>
                </div>
            </div>
        </div>
        <!-- End Foodmenu -->
    </main>

    <!-- footer -->
    <?php include("footer-food.php") ?>

    <!-- Đặt Jquery trước Bootstrap -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>