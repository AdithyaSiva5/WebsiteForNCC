<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Ncc</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               <nav class="navbar navbar-expand-lg custom_nav-container ">
                  <a class="navbar-brand" href="index.html"><img width="250" height="100px;" src="admin/common/core-img/cook.jpg" alt="#" /></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav">
						<?php
						 session_start();
						   error_reporting(0);
						   if($_SESSION['studid'])
						   {
						   ?>
						    <li class="nav-item active">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item">
                           <a class="nav-link" href="expense.php">Expense</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="exam.php"> Notification</a>
                        </li>
                    
                         <li class="nav-item">
                           <a class="nav-link" href="activity.php">Activites</a>
                        </li>
                        
                     
                        <li class="nav-item">
                           <a class="nav-link" href="feedback.php">Feedback</a>
                        </li>
						  <li class="nav-item">
                           <a class="nav-link" href="logout.php">Logout</a>
                        </li>
						
						<?php
						   }
						   elseif($_SESSION['pid'])

						   {
						?>
						  <li class="nav-item active">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                       <li class="nav-item">
                           <a class="nav-link" href="expense.php">Expense</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="exam.php"> Notification</a>
                        </li>
                    
                         <li class="nav-item">
                           <a class="nav-link" href="activity.php">Activites</a>
                        </li>
                        
                     
                        
						  <li class="nav-item">
                           <a class="nav-link" href="logout.php">Logout</a>
                        </li>
						
						
						
						<?php
						
						   }
						   else
						   {
						?>
						  <li class="nav-item active">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                         <li class="nav-item">
                           <a class="nav-link" href="parent.php">Register</a>
                        </li>
                        <li class="nav-item">
                           <a  class="btn btn-danger" href="login.php">Login</a>
                        </li>
                       <?php
					   
						   }
					   ?>
                     </ul>
                  </div>
               </nav>
            </div>
         </header>