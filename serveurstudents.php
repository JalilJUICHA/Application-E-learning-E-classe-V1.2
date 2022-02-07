<?php
  require_once 'configdata/config.php';

  if(isset($_POST['save'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $number = $_POST['number'];

        $sql = "INSERT INTO `students` (name, email, phone, enroll_number ) 
            VALUES ('$name', '$email', '$phone', '$number')"; 
        if(!mysqli_query($config,$sql)){
            die('impossible d’ajouter cet enregistrement : ' . mysqli_error());
        }

    // echo "L’enregistrement est ajouté ";

        header('location: students.php');
    }
?>