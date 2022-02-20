<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LEARNING-APPLICATION /coursesform</title>
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
                        <h2>Courses List</h2>
                    </div>
                    <?php
                        include 'configdata/config.php';
                        $id = $_GET['edit'];
                        $sql = "SELECT * FROM courses WHERE id = $id";
                        $resultat = mysqli_query($config , $sql);
                        $new = mysqli_fetch_assoc($resultat);
                    ?>

                    <form method="POST">
                        <div class=" d-flex flex-column text-muted ">
                            <label for="" class="col-form-label">courses_name</label>
                            <input type="text" id="courses_name" name="courses_name" value="<?php echo $new['courses_name'];?>"
                                class="w-100 rounded-3 border  p-2 bg-transparent form-control">
                        </div>
                        <div class=" d-flex flex-column text-muted mt-3 text">
                            <label for="">date</label>
                            <input type="date" id="date" name="date" value="<?php echo $new['date'];?>"
                                class="w-100 rounded-3 border p-2 bg-transparent form-control">
                        </div>
                       

                        <div class="mt-3">
                        
                            <button type="submit"
                                class="btn btn-info w-100 rounded-3 border-1 text-white text-uppercase" value="Submit"
                                name="submit">Save</button>
                        </div>
                        <?php
                            if(isset($_POST['submit'])){
                                $courses_name = $_POST['courses_name'];
                                $date = $_POST['date'];
                                
                                $query = "UPDATE courses set id = $id , courses_name='$courses_name',date='$date' where id='$id'";
                                $resultat=mysqli_query($config,$query);
                                echo '<script>window.location.href = "courses.php";</script>';
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