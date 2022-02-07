<!--<?php
$data=file_get_contents('payment.json');
$payment=json_decode($data,true);


?>-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LEARNING-APPLICATION /courses</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="container-fluid">
        <div class="row">
          <?php include "include/sideBar.php"  ?>

          <div class="col-lg-10 col-md-8 col-sm-6 col-xs-12">

            <?php include "include/navBar.php" ?>

                <!-- ============================= -->
                <div class="row mt-5 flex-row">
                    <div class="col-10  d-flex flex-nowrap justify-content-between w-100">
                        <h2>Courses List</h2>
                        <div style="font-size: 1.3rem;">
                            <i class="fa fa-chevron-up fs-6 "  aria-hidden="true"></i>

                            <a href="studentsform.php" class="btn btn-primary text-uppercase">add new courses</a>
                        </div>
                    </div>
                    <hr class="m-auto" style="width: 100%;">
                </div>
                <div class="row mt-2 px-2 table-responsive">
                    <table class="table">
                        <thead>
                            <tr class="">
                                <th scope="col">Courses Name</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="flex-column">
                            
                        <!--<?php 
                            foreach ($payment as $value) {                           
                         ?>
                            <tr class="mt-1">
                                <td class="align-middle "><?php echo $value['Courses Name'] ?></td>
                                <td class="align-middle "><?php echo $value['Date'] ?></td>
                                <td class="align-middle "><i class="fa fa-eye" aria-hidden="true"></i></td>
                                  
                            </tr>

                        <?php    

                            }      
                        ?>-->

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
</body>

</html>
