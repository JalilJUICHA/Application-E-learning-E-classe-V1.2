<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LEARNING-APPLICATION /Studentsform</title>
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
                        <h2>Students List</h2>
                    </div>
                    <?php
                        include 'configdata/config.php';
                        $id = $_GET['edit'];
                        $sql = "SELECT * FROM students WHERE id = $id";
                        $resultat = mysqli_query($config , $sql);
                        $new = mysqli_fetch_assoc($resultat);
                    ?>

                    <form method="POST">
                        <div class=" d-flex flex-column text-muted ">
                            <label for="" class="col-form-label">Name</label>
                            <input type="text" id="name" name="name" value="<?php echo $new['name'];?>"
                                class="w-100 rounded-3 border  p-2 bg-transparent form-control">
                        </div>
                        <div class=" d-flex flex-column text-muted mt-3 text">
                            <label for="">Email</label>
                            <input type="email" id="email" name="email" value="<?php echo $new['email'];?>"
                                class="w-100 rounded-3 border p-2 bg-transparent form-control">
                        </div>
                        <div class=" d-flex flex-column text-muted mt-3 text">
                            <label for="">Phone</label>
                            <input type="number" id="phone" name="phone" value="<?php echo $new['phone'];?>"
                                class="w-100 rounded-3 border p-2 bg-transparent form-control">
                        </div>
                        <div class=" d-flex flex-column text-muted mt-3 text">
                            <label for="">Enroll Number</label>
                            <input type="number" id="number" name="enroll_number" value="<?php echo $new['enroll_number'];?>"
                                class="w-100 rounded-3 border p-2 bg-transparent form-control">
                        </div>
                        <div class=" d-flex flex-column text-muted mt-3 text">
                            <label for="date_of_admission">Date Of Admission</label>
                            <input type="date" id="number" name="date_of_admission"
                            value="<?php echo $new['date_of_admission'];?>"
                                class="w-100 rounded-3 border p-2 bg-transparent form-control">
                        </div>

                        <div class="mt-3">
                        
                            <button type="submit"
                                class="btn btn-info w-100 rounded-3 border-1 text-white text-uppercase" value="Submit"
                                name="submit">Save</button>
                        </div>
                        <?php
                            if(isset($_POST['submit'])){
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $phone = $_POST['phone'];
                                $enroll_number= $_POST['enroll_number'];
                                $date_of_admission = $_POST['date_of_admission'];
                                $query = "UPDATE students set id = $id , name='$name',email='$email',phone='$phone',enroll_number='$enroll_number',date_of_admission='$date_of_admission' where id='$id'";
                                $resultat=mysqli_query($config,$query);
                                echo '<script>window.location.href = "students.php";</script>';
                                mysqli_close($config,$query);
                            }
                        ?>

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