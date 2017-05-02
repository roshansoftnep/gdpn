<aside id="blog-sidebar" class="blog-sidebar col-md-3 col-sm-4 col-xs-12 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                <section class="widget search">
                    <h3 class="sr-only title">Search </h3>
                    <form class="search-blog-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search ...">
                        </div>
                        <button type="submit" class="btn btn-cta btn-cta-secondary"><i class="fa fa-search"></i></button>
                    </form>
                </section><!--//search-->
                <section class="widget recent-posts">
                    <h3 class="title">Updates</h3>
                    <ul class="list-unstyled">
                    <?php
                    global $wpdb;
                    $sql = "SELECT p.post_name AS name , p.post_title AS title, pm.meta_value AS meta_value, p.post_date as pdate FROM $wpdb->posts p 
JOIN $wpdb->postmeta pm ON (p.ID = pm.post_id AND pm.meta_key = '_thumbnail_id')
WHERE p.post_type = 'update' order by pdate desc limit 6";
                    $results = $wpdb->get_results($sql);
        				if(count((array)$results) > 0){
           					 foreach($results as $value){
                		$attachment = wp_get_attachment_image_src($value->meta_value,'small',true);?>
                        <li>
                            <img class="thumb img-responsive" src="<?php echo $attachment[0];?>" alt="" />
                            <span class="post-info">
                                <a class="post-title" href="<?php echo esc_url(home_url('/update/')).$value->name;?>"><?php echo $value->title;?></a><br />
                                <span class="date"><?php echo date('Y/m/d',strtotime($value->pdate)); ?></span>
                            </span>
                        </li>
                        <?php }}?>
                        
                    </ul>
                </section><!--//widget-->
                
                
            </aside><!--//blog-side-bar--> 