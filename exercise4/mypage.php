<html>
<head>
	<title> Welcome to My Page </title>

	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">

</head>

<body>

	<div id="wrapper">

		<!---/ header /---->
		<header>
			<div class="container">
				<div class="logo">
					<h2> Amiel's Page </h2>
				</div>

				<nav>
					<ul>
						<li><a href="mypage.php" class="activehome">Home</a></li>
						<li><a href="interest.html">Interests</a></li>
						<li><a href="contact.html">Contact</a></li>
						<li><a href="trivia.html">Trivia</a></li>
					</ul>
				</nav>
			</div>
		</header>


		<!---/ slider /---->
		<div id="slider" style="background-image: url('images/bg.jpg')">

			<ol>
				<li class="active"></li>
				<li></li>
				<li></li>
			</ol>

			<div class="text">
				<h4> Hi there! I'm Amiel Cuasay.</h4>
				<p> You can call me Amiel, Kristian or Cuasay/Cuaky.
					
				</p>
			</div>

			<a href="#" class="prev">
				<i class="fa fa-angle-left"></i>
			</a>

			<a href="interest.html" class="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>

		<!---/ section /---->
		<div class="sectionform">		
			<div class="sectioncontainer">

			<?php
			 /*require 'mypage.html';
			 require 'interest.html';
			 require 'contact.html';
			 require 'trivia.html';*/
			// define variables and set to empty values
			$nameErr = $emailErr = $genderErr = $websiteErr = $nickErr = "";
			$name = $email = $gender = $comment = $website = $nickname = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  if (empty($_POST["name"])) {
			    $nameErr = "Name is required";
			  } else {
			    $name = test_input($_POST["name"]);
			    // check if name only contains letters and whitespace
			    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			      $nameErr = "Only letters and white space allowed";
			    }
			  }

			   if (empty($_POST["nickname"])) {
			    $nickname = "";
			  } else {
			    $nickname = test_input($_POST["nickname"]);
			    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
			    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			      $nickErr = "Only letters and white space allowed";
			    }
			  }
			  
			  if (empty($_POST["email"])) {
			    $emailErr = "Email is required";
			  } else {
			    $email = test_input($_POST["email"]);
			    // check if e-mail address is well-formed
			    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			      $emailErr = "Invalid email format";
			    }
			  }
			    
			  if (empty($_POST["website"])) {
			    $website = "";
			  } else {
			    $website = test_input($_POST["website"]);
			    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
			    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
			      $websiteErr = "Invalid URL";
			    }
			  }

			  if (empty($_POST["comment"])) {
			    $comment = "";
			  } else {
			    $comment = test_input($_POST["comment"]);
			  }

			  if (empty($_POST["gender"])) {
			    $genderErr = "Gender is required";
			  } else {
			    $gender = test_input($_POST["gender"]);
			  }
			}

			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
			?>

			<h2>PHP Form Validation Example</h2>
			<p><span class="error">* required field.</span></p>
			<form class="formstyle" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<ul>
			
			 <input type="text" class="name-style align-left" name="name" placeholder="Name *" value="<?php echo $name;?>">
			  <span class="error"> <?php echo $nameErr;?></span> &nbsp;&nbsp;&nbsp;
			  
			  <input type="text" class="nickname-style align-right" name="nickname" placeholder="Nickname" value="<?php echo $nickname;?>">
			  <span class="error"> <?php echo $nickErr;?></span> 
			 
			 <br><br>
			 
			 <input type="text" class="email-style align-left" name="email" placeholder="E-mail *" value="<?php echo $email;?>">
  				<span class="error"> <?php echo $emailErr;?></span> &nbsp;&nbsp;&nbsp;

  			<input type="text" class="website-style align-right" name="website" placeholder="Website" value="<?php echo $website;?>">
			  <span class="error"><?php echo $websiteErr;?></span>
			  <br><br>
			 
			  
			  <textarea name="comment" class="comment-style align-left" placeholder="Comment" rows="5" cols="40"><?php echo $comment;?></textarea>
			  <br><br>
			  
			  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female&nbsp;&nbsp;
			  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male &nbsp; *
			  <span class="error" <?php echo $genderErr;?></span>
			  <br><br>
			  <input type="submit" name="submit" value="S u b m i t">  
			</ul>
			</form>


			<?php
			echo "<h3>Your Input:</h3>";
			echo "<br>";
			echo "Name : $name";
			echo "<br>";
			echo "<br>";
			echo "Nickname : $nickname" ;
			echo "<br>";
			echo "<br>";
			echo "E-mail : $email";
			echo "<br>";
			echo "<br>";
			echo "Website : $website"; 
			echo "<br>";
			echo "<br>";
			echo "Comment/s : $comment"; 
			echo "<br>";
			echo "<br>";
			echo "Gender : $gender"; 
			?>
	
		
			</div>
		</div>

		<!----/ footer /---->
		<footer>

			<div class="copyright">
				&copy; 2016 <a href="https://www.facebook.com/amiel.cuasay"> Amiel Cuasay </a> All Rights Reserved.
			</div>

		</footer>
	</div>
</body>

</html>

<!--<body style = "background-image: url(images/bg2.jpg); background-repeat:no-repeat; background-size:100%; background-attachment:fixed;">
	
	<center><h1 style="font-family:New york;"> I'm </h1></center>
	
	<center><h1 style="font-family:New york; font-size:72px;"> Amiel Cuasay </h1></center>
	<br><br>
	<img src="images/AmielAdorable.jpg" border="2"  alt="Smiley face" style="float:right;width:200px;height:200px;margin-right:560px;">

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<h1 style="font-family:New york; font-size:48px; margin-left:560px; "> Amiel loves to : </h1>
	
    <h1 style="font-family:New york; font-size:28px; margin-left:560px; "> Play guitar </h1>
	<h1 style="font-family:New york; font-size:28px; margin-left:560px; "> Watch movies </h1>
	<h1 style="font-family:New york; font-size:28px; margin-left:560px; "> Sleep </h1>
	<h1 style="font-family:New york; font-size:28px; margin-left:560px; "> Listen to music </h1>
	
	<hr width="50%">
	
	<a href="https://twitter.com/" target="_blank">
	<center><img src="images/twitter.png" width="50" height="50" alt="twitta"></a></center>
	<a href="https://www.youtube.com/" target="_blank">
	<center><img src="images/youtube.png" width="50" height="50" alt="yotube"></a></center>
	
</body>-->


<!--<div id="wrapper">
		<div id="header">
			<div id="header-top">
				<div id="logo">
					<h1> Welcome!</h1>
				</div>
				<div id="search">
					<form>
						<input type="text" name="search" placeholder="Search...">
						<input type="submit" value="Go">
					</form>
				</div>
			</div>
			<div id="header-center">
				<div id="menu_wrapper">
					<ul id="menu">
						<li><a href="#"> Home </a></li>
						<li><a href="#"> Interests </a></li>
						<li><a href="#"> Contact me </a></li>
						<li><a href="#"> etc </a></li>
					</ul>
				</div>
			</div>
			<div id="header-bottom"></div>
		</div>
		<div id="content">
			<div id="content-top"></div>
			<div id="content-center"></div>
		</div>
		<div id="footer">
		</div>

	</div>-->