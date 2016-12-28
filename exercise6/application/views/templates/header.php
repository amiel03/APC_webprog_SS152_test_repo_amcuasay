<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Welcome to MyPage</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/stylish-portfolio.css" rel="stylesheet">
    <link href="/assets/css/hover.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle hvr-grow"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand">
            <a href="#top" onclick=$("#menu-close").click();>Amiel's Page</a>
        </li>
        <li class="sidebar-home">
            <a href="#top" onclick=$("#menu-close").click();>Home</a>
        </li>
        <li class="sidebar-about">
            <a href="#about" onclick=$("#menu-close").click();>About</a>
        </li>

        <li class="sidebar-contact">
            <a href="#list-unstyled" onclick=$("#menu-close").click();>Contact</a>
        </li>
    </ul>
</nav>

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">
        <h1 style="font-family:HandTypist">Hi I'm Amiel Cuasay</h1>
        <h3 style="font-size:18px">You can call me Amiel, Kristian or Cuasay ...</h3>
        <br>
        <a href="#about" class="btn btn-dark btn-lg hvr-grow">But wait ... there's more!</a>
    </div>
</header>

<!-- About -->
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" style="font-style:italic;font-family:HandTypist;">
                <h2>" Hope is being able to see that there </h2>
                <h3> is light despite all of the darkness "</h3>
                <h3 style="margin-left:500px"> - Desmond Tutu </h3>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Services -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="services" class="services bg-primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
<p><a href="<?php echo site_url('news'); ?>">Home</a> | <a href="<?php echo site_url('news/create'); ?>">Add News</a></p>