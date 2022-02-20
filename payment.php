<?php
    require_once 'configdata/config.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LEARNING-APPLICATION /Payment</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.css">
    <script src="bootstrap5/js/bootstrap.min.js"></script>
    <script src="bootstrap5/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="container-fluid">
        <div class="row flex-nowrap">
          <?php include "include/sideBar.php"  ?>

          
          
            <div class="col-10">

            <?php include "include/navBar.php" ?>

                <!-- ============================= -->
                <div class="row mt-5 flex-row">
                    <div class="col-10  d-flex flex-nowrap justify-content-between w-100">
                        <h2>Payment List</h2>
                        <div style="font-size: 1.3rem;">
                            <i class="fa fa-chevron-up fs-6 "  aria-hidden="true"></i>

                            <a href="paymentform.php" class="btn btn-primary text-uppercase">Add New Payment</a>
                        </div>
                    </div>
                    <hr class="m-auto" style="width: 100%;">
                </div>

               
                <div style="height:70vh;" class="row mt-2 px-5 table-responsive">
                    <table class="table">
                       
                    <thead>
                            <tr class="">
                                <th scope="col">Name</th>
                                <th scope="col">Payment Shedule</th>
                                <th scope="col">Bill Number</th>
                                <th scope="col">Amounts Paid</th>
                                <th scope="col">Balance Amount</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody> 
                        <?php $results = mysqli_query($config, "SELECT id, name, payment_shedule, bill_number,
                                                 amounts_paid, balance_amount  from payments_details order by id DESC"); 
                        while($Payment = mysqli_fetch_array($results)) {?>
                                
                                <tr class=" bg-white  mb-3 align-middle border-5 border-light ">
                                    <td><?php echo $Payment['name'] ?></td>
                                    <td><?php echo $Payment['payment_shedule'] ?></td>
                                    <td><?php echo $Payment['bill_number'] ?></td>
                                    <td><?php echo $Payment['amounts_paid'] ?></td>
                                    <td><?php echo $Payment['balance_amount'] ?></td>
                                    
                                    
                                   
                                </tr>
                                <?php } ?>
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