<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

  <header class="entry-header">

    <h1><?php esc_html_e( '404', 'wphierarchy' ); ?></h1>

  </header>

  <div class="entry-content">

    <p><?php esc_html_e( 'OH No! Where did you end up? Use the search bar to find where you want to go!', 'wphierarchy' ); ?></p>
    <?php the_content(); ?>
    <p><?php echo get_search_form(); ?></p>

  </div>

</article>