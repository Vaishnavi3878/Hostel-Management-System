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
  <li><a href="room.html">Room Details</a></li>
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

<?php 
$con=mysql_connect("localhost","root","");
    mysql_query("use project1");
    if($con==false)
    {
       die("Error in Database Connection");
    }
   
$res=mysql_query("select * from application;");
    echo("<table width='500%' height='30%' align='center' border='1' bordercolor='white' style='border-collapse:collapse'>");
    echo("<tr bgcolor='white'><th bgcolor='white' style='color:brown;font-size:20'>Application No<th bgcolor='white' style='color:brown;font-size:20'>Name<th bgcolor='white' style='color:brown;font-size:20'>Email<th bgcolor='white' style='color:brown;font-size:20'>Mobile No<th bgcolor='white' style='color:brown;font-size:20'>Birth Date<th bgcolor='white' style='color:brown;font-size:20'>Birth Place<th bgcolor='white' style='color:brown;font-size:20'>Address<th bgcolor='white' style='color:brown;font-size:20'>Taluka<th bgcolor='white' style='color:brown;font-size:20'>District<th bgcolor='white' style='color:brown;font-size:20'>Caste<th bgcolor='white' style='color:brown;font-size:20'>Sub Caste<th bgcolor='white' style='color:brown;font-size:20'>Category<th bgcolor='white' style='color:brown;font-size:20'>Religion<th bgcolor='white' style='color:brown;font-size:20'>Marital Status<th bgcolor='white' style='color:brown;font-size:20'>Previous Institute<th bgcolor='white' style='color:brown;font-size:20'>Previous Qualified Exam<th bgcolor='white' style='color:brown;font-size:20'>Previous Percentage<th bgcolor='white' style='color:brown;font-size:20'>Current Class<th bgcolor='white' style='color:brown;font-size:20'>Parent Name<th bgcolor='white' style='color:brown;font-size:20'>Parent Address<th bgcolor='white' style='color:brown;font-size:20'>Parent Taluka<th bgcolor='white' style='color:brown;font-size:20'>Parent District<th bgcolor='white' style='color:brown;font-size:20'>Parent Mobile No<th bgcolor='white' style='color:brown;font-size:20'>Parent Relation With Student<th bgcolor='white' style='color:brown;font-size:20'>Parent Occupation<th bgcolor='white' style='color:brown;font-size:20'>Room No<th bgcolor='white' style='color:brown;font-size:20'>Bed No <th bgcolor='white' style='color:brown;font-size:20'>Allotment</tr>");
    while($row=mysql_fetch_array($res))
    {        
        echo("<tr><td style='color:lightpink;text-align:center'>".$row[0]);
        echo("<td style='color:lightpink;text-align:center'>".$row[1]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[2]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[3]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[4]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[5]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[6]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[7]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[8]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[9]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[10]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[11]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[12]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[13]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[14]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[15]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[16]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[17]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[18]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[19]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[20]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[21]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[22]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[23]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[24]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[25]);        
        echo("<td style='color:lightpink;text-align:center'>".$row[26]);
        echo("<td style='color:lightpink;text-align:center'><form method='post' action='h_stud1.php'><input type='submit' style='background-color:dodgerblue;color: white;border: none;font-size:25' name='s1' value='Allot'>");
       echo("</tr>");
                              
    }
            
       echo("</table>");
?>
</body>
</html>