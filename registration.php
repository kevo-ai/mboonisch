<?php

  $conn = mysqli_connect('localhost', 'root', '', 'mbooni');

  if (isset($_POST['submit'])) {
  	$stdname = $_POST['stdname'];
  	$email = $_POST['email'];
  	$no = $_POST['no'];
  } 

  $sql = "INSERT INTO data (stdname, email, no) VALUES ('$stdname', '$email', '$no')";
  mysqli_query($conn, $sql);

?>