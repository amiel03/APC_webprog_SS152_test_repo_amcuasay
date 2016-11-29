<?php
include_once 'dbconnect.php';
if(isset($_GET['edit_id']))
{
    $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
    $result_set=mysqli_query($con,$sql_query);
    $fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
    // variables for input data
    $first_name = $_POST['first_name'];
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $websites = $_POST['websites'];
    $comments = $_POST['comments'];
    // variables for input data

    // sql query for update data into database
    $sql_query = "UPDATE users SET  first_name='$first_name',nickname='$nickname',email='$email',websites='$websites',comments='comments' WHERE user_id=".$_GET['edit_id'];
    // sql query for update data into database

    // sql query execution function
    if(mysqli_query($con,$sql_query))
    {
        ?>
        <script type="text/javascript">
            alert('Data Are Updated Successfully');
            window.location.href='mypage.php';
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert('error occured while updating data');
        </script>
        <?php
    }
    // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
    header("Location: mypage.php");
}
?>
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
    <div class="sectionform edit">
        <div class="sectioncontainer edit">

            <form method="post">
                <table align="center">
                    <tr>
                        <td><input type="text" name="first_name" placeholder="Name" value="<?php /** @noinspection PhpUndefinedVariableInspection */
                            echo $fetched_row['first_name']; ?>" required /></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="nickname" placeholder="Nickname" value="<?php echo $fetched_row['nickname']; ?>"  /></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="email" placeholder="email" value="<?php echo $fetched_row['email']; ?>" required /></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="websites" placeholder="website" value="<?php echo $fetched_row['websites']; ?>" /></td>
                    </tr>
                    <tr>
                        <td><input text="comment" name="comments" placeholder="comment" value="<?php echo $fetched_row['comments']; ?>"/> </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
                            <button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
                        </td>
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


