<?php
$link=mysqli_connect("localhost","root","","onps");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ONPS|candidate|registration form</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">ONLINE NATIONAL POLLING SYSTEM</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                   
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            </div>
              <fieldset>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <img src="images/onlinregistration.jpg" width="1350" height="300" alt="" class="hbgimg" />
      </div>
      </div>
        </div>
        </fieldset>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search..."/>
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li><a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Home </a></li>
                        <!--/candidate navigation-->
                            <li class="dropdown-menu-right">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="candidate.php">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Candidate<span class="fa arrow"></span></a>
                            <ul class="dropdown-menu dropdown-Candidate">
                         <li>
                                    <a href="candidate_reg.php">Candidate Registration</a>
                                </li>
                                <li>
                                    <a href="candidatelogin.php">Edit Profile</a>
                                </li>
                                
                                <li>
                                    <a href="candidatelogin.php">Add/Edit Promises</a>
                                </li>
                                <li>
                                    <a href="candidatelogin.php">Read/Answer Questions</a>
                                </li>
                                </ul>
                                </li>
                               <!--/voter navigation--> 
                                      <li class="dropdown-menu-right">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="Voter.php">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Voter<span class="fa arrow"></span></a>
                            <ul class="dropdown-menu dropdown-Voter">
                       <li>
                                    <a href="voter_reg.php">Voter Registration</a>
                                </li>
                                <li>
                                    <a href="voter_login.php">Update Account</a>
                                </li>
                                <li>
                                    <a href="voter_login.php">View Candidate Information</a>
                                </li>
                                <li>
                                    <a href="voter_login.php">Ask Questions to Candidate</a>
                                </li>
                                <li>
                                    <a href="voter_login.php">View Election Result</a>
                                </li>
                                </ul>
                                </li>
                            <!--/admin navigation-->
                                 <li class="dropdown-menu-right">
                    <a href="adminlogin.php">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Administrator<span class="fa arrow"></span></a>
                            
                                </li>
                                <!--/about us-->
                                
                                <li>
                                    <a href="aboutus.php"><i class="fa fa-bar-chart-o fa-fw"></i>About Us</a>
                                </li>
                                
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="background-color:whitesmoke;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Candidate Registration</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">


<form method="POST" enctype="multipart/form-data">
<fieldset>
<br />
<br />

<div class="col-lg-7">
                          <section class="panel">
                              <header class="panel-heading" style="background-color: burlywood;">
                              Registration Form
                              </header>
                              <div class="panel-body" style="background-color:whitesmoke;">
                                  <form role="form">

<table class="table table-hover">

<div class="form-group">
                                          <label for="exampleInputText1">C_Id</label>
<input type="text" name="c_id" required="true" class="form-control" id="exampleInputText11" placeholder="Enter candidate id" oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity" /><button type="submit" name="sbt24" class="btn btn-info">Find</button></td></tr>

</div>
First name<input type="text" name="firstname" required="true" class="form-control" id="exampleInputText11" placeholder="Enter First name" oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/> </td></tr>
Last name<input type="text" name="lastname" required="true" class="form-control" id="exampleInputText11" placeholder="Enter Last name" oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/> </td></tr>
Father's name<input type="text" name="fathername" required="true" class="form-control" id="exampleInputText11"placeholder="Enter Father's name" oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/> </td></tr>
Date of birth<input type="date" name="Dob"required="true" class="form-control" id="exampleInputText11" placeholder="mm/dd/yyyy"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
State<input type="text" name="state"required="true" class="form-control" id="exampleInputText11" placeholder="Enter state"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
City<input type="text" name="city"required="true" class="form-control" id="exampleInputText11" placeholder="Enter City"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
Party<input type="text" name="party"required="true" class="form-control" id="exampleInputText11" placeholder="Enter Party"/></td></tr>
Photo<input type="file" name="fil" /></td></tr>
Email<input type="email" name="email"required="true" class="form-control" id="exampleInputText11" placeholder="Enter Email id"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
Address<textarea name="address" rows="5" cols="15" required="true" class="form-control" id="exampleInputText11" placeholder="Enter Address"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"></textarea></td></tr>
Contact number<input type="text" name="contactno"required="true" class="form-control" id="exampleInputText11" placeholder="Enter mobile no."oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
Username<input type="text" name="username"required="true" class="form-control" id="exampleInputText11" placeholder="Enter Username"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
Password<input type="password" name="password"required="true" class="form-control" id="exampleInputText11" placeholder="Enter Password"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>
Election_reason<input type="text" name="election_reason"required="true" class="form-control" id="exampleInputText11" placeholder="Enter Reason for election"/></td></tr>
Voter id<input type="text" name="v_id" required="true" class="form-control" id="exampleInputText11" placeholder="Enter voter id no."oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/></td></tr>





</fieldset>
</table>
<center><button type="submit" name="sbt17" class="btn btn-info">Submit</button>&nbsp;</center>

</form>

<br />

                                
 </div>
</div>
</div>
</div>
            
            
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
<div>
<footer>&copy;Designed By Vipul Singh</footer>
</div>
</html>



<?php
if(isset($_POST['sbt17']))
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
  $query="insert into candidate_reg values('$c_id','$firstname','$lastname','$fathername','$Dob','$state','$city','$party','$photo','$email','$address','$contactno','$username','$password','$election_reason','$v_id')";
  mysqli_query($link,$query);

echo "<script>alert('Thank you for registering')</script>";

}



