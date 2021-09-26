<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.css">
    <!-- css nên đặt đây để ghi đè các tác động của CSS bootstrap -->
    <link rel="stylesheet" href="../css/manage-order-style.css">
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

            <table class="table align-middle">
                <thead>
                    <tr>

                        <th class="col" scope="col">S.N</th>
                        <th class="col" scope="col">Title</th>
                        <th class="col" scope="col">Price</th>
                        <th class="col" scope="col">Qty.</th>
                        <th class="col" scope="col">Total</th>
                        <th class="col" scope="col">Order Date</th>
                        <th class="col" scope="col">Status</th>



                        <th class="col" scope="col">Customer Name</th>
                        <th class="col" scope="col">Contact</th>
                        <th class="col" scope="col">Email</th>
                        <th class="col" scope="col">Address</th>
                        <th class="col" scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mixed Pizza</td>
                        <td>$10.00</td>
                        <td>2</td>
                        <td>$20.00</td>
                        <td>2020-11-30 04:07:17</td>
                        <td>
                            <label for="" style="color:green;">Delivered</label>
                        </td>
                        <td>Jana Bush</td>
                        <td>+1 (562) 101-2028</td>
                        <td>tydujy@mailinator.com</td>
                        <td>Minima iure ducimus</td>
                        <td>
                            <a href="" class="btn-secondary">Update Order</a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td>Best Burger</td>
                        <td>$4.00</td>
                        <td>4</td>
                        <td>$16.00</td>
                        <td>2020-11-30 03:52:43</td>
                        <td>
                            <label for="" style="color:green;">Delivered</label>
                        </td>
                        <td>Kelly Dillard</td>
                        <td>+1 (908) 914-3106</td>
                        <td>fexekihor@mailinator.com</td>
                        <td>MIncidunt ipsum ad d</td>
                        <td>
                            <a href="" class="btn-secondary">Update Order</a>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td>Sadeko Momo</td>
                        <td>$6.00</td>
                        <td>3</td>
                        <td>$18.00</td>
                        <td>2020-11-30 03:49:48</td>
                        <td>
                            <label for="" style="color:red;">Cancelled</label>
                        </td>
                        <td>Bradley Farrell</td>
                        <td>+1 (576) 504-4657</td>
                        <td>zuhafiq@mailinator.com</td>
                        <td>Duis aliqua Qui lor</td>
                        <td>
                            <a href="" class="btn-secondary">Update Order</a>
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