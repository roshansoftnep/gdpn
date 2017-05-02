<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); /*?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); */?>
<?php if(have_posts()):
		while(have_posts()):the_post();?>
    <div class="breadcrumbs container">
        <ul class="breadcrumbs-list list-inline">
            <li><a href="<?php echo get_home_url();?>">Home</a><i class="fa fa-angle-right"></i></li>
            <li><a href="javascript:void();"><?php echo the_title();?></a></li>
        </ul>
    </div><!--//breadcrumbs-->
       
    <!-- ******Blog Post****** -->
    <div class="blog-post-wrapper container">            
        <div class="row">
            <div class="blog-entry col-md-8 col-sm-8 col-xs-12">                 
                <article class="post">
                    <h2 class="title"><?php the_title();?></h2>
                    <div class="meta">
                        <ul class="meta-list list-inline">                                       
                        	<li class="post-time post_date date updated"><i class="fa fa-calendar"></i> <?php the_date();?></li>
                        	
                    	    </li>
                    	</ul><!--//meta-list-->                           	
                    </div><!--meta-->
                    <div class="share-container">
                        <span class="label">share this:</span>
        
						<span class='st_facebook_hcount' displayText='Facebook'></span>
						<span class='st_twitter_hcount' displayText='Tweet'></span>
						<span class='st_sharethis_hcount' displayText='ShareThis'></span>

                    </div>
                    <div class="content">
                    <?php the_content();?>            
                    </div>
                           				                                        
                </article><!--//post-->                                      
            </div><!--//blog-entry-->
            
            <?php get_sidebar();?>              
        </div><!--//row-->
    </div><!--//blog-->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>
