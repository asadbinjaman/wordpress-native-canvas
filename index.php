<?php
/**
 * Main template file.
 *
 * @package Native_Canvas
 */

get_header();
?>

<main class="site-main" role="main">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article class="post" id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('No posts found.', 'native-canvas'); ?></p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>