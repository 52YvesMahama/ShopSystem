<!DOCTYPE HTML>
<html>

<head>
    <title>Homepage</title>
    <link href="style.css" rel="stylesheet" type="text/css">
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
  <style type="text/css">
<!--
.style1 {color: #FFFF00}
.style3 {color: #33CC00}
.style4 {color: #FF0000}
.style5 {color: #0000FF}
-->
  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="#">Welcome<span class="logo_colour">to my Page</span></a></h1>
          <h2 class="style1">Administration Session Only!!!</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Images</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3>Admin Session.</h3>
		
		
		
        <h4><a href='changepassword.php' class="style3">Change password</a><br/></h4>


		<h4><a href='../courier/add.html' class="style4">Add Courier of customer</a><span class="style1"><br/></span></h4>
		<h4><a href='../courier/index.php' class="style3">View details of Customer</a><span class="style1"><br/><br/></span></h4>
		<h4><a href='../Customers/edit.php' class="style4">Edit an Existing Customer</a><span class="style1"><br/></span></h4>
		<h4><a href='../Customers/index.php' class="style4">View Customer's Profile</a><span class="style1"><br/></span></h4>
		<h4><a href='../Customers/index.php' class="style4">View All Customers</a><br/>
	
<!-- 		
        <h5>Updated on 3rd April 2018</h5>
       <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <p></p>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
       

-->	   <h3>Useful Links</h3>
        <ul>
          <li><a href="https://Google.com" class="style5">MahamaYv</a></li>
          <li><a href="https://yahoo.com" class="style5">Mahama Iragi</a></li>
			
		  <!--<a href="https://www.paypal.com/us/selfhelp/article/i-forgot-my-password.-how-do-i-reset-it-faq1933" class="style5 style2"><em>Forget Password</em> ?</a></span></div>
-->
        </ul>
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Administration Session Only!!!</h1>
        <h1>You must be logged in to view this page...</h1>
		<p><?php session_start(); ?>
<html>
<head>
</head>
 
<body>
    <?php
    if(isset($_SESSION['valid'])) {            
        include("connection.php");                    
        $result = mysqli_query($mysqli, "SELECT * FROM login");
    ?>                
        Welcome <?php echo $_SESSION['name'] ?> !
		<a href='logout.php'>Logout</a><br/>
		<a href='changepassword.php' class="style3">Change password</a><br/>
		<a href='../MembersDetails/index.php' class="style3">Edit Member Details</a><span class="style1"><br/></span>
		<a href='../MembersID/index.php' class="style3">Edit Member IDs</a><span class="style1"><br/><br/></span>
		<a href='../Customers/add.html' class="style4">Add New Customer</a><span class="style1"><br/></span>
		<a href='../Customers/edit.php' class="style4">Edit an Existing Customer</a><span class="style1"><br/></span>
		<a href='../Customers/index.php' class="style4">View Customer's Profile</a><span class="style1"><br/></span>
		<a href='../Customers/index.php' class="style4">View All Customers</a><br/><br/></span>
			<a href='../offices/add.html' class="style4 style5">Add New office</a><span class="style1"><br/>
			<a href='../offices/index.php' class="style4 style5">Listing offices</a><span class="style1"><br/>
			<a href='TICKETSTRACKING.php' class="style4 style5">Track courier</a><span class="style1"><br/>
			</span>


		<?php    
    } else {
        echo "You must be logged in to view this page.<br/><br/>";
        echo "<a href='login.php'>Login</a> | <a href='register.php'>Register</a>| <a href='../index.html'>Home Users</a>";
    }
    ?>
  </div>
</body>
</html>


        <p>This is a website developped by Mahama Yves for admin session whereby he / she has to manage the entire website
		(under <a href="https://yvesmahama.com/contactt.html	">Yves mahama iragi 52</a>), For more information and though advitisement
		 is all about internet technology where by you as a IT guy you will be pactricing more and more with the link that was shown above</p>
        <p>This Dynamic Website  is written entirely in <strong>HTML5</strong>, <strong>CSS</strong> <strong>PHP</strong> and <strong>MYSQL</strong>, and can be validated By Google. </p>
		
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
        Created by Yves Mahama 52 

    <div id="footer">
      Copyright &copy;  | 2018 | April
    </div>
  </div>
</body>
</html>
