<?php
    require_once 'configdata/config.php';

    $students_sql = "SELECT COUNT(id) FROM students";
    $students_query = mysqli_query($config, $students_sql);
    $students_num = mysqli_fetch_array($students_query);

    $courses_sql = "SELECT COUNT(id) FROM courses";
    $courses_query = mysqli_query($config, $courses_sql);
    $courses_num = mysqli_fetch_array($courses_query);

    $payment_sql = "SELECT SUM(amounts_paid) FROM payments_details";
    $payment_query = mysqli_query($config, $payment_sql);
    $payment_sum = mysqli_fetch_array($payment_query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LEARNING-APPLICATION /Dashboard</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <section class="container-fluid">
        <div class="row">
        <!-- Side Bar -->

        <?php include "include/sideBar.php"  ?>
        
            <div class="col-10">
                <!-- Nav Bar -->
               <?php include "include/navBar.php" ?>
               
                <!-- Content -->
                <div class="row mt-3 ">
                    <div class="col-sm-10 col-md-5 col-lg-3">
                        <div class="card" style="font-size: 1.5rem; background-color: #F0F9FF
                        ; color: #74C1ED;">
                            <div class="card-body">
                                <i class="fa fa-graduation-cap fa-lg"></i>
                                <p class="text-muted ">Students</p>
                                <p class="fa-xs d-flex justify-content-end text-dark fw-bold fs-5">
                                    <?php
                                        echo $students_num[0];
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-5 col-lg-3">
                        <div class="card" style="font-size: 1.5rem; background-color: #FEF6FB
                        ; color: #EE95C5;">
                            <div class="card-body">
                                <i class="fa fa-bookmark fa-lg"></i>
                                <p class="text-muted">Course</p>
                                <p class="d-flex justify-content-end text-dark fw-bold fs-5">
                                <?php
                                        echo $courses_num[0];
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-5 col-lg-3">
                        <div class="card" style="font-size: 1.5rem; background-color: #FEFBEC
                        ; color: #00C1FE;">
                            <div class="card-body">
                                <i class="fa fa-usd" aria-hidden="true"></i>
                                <p class="text-muted">Payments</p>
                                <p class="fa-xs d-flex justify-content-end text-dark fw-bold fs-5">
                                <?php
                                        echo $payment_sum[0];
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-5 col-lg-3">
                        <div class="card bg-primary" style="font-size: 1.5rem;
                        ; color: #fff;">
                            <div class="card-body">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <p class="text-muted">Users</p>
                                <p class="fa-xs d-flex justify-content-end text-dark fw-bold fs-5">
                                    3
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
</body>

</html>