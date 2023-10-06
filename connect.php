<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $college = $_POST['college'];
    $branch = $_POST['branch'];
    $event = $_POST['event'];


    $conn = new mysqli('localhost', 'root', '', 'spectrum');
    // if($conn -> connection_error){
    //     die('Connection failed : '.$conn->connect_error);
    // }
    // else{
        $stmt = $conn -> prepare("insert into spectrum_info(fname, lname, email, mobile, college, branch, event)
                                values(?, ?, ?, ?, ?, ?, ?)");
        $stmt -> bind_param("sssisss", $fname, $lname, $email, $mobile, $college, $branch, $event);
        $stmt -> execute();
        echo "<h1>Registration successfully</h1>"; 
        $stmt -> close();
        $conn -> close();
    // }
 





?>