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
  <li><a href="leave.html">Leave Form</a></li>
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
<form method="post" action="form2.php" align="center" style="background-color:white">
<br>
<h1 align="center" class="a1">STUDENT Information</h1>
<lable for="t1" class="a3">Name</lable>
<input type="text" placeholder="Enter Name" name="t1" id="t1" class="a2" style="padding-right:50%" required></br><br>
<lable for="email" class="a3">Email</lable>
<input type="text" placeholder="Enter Email" name="email" id="email" class="a2" style="padding-right:50%" required><br><br>
<lable for="mno" class="a3">Mobile Number</lable>
<input type="text" placeholder="Enter Mobile Number" name="mno" id="mno" class="a2" style="padding-right:38%" required><br><br>
<lable for="dob" class="a3">Birth Date (DD/MM/YYYY)</lable>
<input type="date" placeholder="Enter Birth Date (DD/MM/YYYY)" name="dob" id="dob" class="a2" style="padding-right:31%" required><br><br>
<lable for="add" class="a3">Birth place</lable>
<input type="text" placeholder="Enter Birth Place" name="bplace" id="bplace" class="a2" style="padding-right:45%" required><br><br>
<lable for="add" class="a3">Address</lable>
<input type="text" placeholder="Enter Address" name="add" id="add" class="a2" style="padding-right:48%" required><br><br>
<lable for="taluka" class="a3">Taluka</lable>
<input type="text" placeholder="Enter Taluka" name="taluka" id="taluka" class="a2" style="padding-right:50%" required><br><br>
<lable for="dis" class="a3">District</lable>
<input type="text" placeholder="Enter District" name="dis" id="dis" class="a2" style="padding-right:49%" required><br><br>
<lable for="caste" class="a3">Caste</lable>
<input type="text" placeholder="Enter Caste" name="caste" id="caste" class="a2" style="padding-right:52%" required><br><br>
<lable for="subcaste" class="a3">Sub Caste</lable>
<input type="text" placeholder="Enter Sub Caste" name="subcaste" id="subcaste" class="a2" style="padding-right:46%"><br><br>
<lable for="category" class="a3">Category</lable>
<select name="category" id="category" class="a2" style="padding-right:59%" required>
<option value="Select Category">Select Category</option>
<option value="EWS">EWS</option>
<option value="N.T.B.">N.T.B.</option>
<option value="N.T.C.">N.T.C.</option>
<option value="N.T.D.">N.T.D.</option>
<option value="O.B.C.">O.B.C.</option>
<option value="OPEN">OPEN</option>
<option value="S.B.C.">S.B.C.</option>
<option value="S.C.">S.C.</option>
<option value="S.T.">S.T.</option>
<option value="SEBC">SEBC</option>
<option value="V.J.">V.J.</option>
<option value="VJ-A">VJ-A</option>
</select><br><br>
<lable for="religion" class="a3">Religion</lable>
<select name="religion" id="religion" class="a2" style="padding-right:57%" required>
<option value="Select Religion">Select Religion</option>
<option value="BUDDHISM">BUDDHISM</option>
<option value="CHRISTIANITY">CHRISTIANITY</option>
<option value="HINDUISM">HINDUISM</option>
<option value="ISLAM">ISLAM</option>
<option value="JAINISM">JAINISM</option>
<option value="JUDAISM">JUDAISM</option>
<option value="MUSLIM">MUSLIM</option>
<option value="PARSI">PARSI</option>
<option value="PUNJABI">PUNJABI</option>
<option value="SIKHISM">SIKHISM</option>
</select><br><br>
<lable for="mstatus" class="a3">Marital Status</lable>
<input type="text" placeholder="Enter Marital Status" name="mstatus" id="mstatus" class="a2" style="padding-right:40%" required><br><br>
<lable for="pre" class="a3">Previous Year Institute Name</lable>
<input type="text" placeholder="Enter Previous Year Institute Name" name="pre" id="pre" class="a2" style="padding-right:21%" required><br><br>
<lable for="preq" class="a3">Previous Year Qualified Exam</lable>
<input type="text" placeholder="Enter Previous Year Qualified Exam" name="preq" id="preq" class="a2" style="padding-right:20%" required><br><br>
<lable for="prep" class="a3">Previous Exam Percentage</lable>
<input type="text" placeholder="Enter Previous Exam Percentage" name="prep" id="prep" class="a2" style="padding-right:25%" required><br><br>
<lable for="c" class="a3">Current Class</lable>
<input type="text" placeholder="Enter Current Class" name="c" id="c" class="a2" style="padding-right:41%" required><br><br>
<input type="submit" name="s1" class="a4">Next&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="reset" class="a4">Clear</button>
<br><br>
</form>
</div>
</body>
</html>

