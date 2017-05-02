<?php get_header(); ?>
<section class="contact-section section">
        <div class="container">
            <h2 class="title text-center">Contact Us</h2>
            <ul class="contact-info list-inline text-center">
                <li class="tel"><span class="fs1" aria-hidden="true" data-icon="&#x77;"></span><br /> 0800 123 4567</li>
                <li class="email"><span class="fs1" aria-hidden="true" data-icon="&#xe010;"></span><br /> hello@yourdevstudio.com</li>
            </ul>
            <form id="contact-form" class="contact-form form" method="post" action="#">                    
                <div class="row text-center">
                    <div class="contact-form-inner col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">
                        <div class="row">                                                                                       
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <label class="sr-only" for="cname">Your name</label>
                                <input type="text" class="form-control" id="cname" name="name" placeholder="Your name" minlength="2" required>
                            </div>                    
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <label class="sr-only" for="cemail">Email address</label>
                                <input type="email" class="form-control" id="cemail" name="email" placeholder="Your email address" required>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label class="sr-only" for="cmessage">Your message</label>
                                <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="12" required></textarea>
                            </div>
                             <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <button type="submit" class="btn btn-block btn-cta btn-cta-primary">Send Message</button>
                            </div>                           
                        </div><!--//row-->
                    </div>
                </div><!--//row-->
                <div id="form-messages"></div>
            </form><!--//contact-form-->
        </div><!--//container-->
         <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7065.150033543814!2d85.33800527204225!3d27.69952708118032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199b48940f01%3A0x1652d3f9fc8df036!2sBhimsengola%2C+Kathmandu+44600!5e0!3m2!1sen!2snp!4v1479897807390" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></center>
    </section><!--//contact-section-->
    </center>
    
    <!-- ******Map Section****** --> 
    

<?php get_footer();?>