<?php
/**
 * The template for displaying the homepage
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

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
    <section class="featured-work">
        <div class="site-content">
            <h4>Featured Work</h4>
                <ul class="homepage-featured-work">
                <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
                    <?php while ( have_posts() ) : the_post(); 
                        $image_1 = get_field("image_1");
                        $image_2 = get_field("image_2");
                        $image_3 = get_field("image_3");
                        $size = "medium";
                    ?>
                    <li class="individual-featured-work">
                        <figure>
                            <?php echo wp_get_attachment_image($image_1, $size); ?>
                        </figure>

                        <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                    </li>
                    <li class="individual-featured-work">
                        <figure>
                            <?php echo wp_get_attachment_image($image_2, $size); ?>
                        </figure>

                        <h6><a href="<?php the_permalink(); ?>"></a></h6>
                    </li>
                    <li class="individual-featured-work">
                        <figure>
                            <?php echo wp_get_attachment_image($image_3, $size); ?>
                        </figure>

                        <h6><a href="<?php the_permalink(); ?>"></a></h6>
                    </li>
                    <?php endwhile; ?> 
                <?php wp_reset_query(); ?>
                </ul>
        </div>
    </section>
    <section class="our-featured-services">
        <div class="site-content">
            <h4>Our Services</h4>
                <ul class="homepage-our-featured-services">
                <?php query_posts('posts_per_page=4&post_type=services'); ?>
                    <?php while ( have_posts() ) : the_post(); 
                        $service_icon_1 = get_field("service_icon_1");
                        $service_icon_2 = get_field("service_icon_2");
                        $service_icon_3 = get_field("service_icon_3");
                        $service_icon_4 = get_field("service_icon_4");
                        $size = "medium";
                    ?>
                    <li class="individual-featured-services">
                        <figure>
                            <?php echo wp_get_attachment_image($service_icon_1, $size); ?>
                        </figure>
                        <div class="featured-services-individual-text">
						    <h6><?php the_title(); ?></h6>
						</div>
                    </li>                    
                    <?php endwhile; ?> 
                <?php wp_reset_query(); ?>
                </ul>
        </div>
    </section>
      <section class="recent-posts">
            <div class="site-content">
                <div class="blog-post">
                    <h4>From the Blog</h4>
                        <?php query_posts('posts_per_page=1'); ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?> 
                        <?php endwhile; ?> 
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section>
        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
            <div id="secondary" class="widget-area" role="complementary">
                <h4>Recent Tweet</h4>
	                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>
        <?php endif; ?>
            <p class="twitter-read-more-link"><a href="<?php echo $link; ?>"_blank>Follow Us &rsaquo;</a></p>
        </section>
    
<?php get_footer(); ?>
