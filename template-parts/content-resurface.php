<?php
/**
 * The template used for displaying page content in resurface links pages
 *
 * @package renubath-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<figure>
	<?php if ( has_post_thumbnail() ) : ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	<?php the_post_thumbnail(); ?>
	</a>
	<?php endif; ?>
	</figure>

	<div class="entry-content">
    <div class="H-surf-left">
    <?php wp_nav_menu( array( 'menu' => 'bath-resurface-page-menu', 'menu_id' => 'bath-resurface-page-menu','menu_class' => 'top-menu-class' ) ); ?>
    </div>
    <div class="H-surf-right">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'renubath-theme' ),
				'after'  => '</div>',
			) );
		?>
      </div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'renubath-theme' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

