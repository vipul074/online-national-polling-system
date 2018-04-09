<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Candidate Panel</title>

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
      <img src="images/candidate.jpg" width="1350" height="300" alt="" class="hbgimg" />
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
                                    <a href="editcandidate.php">Edit Profile</a>
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">What is Candidate ?</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                A candidate is  as any person to whom any one or more of the following applies:

    Any person who seeks to qualify for nomination or election by means of a petitioning process;
    Any person who seeks to qualify for election as a write-in candidate;
    Any person who receives contributions or makes expenditures or gives their consent for any other person to receive contributions or make expenditures with a view to bringing about their nomination or election to, or retention in, public office;
    Any person who appoints a treasurer and designates a primary depository; or
    Any person who files qualification papers and subscribes to a candidate's oath as required by law.

However, this definition does not include any candidate for a political party executive committee.

NOTE...

    County Commission candidates for districts 1-5 must reside in the district for which they are qualifying at the time of being elected to office;
    School Board candidates must reside in the district for which they are qualifying at the time of qualifying;
    If required, one's current position or office must be resigned under the "resigned to run".

When do I announce my candidacy?

    Candidacy may be announced at any time;
    Must file Appointment of Campaign Treasurer and Designation of Campaign Depository with the Supervisor of Elections' office before any contributions are accepted or expenditures are made ;
    Must file a Statement of Candidate (Form DS-DE 84) within ten (10) days of filing the Appointment of Campaign Treasurer and Designation of Campaign Depository. The Statement of Candidate is provided by the Supervisor of Elections;
    A judicial candidate must file a Statement of Candidate for Judicial Office (Form DS-DE 83) within ten (10) days of filing the Appointment of Campaign Treasurer and Designation of Campaign Depository . The Statement of Candidate is provided by the Supervisor of Elections.
    Legislative Candidates must contact the filing officer with the Department of State Division of Elections.


Is it possible to run for a different office after becoming a candidate?

    Yes,you may change your mind and run for a different office after becoming a candidate, providing that you do the following:
    File a new Appointment of Campaign Treasurer and Designation of Campaign Depository, designating the new office;
    Within 15 days of the new appointment, notify, in writing, all contributors and offer to return their contributions in full or pro rata. The Request for Return of Contributions may be used for such purpose;
    If, after 30 days from this notice, the contributor has not requested his contribution to be returned, you may use the funds in the campaign for your newly designated office.
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
