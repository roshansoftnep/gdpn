<?php get_header(); ?>
<!-- code for share this
<span class='st_sharethis_hcount' displayText='ShareThis'></span>
<span class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span> -->
<div class="bg-slider-wrapper">
            <div id="bg-slider" class="flexslider bg-slider">
                <ul class="slides">
                <?php global $wpdb;
                $sql = "SELECT  p.post_title AS title,p.post_content as content, pm.meta_value AS meta_value, p.post_date as pdate FROM $wpdb->posts p 
JOIN $wpdb->postmeta pm ON (p.ID = pm.post_id AND pm.meta_key = '_thumbnail_id')
WHERE p.post_type = 'slider' and p.post_status = 'publish' order by pdate desc limit 3"; 
                        $results = $wpdb->get_results($sql);
                        if(count(array($results)) > 0){
                            foreach($results as $key => $value){
                                $attachment = wp_get_attachment_image_src($value->meta_value,'large',true);
                                $attachment = wp_get_attachment_image_src($value->meta_value,'large',true);
                        ?>

                    <li class="slide slide-<?php echo $key;?>"><img src="<?php echo $attachment[0]; ?>"></li>
                   <?php }}?>
                </ul>
            </div>
        </div><!--//bg-slider-wrapper--> 
        <section id="home-promo" class="home-promo section">
            <div class="container text-center">                
                <h2 class="title">
                <?php  echo $value->content;?>
                  

                    <span class="upper">एकता शान्ति र बिकास</span>
                    <span class="upper">अब गान्धीबादले दिन्छ राष्ट्र लाई निकास</span>
                    <span class="middle">गान्धीबादी पार्टी नेपाल</span>
                    <span class="bottom">केन्द्रीय कार्यालय, महाराजग्न्ज ,काठमाडौं </span>
                </h2>
            </div><!--//container-->
        </section><!--//promo-->
    </div><!--//header-wrapper-->
       
    <!-- ******Why Section****** -->
    <section id="who" class="who section">
        <div class="container text-center">
            <h2 class="title text-center">About The Party</h2>
            <?php 
            $sql = "select p.id from $wpdb->posts p where p.post_name = 'about-us'";
            $aboutus = $wpdb->get_row($sql);
            $short_description = get_post_meta($aboutus->id,'short_description',1);
         ?>
            <p class="intro text-center"><?php echo $short_description; ?></p>
            <!--//row-->
            <a class="btn btn-cta btn-cta-secondary" href="<?php echo esc_url(home_url('/about-us')); ?>">Know More</a>
        </div><!--//container-->
    </section><!--//who-->       
    
    
    <!-- ******Latest blog Section****** -->
    <section id="latest-blog" class="latest-blog section">
        <div class="container">
            <h2 class="title text-center">Updates</h2>
            <div class="row">
            <?php 
            $sql = "SELECT p.post_name AS name , p.post_title AS title, pm.meta_value AS meta_value,pm1.meta_value as short_description, p.post_date as pdate FROM $wpdb->posts p 
JOIN $wpdb->postmeta pm ON (p.ID = pm.post_id AND pm.meta_key = '_thumbnail_id')
JOIN $wpdb->postmeta pm1 ON (p.ID = pm1.post_id AND pm1.meta_key = 'short_description')
WHERE p.post_type = 'update' and p.post_status = 'publish' order by pdate desc limit 8";
                    $results = $wpdb->get_results($sql);
                        if(count((array)$results) > 0){
                             foreach($results as $value){
                        $attachment = wp_get_attachment_image_src($value->meta_value,'shop_catalog',true);?>
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="<?php echo esc_url(home_url('/update/')).$value->name;?>"><img class="img-responsive" src="<?php echo $attachment[0];?>" alt="" /></a>
                        </figure>
                        <div class="content-wrapper text-center">
                            <h3 class="sub-title"><a href="blog-post.html"><?php echo $value->title; ?></a></h3>
                            <div class="desc">
                                <p><?php echo $value->short_description;?></p>
                            </div><!--//desc-->
                        </div><!--//content-wrapper text-center-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <?php }}?>
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//latest-blog-->
<?php get_footer();?>