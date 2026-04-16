<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>

<main id="primary" class="site-main">

    <div class="content-area" style="padding: 20px; max-width: 800px; margin: 0 auto; color: #fff;">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php
                    the_content();
                    ?>
                </div><!-- .entry-content -->
            </article><!-- #post-<?php the_ID(); ?> -->
            <?php
        endwhile; // End of the loop.
        ?>
    </div>

</main><!-- #main -->

<?php
get_footer();
