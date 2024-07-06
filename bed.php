<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"></link>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
.a2{
     width:100%;
     height:80%;
     display:block;
     margin-left:auto;
     margin-right:auto;
   }
.menu-bar table td
{
   font-size:17;
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
  <li><a href="room.php">Room Details</a></li>
  <li><a href="add_form1.php">Addmission Form</a></li>
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
</body>
</html>
<?php
   $con=mysql_connect("localhost","root","");
   mysql_query("use project1");
    if($con==false)
    {
       die("Error in Database Connection");
    }
    $res=mysql_query("select * from bed where stud_id=0;");
    echo("<table width='50%' height='250%' align='center' border='1' bordercolor='white' style='border-collapse:collapse'>");
    echo("<tr bgcolor='white'><th style='color:brown;font-size:20'>Bed No<th style='color:brown;font-size:20'>Room No<th style='color:brown;font-size:20'>Student ID</tr>");
    while($row=mysql_fetch_array($res))
    {
        echo("<tr><td style='color:lightpink;text-align:center'>".$row[0]);
        echo("<td style='color:lightpink;text-align:center'>".$row[1]);
        echo("<td style='color:lightpink;text-align:center'>".$row[2]);
        echo("</tr>");
    }
    echo("</table>");
    mysql_close($con);
?>
