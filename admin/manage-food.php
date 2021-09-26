<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
    <!-- css nên đặt đây để ghi đè các tác động của CSS bootstrap -->
    <link rel="stylesheet" href="../css/manage-food-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header -->
<?php include("header-admin.php") ?>

    <main>
        <div class="container main_content">
            <h2>Manage Category</h2>
            <br>
            <br>
            <a href="" class="btn-primary btn_add">Add Food</a>
            <br>
            <br>
            <table class="table align-middle">
                <thead>
                    <tr>

                        <th class="col-sm-1" scope="col">S.N</th>
                        <th class="col-sm-2" scope="col">Title</th>
                        <th class="col-sm-1" scope="col">Price</th>
                        <th class="col-sm-3" scope="col">Image</th>
                        <th class="col-sm-1" scope="col">Featured</th>
                        <th class="col-sm-1" scope="col">Active</th>
                        <th class="col-sm-3" scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Dumplings Specials</td>
                        <td>$5.00</td>
                        <td>
                            <img src="../img/food/momo.jpg" class="img-fluid" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-primary">Update Food</a>

                            <a href="" class="btn-danger">Delete Food</a>
                        </td>

                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>Best Burger</td>
                        <td>$4.00</td>
                        <td>
                            <img src="../img/food/burger.jpg" class="img-fluid" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-primary">Update Food</a>

                            <a href="" class="btn-danger">Delete Food</a>
                        </td>

                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td>Smoky BBQ Pizza</td>
                        <td>$6.00</td>
                        <td>
                            <img src="../img/food/pizza.jpg" class="img-fluid" alt="">
                        </td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-primary">Update Food</a>

                            <a href="" class="btn-danger">Delete Food</a>
                        </td>

                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td>Sadeko Momo</td>
                        <td>$6.00</td>
                        <td>
                            <img src="../img/food/momo.jpg" class="img-fluid" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-primary">Update Food</a>

                            <a href="" class="btn-danger">Delete Food</a>
                        </td>

                    </tr>

                    <tr>
                        <th scope="row">5</th>
                        <td>Mixed Pizza</td>
                        <td>$10.00</td>
                        <td>
                            <img src="../img/food/pizza.jpg" class="img-fluid" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-primary">Update Food</a>

                            <a href="" class="btn-danger">Delete Food</a>
                        </td>

                    </tr>

                    <tr>
                        <th scope="row">6</th>
                        <td>Sed ipsum cillum in</td>
                        <td>$52.00</td>
                        <td style="color:red;">
                            Image not Added.
                        </td>
                        <td>No</td>
                        <td>No</td>
                        <td>
                            <a href="" class="btn-primary">Update Food</a>

                            <a href="" class="btn-danger">Delete Food</a>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </main>
<!-- footer -->
<?php include("footer-admin.php") ?>
    <!-- Dat jquery truoc bootstrap -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>