<?php
    if(isset($_FILES['resume'])) {

        $file = $_FILES['resume'];

        //File properties
        $file_name = $file['name'];
        $file_name = mt_rand(100000, 999999).$file_name; //added a unique random integer
        $file_name = preg_replace("#[^a-z0-9.]#i", "", $file_name);
        $file_tmp  = $file['tmp_name'];
        $file_size = $file['size'];

        //File Destination
        $file_destination = "../resumes/$file_name";

        //File extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        $allowed = array('doc', 'docx', 'pdf', 'rtf');

        $result = "";

        if($file_tmp){

            if(in_array($file_ext, $allowed)) {

                //Check that file size is <= 10MB 
                if($file_size <= 10485760) {

                    if(move_uploaded_file($file_tmp, $file_destination)){

                        $result='<div class="alert alert-success">Your file was successfully submitted! Thank You!</div>';

                    }
                    else {

                        $result='<div class="alert alert-danger">Error! Could not upload file!</div>';
                    }                

                }
                else{
                    $result='<div class="alert alert-danger">File sizes larger than 10MB are not allowed.</div>';
                }
            }
            else{
                $result='<div class="alert alert-danger">Sorry! This file extension is not allowed!</div>';
            }
        
        }
        else {
            $result='<div class="alert alert-info">No file was selected, please upload again.</div>';

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

    <title>Submit Resume</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/extended.css" rel="stylesheet">

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
                <a class="navbar-brand topnav" href="../"><img src="../img/logo.png"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../">Home</a>
                    </li>
                    <li>
                        <a href="../#about">About</a>
                    </li>
                    <li>
                        <a href="../#program">Program</a>
                    </li>
                    <li>
                        <a href="../#proposals">Proposals</a>
                    </li>
                    <li>
                        <a href="../#partners">Partners</a>
                    </li>
                    <li>
                        <a href="../html/career_fair.html">Career Fair</a>
                    </li>
                    <li>
                        <a href="../#contact">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->


    <div class="container container-padding">
        <div class="row">
            <div class="col-lg-12">                    
                
                <div class="clearfix"></div>
                <h2 class="section-heading">Submit your Resume</h2>

                <p class="lead">Please use the naming standard below for your filename to be uploaded:<br>LastName_FirstName_School_Resume.xxx (.doc, .docx, .pdf, .rtf are all acceptable formats)</p>

                <form action="uploadResume.php" method="post" name="resumeUploadForm" id="resumeUploadForm" enctype = "multipart/form-data">
                <label for="resume"></label>
                <div class="browse-btn">
                    <input type="file" name="resume" id="resume">
                </div>
                <br><br>
                <div class="">    
                    <input type="submit" name="uploadBtn" id="uploadBtn" value="Upload">
                </div>

                <div class="result">
                    <?php echo $result; ?>
                </div>
                 

                </form> 
            </div>
        </div>
    </div>
        <!-- /.container -->

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
    <script src="../js/jquery.js"></script>
    <script src="../js/index.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
