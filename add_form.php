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
     font-size:20;
     background-color:#ddd;
     background:#f1f1f1;
     border:none;
     padding:10px;
   }
.a3{
     font-family:Bell MT;
     font-size:20;
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
  <li><a href="s_profile.html">My Profile</a></li>
  <li><a href="add_form.html">Addmission Form</a></li>
  <li><a href="leave.html">View My Form</a></li>
  <li><a href="home.html">Log Out</a></li>
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
</body>
</html>
<?php
    $con=mysql_connect("localhost","root","");
    mysql_query("use project1");
    if($con==false)
    {
       die("Error in Database Connection");
    }
    $name=$_POST['t1'];
    $email=$_POST['email'];
    $mno=$_POST['mno'];
    $dob=$_POST['dob'];
    $bplace=$_POST['bplace'];
    $add=$_POST['add'];
    $taluka=$_POST['taluka'];
    $dis=$_POST['dis'];
    $caste=$_POST['caste'];
    $subcaste=$_POST['subcaste'];
    $category=$_POST['category'];
    $religion=$_POST['religion'];
    $mstatus=$_POST['mstatus'];
    $pre=$_POST['pre'];
    $preq=$_POST['preq'];
    $prep=$_POST['prep'];
    $class=$_POST['c'];
    $pname=$_POST['pname'];
    $padd=$_POST['padd'];
    $ptal=$_POST['ptal'];
    $pdis=$_POST['pdis'];
    $pmno=$_POST['pmno'];
    $prel=$_POST['prel'];
    $po=$_POST['po'];
    $rno=$_POST['rno'];
    $bno=$_POST['bno'];
    $img1=$_POST['img1'];
    $img2=$_POST['img2'];
    $img3=$_POST['img3'];
    $img4=$_POST['img4'];
    if($name!=null&&$email!=null&&$mno!=null&&$dob!=null&&$bplace!=null&&$add!=null&&$taluka!=null&&$dis!=null&&$caste!=null&&$subcaste!=null&&$category!=null&&$religion!=null&&$mstatus!=null&&$pre!=null&&$preq!=null&&$prep!=null&&$class!=null&&$pname!=null&&$padd!=null&&$ptal!=null&&$pdis!=null&&$pmno!=null&&$prel!=null&&$po!=null&&$rno!=null&&$bno!=null&&$img1!=null&&$img2!=null&&$img3!=null&&$img4!=null)
   {
     $k=mysql_query("insert into application(Name,Email,Mobile_No,Birth_Place,Address,Taluka,District,Caste,Sub-Caste,Category,Religion,Marital_Status,Pre_Institute,Pre_Quali,Pre_Per,C_Class,P_Name,P_Addr,P_Tal,P_Dis,P_Mno,P_Rel,P_Occu,Room_No,Bed_No,Stud_Photo,_Stud_Sign,Stud_Adhar,Stud_Marksheet) values('$name', '$email', $mno, '$dob', '$psw','$bplace','$add','$taluka','$dis','$caste','$subcaste','$category','$religion','$mstatus','$pre','$preq','$prep','$class','$pname','$padd','$ptal','$pdis','$pmno','$prel','$po','$rno','$bno','$img1','$img2','$img3','$img4');");
     if($k==true)
     {
        echo("<script language='javascript'>alert('Application succesfully.....')</script>");
     }
     else
       echo("<script language='javascript'>alert('Application not Sent.....')</script>");
   }
    mysql_close($con);
?>
