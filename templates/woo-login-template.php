<?php 
    /* Template Name: Woo Login Template */
    get_header();
?>

<section class="woo-login-container centered-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    <h1>
                        <?php 
                        // Check if user is logged in or not
                        if ( is_user_logged_in() ) {
                            echo 'My Account'; 
                        } else {
                            echo 'Login'; 
                        }
                        ?>
                    </h1>
                </div>
            </div>
            <div class="col-12 col-lg-10">
                <div class="content">
                    <?php echo do_shortcode('[woocommerce_my_account]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>