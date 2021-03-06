<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package faux-cale
 */?>
<?php if ( is_single() ) { /*single post, no need to implement Masonry bricks*/?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div id="single-content">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' );?>
		</header><!-- .entry-header -->
		
		<div class="entry-content">
		
			<?php the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'faux-cale' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) ); 
						/*wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'faux-cale' ),
						'after'  => '</div>',
					) );*/?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php faux_cale_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div><!-- #single-content -->
</article><!-- #post-## -->
<?php } else {
/*all the posts: we use Masonry bricks to display them all*/
?>
<div class="brick">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php if (has_post_thumbnail(get_the_ID()))
					{?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a><?php }
				else {the_excerpt( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'faux-cale' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )) );}?>
		</div><!-- .entry-content -->
</article><!-- #post-## -->
</div>
<?php }?>