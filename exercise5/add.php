<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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


    <!---/ section /---->
    <div class="sectionform add">
        <div class="sectioncontainer add">

            <br>
            <br>
            <form class="form" method="post">
                <table align="center">
                    <tr>
                        <td align="center"><a href="mypage.php">back to main page</a></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="first_name" placeholder="Name" required /></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="nickname" placeholder="Nickame"  /></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="email" placeholder="email" required /></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="websites" placeholder="website" /></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="comments" placeholder="comment"</td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
                    </tr>
                </table>
            </form>

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
