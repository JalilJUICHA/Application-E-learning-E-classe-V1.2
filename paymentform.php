<?php
  require_once 'configdata/config.php';

  if(isset($_POST['save'])){

        $name = $_POST['name'];
        $payment_shedule = $_POST['payment_shedule'];
        $bill_number = $_POST['bill_number'];
        $amounts_paid = $_POST['amounts_paid'];
        $balance_amount = $_POST['balance_amount'];
        $date = $_POST['date'];
        $sql = "INSERT INTO `payments_details` (name, payment_shedule, bill_number, amounts_paid, 
        balance_amount) 
            VALUES ('$name', '$payment_shedule', '$bill_number', '$amounts_paid', '$balance_amount')"; 
        if(!mysqli_query($config,$sql)){
            die('impossible d’ajouter cet enregistrement : ' . mysqli_error());
            
        }
         header('location:payment.php');
        
    // echo "L’enregistrement est ajouté ";

       
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LEARNING-APPLICATION /Paymentform</title>
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
                <div class="row mt-5 flex-row">
                    <div class="col-10  d-flex flex-nowrap justify-content-between w-100">
                        <h2>Payment List</h2>
                    </div>
                
                <form action="paymentform.php" method="POST">
                    <div class=" d-flex flex-column text-muted ">
                        <label for="" class="col-form-label">Name</label>
                        <input type="text" name="name" placeholder="Enter your Name"
                            class="w-100 rounded-3 border  p-2 bg-transparent form-control">
                    </div>
                    <div class=" d-flex flex-column text-muted mt-3 text">
                        <label for="">Payment Shedule</label>
                        <input type="date"  name="payment_shedule" placeholder="Enter your Payment Shedule"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                    </div>
                   <div class=" d-flex flex-column text-muted mt-3 text">
                        <label for="">Bill Number</label>
                        <input type="number" name="bill_number" placeholder="Enter The Bill Number"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                    </div>
                    <div class=" d-flex flex-column text-muted mt-3 text">
                        <label for="">Amounts Paid</label>
                        <input type="number" name="amounts_paid" placeholder="Enter The Paid Amount"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                    </div>
                    
                    <div class=" d-flex flex-column text-muted mt-3 text">
                        <label for="">Balance Amount</label>
                        <input type="number"  name="balance_amount"placeholder="Enter The Balance Amount"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                    </div>
                   
                    <div class="mt-3">
                    
                     <button type="submit" href="payment.php" class="btn btn-info w-100 rounded-3 border-1 text-white text-uppercase" value="Submit" name="save">Save</button>
                    </div>
              
                    
                    
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
</body>

</html>




