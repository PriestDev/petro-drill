<?php
/**
 * Home template with modern hero section
 */
get_header();
?>

<main id="main" class="site-main">
    
    <!-- Modern Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Welcome to Petrodrill Global</h1>
            <p class="hero-subtitle">Multinational energy servicing company with world-leading oil & gas exploration solutions</p>
            <a href="#" class="cta-button">Learn More</a>
        </div>
    </section>

    <!-- Featured Services Section -->
    <section class="services-section">
        <div class="container">
            <h2 class="section-title">Our Divisions</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hydroscan.jpg" alt="Exploration" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                    </div>
                    <h3>Exploration & Production</h3>
                    <p>Hydroscan, Orescan, and Hi-tech Enhanced Oil Recovery Technique (EPM)</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landrig.jpg" alt="Drilling Rigs" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                    </div>
                    <h3>Drill Rig Services</h3>
                    <p>Integrated project management, procurement, and equipment rental solutions</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/barge_rig.jpg" alt="Logistics" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                    </div>
                    <h3>Logistics & Shipping</h3>
                    <p>Comprehensive oilfield service delivery and equipment logistics</p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/office.jpg" alt="Support" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Technical support and solutions from our expert team</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container about-grid">
            <div class="about-content">
                <h2>About Petro-Drill Global</h2>
                <p>We are a multinational energy company dedicated to providing innovative solutions for oil and gas upstream, mid-stream, and downstream operations. With expertise in drill rig consulting, equipment procurement, and cutting-edge exploration technologies, we lead the industry in Texas and globally.</p>
                <p>Our mission is to be an evolutionary force, fostering innovative technologies to achieve world-class performance and customer satisfaction.</p>
                <a href="#" class="read-more-btn">Read More →</a>
            </div>
            <div class="about-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/HSC_processing.png" alt="HSC Processing" style="width: 100%; border-radius: 0.75rem; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);">
            </div>
        </div>
    </section>

    <!-- Latest Posts Section -->
    <section class="blog-section">
        <div class="container">
            <h2 class="section-title">Latest News</h2>
            <div class="posts-grid">
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'post_type'      => 'post',
                );
                $loop = new WP_Query( $args );
                
                while ( $loop->have_posts() ) {
                    $loop->the_post();
                    ?>
                    <article class="post-card">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-image">
                                <?php the_post_thumbnail( 'medium' ); ?>
                            </div>
                        <?php endif; ?>
                        <div class="post-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="post-meta"><?php echo get_the_date(); ?></p>
                            <p><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-link">Read More →</a>
                        </div>
                    </article>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Partner With Us?</h2>
            <p>Get in touch with our team to discuss your project needs</p>
            <a href="#" class="cta-button-primary">Contact Us Today</a>
        </div>
    </section>

</main>

<?php
get_footer();
?>
