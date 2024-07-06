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
.room table td
{
   color:lightpink;
   text-align:center;
   font-size:20;
}
.see
{
   background-color:white;
   color:red;
   text-align:center;
   font-size:20;
}
.see a
{
    color:blue;
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
  <li><a href="view.php">View My Form</a></li>
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
<div class="room">
<table width="50%" height="150%" align="center" border="1" bordercolor="white" style="border-collapse:collapse">
<tr bgcolor='white'>
<h3 align="center"style="color:red;font-family:Bell MT;font-size:23">Only three students allowed in one room</h3><br> 
</tr>
<tr bgcolor='white'>
<th style="color:brown;font-size:23">Room No
<th style="color:brown;font-size:23">Datails
</tr>
<tr>
<td>1
<td>For Rector
</tr>
<tr>
<td>2
<td>For Students
</tr>
<tr>
<td>3
<td>For Students
</tr>
<tr>
<td>4
<td>For Kitchen
</tr>
<tr>
<td>5
<td>For Dining Hall
</tr>
<tr>
<td>6
<td>For Students
</tr>
<tr>
<td>7
<td>For Students
</tr>
<tr>
<td>8
<td>For Students
</tr>
<tr>
<td>9
<td>For Students
</tr>
<tr>
<td>10
<td>For Students
</tr>
<tr>
<td>11
<td>For Students
</tr>
<tr>
<td>12
<td>For Students
</tr>
<tr>
<td>13
<td>For Students
</tr>
<tr>
<td>14
<td>For Students
</tr>
<tr>
<td>15
<td>For Students
</tr>
<tr>
<td>16
<td>For Students
</tr>
<tr>
<td>17
<td>For Students
</tr>
<tr>
<td>18
<td>For Students
</tr>
<tr>
<td>19
<td>For Students
</tr>
<tr>
<td>20
<td>For Students
</tr>
<tr>
<td>21
<td>For Students
</tr>
<tr>
<td>22
<td>For Reading Hall
</tr>
<tr>
<td>23
<td>For Students
</tr>
<tr>
<td>24
<td>For Students
</tr>
<tr>
<td>25
<td>For Gym
</tr>
<tr>
<td>26
<td>For Gym
</tr>
<tr>
<td>27
<td>For Students
</tr>
</table>
</div>
<br>
<div class="see">
See Available Rooms Form Addmission <a href="room_r.php" style="text-decoration:none">&nbsp<i class="fa-solid fa-arrow-right"></i><a>
</div> 
</body>
</html>