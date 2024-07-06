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
</body>
</html>

<?php 
$con=mysql_connect("localhost","root","");
    mysql_query("use project1");
    if($con==false)
    {
       die("Error in Database Connection");
    }
session_start();
$name=$_SESSION["name"];
$email=$_SESSION["mail"];
$mno=$_SESSION["mob"];
$dob=$_SESSION["date"];
$bplace=$_SESSION["place"];
$add=$_SESSION["addr"];
$taluka=$_SESSION["tal"];
$dis=$_SESSION["dist"];
$caste=$_SESSION["cast"];
$subcaste=$_SESSION["scast"];
$category=$_SESSION["cat"];
$religion=$_SESSION["rel"];
$mstatus=$_SESSION["ms"];
$pre=$_SESSION["institute"];
$preq=$_SESSION["preqe"];
$prep=$_SESSION["per"];
$class=$_SESSION["current"];

$pname=$_POST["pname"];
$padd=$_POST["padd"];
$ptal=$_POST["ptal"];
$pdis=$_POST["pdis"];
$pmno=$_POST["pmno"];
$prel=$_POST["prel"];
$po=$_POST["po"];
$rno=$_POST["rno"];
$bno=$_POST["bno"];


if($name!=null && $email!=null && $mno!=null && $dob!=null && $bplace!=null && $add!=null && $taluka!=null && $dis!=null && $caste!=null && $subcaste!=null && $category!=null &&
$religion!=null &&  $mstatus!=null && $pre!=null && $preq!=null && $prep!=null && $class!=null && $pname!=null && $padd!=null && $ptal!=null && $pdis!=null && $pmno!=null &&
$prel!=null &&$po!=null && $rno!=null && $bno!=null && isset($_POST['s2']) && isset($_FILES['img1']) && isset($_FILES['img2']) && isset($_FILES['img3']) && isset($_FILES['img4']))
{
        $img_name1 = $_FILES['img1']['name'];
	$img_size1 = $_FILES['img1']['size'];
	$tmp_name1 = $_FILES['img1']['tmp_name'];
	$error1 = $_FILES['img1']['error'];

        $img_name2 = $_FILES['img2']['name'];
	$img_size2 = $_FILES['img2']['size'];
	$tmp_name2 = $_FILES['img2']['tmp_name'];
	$error2 = $_FILES['img2']['error'];

        $img_name3 = $_FILES['img3']['name'];
	$img_size3 = $_FILES['img3']['size'];
	$tmp_name3 = $_FILES['img3']['tmp_name'];
	$error3 = $_FILES['img3']['error'];

        $img_name4 = $_FILES['img4']['name'];
	$img_size4 = $_FILES['img4']['size'];
	$tmp_name4 = $_FILES['img4']['tmp_name'];
	$error4 = $_FILES['img4']['error'];


	if ($error1 === 0 && $error2 === 0 && $error3 === 0 && $error4 === 0) 
        {
		if ($img_size1 > 625000 && $img_size2 > 625000 && $img_size3 > 625000 && $img_size4 > 625000) 
                {
			$em = "Sorry, your file is too large.";
                        echo($em);
		}
                else 
                {
			$img_ex1 = pathinfo($img_name1, PATHINFO_EXTENSION);
			$img_ex_lc1 = strtolower($img_ex1);
                        $img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
			$img_ex_lc2 = strtolower($img_ex2);
                        $img_ex3 = pathinfo($img_name3, PATHINFO_EXTENSION);
			$img_ex_lc3 = strtolower($img_ex3);
                        $img_ex4 = pathinfo($img_name4, PATHINFO_EXTENSION);
			$img_ex_lc4 = strtolower($img_ex4);
                        

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc1, $allowed_exs) && in_array($img_ex_lc2, $allowed_exs) && in_array($img_ex_lc3, $allowed_exs) && in_array($img_ex_lc4, $allowed_exs)) 
                        {
				$new_img_name1 = uniqid("IMG-", true).'.'.$img_ex_lc1;
                                $new_img_name2 = uniqid("IMG-", true).'.'.$img_ex_lc2;
                                $new_img_name3 = uniqid("IMG-", true).'.'.$img_ex_lc3;
                                $new_img_name4 = uniqid("IMG-", true).'.'.$img_ex_lc4;
                                
				$img_upload_path1 = 'upload-image/'.$new_img_name1;
                                $img_upload_path2 = 'upload-image/'.$new_img_name2;
                                $img_upload_path3 = 'upload-image/'.$new_img_name3;
                                $img_upload_path4 = 'upload-image/'.$new_img_name4;
                                
				move_uploaded_file($tmp_name1, $img_upload_path1);
                                move_uploaded_file($tmp_name2, $img_upload_path2);
                                move_uploaded_file($tmp_name3, $img_upload_path3);
                                move_uploaded_file($tmp_name4, $img_upload_path4);
                                
                                $sql = mysql_query("INSERT INTO application(Name,Email,Mobile_No,Birth_Date,Birth_Place,Address,Taluka,District,Caste,Sub_Caste,Category,Religion,M_Status,Pre_Institute,Pre_Quali,Per,Sclass,P_Name,P_Addr,P_Tal,P_Dis,P_Mno,P_Rel,P_Occu,Room_No,Bed_No,Stud_Photo,Stud_Sign,Stud_Adhar,Stud_Marksheet) 
				        VALUES('$name', '$email', '$mno', '$dob','$bplace','$add','$taluka','$dis','$caste','$subcaste','$category','$religion','$mstatus','$pre','$preq',$prep,'$class','$pname','$padd','$ptal','$pdis','$pmno','$prel','$po',$rno,$bno,'$new_img_name1','$new_img_name2','$new_img_name3','$new_img_name4');");
				
				                                
                                if($sql==true)
     {
        echo("<script language='javascript'>alert('Application succesfully.....')</script>");
     }
     else
    {
       echo("<script language='javascript'>alert('Application not Sent.....')</script>");
     }
     header("location:student.html");

			}
                        else 
                        {
				$em = "You can't upload files of this type";
                                echo($em);
			}
		}
	}
        else 
        {
		$em = "unknown error occurred!";
                echo($em);
	}

}else {
	echo("error");
}	


    mysql_close($con);
?> 
