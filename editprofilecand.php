<?php
$link=mysqli_connect("localhost","root","","onps");
?>

<html>
<head>
<title>ONPS  | Candidate|edit profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
</head>
<body>
<fieldset>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.php"><span>ONLINE NATIONAL POLLING SYSTEM <small><br />
          Lets select a right government</small></a></h1>

      </div>
      <img src="images/Voter-Registration.jpg" width="300" height="200" alt="" class="hbgimg" />
      <div class="hbg_r">
      <br />
        <h2>EDIT PROFILE</h2>
        </div>
      <div class="clr"></div>
      <div class="nav_menu">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li class="active"><a href="candidate_module.php">Candidate</a></li>
          <li><a href="voter.php">Voter</a></li>
          <li><a href="adminlogin.php">Administrator</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="contact.html">Developer</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
        <MARQUEE onemouseover="stop();" onemouseout="start();">
          <h2>WELCOME TO INDIA'S ONLINE POLLING SYSTEM</h2></MARQUEE>
<link type="text/css" rel="stylesheet" href="mycss.css"/></head>
<body>
<form method="POST" enctype="multipart/form-data">
<fieldset>

<legend><h4>Edit Profile</h4></legend>

<table border='1' align="center">
<tr><td>C_Id</td><td><input type="text" name="c_id" required="true" placeholder="Enter candidate id" oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/> <input type="submit" name="sbt" value="Find"/></td></tr>
<tr><td>First name</td><td><input type="text" name="firstname" required="true" placeholder="Enter First name" oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/> </td></tr>
<tr><td>Last name</td><td><input type="text" name="lastname" required="true" placeholder="Enter Last name" oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/> </td></tr>
<tr><td>Father's name</td><td><input type="text" name="fathername" required="true" placeholder="Enter Father's name" oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/> </td></tr>
<tr><td>Date of birth</td><td><input type="date" name="Dob"required="true" placeholder="mm/dd/yyyy"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
<tr><td>State</td><td><input type="text" name="state"required="true" placeholder="Enter state"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
<tr><td>City</td><td><input type="text" name="city"required="true" placeholder="Enter City"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
<tr><td>Party</td><td><input type="text" name="party"required="true" placeholder="Enter Party"/></td></tr>

<tr><td>Photo</td><td><input type="file" name="fil"/></td></tr>
<tr><td>Email</td><td><input type="email" name="email"required="true" placeholder="Enter Email id"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
<tr><td>Address</td><td><textarea name="address" rows="5" cols="15" required="true" placeholder="Enter Address"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"></textarea></td></tr>
<tr><td>Contact number</td><td><input type="number" name="contactno"required="true" placeholder="Enter mobile no."oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
<tr><td>Username</td><td><input type="text" name="username"required="true" placeholder="Enter Username"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
<tr><td>Password</td><td><input type="password" name="password"required="true" placeholder="Enter Password"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
<tr><td>Election_reason</td><td><input type="text" name="election_reason"required="true" placeholder="Enter Reason for election"/></td></tr>
<tr><td>Voter id</td><td><input type="text" name="v_id" required="true" placeholder="Enter voter id no."oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>



<tr><td colspan="2"><center><input type="submit" name="sbt1" value="Save Record"/>&nbsp;</center></td>




</tr>




</fieldset>
</table>
</form>
<br />
 <div class="clr"></div>
    
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2>About</h2>
        <img src="images/white.jpg" width="66" height="66" alt="" />
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius.<br />
          llorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.<br />
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna.</p>
        <p><a href="#">Learn more...</a></p>
      </div>
      <div class="col c2">
        <h2>Lorem Ipsum</h2>
        <p>Lorem ipsum dolor<br />
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam.</p>
        <ul class="sb_menu">
          <li><a href="#">consequat molestie</a></li>
          <li><a href="#">sem justo</a></li>
          <li><a href="#">semper</a></li>
          <li><a href="#">magna sed purus</a></li>
          <li><a href="#">tincidunt</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2>Contact</h2>
        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat.</p>
        <a href="#"><img src="images/pix1.jpg" width="66" height="66" alt="" class="ad" /></a> <a href="#"><img src="images/pix2.jpg" width="66" height="66" alt="" class="ad" /></a> <a href="#"><img src="images/pix3.jpg" width="66" height="66" alt="" class="ad" /></a>
        <p><strong>Phone:</strong> +91-8800440416<br />
          <strong>Address:</strong> YAMUNA VIHAR DELHI<br />
          <strong>E-mail:</strong> <a href="#">vipul074@gmail.com</a></p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Designed by Vipul Singh
      <ul class="fmenu">
        <li><a href="index.html">Home</a></li>
          <li class="active"><a href="candidate.php">Candidate</a></li>
          <li><a href="voter.php">Voter</a></li>
          <li><a href="adminlogin.php">Administrator</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="contact.html">Developer</a></li>
	
      </ul>
    </div>
    <div class="clr"></div>
  </div>
</div>




</body></html>



<?php

if(isset($_POST['sbt1']))
{
    $c_id=$_POST['c_id'];
     $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $fathername=$_POST['fathername'];
      $Dob=$_POST['Dob'];
      $state=$_POST['state'];
    $city=$_POST['city'];
    $party=$_POST['party'];

   $fil=$_FILES['fil'];
   $email=$_POST['email'];
   $address=$_POST['address'];
   $contactno=$_POST['contactno'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $election_reason=$_POST['election_reason'];
   $v_id=$_POST['v_id'];
   
   $tname=$_FILES['fil']['tmp_name'];
    $type=$_FILES['fil']['type'];
    $size=$_FILES['fil']['size'];
    $error=$_FILES['fil']['error'];
    $ilink=fopen($tname,"r");
    $tfile=fread($ilink,$size);
  $img=addslashes($tfile);
  
  $query="update candidate_reg values('$firstname','$lastname','$fathername','$Dob','$state','$city','$party','$fil','$email','$address','$contactno','$username','$password','$election_reason','$v_id') where c_id=$c_id";
  mysqli_query($link,$query);
}


