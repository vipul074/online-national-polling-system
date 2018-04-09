<?php
$link=mysqli_connect("localhost","root","","onps");
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ONPS|Admin|Party Registration</title>

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
            <div class="navbar-header"  style="background-color: #A9C9CB;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="background-color: #A9C9CB;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="background-color: #A9C9CB;">ONLINE NATIONAL POLLING SYSTEM</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" style="background-color: #A9C9CB;">
                
                   
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
                            <ul class="dropdown-menu dropdown-candidate">
                    
                                <li>
                                    <a href="candidate_reg.php">Candidate Registration</a>
                                </li>
                                <li>
                                    <a href="editcandidate.php">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="candidatelogin.php">Update Account</a>
                                </li>
                                <li>
                                    <a href="promisecand.php">Add/Edit Promises</a>
                                </li>
                                <li>
                                    <a href="questionanscand.php">Read/Answer Questions</a>
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
                                    <a href="voter_questionask.php">Ask Questions to Candidate</a>
                                </li>
                                <li>
                                    <a href="voter_election.php">View Election Result</a>
                                </li></ul>
                                </li>
                            <!--/admin navigation-->
                            <li class="dropdown-menu-right">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="admin.php">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Administrator<span class="fa arrow"></span></a>
                            <ul class="dropdown-menu dropdown-Administrator">
                    
                                <li>
                                    <a href="manage.php">Manage User/Candidate Account</a>
                                </li>
                                <li>
                                    <a href="approve.php">Approve Applicants(voter)</a>
                                </li>
                                <li>
                                    <a href="accountopen.php">Open Candidate Account</a>
                                </li>
                                <li>
                                    <a href="party_reg.php">Registration of Parties</a>
                                </li>
                                <li>
                                    <a href="voted.php">Mark Voted and generate password</a>
                                </li>
                                
                                <li>
                                    <a href="onlinevoting.php">Manage Online Voting</a>
                                </li>
                    
                                </ul>
                                </li>
                                
                                <!--/about us-->
                                <li><a href="aboutus.php"><i class="fa fa-bar-chart-o fa-fw"></i>About Us</a>
                                </li>
                                    
                                
                            
                            <!-- /.nav-second-level -->
                        
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="background-color:cornsilk;">Admin Panel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
<center>

<form method="POST" enctype="multipart/form-data" style="background-color: burlywood;">
<fieldset>

<br />
<br /><center>
<div class="col-lg-7">
                          <section class="panel">
                              <header class="panel-heading" style="background-color:coral;">
                              Party Registration Form
                              </header>
                              <div class="panel-body">
                                  <form role="form">
<table class="table table-hover">
                                       <div class="form-group">
                                          <label for="exampleInputText1">Party Name</label>
                                          <input type="text" name="party_name" class="form-control" id="exampleInputText11" placeholder="Party Name"  />
                                      </div>
                                      
                                      <div class="form-group">
                                          <label for="exampleInputText1">Registration Date</label>
                                          <input type="date" name="reg_date" class="form-control" id="exampleInputText11" placeholder="Registration Date"  />
                                      </div>
                                      
                                      
                                      <div class="form-group">
                                          <label for="exampleInputText1">Registeration By</label>
                                          <input type="text" name="reg_by" class="form-control" id="exampleInputText11" placeholder="Registration By" />
                                      </div>
                                      
                                      <center><button type="submit" name="register" class="btn btn-info">Register</button>&nbsp;</center>



</table>
</center>
</fieldset>

</form>
</center>
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
if(isset($_POST['register']))
{
    $party_name=$_POST['party_name'];
     $reg_date=$_POST['reg_date'];
      $reg_by=$_POST['reg_by'];
      $tname=$_FILES['fil']['tmp_name'];
    $type=$_FILES['fil']['type'];
    $size=$_FILES['fil']['size'];
    $error=$_FILES['fil']['error'];
    $ilink=fopen($tname,"r");
    $tfile=fread($ilink,$size);
  $img=addslashes($tfile);
  $query="insert into party_reg values('$party_name','$reg_date','$reg_by')";
  mysqli_query($link,$query);
}


