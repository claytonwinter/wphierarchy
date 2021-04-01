<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

            <header class="entry-header">

                <h2 class="search-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo get_post_type( $post ); ?>:
                        <?php the_title(); ?>
                    </a>
                </h2>

               

            </header>

            <div class="entry-content">

                <p>The content-search </p>
                <?php the_excerpt(); ?>

            </div>

</article>