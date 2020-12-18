<?php
/**
 * Author:          Andrei Baicus <andrei@themeisle.com>
 * Created on:      28/08/2018
 *
 * @package Neve
 */

$container_class = apply_filters( 'neve_container_class_filter', 'container', 'single-post' );

get_header();

?>
	<div class="<?php echo esc_attr( $container_class ); ?> single-post-container">
		<div class="row">
			<?php do_action( 'neve_do_sidebar', 'single-post', 'left' ); ?>

			<div id="author-meta"> 
				<?php 
$image = get_field('profil');
$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
if( $image ) {
    echo wp_get_attachment_image( $image, $size );
} ?>

			<div class="author"><?php the_field("poete"); ?>
			</div>
</div>

</div>
<a href="javascript:history.go(-1)"><i class="fas fa-arrow-left"></i></a>

			<article id="post-<?php echo esc_attr( get_the_ID() ); ?>"
			
					class="<?php echo esc_attr( join( ' ', get_post_class( 'nv-single-post-wrap col' ) ) ); ?>">
				<?php
				do_action( 'neve_before_post_content' );
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						get_template_part( 'template-parts/content', 'single' );
					}
				} else {
					get_template_part( 'template-parts/content', 'none' );
				}
				do_action( 'neve_after_post_content' );
				
				?>
		
				
			</article>

			
			
		</div>
	</div>
<?php
get_footer();
