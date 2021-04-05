<?php
session_set_cookie_params(time()+600,'/','localhost',false,true);
session_start();
if(!$_SESSION['username']){
header("Location:signin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Enquiry</title>
        <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 10]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
        <meta name="author" content="Codedthemes" />
        <!-- Favicon icon -->
        <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
        <!-- waves.css -->
        <link rel="stylesheet" href="assets/pages/waves/css/waves.min.css" type="text/css" media="all">
        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    </head>
    <body>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="loader-track">
                <div class="preloader-wrapper">
                    <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                    <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                    <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                    <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pre-loader end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <nav class="navbar header-navbar pcoded-header">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo">
                            <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                                <i class="ti-menu"></i>
                            </a>
                            <div class="mobile-search waves-effect waves-light">
                                <div class="header-search">
                                    <div class="main-search morphsearch-search">
                                        <div class="input-group">
                                            <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Keyword">
                                            <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="index.html">
                                <img class="img-fluid" src="assets/images/logo.png" alt="Theme-Logo" />
                            </a>
                            <a class="mobile-options waves-effect waves-light">
                                <i class="ti-more"></i>
                            </a>
                        </div>
                        <div class="navbar-container container-fluid">
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                </li>
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                            </ul>
                            

 <?php
                include("include/TopRightNav.php");
                ?>
                        </div>
                    </div>
                </nav>
                <?php
                include("include/inquiryHeader.php");
                ?>
   <!-- ►►►►►►►►►►►►►►►►►►►►Page-header end►►►►►►►►►►►►►►►► -->
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
    <!-- Page-body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-6">
                <form id="myForm" action="inquiryScript.php" method="post">
                <!-- Tooltip on button card start -->
                <div class="card button-page o-visible">
                    <div class="card-header">
                        <h5>Details</h5>
                    </div>
                    <div class="card-block tooltip-icon button-list">
    <div class="input-group">
        <span class="input-group-prepend" id="name">
            <label class="input-group-text">
        <i class="icofont icofont-user-alt-3"></i></label>
        </span>
        <input type="text" name="name" class="form-control" placeholder="Enter Your Full Name" title="Enter Your Full Name" data-toggle="tooltip">
    </div>
    <div class="input-group">
        <span class="input-group-prepend" id="name"><label class="input-group-text">
        <i class="icofont icofont-ui-email"></i></label></span>
        <input type="email" name="email" class="form-control" placeholder="Enter E-mail" title="Enter email" data-toggle="tooltip">
    </div>
    <div class="input-group">
        <span class="input-group-prepend" id="name"><label class="input-group-text">
        <i class="icofont-mobile-phone"></i></label></span>
        <input id="mobile" type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile No" title="Enter Your Mobile No" data-toggle="tooltip">
    </div>


                        
                    </div>
                </div>
                <!-- Tooltip on button card end -->
                                        
                                        </div>
                                        <div class="col-sm-6">
                                            <!-- Tooltip on popover card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Message</h5>
                                                </div>
                                                <div class="card-block tooltip-pop button-list">
                                                    <div class="input-group">
                                                        <span class="input-group-prepend" id="name"><label class="input-group-text">
                                                        <i class="icofont-ui-message"></i></label></span>
                                                        <textarea id="body" name="message" rows="3" class="form-control" placeholder="Enter Your Message" title="Enter Your Messages" data-toggle="tooltip"></textarea>
                                                    </div>
        <button class="btn btn-primary" type="submit" class="btn btn-primary waves-effect waves-light m-r-20" data-toggle="tooltip" data-placement="right">Submit
        </button>

        <br>

                                                </div>
                                            </div>
                                            <!-- Tooltip on popover card end -->
                                        </div>
                                        </form>
                                        <div class="col-sm-12">
                                            <!-- Tooltips on textbox card start -->
                                            <div class="card o-visible">
                                                <div class="card-header">
                                                    <h5>Enquires:</h5>
                                                </div>
                                                <div class="card-block tooltip-icon button-list">
                                                    <div class="card-body">
                                                        <!-- Topbar Search -->
                                                        
                                                        <div class="table-responsive"> </div>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Tooltips on textbox card end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-body end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main-body end -->
                <div id="styleSelector">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js "></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js "></script>
<!-- waves js -->
<script src="assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vertical/vertical-layout.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
$(document).ready(function() {
$('[data-toggle="tooltip"]').tooltip();
});
$(document).ready(function() {
$('[data-toggle="popover"]').popover({
html: true,
content: function() {
return $('#primary-popover-content').html();
}
});
});
</script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>