<!DOCTYPE html>
<html lang="en-US">
<head>
    <title><?php echo $_TITLE; ?></title>
    <base href="<?php echo base_url(); ?>theme/frontend/pulse/"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Saubhagya Ranjan Mishra, Sam Mishra, Saubhagya Rn. Mishra">
    <meta name="keywords" content="saubhagya, sam, mishra">
    <meta name="author" content="Sam Mishra">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- CSS | STYLE -->

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/linecons.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/colors/green.css" id="csscolors" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- CSS | Google Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,500,600' rel='stylesheet' type='text/css'>

    <noscript>
        <style>
        @media screen and (max-width: 755px) {
            .hs-content-scroller {
                overflow: visible;
            }
        }
        </style>
    </noscript>
</head>

<body>
    <!-- Page preloader -->
    <div id="page-loader">
        <canvas id="demo-canvas"></canvas>
    </div>
    
    <?php echo $_CONTENT; ?>
    
    <div id="my-panel">
    </div>
    
    <div class="message-loading-overlay"><i class="fa-spin fa fa-spinner text-primary bigger-160"></i></div>

    <!-- PLUGIN SCRIPTS -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&amp;sensor=false"></script>-->
    <script src="js/jquery-validation/jquery.validate.min.js"></script>
<script src="js/jquery-validation/additional-methods.min.js"></script>
    <script type="text/javascript" src="js/layout.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <!-- END PLUGIN SCRIPTS -->
    
</body>

</html>