<?php
/**
 * The template for displaying 404 pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

 get_header(); ?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
 
            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Seems Like You Got Lost' ); ?></h1>
            </header>
               
            <div class="page-wrapper">
                <div class="page-content">
                    <h2><?php _e( 'This is somewhat embarrassing, isn’t it? <br>It looks like nothing was found at this location.' ); ?></h2>
             
                <!-- .page-content -->    
            </div><!-- .page-wrapper -->
 
        </div><!-- #content -->
    </div><!-- #primary -->
<?php get_footer(); ?>