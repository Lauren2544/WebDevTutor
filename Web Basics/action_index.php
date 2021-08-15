<?php


  $servername = "localhost";
  $username = "root";
  $password = "rootpassword";
  $dbname = "web_basics_support";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
	die("connection failed: ". mysqli_connect_error());
  }

  
  $name = $_POST['firstname']; 
  $email = $_POST['email']; 
  $topic = $_POST['topic']; 
  $subject = $_POST['subject']; 

  $sql = "INSERT INTO help (name, email, topic, subject) VALUES ('$name', '$email', '$topic', '$subject')";

  if (!mysqli_query($conn,$sql)) {
	echo "Error: ".$sql . "<br>" . mysqli_error($conn);
  } 


  header("refresh:1; url=index.php");
  mysqli_close($conn);


?>
