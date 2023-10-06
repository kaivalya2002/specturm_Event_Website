<?php

  $subject=$_POST['subject'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $mob = $_POST['mob'];
  $msg = $_POST['msg'];
  $conn = mysqli_connect('localhost', 'root', '', 'spectrum');

  $result =mysqli_query($conn,"insert into contactus(subject, fname, lname, email, mobile, message)
    values('$subject', '$fname', '$lname', '$email', $mob, '$msg')");
    if($result){
        echo "<h1>Your Response got Successfully .</h1>"; 

    }
//   $stmt = $conn -> prepare("insert into contactus(subject, fname, lname, email, mobile, message)
//   values(?, ?, ?, ?, ?, ?)");
// $stmt -> bind_param("sssisss", $subject,$fname, $lname, $email, $mob, $msg);
// $stmt -> execute();

// $stmt -> close();
// $conn -> close();

?>