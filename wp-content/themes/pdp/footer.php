<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<footer class="footer">
        
        <div class="bottom-bar">
            <div class="container center">         
            <ul class="social-icons list-inline">
                    <li><a href="<?php echo get_field("twitter",52); ?>"><i class="fa fa-twitter"></i></a></li>                        
                    <li><a href="<?php echo get_field("facebook",52); ?>"><i class="fa fa-facebook"></i></a></li>
                </ul>                          
                <small class="copyright text-center">Copyright @ <?php echo date('Y'); ?> <a href="#" target="_blank">Gandhibadi Party Nepal</a></small>                 
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
    
    <!-- Contact Modal -->
 
    <!-- Main Javascript -->          
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/plugins/bootstrap-hover-dropdown.min.js"></script>
<!--     <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/plugins/back-to-top.js"></script>             
 -->    
 <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/plugins/jquery-placeholder/jquery.placeholder.js"></script>                                                                  
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/plugins/FitVids/jquery.fitvids.js"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/js/main.js"></script>
    
    <!-- Flexslider -->    
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/plugins/flexslider/jquery.flexslider-min.js"></script> 
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/js/flexslider-custom.js"></script>     
    
    <!-- Form Validation -->
    <!-- may not neede <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/plugins/jquery.validate.min.js"></script> 
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/js/form-validation-custom.js"></script> -->
    
    <!-- Form iOS fix 
    edited
    <script type="text/javascript" src="assets/plugins/isMobile/isMobile.min.js"></script>
    <script type="text/javascript" src="assets/js/form-mobile-fix.js"></script> -->
    
    <!-- Owl Carousel -->
    <!-- may not needed
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/plugins/owl-carousel/owl.carousel.js"></script> 
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri());?>/js/owl-custom.js"></script> -->
    
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <!-- removed <script src="assets/js/demo/style-switcher.js"></script>-->
    <?php wp_footer();?>
</body>

<!-- Mirrored from themes.3rdwavemedia.com/devstudio/1.5/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Nov 2016 06:16:41 GMT -->
</html> 

