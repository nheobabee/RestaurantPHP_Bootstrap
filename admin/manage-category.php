<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
    <!-- css nên đặt đây để ghi đè các tác động của CSS bootstrap -->
    <link rel="stylesheet" href="../css/manage-category-style.css">
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
            <a href="" class="btn-primary btn_add">Add Category</a>
            <br>
            <br>
            <table class="table align-middle">
                <thead>
                    <tr>

                        <th class="col-sm-1" scope="col">S.N</th>
                        <th class="col-sm-3" scope="col">Title</th>
                        <th class="col-sm-3" scope="col">Image</th>
                        <th class="col-sm-1" scope="col">Featured</th>
                        <th class="col-sm-1" scope="col">Active</th>
                        <th class="col-sm-3" scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Pizza</td>
                        <td>
                            <img src="../img/category/cate_pizza.jpg" class="img-fluid" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-primary">Update Category</a>

                            <a href="" class="btn-danger">Delete Category</a>
                        </td>

                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>Burger</td>
                        <td>
                            <img src="../img/category/cate-burger.jpg" class="img-fluid" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-primary">Update Category</a>

                            <a href="" class="btn-danger">Delete Category</a>
                        </td>

                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td>Momo</td>
                        <td>
                            <img src="../img/category/cate_momo.jpg" class="img-fluid" alt="">
                        </td>
                        <td>No</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-primary">Update Category</a>

                            <a href="" class="btn-danger">Delete Category</a>
                        </td>

                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td>Quia est ipsum id id</td>
                        <td>
                            <img src="../img/category/food-order-website.jpg" class="img-fluid" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="" class="btn-primary">Update Category</a>

                            <a href="" class="btn-danger">Delete Category</a>
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