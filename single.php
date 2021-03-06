<?php
    include("includes/connection.php");
	include("functions/functions.php");
    session_start();
?>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="styles/home_style.css" rel="stylesheet"/>
    </head>
    <body>
<!--contain starts-->
     <div class="contain">
	    <!--head_wrap starts-->
	    <div id="head_wrap">
		    <!--header starts-->
	        <div id="header">
			<img src="images/logo.png" style="float:left; height:88px;" />
			    <ul id="menu">
				    <li><a href="home.php">Home</a></li>
				    <li><a href="members.php">Members</a></li>
					<li><a href="about.php">About us</a></li>
					<strong name="post_sub">Topics</strong>
					<li><a href="maintain.php">maintan</a></li>
					<li><a href="education.php">Education</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="confession.php">Confess</a></li>
					<li><a href="other.php">Other</a></li>
				</ul>
			</div>
			<!--header ends-->
			<form method="get" action="results.php" id="form1">
				<div class="row">
				    <input type="text" name="user_query" placeholder="Search" style="width:200px;"/>
				    <button type="submit" class="btn-xs btn-primary" name="search">Search</button>
				</div>
				</form>
	        </div>
		</div>
		 <!--head_wrap ends-->
			 <!--user_timeline starts-->
		 <div class="content">
		     <!--user_timeline starts-->
		    <div id="user_timeline">
			    <div id="user_detail">
				    <?php
					    $user = $_SESSION['user_email'];
					    $get_user = "SELECT * FROM users WHERE user_email='$user'";
						$run_user = mysqli_query($con,$get_user);
						$row = mysqli_fetch_array($run_user);
						$user_id = $row['user_id'];
						$user_name = $row['user_name'];
						$user_dob = $row['user_dob'];
						$user_year = $row['user_year'];
						$user_reg = $row['user_reg'];
						$user_image = $row['user_image'];
						$user_gender = $row['user_gender'];
						$user_branch = $row['user_branch'];
						$register_date = $row['register_date'];
						$last_login = $row['last_login'];
						
						echo "
						    <center><h2 style='padding-top:10px;'><strong>Your Profile</strong></h2></center>
						    <p><center><img src='user/user_images/$user_image' width='200px' height='200px'></center></p>  
						    <center><p><strong>Name-</strong> $user_name</p></center>
						    <center><p><strong>Registration No-</strong> $user_reg</p></center>
						    <center><p><strong>College Year-</strong> $user_year</p></center>
							<center><p><strong>Branch-</strong> $user_branch</p></center>
							<center><p><strong>Gender-</strong> $user_gender</p></center>
						    <center><p><strong>Birthday-</strong> $user_dob</p></center>
						    <center><p><strong>Register Date-</strong> $register_date</p></center>
						    <center><p><strong>Last Login-</strong> $last_login</p></center>
							<center><h2><strong>Your Account</h2></strong></center></b><br>
							<center><p><a href='my_messages.php'>Messages</a></p></center>
							<center><p><a href='my_posts.php?u_id=$user_id'>My Posts</a></p></center>
							<center><p><a href='edit_profile.php'>Edit My Account</a></p></center>
							<center><p><a href='logout.php'>Log out</a></p>
						";
					?>
				</div>
			</div>
			 <!--user_timeline ends-->
			  <!--content_timeline starts-->
			<div id="content_timeline">
			    <div id="posts">
					<?php single_post(); ?>
				</div>
			</div>
             <!--content_timeline ends-->
			</div>
			<!--content ends-->
	 </div>
    <!--contain ends-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>