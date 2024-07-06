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
        while($row=mysql_fetch_array($res))
    {        
        
        $sql = mysql_query("INSERT INTO hostel_stud(Name,Email,Mobile_No,Birth_Date,Birth_Place,Address,Taluka,District,Caste,Sub_Caste,Category,Religion,M_Status,Pre_Institute,Pre_Quali,Per,Sclass,P_Name,P_Addr,P_Tal,P_Dis,P_Mno,P_Rel,P_Occu,Room_No,Bed_No,Stud_Photo,Stud_Sign,Stud_Adhar,Stud_Marksheet) 
				        VALUES('$row[1]', '$row[2]', '$row[3]', '$row[4]','$row[5]','$row[6]','$row[7]','$row[8]','$row[9]','$row[10]','$row[11]','$row[12]','$row[13]','$row[14]','$row[15]',$row[16],'$row[17]','$row[18]','$row[19]','$row[20]','$row[21]','$row[22]','$row[23]','$row[24]',$row[25],$row[26],'$row[27]','$row[28]','$row[29]','$row[30]');");
				
				                                
                                if($sql==true)
     {
        echo("<script language='javascript'>alert('Application succesfully.....')</script>");
     }
     else
    {
       echo("<script language='javascript'>alert('Application not Sent.....')</script>");
     }
     header("location:admin.html");
                      
    }
            
?>
</body>
</html>