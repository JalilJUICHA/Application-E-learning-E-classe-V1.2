<?php
  $conn = new mysqli('localhost', 'root','', 'e_classe_db');

  if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $conn->query("DELETE FROM courses WHERE id=$id") or die($conn->error());
    echo "<script>window.location.replace('courses.php')</script>";
  }
?>