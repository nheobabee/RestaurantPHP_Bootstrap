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
    <header>
        <div class="container container__header">
            <div class="row">
                <!-- 1 row = 12 slot -->
                <div class="col-md-6 ">
                   <a href="./index.php">
                        <img src="img/1.png" class="img-fluid" alt="">
                    </a>
                </div>

                <div class="col-md-6">
                    <nav class="navbar navbar-expand-lg navbar-light ">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="./index.php">Home</a>
                            </button>
                            <a class="navbar-brand" href="./categories.php">Categories</a>
                            </button>
                            <a class="navbar-brand" href="./food.php">Foods</a>
                            </button>
                            <a class="navbar-brand" href="#">Contact</a>
                            </button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Đặt Jquery trước Bootstrap -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>