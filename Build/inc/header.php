<?php

// HTML Header Module

// Define default page variables
$base_path = (isset($base_path)) ? $base_path : '/';
$page_title = (isset($page_title)) ? $page_title : 'Enrichmond Bootstrap Template';
$page_slug = (isset($page_slug)) ? $page_slug : 'home';

// Define template list
$templates = array(
"home"=>"Home",
"page"=>"Page",
"blog"=>"Blog",
"partner"=>"Partner",
"event"=>"Event",
"patterns"=>"Pattern Library"
);

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $page_title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Crete+Round|Lato" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="assets/css/theme-enrichmond.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="<?php echo $page_slug; ?>">

 <!-- Template Chooser: TO BE REMOVED
  ================================================== -->
  <div class="template-chooser">
    <div class="template-chooser-header">Select template:</div>
    <div class="template-chooser-select">
      <select>
        <?php foreach ($templates as $type => $title) {
        echo '<option value="',($type=='home'?$base_path:$base_path.$type.'.php'),'"',($type==$page_slug?' selected="selected"':''),'>';
          echo $title;
        echo '</option>'."\n";
        } ?>
      </select>
    </div>
  </div>

 <!-- Bootstrap
  ================================================== -->
  <div id="bootstrap" class="container">

    <!-- Top Nav
    ================================================== -->  

    <div class="row">
      <div class="col-sm-12">

        <div class="bs-component">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

                <?php if('home'==$page_slug): ?>
                  <h1><a class="navbar-brand" href="#">Enrichmond.com</a></h1>
                <?php else: ?>
                  <a class="navbar-brand" href="#">Enrichmond.com</a>
                <?php endif; ?>

              </div>

              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <li<?php if('about'==$page_slug) echo ' class="active"';?>><a href="#">About <span class="sr-only">(current)</span></a></li>
                  <li<?php if('partners'==$page_slug) echo ' class="active"';?>><a href="#">Partners</a></li>
                  <li<?php if('events'==$page_slug) echo ' class="active"';?>><a href="#">Events</a></li>
                  <li<?php if('volunteer'==$page_slug) echo ' class="active"';?>><a href="#">Volunteer</a></li>
                  <li<?php if('contact'==$page_slug) echo ' class="active"';?>><a href="#">Contact</a></li>
                  <li<?php if('donate'==$page_slug) echo ' class="active"';?>><a href="#">Donate</a></li>

                </ul>
                <form class="navbar-form navbar-right" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>

              </div>
            </div>
          </nav>
        </div>