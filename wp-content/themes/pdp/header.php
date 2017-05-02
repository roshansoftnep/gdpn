<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<!-- Mirrored from themes.3rdwavemedia.com/devstudio/1.5/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Nov 2016 06:15:59 GMT -->
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  

<?php
        $default_keywords = '';
        $default_title = "Doen tv";
        $default_description = "doent tv is description";
        $default_keywords .= "this is keyword";
        $default_img = '';
        ?>

<meta property="fb:app_id" content="158161901312463"/>
<meta property="og:title" content="<?php echo $default_title;?>"/>
<meta property="og:type " content="News"/>
<meta property="og:description" content="<?php echo $default_description;?>"/>
<meta property="og:image" content="<?php echo $default_img;?>"/>

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@">
<meta name="twitter:title" content="<?php echo $default_title;?>">
<meta name="twitter:description" content="<?php echo $default_description;?>">
<meta name="twitter:image" content="<?php echo $default_img;?>">

<meta name="description" content="<?php echo $default_description; ?>">
<meta name="keywords" content="<?php echo $default_keywords; ?>">

    <!-- Meta -->
    
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:700,300italic,400italic,700italic,300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/plugins/elegant_font/css/style.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri());?>/plugins/owl-carousel/owl.theme.css">
    
    <?php wp_head(); ?>

    <!-- Theme CSS -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" id="st_insights_js" src="http://w.sharethis.com/button/buttons.js?publisher=92e5f33f-a2c0-4676-9eca-1c68e63b546d"></script>
<script type="text/javascript">stLight.options({publisher: "92e5f33f-a2c0-4676-9eca-1c68e63b546d", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    


</head> 

<body class="blog-post-page no-header-wrapper">    

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=1795765457332333";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <div class="header-wrapper header-wrapper-home">
        <!-- ******HEADER****** --> 
        <header id="header" class="header navbar-fixed-top">  
            <div class="container">       
                <h1 class="logo">
                <img src="<?php echo esc_url(get_template_directory_uri());?>/images/logo.jpg" height="55px">
                    <a href="<?php echo get_home_url(); ?>">Gandhi Badi Party Nepal</a>
                </h1><!--//logo-->
                <nav class="main-nav navbar-right" role="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!--//nav-toggle-->
                    </div><!--//navbar-header-->
                    <div id="navbar-collapse" class="navbar-collapse collapse">
                    <?php if (function_exists(clean_custom_menus())) 
                    clean_custom_menus(); ?>
                        <!--<ul class="nav navbar-nav">
                            <li class="active nav-item"><a href="index-2.html">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="work.html">About <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="work.html">About Us</a></li>
                                    <li><a href="case-study-1.html">History</a></li>
                                    <li><a href="case-study-2.html">Leaders</a></li>   
                                </ul>
                            </li>
                            <li class="nav-item"><a href="about.html">Join The Party</a></li>                                              
                            <li class="nav-item"><a href="blog.html">Gallery</a></li>
                            <li class="nav-item last"><a href="contact.html">Donate</a></li>
                            <li class="nav-item last"><a href="contact.html">Contact</a></li>
                        </ul>--><!--//nav-->
                    </div><!--//navabr-collapse-->
                </nav><!--//main-nav-->
            </div><!--//container-->
        </header><!--//header--> 
