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

    <title>ONPS|Voter</title>

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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">What is a Voter ?</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                
                Besides the demographics of age, education and income, what are the strongest attributes of people who vote?

A Voter Is . . . .
More Informed 	More likely to follows the news, continue to seek educational  opportunities.
More Civically Active 	More likely to contact their elected official, attend a community forum or be a volunteer or do service.
More Empowered 	Has a sense that they can have an impact on or control over their community and their future.
More Socially Concerned Is concerned about their community their neighborhood or peer group or other people in general and the possible (if uncertain) benefits that voting and the election outcome will have.
A Contributor to and a Beneficiary of Social Capital Is more likely to build social capital by relating to their neighbors and, in general, to live in a community where there are is more contact among its residents, less crime, and healthier outcomes.
More Mobilized 	Is likely to be contacted around an election by a campaign, issue organization or government seeking to educate them about the upcoming election, persuade them of its importance or mobilize </fieldset>

                
                
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
