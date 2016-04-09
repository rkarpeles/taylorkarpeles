<?php
// Theme prefix
$prefix = 'bulan-';

// Get the customizer value.
$title = bulan_mod( $prefix . 'page-title' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php hybrid_attr( 'post' ); ?>>

    <div class="hero-wrap">
      <div class="hero">
        <div class="hero-content">
          <h1>Doula Services &amp; Support</h1>
        </div>
      </div>
    </div>

  <div class="entry-content" <?php hybrid_attr( 'entry-content' ); ?>>
    <?php the_content(); ?>
    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'bulan' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->

  <?php edit_post_link( __( 'Edit', 'bulan' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>

</article><!-- #post-## -->
