<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header();?>
        <section class="aboutus-section">
            <div class="section-left col-xs-12 col-sm-6 col-md-6 col-lg-6 bg-blue">
                <img src="<?php the_field('aboutus-image');?>">
            </div>
            <div class="section-right container col-xs-12 col-sm-6 col-md-6 col-lg-6 bg-black">
                <div class="section-description">
                    <h3 class="section-text"><a href="/about-us">About Us</a></h3>
                </div>
            </div>
        </section>

         <section class="classes-section">
         <div class="section-left col-xs-12 col-sm-6 col-md-6 col-lg-6 bg-blue">
                <img src="<?php the_field('classes-image');?>">
            </div>
            <div class="section-right container col-xs-12 col-sm-6 col-md-6 col-lg-6 bg-black">
                <div class="section-description">
                    <h3 class="section-text"><a href="/classes">Classes</a></h3>
                </div>
            </div>
        </section>

        <section class="gallery-section">
            <div class="section-left col-xs-12 col-sm-6 col-md-6 col-lg-6 bg-orange">
                <img src="<?php the_field('gallery-image');?>">
            </div>
            <div class="section-right container col-xs-12 col-sm-6 col-md-6 col-lg-6 bg-black">
                <div class="section-description">
                    <h3 class="section-text"><a href="/gallery">Gallery</a></h3>
                </div>
            </div>
        </section>
    </div>
    <!-- /#page-content-wrapper -->

<?php get_footer();?>