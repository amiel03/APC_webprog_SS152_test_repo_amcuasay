<?php
include_once 'dbconnect.php';

// delete condition
if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
	mysqli_query($con,$sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<html>
<head>
	<title> Welcome to My Page </title>

	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<script type="text/javascript">
		function edit_id(id)
		{
			if(confirm('Sure to edit ?'))
			{
				window.location.href='edit.php?edit_id='+id;
			}
		}
		function delete_id(id)
		{
			if(confirm('Sure to Delete ?'))
			{
				window.location.href='mypage.php?delete_id='+id;
			}
		}
	</script>

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
			 
			// define variables and set to empty values
			$first_nameErr = $emailErr = $websitesErr = $nicknameErr = "";
			$first_name = $email = $comments = $websites = $nickname = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  if (empty($_POST["first_name"])) {
			    $first_nameErr = "Name is required";
			  } else {
			    $first_name= test_input($_POST["first_name"]);
			    // check if name only contains letters and whitespace
			    if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
			      $first_nameErr= "Only letters and white space allowed";
			    }
			  }

			   if (empty($_POST["nickname"])) {
			    $nickname = "";
			  } else {
			    $nickname = test_input($_POST["nickname"]);
			    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
			    if (!preg_match("/^[a-zA-Z ]*$/",$nickname)) {
			      $nicknameErr = "Only letters and white space allowed";
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
			    
			  if (empty($_POST["websites"])) {
			    $websites = "";
			  } else {
			    $websites = test_input($_POST["websites"]);
			    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
			    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$websites)) {
			      $websitesErr = "Invalid URL";
			    }
			  }

			  if (empty($_POST["comments"])) {
			    $comments = "";
			  } else {
			    $comments = test_input($_POST["comments"]);
			  }

			  /*if (empty($_POST["gender"])) {
			    $genderErr = "Gender is required";
			  } else {
			    $gender = test_input($_POST["gender"]);
			  }*/
			}

			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
			?>

				<?php
				include_once 'dbconnect.php';
				if(isset($_POST['btn-save']))
				{
					// variables for input data
					$first_name = $_POST['first_name'];
					$nickname = $_POST['nickname'];
					$email = $_POST['email'];
					$websites = $_POST['websites'];
					$comments = $_POST['comments'];
					// variables for input data

					// sql query for inserting data into database

					$sql_query = "INSERT INTO users(first_name,nickname,email,websites,comments) VALUES('$first_name','$nickname','$email','$websites','$comments')";
					mysqli_query($con,$sql_query);

					// sql query for inserting data into database

				}
				?>



			<br>
				<br>
				<br>
				<table class="table">
					<tr>
						<th id="th" colspan="5"><a href="add.php">ADD DATA.</a></th>

					</tr>

					<th id="th">Name</th>
					<th id="th">Nickname</th>
					<th id="th">email</th>
					<th id="th">website</th>
					<th id="th">comment</th>
					<th id="th" colspan="2">Operations</th>
					</tr>
					<?php
					$sql_query="SELECT * FROM users";
					$result_set=mysqli_query($con,$sql_query);
					while($row=mysqli_fetch_row($result_set))
					{
						?>
						<tr>
							<td><?php echo $row[1]; ?></td>
							<td><?php echo $row[2]; ?></td>
							<td><?php echo $row[3]; ?></td>
							<td><?php echo $row[4]; ?></td>
							<td><?php echo $row[5]; ?></td>
							<td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
							<td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
						</tr>
						<?php
					}
					?>
				</table>
	
		
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

