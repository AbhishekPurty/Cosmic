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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>FAQ</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body class="is-preload" style="background-image: url(mountain.jpg);background-attachment: fixed;">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner" style="opacity:0.7">

                <!-- Header -->
                <header id="header">
                    <div class="logo">
                        <a href="index.php">TIDBITS</a>
                    </div>
                </header>

                <!-- Page Heading -->
                <div class="page-heading" >
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 style="text-align:center">FAQ</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>

                <div class="col-md-12">
                    <form method="get" action="#">
                        <input type="text" name="search" class="form-control" class="search" placeholder="Search..." />
                    </form>
                </div>
                <br>
                <br>



                <!-- Tables -->
                <section class="tables" style="background-color:rgb(164, 54, 149);padding:40px;opacity:1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2 style="text-align:center; color:snow"> FREQUENTLY ASKED QUESTIONS</h2>
                                    
                                    <button class="accordion">Section 1</button>
                                    <div class="panel" style="padding-top:10px;padding-bottom:10px">
                                        Lorem ipsum...
                                    </div>

                                    <button class="accordion">Section 2</button>
                                    <div class="panel"  style="padding-top:10px;padding-bottom:10px">
                                        Lorem ipsum...
                                    </div>

                                    <button class="accordion">Section 3</button>
                                    <div class="panel" style="padding-top:10px;padding-bottom:10px">
                                        Lorem ipsum...
                                    </div>
                                    <button class="accordion">Section 4</button>
                                    <div class="panel" style="padding-top:10px;padding-bottom:10px">
                                        Lorem ipsum...
                                    </div>
                                    <button class="accordion">Section 5</button>
                                    <div class="panel" style="padding-top:10px;padding-bottom:10px">
                                        Lorem ipsum...
                                    </div>
                                    <button class="accordion">Section 6</button>
                                    <div class="panel" style="padding-top:10px;padding-bottom:10px">
                                        Lorem ipsum...
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Forms -->
                <section class="forms">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2 style="text-align:center"> HELP AND SUPPORT</h2>

                                </div>
                                <h4 style="text-align:center"> ENTER YOUR QUERIES BELOW </h4>
                                <br><br>
                                <form id="contact" action="" method="post">

                                    <div class="col-md-12">
                                        <fieldset>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." required="">
                                        </fieldset>
                                    </div>


                                    <div class="col-12">
                                        <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" id="form-submit" class="button">Send Message</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>

        <!-- Sidebar -->
        <div id="sidebar" style="opacity:0.85">

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
                            <a href="index.php">WRITE BLOG</a>
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
    <script src="assets/js/accordion.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/transition.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/custom.js"></script>
</body>


</body>

</html>