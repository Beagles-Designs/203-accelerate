<?php
/**
 * The template for displaying all pages
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

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<ul class="archive-case-study">
                <?php while ( have_posts() ) : the_post(); 
                    $services = get_field('services');
                    $client = get_field('client');
                    $link = get_field('site_link'); 
                    $image1 = get_field('image_1'); ?>
                    
                        <li class="archive-case-study-individual">
                            <article class="case-study">
                                <aside class="case-study-sidebar">
                                      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                      <h5><?php echo $services; ?></h5>
                                      <p><?php the_excerpt(); ?></p>
                                      <a class="case-button" href="<?php echo $link; ?>"><strong>Visit Project ></strong></a> 
                                </aside>
                                <div class="case-study-images archive-case-study-images">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php if($image1) { 
                                            echo wp_get_attachment_image( $image1, $size);
                                        } ?>
                                    </a>     
                                </div>

                            </article>
                        </li>
    			<?php endwhile; // end of the loop. ?>
            </ul>
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
