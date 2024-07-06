<?php 
session_start();
$t1=$SESSION["name"];
$email=$SESSION["mail"];
$mno=$SESSION["mob"];
$dob=$SESSION["date"];
$bplace=$SESSION["place"];
$add=$SESSION["addr"];
$taluka=$SESSION["tal"];
$dis=$SESSION["dist"];
$caste=$SESSION["cast"];
$subcaste=$SESSION["acast"];
$category=$SESSION["cat"];
$religion=$SESSION["rel"];
$mstatus=$SESSION["ms"];
$pre=$SESSION["institute"];
$preq=$SESSION["preqe"];
$prep=$SESSION["per"];
$c=$SESSION["current"];

$SESSION["name"]=$t1;
$SESSION["mail"]=$email;
$SESSION["mob"]=$mno;
$SESSION["date"]=$dob;
$SESSION["place"]=$bplace;
$SESSION["addr"]=$add;
$SESSION["tal"]=$taluka;
$SESSION["dist"]=$dis;
$SESSION["cast"]=$caste;
$SESSION["acast"]=$subcaste;
$SESSION["cat"]=$category;
$SESSION["rel"]=$Religion;
$SESSION["ms"]=$mstatus;
$SESSION["institute"]=$pre;
$SESSION["preqe"]=$preq;
$SESSION["per"]=$prep;
$SESSION["current"]=$c;
$SESSION["name"]=$_POST["pname"];
$SESSION["mail"]=$_POST["padd"];
$SESSION["mob"]=$_POST["ptal"];
$SESSION["date"]=$_POST["pdis"];
$SESSION["place"]=$_POST["pdis"];
$SESSION["addr"]=$_POST["pmno"];
$SESSION["tal"]=$_POST["prel"];
$SESSION["dist"]=$_POST["po"];
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
   background:rgb(70,130,180);
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
     font-size:28;
   }
.a2{
     font-family:Bell MT;
     font-size:23;
     background-color:#ddd;
     background:#f1f1f1;
     border:none;
     padding:10px;
   }
.a3{
     font-family:Bell MT;
     font-size:25;
   }
.a4{
     background-color:dodgerblue;
     color: white;
     border: none;
     font-size:25;
    }
.a5{
      align:center;
      width:55%;
      height:50%;
      padding-left:22%;
   }
</style>
</head>
<body style="background-image:url(background1.jpg)"> 
<div class="menu-bar">
<table width="85%" height="50" style="background-image:url(background1.jpg);color:white" align="left">
<tr>
<td><a href="Home.html">HOME</a>
<td><a href="About.html">ABOUT US</a>
<td><a href="Facilities.html">FACILITIES</a>
<td><a href="Activities.html">ACTIVITIES</a>
<td><a href="strength.html">STRENGTH</a>
<td><a href="committee.html">COMMITTEE</a>
<td><a href="rules.html">RULES AND REGULATIONS</a>
<td><a href="#"><i class="fa-solid fa-bars"></i></a>
<div class="sub-menu">
<ul>
  <li><a href="s_profile.html">My Profile</a></li>
  <li><a href="add_form.html">Addmission Form</a></li>
  <li><a href="leave.html">View My Form</a></li>
  <li><a href="home.html">Log Out</a></li>
</ul>
</div>
</tr>
</table>
</div>
<table width="100%">
<tr>
<img src="background2.jpg" width="100%" height="7">
</tr>
</table>
<br><br>
<div class="a5">
<form method="post" action="form4.php" align="center" style="background-color:white">
<br>
<h1 align="center" class="a1">ROOM DETAILS</h1>
<lable for="rno" class="a3">Room No</lable>
<select name="rno" id="rno" class="a2" style="padding-right:57%" required>
<option value="Select Room No">Select Room No</option>
<?php
   $con=mysql_connect("localhost","root","");
   mysql_query("use project1");
    if($con==false)
    {
       die("Error in Database Connection");
    }
    $res=mysql_query("select * from room where allocated_stud<3;");
    echo("<tr bgcolor='white'><th style='color:brown;font-size:20'>Name<th style='color:brown;font-size:20'>Email<th style='color:brown;font-size:20'>Mobile_No<th style='color:brown;font-size:20'>Birth_Date<th style='color:brown;font-size:20'>Password</tr>");
    while($row=mysql_fetch_array($res))
    {
            echo("<option>$row[1]</option>");
    }
    echo("</table>");
    mysql_close($con);
?>
</select><br><br>
<lable for="bno" class="a3">Bed No</lable>
<select name="bno" id="bno" class="a2" style="padding-right:60%" required>
<option value="Select Room No">Select Room No</option>
<?php
   $con=mysql_connect("localhost","root","");
   mysql_query("use project1");
    if($con==false)
    {
       die("Error in Database Connection");
    }
    $res=mysql_query("select * from bed where stud_id=NULL;");
    echo("<tr bgcolor='white'><th style='color:brown;font-size:20'>Name<th style='color:brown;font-size:20'>Email<th style='color:brown;font-size:20'>Mobile_No<th style='color:brown;font-size:20'>Birth_Date<th style='color:brown;font-size:20'>Password</tr>");
    while($row=mysql_fetch_array($res))
    {
        while(!row)
        {
          echo("<option value='$row[1]')>$row[1]</option>
        }

    }
    echo("</table>");
    mysql_close($con);
?>
</select><br><br>

<input type="submit" name="s2"class="a4" value="Next">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="reset" class="a4" value="back">
<br><br>
</form>
</div>
</body>
</html>

