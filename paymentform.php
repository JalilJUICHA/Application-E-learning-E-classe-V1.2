<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LEARNING-APPLICATION /paymentform</title>
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
                
                <form action="">
                    <div class=" d-flex flex-column text-muted ">
                        <label for="" class="col-form-label">Name</label>
                        <input type="text" placeholder="Enter your Name"
                            class="w-100 rounded-3 border  p-2 bg-transparent form-control">
                    </div>
                    <div class=" d-flex flex-column text-muted mt-3 text">
                        <label for="">Payment Shedule</label>
                        <input type="date" placeholder="Enter your Payment Shedule"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                    </div>
                   <div class=" d-flex flex-column text-muted mt-3 text">
                        <label for="">Bill Number</label>
                        <input type="number" placeholder="Enter The Bill Number"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                    </div>
                    <div class=" d-flex flex-column text-muted mt-3 text">
                        <label for="">Amounts Paid</label>
                        <input type="number" placeholder="Enter The Paid Amount"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                    </div>
                    
                    <div class=" d-flex flex-column text-muted mt-3 text">
                        <label for="">Balance Amount</label>
                        <input type="number" placeholder="Enter The Balance Amount"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                    </div>
                    <div class=" d-flex flex-column text-muted mt-3 text">
                        <label for="">Date</label>
                        <input type="Date" placeholder="Enter The Date"
                            class="w-100 rounded-3 border p-2 bg-transparent form-control">
                    </div>
                    <div class="mt-3">
                        <a href="dashboard.php" class="btn btn-info w-100 rounded-3 border-1 text-white text-uppercase"> Submit </a>
                    </div>
                    
                    </form>
                    
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
</body>

</html>




