<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
    <!-- css nên đặt đây để ghi đè các tác động của CSS bootstrap -->
    <link rel="stylesheet" href="../css/dashboard-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <header>
        <div class="container-fluid container__header">

            <!-- 1 row = 12 slot -->

            <nav class="navbar navbar-expand-lg">
                <div class="container navbar_header">
                    <a class="navbar-brand" href="./index.php">Home</a>
                    <a class="navbar-brand" href="./manage-admin.php">Admin</a>
                    <a class="navbar-brand" href="./manage-category.php">Categories</a>
                    <a class="navbar-brand" href="./manage-food.php">Food</a>
                    <a class="navbar-brand" href="./manage-order.php">Order</a>
                    <a class="navbar-brand" href="#">Logout</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Dat jquery truoc bootstrap -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>