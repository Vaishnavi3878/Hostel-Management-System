<?php
    $id=$_POST['t1'];
    $psw=$_POST['psw'];
    $con=mysql_connect("localhost","root","");
    mysql_query("use project1");
    if($con==false)
    {
       die("Error in Database Connection");
    }
    $k=mysql_query("select * from admin where u_id=$id AND upass='$psw'");
    if($k==true)
       header("location:admin.html");
    else
       echo("Invalid Id or Password...");
    mysql_close($con);
?>