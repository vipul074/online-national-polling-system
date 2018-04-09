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

    <title>ONPS|update account</title>

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
      <img src="images/manage.png" width="1350" height="300" alt="" class="hbgimg" />
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="candidatelogin.php">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Candidate<span class="fa arrow"></span></a>
                            <ul class="dropdown-menu dropdown-Candidate">
                           <li>
                                    <a href="candidate_reg.php">Candidate Registration</a>
                                </li>
                                <li>
                                    <a href="candidatelogin.php">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="candidatelogin.php">Update Account</a>
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
                                    <a href="voter_update.php">Update Account</a>
                                </li>
                                <li>
                                    <a href="candidate_info.php">View Candidate Information</a>
                                </li>
                                <li>
                                    <a href="ask_question.php">Ask Questions to Candidate</a>
                                </li>
                                <li>
                                    <a href="election_result.php">View Election Result</a>
                                </li>
                                </ul>
                                </li>
                            <!--/admin navigation-->
                             <li class="dropdown-menu-right">
                    <a href="adminlogin.php">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Administrator<span class="fa arrow"></span></a>
                            
                                </li>   <!--/about us-->
                                
                                <li>
                                    <a href="aboutus.php"><i class="fa fa-bar-chart-o fa-fw"></i>About Us</a>
                                </li>
                               
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Voter Account Update</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">


<form method="POST" enctype="multipart/form-data">
<fieldset>

<div class="col-lg-7">
                          <section class="panel">
                              <header class="panel-heading">
                              Update Account Form
                              </header>
                              <div class="panel-body">
                                  <form role="form">
<table class="table table-hover">
Voter_Id<input type="text" name="voter_id" required="true" class="form-control" id="exampleInputText11" placeholder="Enter voter id" oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/>
First name<input type="text" name="first_name" required="true" class="form-control" id="exampleInputText11" placeholder="Enter First name" oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/>
Last name<input type="text" name="last_name" required="true" class="form-control" id="exampleInputText11" placeholder="Enter Last name" oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/> 
Father's name<input type="text" name="father_name" required="true" class="form-control" id="exampleInputText11" placeholder="Enter Father's name" oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/>
Date of birth<input type="date" name="Dob"required="true" class="form-control" id="exampleInputText11" placeholder="mm/dd/yyyy"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/>
State<input type="text" name="state"required="true" class="form-control" id="exampleInputText11" placeholder="Enter state"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/>
City<input type="text" name="city"required="true" class="form-control" id="exampleInputText11" placeholder="Enter City"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/>
Address<textarea name="address" rows="5" cols="15" required="true"class="form-control" id="exampleInputText11"  placeholder="Enter Address"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"></textarea>
Email<input type="email" name="e_mail"required="true" class="form-control" id="exampleInputText11" placeholder="Enter Email id"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/>
Contact number<input type="text" name="contact_no"required="true" class="form-control" id="exampleInputText11" placeholder="Enter mobile no."oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/>
Pin Code<input type="text" name="pin_code"required="true" class="form-control" id="exampleInputText11" placeholder="Enter pin code"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/>
Username<input type="text" name="username"required="true" class="form-control" id="exampleInputText11" placeholder="Enter Username"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/>
Password<input type="password" name="password"required="true" class="form-control" id="exampleInputText11" placeholder="Enter Password"oninvalid="setcustomvalidity(don't leave filed blank)" oninput="setcustomvalidity"/>
Voter Photo<input type="file" name="fil"/>
V_id<input type="text" name="v_ids"required="true" class="form-control" id="exampleInputText11" placeholder="Enter v_id"/>


</fieldset>
</table>
</form>
<center><button type="submit" name="sbt95" class="btn btn-info">Submit</button>&nbsp;</center>

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
if(isset($_POST['sbt95']))
{
    $voter_id=$_POST['voter_id'];
     $first_name=$_POST['first_name'];
      $last_name=$_POST['last_name'];
      $father_name=$_POST['father_name'];
      $Dob=$_POST['Dob'];
      $state=$_POST['state'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    $e_mail=$_POST['e_mail'];
   $contact_no=$_POST['contact_no'];
   $pin_code=$_POST['pin_code'];
   $username=$_POST['username'];
   $password=$_POST['password'];
   $fil=$_FILES['fil'];
   $v_ids=$_POST['v_ids'];
    $tname=$_FILES['fil']['tmp_name'];
    $type=$_FILES['fil']['type'];
    $size=$_FILES['fil']['size'];
    $error=$_FILES['fil']['error'];
    $ilink=fopen($tname,"r");
    $tfile=fread($ilink,$size);
  $img=addslashes($tfile);
  
  $query="update voter_reg values('$voter_id','$first_name','$last_name','$father_name','$Dob','$state','$city','$address','$e_mail','$contact_no','$pin_code',
  '$username','$password','$v_photo','$v_ids')";
  mysqli_query($link,$query);
  echo "<script>alert('Profile edited Successfully')</script>";

}


