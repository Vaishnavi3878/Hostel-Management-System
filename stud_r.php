<?php
    $name=test_input($_POST['t1']);
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed";
}
    $email=test_input($_POST['email']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
    $mno=$_POST['mno'];
    $dob=$_POST['dob'];
    $psw=$_POST['psw'];
    $con=mysql_connect("localhost","root","");
    mysql_query("use project1");
    if($con==false)
    {
       die("Error in Database Connection");
    }
    if($name!=null&&$email!=null&&$mno!=null&&$dob!=null&&$psw!=null)
   {
     $k=mysql_query("insert into registration(Name,Email,Mobile_No,Birth_Date,upass) values('$name', '$email', $mno, '$dob', '$psw');");
     if($k==true)
     {
        echo("<script language='javascript'>alert('Registration succesfully.....')</script>");
     }
     else
       echo("<script language='javascript'>alert('Record not inserted.....')</script>");
   }
    mysql_close($con);
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"></link>
<style>
.t2
{
   color:khaki;
   font-size:25;
}
.t1
{
   border-radius:50%;
}
.menu-bar a
{
     color:white;
     font-family:Bell MT;
     text-align:left;
     text-decoration:none;
     margin:10px;
     padding:0;
   }
.sub-menu a
{
     color:white;
     font-family:Bell MT;
     text-decoration:none;
   }
.menu-bar table td
{
   font-size:17;
}
.menu-bar table td:hover
{
   background-color:steelblue;
   border-radius:3px;
}
.sub-menu
{
   display:none;
}
.menu-bar table td:hover .sub-menu
{
   display:block;
   position:absolute;
   background:rgb(70,130,180);;
   margin-top:13px;
   margin-left:-18px;
}
.menu-bar table td:hover .sub-menu ul
{
   display:block;
   margin:10px;
   list-style:none;
}
.menu-bar table td:hover .sub-menu ul li
{
   width:150px;
   padding:10px;
   background:transparent;
   text-align:left;
   font-size:13;
}
.menu-bar table td:hover .sub-menu ul li a:hover
{
   color:cyan;
}
.a1{
      color:black;
     font-family:Bell MT;
     font-size:40;
   }
.a2{
     font-family:Bell MT;
     font-size:20;
     background-color:#ddd;
     background:#f1f1f1;
     border:none;
     padding:10px;
   }
.a3{
     font-family:Bell MT;
     font-size:20;
     padding-right:40%;
   }
.a4{
     background-color:dodgerblue;
     color: white;
     border: none;
     font-size:15;
    }
.a5{
      align:center;
      width:35%;
      height:50%;
      padding-left:30%;
      padding-top:2%;
   }
.a6{
     font-family:Bell MT;
     font-size:25;
     padding-right:30%;
   }
</style>
</head>
<body style="background-image:url(background1.jpg)"> 
<div class="menu-bar">
<table width="85%" height="50" style="background-image:url(background1.jpg);color:white" align="center">
<tr>
<td><a href="Home.html">HOME</a>
<td><a href="About.html">ABOUT US</a>
<td><a href="Facilities.html">FACILITIES</a>
<td><a href="Activities.html">ACTIVITIES</a>
<td><a href="strength.html">STRENGTH</a>
<td><a href="committee.html">COMMITTEE</a>
<td><a href="rules.html">RULES AND REGULATIONS</a>
<td><a href="#">LOGIN</a>
<div class="sub-menu">
<ul>
  <li><a href="stud_l.html">STUDENT LOGIN</a></li>
  <li><a href="admin_l.html">ADMIN LOGIN</a></li>
</ul>
</div>
</tr>
</table>
</div>
<table width="100%" height="27%" style="background-image:url(background.png)">
<tr>
<td width="20%" align="center"><img src="tree.jpg" class="t1">
<td width="60%" align="center"> <font align="center" style="color:grey;font-family:Microsoft uighur;font-size:32"><b>Rayat Shikshan Sanstha's</b></font><br>
<b><font align="center" style="color:red;font-family:Bell MT;font-size:27">CHANDAROOP DAKLE JAIN COLLEGE OF COMMERCE<br>SHRIRAMPUR,DIST:AHMADNAGER<br></b>
<font align="center"style="color:grey;font-family:Microsoft uighur;font-size:22"><b>Established Year:1962</b><br>
<font align="center" style="color:red;font-family:Bell MT;font-size:12;width:80%">Affiliated to Savitribai Phule Pune University - Uni. ID. No. P.U./A.N./C./05(1962) Junior College Code :<br>12.14.002<br>
<font align="center" style="color:red;font-family:Bell MT;font-size:20">NAAC Re-accredited "A" Grade - UGC 2F & 12B Certificate<br>
<td width="20%" align="center"><img src="karmavir.jpg" class="t1">
</tr>
</table>
<table width="100%">
<tr>
<img src="background2.jpg" width="100%" height="10">
</tr>
<tr>
<img src="background1.jpg" width="100%" height="7">
</tr>
</table><br>
<div class="a5">
<form method="post" action="stud_l.php" align="center" style="background-color:white">
<br>
<h1 align="center" class="a1">STUDENT LOGIN</h1>
<lable for="t1" class="a3">Email</lable><br>
<input type="text" placeholder="Enter Email" name="t1" id="t1" class="a2" required></br><br>
<lable for="psw" class="a6">Password</lable><br>
<input type="password" placeholder="Enter Password" name="psw" id="psw" class="a2" required><br><br>
<button type="submit" class="a4">Click to Login</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="submit" class="a4"><a href="forgot.html" style="text-decoration:none;color:white">Forgot Password</a></button>
<p class="message">Do not registered? <a href="stud_r.html">register</a></p>
<br><br>
</form>
</div>
</body>
</html>
