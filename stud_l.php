<?php
    $email=$_POST['t1'];
    $psw=$_POST['psw'];
    $con=mysql_connect("localhost","root","");
    mysql_query("use project1");
    if($con==false)
    {
       die("Error in Database Connection");
    }
    $k=mysql_query("select * from registration where Email='$email' AND upass='$psw'");
    if($k==true)
       header("location:student.html");
    else
       echo("Invalid Id or Password...");
    mysql_close($con);
?>
