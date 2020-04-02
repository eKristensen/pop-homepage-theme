<?php
/**
 * EDITIED for POP
 *
 * @package Sydney Child for POP
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
                <?php the_title( '<h1>', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
                <?php the_content(); ?>
                <?php
                        wp_link_pages( array(
                                'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
                                'after'  => '</div>',
                        ) );
                ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
                <?php edit_post_link( __( 'Edit', 'sydney' ), '<span class="edit-link">', '</span>' ); ?>
		<p><?php if (get_bloginfo('language') == "da-DK") { ?>Sidst redigeret<?php } else { ?>Last edited<?php } ?>: <?php the_modified_date(); ?></p>
		<span style="display:none" class="vcard author author_name"><span class="fn"><?php the_author(); ?></span></span>
		<time class="updated" datetime="<?php the_modified_date( 'c' ) ?>"><?php the_modified_date() ?></time>
        </footer><!-- .entry-footer -->
</article><!-- #post-## -->

