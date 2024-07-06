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
  <li><a href="room.php">Room Details</a></li>
  <li><a href="add_form1.php">Addmission Form</a></li>
  <li><a href="view.html">View My Form</a></li>
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
<form method="post" action="add_form3.php" enctype="multipart/form-data" align="center" style="background-color:white">
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
<h1 align="center" class="a1">ROOM DETAILS</h1>
<h3 style="color:red;font-family:Bell MT;font-size:20">Before enter <b>ROOM NUMBER</b> and <b>BED NUMBER</b> please check room deatils.</h3><br>
<lable for="rno" class="a3">Room No&nbsp&nbsp</lable>
<input type="text" class="a2" name="rno" id="rno"style="padding-right:40%" required><br><br>
<lable for="bno" class="a3">Bed No&nbsp&nbsp</lable>
<input type="text" name="bno" id="bno" class="a2" style="padding-right:43%" required><br><br>
<h1 align="center" class="a1">DOCUMENTS</h1>
<lable for="img1" class="a3">Student Photo&nbsp&nbsp</lable>
<input type="file" name="img1" id="img1" class="a2" style="padding-right:18%" required><br><br>
<lable for="img2" class="a3">Student Signature&nbsp&nbsp</lable>
<input type="file" name="img2" id="img2" class="a2" style="padding-right:12%" required><br><br>
<lable for="img3" class="a3">Adhar Card&nbsp&nbsp</lable>
<input type="file" name="img3" id="img3" class="a2" style="padding-right:22%" required><br><br>
<lable for="img4" class="a3">Previous Year Marksheet&nbsp&nbsp</lable>
<input type="file" name="img4" id="img4" class="a2" required><br><br>
<input type="submit" name="s2" class="a4" value="Next">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="reset" class="a4" value="Clear">
<br><br>
</form>
</div>
</body>
</html>
<?php 
session_start();
$_SESSION["name"]=$_POST["t1"];
$_SESSION["mail"]=$_POST["email"];
$_SESSION["mob"]=$_POST["mno"];
$_SESSION["date"]=$_POST["dob"];
$_SESSION["place"]=$_POST["bplace"];
$_SESSION["addr"]=$_POST["add"];
$_SESSION["tal"]=$_POST["taluka"];
$_SESSION["dist"]=$_POST["dis"];
$_SESSION["cast"]=$_POST["caste"];
$_SESSION["scast"]=$_POST["subcaste"];
$_SESSION["cat"]=$_POST["category"];
$_SESSION["rel"]=$_POST["religion"];
$_SESSION["ms"]=$_POST["mstatus"];
$_SESSION["institute"]=$_POST["pre"];
$_SESSION["preqe"]=$_POST["preq"];
$_SESSION["per"]=$_POST["prep"];
$_SESSION["current"]=$_POST["c"];
?>

