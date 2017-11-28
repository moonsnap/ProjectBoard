<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MOONSNAP DEV</title>
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/font-awesome.min.css" rel="stylesheet">
    <link href="static/css/pe-icons.css" rel="stylesheet">
    <link href="static/css/prettyPhoto.css" rel="stylesheet">
    <link href="static/css/animate.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
    <script src="static/js/jquery.js"></script>
          
    <link rel="shortcut icon" href="static/images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="static/images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="static/images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="static/images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="static/images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
    jQuery(document).ready(function($){
	'use strict';
      	jQuery('body').backstretch([
	        "static/images/bg/bg1.jpg",
	        "static/images/bg/bg2.jpg",
	        "static/images/bg/bg3.jpg"
	    ], {duration: 5000, fade: 500, centeredY: true });

		$("#mapwrapper").gMap({ controls: false,
         	scrollwheel: false,
         	markers: [{ 	
              	latitude:40.7566,
				longitude: -73.9863,
          	icon: { image: "static/images/marker.png",
              	iconsize: [44,44],
          		iconanchor: [12,46],
          		infowindowanchor: [12, 0] } }],
          	icon: { 
              	image: "static/images/marker.png", 
             	iconsize: [26, 46],
              	iconanchor: [12, 46],
              	infowindowanchor: [12, 0] },
         	latitude:40.7566,
         	longitude: -73.9863,
          	zoom: 14 });
    });
    </script>
</head><!--/head-->
<body>
<div id="preloader"></div>
    <header class="navbar navbar-inverse navbar-fixed-top " role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                 <a class="navbar-brand" href="main"><h1><span class="fa fa-barcode bounce-in"></span> MOONSNAP</h1></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/aboutme">About Me</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="/contactme">Contact</a></li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                      <?php if($this->session->userdata('is_login')){ ?>
                            <li><a> 관리자 모드 사용중</a></li>
                            <li><a href="admin/logout">Logout</a></li>
                      <?php }
                            else{ ?>
                            <li><a href="admin">Login</a></li>
                      <?php } ?>
                        </ul>
                    </li>
                    <!-- <li><span class="search-trigger"><i class="fa fa-search"></i></span></li> -->
                </ul>
            </div>
        </div>
    </header><!--/header-->