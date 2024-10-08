<?php 
    get_header(); 
    $page_ID = get_option( 'page_for_posts' );
?>

    <section class="news-top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <div class="text-wrapper">
                        <?=get_field('blog_intro', $page_ID);?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="posts-row">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="filter"></div>
                    <div class="posts-wrap">
                        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                            <div class="single-post">
                                <div class="inner">
                                    <div class="post-categories">
                                        <?php
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            foreach ( $categories as $category ) {
                                                echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="post-category">' . esc_html( $category->name ) . '</a> ';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail( 'full' ); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="content">
                                        <p class="date"><?php echo get_the_date( 'j F Y' ); ?></p>
                                        <h4 class="post-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <div class="post-excerpt">
                                            <?=wp_trim_words( get_the_excerpt(), 13, '...'); ?>
                                        </div>
                                        <div class="read-more">
                                            <a href="<?php the_permalink(); ?>" class="siteCTA blue">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
            <div class="pagination">
            <?php
                echo paginate_links( array(
                    'prev_text' => __('<img class="img-fluid" src="/wp-content/uploads/2024/07/blue-nav-arrow-left.svg" alt="arrow left">', 'textdomain'),
                    'next_text' => __('<img class="img-fluid" src="/wp-content/uploads/2024/07/blue-nav-arrow-right.svg" alt="arrow right">', 'textdomain'),
                ) );
            ?>
            </div>
        </div>
    </section>

    <section class="news-signup">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="form-intro text-center">
                        <?=get_field( 'newsletter_signup_text', $page_ID ); ?>
                    </div>
                    <div class="signup-wrap form-wrapper underlined-inputs">
                        <script>
                        hbspt.forms.create({
                            region: "na1",
                            portalId: "9238273",
                            formId: "287a3785-f830-44c4-a4e0-9cbf99c45f64"
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>