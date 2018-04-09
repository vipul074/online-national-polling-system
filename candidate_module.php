<?php
$link=mysqli_connect("localhost","root","","onps");
session_start();
?>



<html>
<head>
<title>ONPS  | Candidate</title>
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
        <h1><a href="index.html"><span>ONLINE NATIONAL POLLING SYSTEM  <small><br />
          Lets select a right government</small></a></h1>

      </div>
      <img src="images/candidate.jpg" width="300" height="200" alt="" class="hbgimg" />
      <div class="hbg_r">
      <br />
        <h2>CANDIDATE AREA</h2>
        
        <p>
What is a Candidate?<br />

A candidate is defined as any person to whom any one or more of the following applies:
	Any person who seeks to qualify for nomination or election by means of a petitioning process;
	Any person who seeks to qualify for election as a write-in candidate;
    <a href="watiscandidate.php">Read more...</a></p>
      </div>
      <div class="clr"></div>
      <div class="nav_menu">
        <ul>
         <li><a href="index.php">Home</a></li>
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
          <div class="sidebar"><div class="sidebar-nav">
        
          <li><a href="candidatelogin.php"><i class="fa fa-sign-out fa-fw"></i> <h2>Logout</h2></a></li>
            
          
        </div>
        </div>
          
          
          
          
          <fieldset>          
              
    FOR NEW REGISTRATION<br />
    <A HREF="candidate_reg.php">CANDIDATE REGISTRATION</A>
</br>

<br />
FOR ACCOUNT UPDATE<br />
<A HREF="update.php">ACCOUNT UPDATE</A>
</br>
<br />
EDIT PROFILE<br />
<A HREF="profile.php">EDIT PROFILE</A>
</br>
<br />
FOR PROMISES<br />
<A HREF="promise.php">Add/Edit Promises</A>
</br>
<br />

FOR ANSWER/QUESTIONS<br />
<A HREF="question.php">ANSWER/QUESTION</A>
</br></p>

</fieldset>



<br/>
	          
<fieldset>
      
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
  </fieldset>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Designed by Vipul Singh
      <ul class="fmenu">
        <li><a href="index.php">Home</a></li>
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



</body>

</html>