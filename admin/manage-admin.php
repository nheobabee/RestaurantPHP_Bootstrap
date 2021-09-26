<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
    <!-- css nên đặt đây để ghi đè các tác động của CSS bootstrap -->
    <link rel="stylesheet" href="../css/manage-admin-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header -->
    <?php include("header-admin.php") ?>
    <main>
        <div class="container">
            <h2 class="title_manage">Manage Users</h2>
            <br>
            <br>
            <a href="" class="btn-primary">Add New User</a>
            <br>
            <br>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Sasha Mendez</td>
                        <td>goxemyde</td>
                        <td>
                            <a href="" class="btn-primary">Change PassWord</a>
                            <a href="" class="btn-success">Update Admin</a>
                            <a href="" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Sasha Mendez</td>
                        <td>goxemyde</td>
                        <td>
                            <a href="" class="btn-primary">Change PassWord</a>
                            <a href="" class="btn-success">Update Admin</a>
                            <a href="" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Sasha Mendez</td>
                        <td>goxemyde</td>
                        <td>
                            <a href="" class="btn-primary">Change PassWord</a>
                            <a href="" class="btn-success">Update Admin</a>
                            <a href="" class="btn-danger">Delete Admin</a>
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