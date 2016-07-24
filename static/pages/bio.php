<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>My Bio</title>
    <meta content="The portfolio of Tyler Kontra" name="description">
    <meta content="Tyler Kontra" name="author"><!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel=
    "stylesheet" type="text/css"><!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="../css/normalize.css" rel="stylesheet">
    <link href="../css/skeleton.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/hover.css" rel="stylesheet"><!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="../img/favicon/ico.png" rel="icon" type="image/png">
    <!-- animsition.css -->
    <link href="../css/animsition.min.css" rel="stylesheet"><!-- jQuery -->

    <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
    </script><!-- animsition.js -->

    <script src="../js/animsition.min.js">
    </script>
</head>
<body>
    <div class="animsition">
    
    <?php include("../templates/navigation.html"); ?>
        
    <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container main-content">
        <div class="row">
            <div id="about-bio">
                <h1 class="header-text">About Me</h1>
                <p>I'm currently a rising senior at Cal Poly in San Luis Obispo,
                pursuing a major in Chemistry with Minors in Statistics and
                Economics.</p>
                <p>I am originally from King of Prussia, suburb just west of
                Philadelphia, Pennsylvania. I opted for a change of scenery for the
                duration of my collegiate studies, and was lucky enough to wind up at
                Cal Poly.</p>
            </div>
        <div class="row">
            <div id="about-general">
                <h4 class="subheader">Current Preoccupations</h4>
                <p>I am currently on internship with SEI Investments, in their technology services                          department.</p>
                <h4 class="subheader">Future Outlook</h4>
                <p>I am in the process of deciding between graduate school or beginning my career.</p>
                <h4 class="subheader">Contact Me</h4>
                <p>Feel free to contact me with any questions.</p>
                <h6><a class="mail" href="mailto:tyler@tylerkontra.com?Subject=TylerKontra.com" target="_top">tyler@tylerkontra.com</a></h6>
            </div>
             
        </div>
        </div>
    </div><!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->    
    
    <!--ANIMSITION JQUERY CALL-->
    <script>
        $(document).ready(function() {
          $(".animsition").animsition({
            inClass: 'fade-in-right',
            outClass: 'fade-out',
            inDuration: 1200,
            outDuration: 800,
            linkElement: '.animsition-link',
            // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
            loading: true,
            loadingParentElement: 'body', //animsition wrapper element
            loadingClass: 'animsition-loading',
            loadingInner: '', // e.g '<img src="loading.svg" />'
            timeout: false,
            timeoutCountdown: 5000,
            onLoadEvent: true,
            browser: [ 'animation-duration', '-webkit-animation-duration'],
            // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
            // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
            overlay : false,
            overlayClass : 'animsition-overlay-slide',
            overlayParentElement : 'body',
            transition: function(url){ window.location.href = url; }
          });
        });
    </script>
  
</div>
</body>
</html>