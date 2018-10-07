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
            <div class="container col-xs-12 col-sm-6 col-md-6 col-lg-6 bg-blue">
                <div class="section-left">
                    <h3 class="section-text"><a href="#">About Us</a></h3>
                </div>
            </div>
            <div class="section-right container col-xs-12 col-sm-6 col-md-6 col-lg-6 bg-black">
                <h3 class="section-text"><a href="#">About Us</a></h3>
            </div>
        </section>

        <section class="classes-section">
            <div class="container col-xs-12 col-sm-6 col-md-6 col-lg-6 bg-black">
                <div class="section-left">
                    <h3 class="section-text"><a href="#">Classes</a></h3>
                </div>
            </div>
            <div class="section-right container col-xs-12 col-sm-6 col-md-6 col-lg-6 bg-green">
                <h3 class="section-text"><a href="#">Classes</a></h3>
            </div>
        </section>

        <section class="gallery-section">
            <div class="container col-xs-12 col-sm-6 col-md-6 col-lg-6 bg-orange">
                <div class="section-left">
                    <h3 class="section-text"><a href="#">Gallery</a></h3>
                </div>
            </div>
            <div class="section-right container col-xs-12 col-sm-6 col-md-6 col-lg-6 bg-black">
                <h3 class="section-text"><a href="#">Gallery</a></h3>
            </div>
        </section>
    </div>
    <!-- /#page-content-wrapper -->

<?php get_footer();?>