<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bright future sec school</title>

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
    <link href="css/nivo-lightbox.css" rel="stylesheet" />
    <link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

    <!-- boxed bg -->
    <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="color/default.css" rel="stylesheet">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <div id="wrapper">

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="top-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <p class="bold text-left">Monday - Friday 8:00am to 3:00pm </p>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <p class="bold text-right">Call us now +255 715 340 407</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container navigation">

                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="../darls/logo.jpg" alt="" width="150%" height="150%" />
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="registerstudent.php">Register</a></li>
                        <li class="active"><a href="alumin.html">Alumin</a></li>
                        <li><a href="staff.html">Staff</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Section: intro -->
        <section id="intro" class="intro">
            <div class="intro-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-wrapper">
                                <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                                    <div class="panel panel-skin">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><span
                                                    class="fa fa-pencil-square-o"></span>Registration Form for alumin<small>(It's
                                                    free!)</small></h3>
                                        </div>
                                        <div class="panel-body">
                                            <form role="form" class="lead" action="alumnregister.php" method="POST">
                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>Full Name</label>
                                                            <input type="text" name="fullname" id="fullname"
                                                                class="form-control input-md">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>Year Of Enrolment</label>
                                                            <input type="date" name="yearofenrolement" id="yearofenrolement"
                                                                class="form-control input-md">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>Year of Graduation</label>
                                                            <input type="date" name="yearofgraduation" id="yearofgraduation"
                                                                class="form-control input-md">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>Head Master during Enrolment</label>
                                                            <input type="text" name="headmasterduringenrolement" id="headmasterduringenrolement"
                                                                class="form-control input-md">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>Head Master during Graduation</label>
                                                            <input type="text" name="headmasterduringgraduation" id="headmasterduringgraduation"
                                                                class="form-control input-md">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>Famous Teacher during Graduation</label>
                                                            <input type="text" name="famousteacherduringgraduation" id="famousteacherduringgraduation"
                                                                class="form-control input-md">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-6 col-sm-6">
                                                        <div class="form-group">

                                                            <label>Select your Division</label><br>
                                                            <input type="radio" name="division" value="division 1">
                                                            <label>Division 1</label>
                                                            <input type="radio" name="division" value="division 2">
                                                            <label>Division 2</label>
                                                            <input type="radio" name="division" value="division 3">
                                                            <label>Division 3</label>
                                                            <input type="radio" name="division" value="division 4 ">
                                                            <label>Division 4</label>
                                                            <input type="radio" name="division" value="division 0">
                                                            <label>Division 0</lable>
                                                        </div>
                                                    </div>


                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group">

                                                            <label>Occupation</label><br>
                                                            <select name="occupation" id="occupation"><br>
                                                                <option value="q0"></option><br>
                                                                <option value="q1">teacher</option><br>
                                                                <option value="q2">doctor</option><br>
                                                                <option value="q4">engineer</option><br>
                                                                <option value="q5">others</option><br>
                                                            </select><br>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>Physical Address</label>
                                                            <input type="text" name="physicaladdress" id="physicaladdress"
                                                                class="form-control input-md">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" name="email" id="email"
                                                                class="form-control input-md">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>Phone number</label>
                                                            <input type="text" name="phonenumber" id="phonenumber"
                                                                class="form-control input-md">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>Facebook</label>
                                                            <input type="text" name="facebook" id="facebook"
                                                                class="form-control input-md">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>Twitter</label>
                                                            <input type="text" name="twitter" id="twitter"
                                                                class="form-control input-md">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <div class="form-group">
                                                            <label>profile picture</label>
                                                            <input type="file" name="profilepicture" id="profilepicture"
                                                                class="form-control input-md">
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="submit" value="Submit" name="Submit"
                                                    class="btn btn-skin btn-block btn-lg">
                                                <p class="lead-footer">* We'll contact you by phone & email later
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- /Section: intro -->
        <!--footer-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Information</h5>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Bright Future center</h5>
                                <ul>
                                    <li>
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
                                        </span> Monday - Friday, 8:00am to 3:00pm
                                    </li>
                                    <li>
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                        </span> +255 715 340 407
                                    </li>
                                    <li>
                                        <span class="fa-stack fa-lg">
                                            <i class="fa fa-circle fa-stack-2x"></i>
                                            <i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
                                        </span> brightfuturesec@yahoo.com
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Our location</h5>
                                <p>Msongola Ward, Dar es Salaam</p>

                            </div>
                        </div>
                        <div class="wow fadeInDown" data-wow-delay="0.1s">
                            <div class="widget">
                                <h5>Follow us</h5>
                                <ul class="company-social">
                                    <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="social-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="text-left">
                                    <p>&copy;Copyright 2022 - Bright Future. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/stellar.js"></script>
    <script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>