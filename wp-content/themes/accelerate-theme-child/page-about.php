<?php /* Template Name: AboutPageWithoutSidebar */
/**
 * The template for displaying the about page
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
            <p class="heading">Acclerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</p>
            <?php while ( have_posts() ) : the_post(); 
            ?>
        </div>
        <?php endwhile; // end of the loop. ?>  
    </div><!-- #primary -->

    <section class="services">
		<div class="site-content">

			<div class="about-subheading">
				<?php while ( have_posts() ) : the_post();
					$subheading = get_field("subheading");
					$description = get_field("description");
				?>
					<h4><?php echo $subheading ?></h4>
					<p><?php echo $description ?></p>
				<?php endwhile; // end of the loop ?>
			</div>
            
			<ul class="about-services">
                <h5 class="main-service">Our Services</h5>
                <p class="service-tagline">We take pride in our clients and the content we create for them. Here's a brief overview of our services.</p>
				<?php query_posts('posts_per_page=4&post_type=services'); ?>
				<?php while ( have_posts() ) : the_post();
					$service_icon_1 = get_field("service_icon_1");
                    $service_icon_2 = get_field("service_icon_2");
                    $service_icon_3 = get_field("service_icon_3");
                    $service_icon_4 = get_field("service_icon_4");
					$size = "full";
				?>

				<li class="individual-services">
					<figure class="individual-icon">
						<?php echo wp_get_attachment_image($service_icon_1, $size); ?>
					</figure>
					<div class="individual-text">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				</li>

				<?php endwhile; // end of the loop ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>
			</ul>
		</div>
	</section>

	<section class="about-cta">
		<div class="site-content">
			<div class="contact-us">
		    <h2>Interested in working with us?</h2>
			  <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
