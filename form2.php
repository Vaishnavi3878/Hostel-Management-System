<?php 
session_start();
$SESSION["name"]=$_POST["t1"];
$SESSION["mail"]=$_POST["Email"];
$SESSION["mob"]=$_POST["mno"];
$SESSION["date"]=$_POST["dob"];
$SESSION["place"]=$_POST["bplace"];
$SESSION["addr"]=$_POST["add"];
$SESSION["tal"]=$_POST["taluka"];
$SESSION["dist"]=$_POST["dis"];
$SESSION["cast"]=$_POST["caste"];
$SESSION["acast"]=$_POST["subcaste"];
$SESSION["cat"]=$_POST["category"];
$SESSION["rel"]=$_POST["Religion"];
$SESSION["ms"]=$_POST["mstatus"];
$SESSION["institute"]=$_POST["pre"];
$SESSION["preqe"]=$_POST["preq"];
$SESSION["per"]=$_POST["prep"];
$SESSION["current"]=$_POST["c"];
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
<form method="post" action="form3.php" align="center" style="background-color:white">
<br>
<h1 align="center" class="a1">PARENT INFORMATION</h1>
<lable for="pname" class="a3">Parent Full Name</lable>
<input type="text" placeholder="Enter Parent Full Name" name="pname" id="pname" class="a2" style="padding-right:33%" required><br><br>
<lable for="padd" class="a3">Parent Address</lable>
<input type="text" placeholder="Enter Parent Address" name="padd" id="padd" class="a2" style="padding-right:36%" required><br><br>
<lable for="ptal" class="a3">Taluka</lable>
<input type="text" placeholder="Enter Taluka" name="ptal" id="ptal" class="a2" style="padding-right:47%" required><br><br>
<lable for="pdis" class="a3">District</lable>
<input type="text" placeholder="Enter District" name="pdis" id="pdis" class="a2" style="padding-right:46%" required><br><br>
<lable for="pmno" class="a3">Parent Mobile Number</lable>
<input type="text" placeholder="Enter Parent Mobile No" name="pmno" id="pmno" class="a2" style="padding-right:26%" required><br><br>
<lable for="prel" class="a3">Parent Relation with Student</lable>
<input type="text" placeholder="Enter Relation" name="prel" id="prel" class="a2" style="padding-right:19%" required><br><br>
<lable for="po" class="a3">Parent Occupation</lable>
<input type="text" placeholder="Enter Parent Occupation" name="po" id="po" class="a2" style="padding-right:33%" required><br><br><br>
<input type="submit" name="s2"class="a4" value="Next">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button class="a4" value="Back">Back</button>
<br><br>
</form>
</div>
</body>
</html>

