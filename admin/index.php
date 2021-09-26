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
    <!-- header -->
    <?php include("header-admin.php") ?>

    <!-- main -->
    <main>
        <div class="container main_dashboard">
            <h1>Dashboard</h1>
            <br>
            <label class="success" for="">Login Successful</label>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col">
                    <h2>4</h2>
                    <br>
                    <p>Categories</p>
                </div>

                <div class="col">
                    <h2>6</h2>
                    <br>
                    <p>Foods</p>
                </div>

                <div class="col">
                    <h2>3</h2>
                    <br>
                    <p>Total Orders</p>
                </div>

                <div class="col">
                    <h2>$36.00</h2>
                    <br>
                    <p>Revenue Generated</p>
                </div>
            </div>
        </div>
    </main>


    <!-- footer -->
    <?php include("footer-admin.php") ?>
    <!-- Dat jquery truoc bootstrap -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>