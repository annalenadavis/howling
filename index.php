<?php get_header(); ?>

<div class="showcase row">
            <div class="col-xs-12 col-sm-3 showcase__left">
                <div class="row desktop">
                <h1>Howling</h1>
                    <h1>at the</h1>
                    <h1>Edge</h1>
                    <h1>of Chaos</h1>
                </div><!--end row-->
                <h1 class="mobile">Howling at the</h1>
                <h1 class="mobile">Edge of Chaos</h1>
                <div class="row desktop">
                    <a href="#"><p>valerie@howlingchaos.com</p></a>
                    <br>
                    <p>428 Main St.</p>
                    <p>Beacon, NY 12508</p>
                    <br>
                    <p>Wed 12:30-5pm</p>
                    <p>Thu-Sat 11am-6pm</p>
                    <p>Sun 12:30-5pm</p>
                    <br>
                    <a href="https://www.facebook.com/howlingattheedgeofchaos/" class="icon"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/howlingattheedgeofchaos/" class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div><!--end row-->
            </div><!--end col-->
    
            <div class="col-xs-12 col-sm-9 showcase_right">
              <div class="showcase_text"> 
                  <h2 class="whatWe animate">what we </h2>
                        
                            <h2 class="use animate">use,</h2>
            
                            <h2 class="wear animate">wear, </h2>
                        
                            <h2 class="see animate">and see </h2>
                  
                        <h2 class="everyday animate">everyday, should speak some artful truth about ourself.</h2>
               </div><!--end showcase text-->  
                <div class="animate">
                    <img src="<?php echo get_bloginfo('template_url') ?>/images/howlLogo.jpg" alt="Logo with Wolves Howling at Moon" class="logoImage">
                </div><!--end div-->
            </div><!--end col showcase right-->
        </div> <!--end row-->

        <div class="container tagline">
            <h3>Unique finds for those that HOWL their truth.</h3>
        </div>

        <div class="instagram">
            <?php echo do_shortcode('[instagram-feed]'); ?>
        </div>

        <div class="row content-row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>

            <div class="col-sm-12 col-md-6 responsive-img content">
                <?php the_post_thumbnail('medium'); ?>
            </div>    
        </div><!-- end row-->


<?php get_footer(); ?>