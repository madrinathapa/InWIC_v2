
<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'InWIC Contact Form'; 
        $to = 'inwic@indiana.edu'; 
        $subject = 'Message from InWIC 2017 Contact Form ';
        
        $body ="From: $name\n E-Mail: $email\n Message:\n $message";

        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }


        // If there are no errors, send the email
        if (!$errName && !$errEmail && !$errMessage) {

            if (mail ($to, $subject, $body, $from)) {

                $result='<div class="alert alert-success">Thank you! We will be in touch!</div>';
            } 
            else {
                
                $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
            }

            //Clear all the feilds
            $_POST=array(); 
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>InWIC 2017</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/index.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href=""><img src="img/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="" class="js-scroll" data-scroll-to="#home">Home</a>
                    </li>
                    <li>
                        <a href="" class="js-scroll" data-scroll-to="#about">About</a>
                    </li>
                    <li>
                        <a href="" class="js-scroll" data-scroll-to="#program">Program</a>
                    </li>
                    <li>
                        <a href="" class="js-scroll" data-scroll-to="#proposals">Proposals</a>
                    </li>
                    <li>
                        <a href="" class="js-scroll" data-scroll-to="#partners">Partners</a>
                    </li>
                    <li>
                        <a href="html/career_fair.html">Career Fair</a>
                    </li>
                    <li>
                        <a href="" class="js-scroll" data-scroll-to="#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="home" id="home"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>InWIC 2017</h1>
                        <hr class="intro-divider">
                        <h2>LOOKING FORWARD</h2>
                        <p>
                            <!--<span>The Indiana Women in Computing (InWIC) conference is an ACM Celebrations Event that provides a low cost, regionally-tailored, small conference for women in computing.
                            </span>-->
                            
                            <br><br>OCTOBER 27th - 28th<br><br>
                            <a class="hotel-link" target="_blank" href="https://www.ihg.com/crowneplaza/hotels/us/en/indianapolis/indap/hoteldetail?cm_mmc=GoogleMaps-_-CP-_-US-_-INDAP">Crown Plaza Indianapolis Airport,<br>2501 South High School Road,<br>Indianapolis, IN 46241</a>
                            <br><br>
                            <i>This is the second call for proposals! The deadline is October 16, 2017.</i>
                            <br>
                            <i>Notifications will be sent on October 19, 2017.</i>
                            <br>
                        </p>                        
                        <ul class="list-inline">
                            <li>
                                <a href="html/register.html" class="btn btn-default btn-lg">REGISTER</a>
                            </li>
                            <li>
                                <a href="php/uploadResume.php" class="btn btn-default btn-lg">SUBMIT RESUME</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

    <div class="content-section-a" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6 ">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">What is InWIC?</h2>
                    <p class="lead">The Indiana Celebration of Women in Computing (InWIC) conference is an ACM Celebrations Event that provides a low cost, regionally-tailored, small conference for women in computing. <br></p>
                    <ul class="list-unstyled">
                        <li><a href="html/about.html">Read More</a></li>
                    </ul>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive speaker-img" src="img/conference.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b" id="program">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Program Overview</h2>
                    <p class="lead">Industry leaders will share insight and provide guidance to students. For more information, check out the links below:
                    <ul class="list-unstyled">
                        <li><a href="html/program.html">Program Schedule</a></li>
                        <li><a href="html/speakers.html">Speaker Profiles</a></li>
                    </ul>
                    
                    </p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/speaker.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a" id="proposals">

        <div class="container container-">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Call for Participation</h2>
                    <p class="lead">InWIC invites proposals for posters related to your research, special projects, survival tips, or solutions to unique challenges you have faced.</p>
                    <ul class="list-unstyled">
                        <li><a href="html/submission.html">Submission Details</a></li>
                        <li><a href="html/tips.html">Presentation Tips</a></li>
                    </ul>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/submission.jpeg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

     <div class="content-section-b" id="partners">
        <div class="container partners">
            <div class="row">                
                <hr class="section-heading-spacer-center">
                <div class="clearfix"></div>
                <h2 class="section-heading">Partners</h2>
			</div>
			
			<div class="row">
                <div class="col-sm-3"></div>
                  <div class="col-sm-3"><img class="img-responsive img-rounded" style="width: 50%;" src="img/microsoft.png"></div>
                  <div class="col-sm-3"><p>Microsoft</p></div>
                <div class="col-sm-3"></div>
            </div>
<hr>
			<div class="row">
                <div class="col-sm-3"></div>
                  <div class="col-sm-3"><img class="img-responsive img-rounded" style="width: 50%;" src="img/craw.png"></div>
                  <div class="col-sm-3"><p>Computing Research Association Women</p></div>
                <div class="col-sm-3"></div>
            </div>
<hr>
			<div class="row">
                <div class="col-sm-3"></div>
                  <div class="col-sm-3"><img class="img-responsive img-rounded" style="width: 50%;" src="img/acm.png"></div>
                  <div class="col-sm-3"><p>ACM's Women in Computing</p></div>
                <div class="col-sm-3"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-3"></div>
                  <div class="col-sm-3"><img class="img-responsive img-rounded" style="width: 50%;" src="img/bluehorse.png"></div>
                  <div class="col-sm-3"><p>Blue Horseshoe</p></div>
                <div class="col-sm-3"></div>
            </div>
<br/>
			<div class="row">	
                <ul class="list-unstyled">
					<li>
						<a href="html/partners.html" class="btn btn-primary btn-lg" role="button" aria-pressed="true">Become a partner</a>
					</li>
                </ul>
			</div>
                <!--PARTNERS TABLE-->
                <!--
                <h3><span style="color:#A5A083">PLATINUM</span></h3>
                <div class="row">
                  <div class="col-xs-9"><img class="img-responsive img-circle" style="width:30%" src="img/Sponsor-Logo.png"></div>
                  <div class="col-xs-3">Sponsor 1</div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-xs-9"><img class="img-responsive img-circle" style="width:30%"  src="img/Sponsor-Logo.png"></div>
                  <div class="col-xs-3">Sponsor 2</div>
                </div>
                <h3><span style="color:#D4AF37">GOLD</span></h3>
                <div class="row">
                  <div class="col-xs-9"><img class="img-responsive img-circle" style="width:30%"  src="img/Sponsor-Logo.png"></div>
                  <div class="col-xs-3">Sponsor 1</div>
                </div>  
                <hr>
                <div class="row">
                  <div class="col-xs-9"><img class="img-thumbnail img-responsive" style="width:30%" src="img/Sponsor-Logo.png"></div>
                  <div class="col-xs-3">Sponsor 2</div>
                </div>
                <h3><span style="color:#C0C0C0">SILVER</span></h3>
                <div class="row">
                  <div class="col-xs-9"><img class="img-thumbnail img-responsive" style="width:30%"  src="img/Sponsor-Logo.png"></div>
                  <div class="col-xs-3">Sponsor 1</div>
                </div>  
                <hr>
                <div class="row">
                  <div class="col-xs-9"><img class="img-responsive img-rounded" style="width:30%"  src="img/Sponsor-Logo.png"></div>
                  <div class="col-xs-3">Sponsor 2</div>
                </div>
                <h3><span style="color: #A57164">BRONZE</span></h3>
                <div class="row">
                  <div class="col-xs-9"><img class="img-responsive img-rounded" style="width:30%"  src="img/Sponsor-Logo.png"></div>
                  <div class="col-xs-3">Sponsor 1</div>
                </div>
                <hr>                
                <div class="row">
                  <div class="col-xs-9"><img class="sponsor-img" style="width:30%"  src="img/Sponsor-Logo.png"></div>
                  <div class="col-xs-3">Sponsor 2</div>
                </div>
                -->

            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->
        

    <a name="contact" id="contact"></a>
    <div class="content-section-a" id="contact">
        <div class="container partners">
            <div class="row">                
                <hr class="section-heading-spacer-center">
                <div class="clearfix"></div>
                <h2 class="section-heading">Contact Us!</h2>
                <p> Send your questions to <a href="mailto:inwic@indiana.edu">inwic@indiana.edu</a> or submit them below.</p>
                <br>
                
                <ul class="list-inline">
                        <li>
                            <a id = "submitQuest" class="btn btn-default btn-lg">Submit a Question</a>
                        </li>
                        <li>
                            <a href="https://inwic.tech.purdue.edu/SchoolCoordinators.aspx" target="_blank" class="btn btn-default btn-lg">School Coordinators</a>
                        </li>
                </ul>
           

                <div class="col-md-12">
                    <form  id="questForm" class="form-horizontal" role="form" method="post" action="index.php" style="padding-top: 60px; color: black; display: none;">

                        <div class="form-group" id="">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                <?php echo "<p class='text-danger'>$errName</p>";?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                <?php echo "<p class='text-danger'>$errMessage</p>";?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-2">
                                <?php echo $result; ?>  
                            </div>
                        </div>

                    </form> 
                </div>

            </div>
        </div>
    </div>


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright text-muted small">InWIC 2017 All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/index.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
