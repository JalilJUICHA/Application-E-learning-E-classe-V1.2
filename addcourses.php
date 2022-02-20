<?php
  require_once 'configdata/config.php';

  if(isset($_POST['save'])){

        $courses_name = $_POST['courses_name'];
        $date = $_POST['date'];
    

        $sql = "INSERT INTO `courses` (courses_name, date) 
            VALUES ('$courses_name', '$date')"; 
        if(!mysqli_query($config,$sql)){
            die('impossible d’ajouter cet enregistrement : ' . mysqli_error());
        }
        
        
    // echo "L’enregistrement est ajouté ";

        header('location: courses.php');
    }
?>