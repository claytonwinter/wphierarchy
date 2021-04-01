<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

            <header class="entry-header">

                <?php the_title( '<h1>', '</h1>'); ?>

                <div class="byline">
                    <?php esc_html_e( 'Author:'); ?> 
                    <?php the_author_posts_link(); ?>
                </div>

            </header>

            <div class="entry-content">

                <p>This is the content page</p>
                <?php the_content(); ?>

            </div>

            <?php if( comments_open() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

</article>