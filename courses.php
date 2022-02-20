<?php
    require_once 'configdata/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LEARNING-APPLICATION /Courses</title>
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

          <div class="col-10">

            <?php include "include/navBar.php" ?>

                <!-- ============================= -->
                <div class="row mt-5 flex-row">
                    <div class="col-10  d-flex flex-nowrap justify-content-between w-100">
                        <h2>Courses List</h2>
                        <div style="font-size: 1.3rem;">
                            <i class="fa fa-chevron-up fs-6 "  aria-hidden="true"></i>

                            <a href="coursesform.php" class="btn btn-primary text-uppercase">Add New Courses</a>
                        </div>
                    </div>
                    <hr class="m-auto" style="width: 100%;">
                </div>
                <div style="overflow-y: scroll; overflow-x: hidden">
                    <div style="height:70vh;" class="row mt-2 px-5 table-responsive">
                        <table class="table">
                        <thead>
                            <tr class="">
                                <th scope="col">Courses Name</th>
                                <th scope="col">Date</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php $results = mysqli_query($config, "SELECT id, courses_name, date  from courses order by id DESC;"); 
                        while($Courses = mysqli_fetch_array($results)) {?>
                                <tr class=" bg-white  mb-3 align-middle border-5 border-light ">
                                    <td><?php echo $Courses['courses_name'] ?></td>
                                    <td><?php echo $Courses['date'] ?></td>
                                    
                                    <td class="d-flex fs-4 text-info border-0 text-end">
                                        <a href="editcourses.php?edit=<?php echo $Courses['id'] ?>"
                                            class="edit_btn"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="deletecourses.php?del=<?php echo $Courses['id'] ?>"
                                            class="del_btn"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
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
