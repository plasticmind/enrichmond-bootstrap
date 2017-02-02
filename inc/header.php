<?php

// Set Default Variables

isset($page_title) || $page_title = 'Enrichmond Bootstrap Template';
isset($page_slug) || $page_slug = '';


?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php echo $page_title ?></title>

    <!-- Bootstrap core CSS -->
   <!-- <link href="/assets/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Crete+Round|Lato:300,400,700,900" rel="stylesheet">

    <!-- Custom styles -->
    <link href="/assets/css/style.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="<?php echo $page_slug;?><?php if($hero_image) echo ' with-hero'; ?><?php if($with_sidebar) echo ' with-sidebar'; ?>">

    <!-- Top Nav
    ================================================== -->  

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Enrichmond</a>
        </div>

        <!-- Search form -->
        <form class="navbar-form navbar-right" role="search">
          <div id='search-form' class="form-group">
            <div class="input-group">
              <span id='search-icon' class="input-group-addon"><span class='glyphicon glyphicon-search'></span><span class="sr-only">Search</span></span>
              <input type="text" class="form-control" placeholder="Search">
            </div>
          </div>
          <button id='search-button' class='btn btn-default '><span class='glyphicon glyphicon-search'></span><span class="sr-only">Search</span></button>
        </form>

        <div class="collapse navbar-collapse" id="main-nav">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">About</a></li>
            <li><a href="partners.php">Partners</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="#">Volunteer</a></li>
            <li><a href="#">Contact</a></li>
            <li class="active"><a href="#">Donate <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>

      </div>
    </nav>

    <?php if($hero_image): ?>
    <div class="page-hero">
      <div class="container-fluid">
          <img src="<?php echo $hero_image; ?>">
      </div>
    </div>
    <?php endif; ?>

    <div class="page-content">
      
      <div class="container">

