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
<!--                            <div class="box pink animate"></div>-->
            
                            <h2 class="wear animate">wear, </h2>
<!--                        <div class="box lightBlue animate"></div>    -->
                        
                            <h2 class="see animate">and see </h2>
<!--                        <div class="box darkBlue animate"></div>-->
                  
                        <h2 class="everyday animate">everyday, should speak some artful truth about ourself.</h2>
               </div><!--end showcase text-->  
                <div class="animate">
                    <img src="<?php echo get_bloginfo('template_url') ?>/images/howlLogo.jpg" alt="Logo with Wolves Howling at Moon" class="logoImage">
                </div><!--end divr-->
            </div><!--end col showcase right-->
        </div> <!--end row-->

        <div class="container tagline">
            <h2>Unique finds for those that HOWL their truth.</h2>
        </div>

            <?php echo '<p>booyah</p>';
                echo do_shortcode('[ap_instagram_grid_rotator]'); ?>
<!--        <?php echo apply_filters( 'the_content',' [ap_instagram_mosaic_lightview] '); ?>-->

        <div class="content">
                <?php 
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/page/content', 'front-page' );
                    endwhile;
                else : 
                    get_template_part( 'template-parts/post/content', 'none' );
                endif; ?>
        </div><!-- end content -->

        <?php get_footer(); ?>