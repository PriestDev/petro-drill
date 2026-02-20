<?php
/**
 * The main template file - displays blog posts
 */
get_header();
?>

<main id="main" class="site-main">
    <div class="container">
        <div style="padding: 3rem 0;">
            <h1 class="page-title">Blog</h1>
        </div>

        <?php if ( have_posts() ) : ?>
            <div class="posts-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-image">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail( 'medium' ); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-content">
                            <header class="entry-header">
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                            </header>

                            <p class="post-meta">
                                <span class="published-date"><?php echo get_the_date( 'M d, Y' ); ?></span>
                                <?php 
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    echo ' • <span class="category">' . esc_html( $categories[0]->name ) . '</span>';
                                }
                                ?>
                            </p>

                            <div class="entry-excerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="read-link">
                                Read More <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div style="margin-top: 3rem; display: flex; justify-content: center; gap: 1rem;">
                <?php the_posts_navigation(); ?>
            </div>

        <?php else : ?>
            <div class="no-posts" style="text-align: center; padding: 3rem 0;">
                <h2><?php esc_html_e( 'No Posts Found', 'petrodrill-theme' ); ?></h2>
                <p><?php esc_html_e( 'Sorry, but nothing matched your search criteria. Please try again.', 'petrodrill-theme' ); ?></p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="cta-button">Back to Home</a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
?>
