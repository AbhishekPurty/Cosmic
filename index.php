<?php
    include "connection.php";
    
    session_start();
        
    $flag = 1;

     if(isset($_SESSION["status"]) && $_SESSION["status"] == "Active"){
        $flag = 0;
     }
    
?>



<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth">

<head>
     <style>
         
     </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body class="is-preload" style="background-image: url(mountain.jpg);background-attachment: fixed;">

    <!-- Wrapper -->
    <div id="wrapper" style="background-attachment: fixed;">

        <!-- Main -->
        <div id="main">
            <div class="inner" style="opacity:0.7">

                <!-- Header -->
                <header id="header">
                    <div class="logo">
                        <a href="index.php">TIDBITS</a>
                    </div>
                </header>

                <!-- Banner -->
                <section class="main-banner" style="background-color:rgb(164, 54, 149);padding:40px;opacity:1;">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-content" style="background-image: url(shaam1.jpg)">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="banner-caption">
                                                <h4 style="font-size:22px;">TIDBITS</h4>
                                                <p>Welcome to this mini blogging site where you can post and view quality mini blogs without any <strong>paid subscriptions</strong></p>
                                                <div class="primary-button">
                                                   <b><a href="#firstblog">GET STARTED</a></b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- FAMOUS BLOGS -->
                <section class="services"  style="background-color:rgb(164, 54, 149);padding:30px;opacity:1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="service-item first-item">

                                    <h4>FIRST BLOG</h4>
                                    <p>jo daalna hai ye p tag ke andar daalna and limit it to 4 lines i guess. and haan ye p tag ke andar daalne ka reason hai the font </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-item second-item">

                                    <h4>SECOND BLOG</h4>
                                    <p>jo daalna hai ye p tag ke andar daalna and limit it to 4 lines i guess. and haan ye p tag ke andar daalne ka reason hai the font.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-item third-item">

                                    <h4>THIRD BLOG</h4>
                                    <p>jo daalna hai ye p tag ke andar daalna and limit it to 4 lines i guess. and haan ye p tag ke andar daalne ka reason hai the font</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-item fourth-item">

                                    <h4>FOURTH BLOG</h4>
                                    <p>jo daalna hai ye p tag ke andar daalna and limit it to 4 lines i guess. and haan ye p tag ke andar daalne ka reason hai the font</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="firstblog"></div>
                </section>

                <!-- FIRSTBLOG -->
                <section class="left-image" style="background-color:rgb(164, 54, 149);padding:30px;opacity:1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="right-content">
                                    <b><h2 style="color:snow" >WRITE YOUR BLOG</h2></b><br />
                                    <p style="color:snow">Enter your content:</p>
                                    <form>
                                        <textarea name="blog" rows="6" class="form-control" id="blog" style="border-radius:0px"></textarea>
                                    </form>
                                    <div class="primary-button">
                                        <a style="background:#52057b;color:snow;border-color:#52057b" href="#">POST</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- SUBSCRIBE -->
                <section class="right-image" style="background-color:rgb(164, 54, 149);padding:40px;opacity:1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="left-content">
                                    <h2 style="color:snow">SUBSCRIBE TO OUR SITE</h2><br />
                                    <p style="color:whitesmoke">E-mail ID</p>
                                    <form>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required=""  data-validate = "Enter e-mail" style="border-radius:0px"><br />

                                        <p style="color:whitesmoke">Phone number</p>

                                        <input name="phone" type="text" class="form-control" id="phone" placeholder="Your phone number..." required=""  data-validate = "Enter phone number" style="border-radius:0px">

                                        <div class="primary-button">
                                            <a style="background:#52057b;color:snow;border-color:#52057b" href="">SUBSCRIBE</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar" style="opacity:0.85;">

            <div class="inner">

                <!-- Search Box -->
                <section id="search" class="alt">
                    <form method="get" action="#">
                        <input type="text" name="search" id="search" placeholder="Search..." />
                    </form>
                </section>

                <!-- Menu -->
                <nav id="menu">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="view_blogs.php">VIEW BLOGS</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li>
                            <a href="#firstblog">WRITE BLOG</a>
                        </li>
                        <?php if($flag == 0){                     
                        ?><li><a href="">MY ACCOUNT</a></li> <li><a href="/Login/logoutmech.php"> LOGOUT</a></li><?php }
                         else if($flag == 1){
                        ?><li><a href="/Login/login.php">LOGIN/REGISTER</a></li><?php } ?>
                    </ul>
                </nav>

                <!-- CONTACT US -->
                <div class="featured-posts">
                    <div class="heading">
                        <h1 style="text-align:center;color:snow;font-size:30px">CONTACT US</h1><hr />
                    </div>
                    <p style="font-size:20px">Creators' Names</p>
                    <p style="font-size:12px">Abhishek Purty - IT k19</p><p style="font-size:12px">Amman Mohit Minz - Prod k19</p><p style="font-size:12px">Justin Arpit Indwar - ECE k19</p><p style="font-size:12px">Anirban Aditya Halder - ECE k19</p><hr />
                    <p style="font-size:20px">Phone/Whatsapp</p>
                    <p style="font-size:12px">+91 7544894946</p><p style="font-size:12px">+91 9650698089</p><p style="font-size:12px">+91 9905399111</p><p style="font-size:12px">+91 9971380184</p><hr />
                </div>



            </div>
        </div>

    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


</html>