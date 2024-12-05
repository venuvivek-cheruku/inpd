<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
    get_header();

 ?>



<section class="woo-single-container">

    <div class="container">

        <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>

        <?php wc_get_template_part( 'content', 'single-product' ); ?>

        <?php endwhile; // end of the loop. ?>


        <?php
                /**
                 * woocommerce_after_main_content hook.
                 *
                 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                 */
                do_action( 'woocommerce_after_main_content' );
        ?>


    </div>

    <div class="product-download-brochure dark-blue-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-7">
                    <div class="text-wrapper">

                        <p class="white-underline text-uppercase">Download our brochure</p>
                        <h2>For further information on in-house training, download our brochure to learn more about the
                            structure, value and long-term impact taking training in-house has on your professionals.
                        </h2>
                        <div class="button-wrapper">
                            <a href="#" class="siteCTA" target="_self">Speak to an expert</a>
                            <a href="#" class="siteCTA  outline" target="_self">Download
                                brochure</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="image-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-coming-soon.jpg"
                            alt="Brochure Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="product-video">
    <div class="container">
        <div class="float-vid">
            <div class="video-img" data-aos="fade-right">
                <img src="http://inpt.local/wp-content/uploads/2024/07/placeholder.jpg" alt="" class="img-fluid">
                <div class="vid-btn">
                    <a data-bs-toggle="modal" data-bs-target=".vid-modal"><img
                            src="/wp-content/uploads/2024/07/play-btn-1.svg" alt="Play Button" class="img-fluid"></a>
                </div>
            </div>
        </div>
        <div class="modal fade vid-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-12 video-wrapper">
                            <div class="close" data-bs-dismiss="modal">✕</div>
                            <iframe src="https://www.youtube.com/embed/NpEaa2P7qZI?si=lgF3NrWvIT66vJ67" frameborder="0"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</section>

<div class="product-testimonial">
    <div class="item single-test text-center">
        <h2>The coaching was excellent, great breadth and depth of conversation and it has left me feeling
            far
            more confident.</h2>
        <p class="job">John Doe</p>
    </div>
</div>

<section class="product-title-with-icons title-with-icons white-bg">
    <div class="container">
        <div class="row">
            <div class="title-wrapper">
                <p class="blue-underline text-uppercase">IS THIS COURSE RIGHT FOR YOU?</p>
                <h2>What are the benefits of completing this course:</h2>
            </div>
            <div class="col-12">
                <div class="icon-wrapper icon-slider slick-initialized slick-slider slick-dotted">
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 4420px; transform: translate3d(-2080px, 0px, 0px); transition: transform 500ms;">
                            <div class="item slick-slide slick-cloned" data-slick-index="-5" id="" aria-hidden="true"
                                style="width: 260px;" tabindex="-1">
                                <div class="icon-item">
                                    <img src="http://inpt.local/wp-content/uploads/2024/07/skilled-workforce.svg" alt=""
                                        class="img-fluid">
                                    <h5>Job Seniority</h5>
                                    <p>Directors & Senior
                                        Stakeholders</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true"
                                style="width: 260px;" tabindex="-1">
                                <div class="icon-item">
                                    <img src="http://inpt.local/wp-content/uploads/2024/07/flexible-courses.svg" alt=""
                                        class="img-fluid">
                                    <h5>Job Function</h5>
                                    <p>All Directors</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true"
                                style="width: 260px;" tabindex="-1">
                                <div class="icon-item">
                                    <img src="http://inpt.local/wp-content/uploads/2024/07/trusted.svg" alt=""
                                        class="img-fluid">
                                    <h5>Time in Role</h5>
                                    <p>Minimum of 3 years' senior management experience</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true"
                                style="width: 260px;" tabindex="-1">
                                <div class="icon-item">
                                    <img src="http://inpt.local/wp-content/uploads/2024/07/logistics.svg" alt=""
                                        class="img-fluid">
                                    <h5>Sectors</h5>
                                    <p>All Sectors</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true"
                                style="width: 260px;" tabindex="-1">
                                <div class="icon-item">
                                    <img src="http://inpt.local/wp-content/uploads/2024/07/logistics.svg" alt=""
                                        class="img-fluid">
                                    <h5>Key Objective</h5>
                                    <p>Build your understanding of the role & responsibilities of a Director</p>
                                </div>
                            </div>
                            <div class="item slick-slide" data-slick-index="0" aria-hidden="true" style="width: 260px;"
                                tabindex="-1" role="tabpanel" id="slick-slide00"
                                aria-describedby="slick-slide-control00">
                                <div class="icon-item">
                                    <img src="http://inpt.local/wp-content/uploads/2024/07/return-investment.svg" alt=""
                                        class="img-fluid">
                                    <h5>Key Objective</h5>
                                    <p>Build your understanding of the role & responsibilities of a Director</p>
                                </div>
                            </div>
                            <div class="item slick-slide" data-slick-index="1" aria-hidden="true" style="width: 260px;"
                                tabindex="-1" role="tabpanel" id="slick-slide01"
                                aria-describedby="slick-slide-control01">
                                <div class="icon-item">
                                    <img src="http://inpt.local/wp-content/uploads/2024/07/skilled-workforce.svg" alt=""
                                        class="img-fluid">
                                    <h5>Sectors</h5>
                                    <p>All Sectors</p>
                                </div>
                            </div>
                            <div class="item slick-slide" data-slick-index="2" aria-hidden="true" style="width: 260px;"
                                tabindex="0" role="tabpanel" id="slick-slide02"
                                aria-describedby="slick-slide-control02">
                                <div class="icon-item">
                                    <img src="http://inpt.local/wp-content/uploads/2024/07/flexible-courses.svg" alt=""
                                        class="img-fluid">
                                    <h5>Time in Role</h5>
                                    <p>Minimum of 3 years' senior management experience</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-current slick-active" data-slick-index="3"
                                aria-hidden="false" style="width: 260px;" tabindex="0" role="tabpanel"
                                id="slick-slide03" aria-describedby="slick-slide-control03">
                                <div class="icon-item">
                                    <img src="http://inpt.local/wp-content/uploads/2024/07/trusted.svg" alt=""
                                        class="img-fluid">
                                    <h5>Job Function</h5>
                                    <p>All Directors</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-active" data-slick-index="4" aria-hidden="false"
                                style="width: 260px;" tabindex="0" role="tabpanel" id="slick-slide04"
                                aria-describedby="slick-slide-control04">
                                <div class="icon-item">
                                    <img src="http://inpt.local/wp-content/uploads/2024/07/logistics.svg" alt=""
                                        class="img-fluid">
                                    <h5>Job Seniority</h5>
                                    <p>Directors & Senior
                                        Stakeholders</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-cloned slick-active" data-slick-index="6" id=""
                                aria-hidden="false" style="width: 260px;" tabindex="-1">
                                <div class="icon-item">
                                    <img src="http://inpt.local/wp-content/uploads/2024/07/return-investment.svg" alt=""
                                        class="img-fluid">
                                    <h5>Key Objective</h5>
                                    <p>Build your understanding of the role & responsibilities of a Director</p>
                                </div>
                            </div>

                            <div class="item slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true"
                                style="width: 260px;" tabindex="-1">
                                <div class="icon-item">
                                    <img src="http://inpt.local/wp-content/uploads/2024/07/logistics.svg" alt=""
                                        class="img-fluid">
                                    <h5>Sectors</h5>
                                    <p>All Sectors</p>
                                </div>
                            </div>
                            <div class="item slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true"
                                style="width: 260px;" tabindex="-1">
                                <div class="icon-item">
                                    <img src="http://inpt.local/wp-content/uploads/2024/07/logistics.svg" alt=""
                                        class="img-fluid">
                                    <h5>Time in Role</h5>
                                    <p>Minimum of 3 years' senior management experience</p>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
                <div class="icon-nav">
                    <div class="prev slick-arrow" style="">
                        <img src="/wp-content/uploads/2024/07/blue-nav-arrow-left.svg" alt="Arrow Left"
                            class="img-fluid">
                    </div>
                    <div class="icon-dots-container ">
                        <ul class="slick-dots" style="" role="tablist">
                            <li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control00"
                                    aria-controls="slick-slide00" aria-label="1 of 2" tabindex="-1">1</button></li>
                            <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control01"
                                    aria-controls="slick-slide01" aria-label="2 of 2" tabindex="-1">2</button></li>
                            <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control02"
                                    aria-controls="slick-slide02" aria-label="3 of 2" tabindex="0"
                                    aria-selected="true">3</button></li>
                            <li role="presentation" class="slick-active"><button type="button" role="tab"
                                    id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 2"
                                    tabindex="-1">4</button></li>
                            <li role="presentation"><button type="button" role="tab" id="slick-slide-control04"
                                    aria-controls="slick-slide04" aria-label="5 of 2" tabindex="-1">5</button></li>
                            <li role="presentation"><button type="button" role="tab" id="slick-slide-control05"
                                    aria-controls="slick-slide05" aria-label="6 of 2" tabindex="-1">6</button></li>
                        </ul>
                    </div>
                    <div class="next slick-arrow" style="">
                        <img src="/wp-content/uploads/2024/07/blue-nav-arrow-right.svg" alt="Arrow Right"
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="title-with-cards grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="title-wrapper">
                    <p class="blue-underline lw-50 text-uppercase center">TAKE THE IN-HOUSE APPROACH</p>
                    <h2>Considering completing this course in-house?</h2>
                    <p>Our In-House training is fully customisable to your business, and we will work with you to create
                        the perfect training programme for your organisation.</p>
                </div>
                <div class="text-center mt-5">
                    <a href="<?php echo esc_url( $shop_link ); ?>" class="siteCTA blue">Make an enquiry</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-centered-tabs centered-tabs white-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="title-wrapper">
                    <p class="blue-underline lw-50 text-uppercase center">UPCOMING COURSES</p>
                    <h2>Check availability and book your place on an upcoming
                        Directors Development Programme Accelerator</h2>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="tab-title-1" data-bs-toggle="tab" data-bs-target="#tab-1"
                            type="button" role="tab" aria-controls="tab-1" aria-selected="true">
                            VIRTUAL
                        </button>
                    </li>
                    <span>|</span>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-title-2" data-bs-toggle="tab" data-bs-target="#tab-2"
                            type="button" role="tab" aria-controls="tab-2" aria-selected="false" tabindex="-1">
                            FACE TO FACE </button>
                    </li>
                    <span>|</span>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tab-title-2" data-bs-toggle="tab" data-bs-target="#tab-2"
                            type="button" role="tab" aria-controls="tab-2" aria-selected="false" tabindex="-1">
                            IN HOUSE
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="tab-1" role="tabpanel" aria-labelledby="tab-title-1">
                        <div class="content">
                            <p>In Professional Development was founded by individuals who are passionate about learning
                                and development, using our extensive background in business and academia to provide
                                industry-leading courses, increasing the productivity and expertise of professionals.
                            </p>
                            <p>We challenge the traditional methods of learning, enabling professionals everywhere to
                                have access to inclusive and high-quality training.</p>
                        </div>
                        <div class="button-wrapper"></div>
                    </div>
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-title-2">
                        <div class="content">
                            <p>In Professional Development was founded by individuals who are passionate about learning
                                and development, using our extensive background in business and academia to provide
                                industry-leading courses, increasing the productivity and expertise of professionals.
                            </p>
                            <p>We challenge the traditional methods of learning, enabling professionals everywhere to
                                have access to inclusive and high-quality training.</p>
                        </div>
                        <div class="button-wrapper"></div>
                    </div>
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-title-3">
                        <div class="content">
                            <p>In Professional Development was founded by individuals who are passionate about learning
                                and development, using our extensive background in business and academia to provide
                                industry-leading courses, increasing the productivity and expertise of professionals.
                            </p>
                            <p>We challenge the traditional methods of learning, enabling professionals everywhere to
                                have access to inclusive and high-quality training.</p>
                        </div>
                        <div class="button-wrapper"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start WooCommerce Related Products Section -->
<section class="home-courses related-products-section grey-bg">
    <div class="container">
        <div class="text-wrapper">
            <p class="blue-underline text-uppercase">You May also be intrested in</p>
            <h2>See more courses like this one and book your place today</h2>
        </div>
        <div class="row">
            <?php
            global $product;

            $related_products = wc_get_related_products( $product->get_id(), 4 );

            if ( $related_products ) : ?>
            <div class="col-12">
                <div class="filter"></div>
                <div class="course-wrapper">
                    <?php foreach ( $related_products as $related_product_id ) :
                            $related_product = wc_get_product( $related_product_id );
                            $product_title = $related_product->get_name();
                            $product_price = $related_product->get_price_html();
                            $product_permalink = get_permalink( $related_product_id );
                            $product_image = wp_get_attachment_url( $related_product->get_image_id() );
                        ?>
                    <div class="single-course">
                        <div class="top">
                            <img src="<?php echo esc_url( $product_image ); ?>" alt="Card Header" class="img-fluid">
                        </div>
                        <div class="content ">
                            <p class="course-class"><?php echo esc_html( $related_product->get_type() ); ?></p>
                            <h4><?php echo esc_html( $product_title ); ?></h4>
                            <p><?php echo esc_html( $related_product->get_short_description() ); ?></p>
                            <div class="meta">
                                <p class="price"><?php echo wp_kses_post( $product_price ); ?></p>
                            </div>
                            <a href="<?php echo esc_url( $product_permalink ); ?>" class="siteCTA">Visit course</a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php
                    $shop_link = get_permalink( wc_get_page_id( 'shop' ) ); 
                    ?>
                <div class="text-center mt-5">
                    <a href="<?php echo esc_url( $shop_link ); ?>" class="siteCTA blue">View More Courses</a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End WooCommerce Related Products Section -->

<section class="speak-to-team dark-blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="text-wrapper">
                    <h2>Speak to our team</h2>
                    <p>Fill in your details and a member of our training team will be in contact shortly regarding our
                        courses and availability.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1">
                <div class="form-wrapper underlined-inputs">
                    <form id="hsForm_8dd082df-3b56-4488-ab2d-e66683ca6597" method="POST" accept-charset="UTF-8"
                        enctype="multipart/form-data" novalidate=""
                        action="https://forms.hsforms.com/submissions/v3/public/submit/formsnext/multipart/9238273/8dd082df-3b56-4488-ab2d-e66683ca6597"
                        class="hs-form-private hsForm_8dd082df-3b56-4488-ab2d-e66683ca6597 hs-form-8dd082df-3b56-4488-ab2d-e66683ca6597 hs-form-8dd082df-3b56-4488-ab2d-e66683ca6597_0d08eeb5-5593-4600a6e2-ee47168af680 hs-form stacked"
                        target="target_iframe_8dd082df-3b56-4488-ab2d-e66683ca6597"
                        data-instance-id="0d08eeb5-5593-4600a6e2-ee47168af680"
                        data-form-id="8dd082df-3b56-4488-ab2d-e66683ca6597" data-portal-id="9238273"
                        data-test-id="hsForm_8dd082df-3b56-4488-ab2d-e66683ca6597">
                        <div class="hs_firstname hs-firstname hs-fieldtype-text field hs-form-field"><label
                                id="label-firstname-8dd082df-3b56-4488-ab2d-e66683ca6597" class=""
                                placeholder="Enter your "
                                for="firstname-8dd082df-3b56-4488-ab2d-e66683ca6597"><span></span></label>
                            <legend class="hs-field-desc" style="display: none;"></legend>
                            <div class="input"><input id="firstname-8dd082df-3b56-4488-ab2d-e66683ca6597"
                                    name="firstname" required="" placeholder="First name*" type="text" class="hs-input"
                                    inputmode="text" autocomplete="given-name" value=""></div>
                        </div>
                        <div class="hs_lastname hs-lastname hs-fieldtype-text field hs-form-field"><label
                                id="label-lastname-8dd082df-3b56-4488-ab2d-e66683ca6597" class=""
                                placeholder="Enter your "
                                for="lastname-8dd082df-3b56-4488-ab2d-e66683ca6597"><span></span></label>
                            <legend class="hs-field-desc" style="display: none;"></legend>
                            <div class="input"><input id="lastname-8dd082df-3b56-4488-ab2d-e66683ca6597" name="lastname"
                                    required="" placeholder="Last name*" type="text" class="hs-input" inputmode="text"
                                    autocomplete="family-name" value=""></div>
                        </div>
                        <div class="hs_email hs-email hs-fieldtype-text field hs-form-field"><label
                                id="label-email-8dd082df-3b56-4488-ab2d-e66683ca6597" class="" placeholder="Enter your "
                                for="email-8dd082df-3b56-4488-ab2d-e66683ca6597"><span></span></label>
                            <legend class="hs-field-desc" style="display: none;"></legend>
                            <div class="input"><input id="email-8dd082df-3b56-4488-ab2d-e66683ca6597" name="email"
                                    required="" placeholder="Email*" type="email" class="hs-input" inputmode="email"
                                    autocomplete="email" value=""></div>
                        </div>
                        <div class="hs_phone hs-phone hs-fieldtype-phonenumber field hs-form-field"><label
                                id="label-phone-8dd082df-3b56-4488-ab2d-e66683ca6597" class="" placeholder="Enter your "
                                for="phone-8dd082df-3b56-4488-ab2d-e66683ca6597"><span></span></label>
                            <legend class="hs-field-desc" style="display: none;"></legend>
                            <div class="input"><input id="phone-8dd082df-3b56-4488-ab2d-e66683ca6597" name="phone"
                                    required="" placeholder="Phone number*" type="tel" class="hs-input" inputmode="tel"
                                    autocomplete="tel" value=""></div>
                        </div>
                        <div class="hs_jobtitle hs-jobtitle hs-fieldtype-text field hs-form-field"><label
                                id="label-jobtitle-8dd082df-3b56-4488-ab2d-e66683ca6597" class=""
                                placeholder="Enter your "
                                for="jobtitle-8dd082df-3b56-4488-ab2d-e66683ca6597"><span></span></label>
                            <legend class="hs-field-desc" style="display: none;"></legend>
                            <div class="input"><input id="jobtitle-8dd082df-3b56-4488-ab2d-e66683ca6597" name="jobtitle"
                                    required="" placeholder="Job title*" type="text" class="hs-input" inputmode="text"
                                    autocomplete="organization-title" value=""></div>
                        </div>
                        <div class="hs_company hs-company hs-fieldtype-text field hs-form-field"><label
                                id="label-company-8dd082df-3b56-4488-ab2d-e66683ca6597" class=""
                                placeholder="Enter your "
                                for="company-8dd082df-3b56-4488-ab2d-e66683ca6597"><span></span></label>
                            <legend class="hs-field-desc" style="display: none;"></legend>
                            <div class="input"><input id="company-8dd082df-3b56-4488-ab2d-e66683ca6597" name="company"
                                    placeholder="Company name" type="text" class="hs-input" inputmode="text"
                                    autocomplete="organization" value=""></div>
                        </div>
                        <div class="hs_message hs-message hs-fieldtype-textarea field hs-form-field"><label
                                id="label-message-8dd082df-3b56-4488-ab2d-e66683ca6597" class=""
                                placeholder="Enter your "
                                for="message-8dd082df-3b56-4488-ab2d-e66683ca6597"><span></span></label>
                            <legend class="hs-field-desc" style="display: none;"></legend>
                            <div class="input"><textarea id="message-8dd082df-3b56-4488-ab2d-e66683ca6597"
                                    class="hs-input hs-fieldtype-textarea" name="message" required=""
                                    placeholder="Message*"></textarea></div>
                        </div>
                        <div class="hs_submit hs-submit">
                            <div class="hs-field-desc" style="display: none;"></div>
                            <div class="actions"><input type="submit" class="hs-button primary large"
                                    value="Enquire now"></div>
                        </div><input name="hs_context" type="hidden"
                            value="{&quot;embedAtTimestamp&quot;:&quot;1733394974054&quot;,&quot;formDefinitionUpdatedAt&quot;:&quot;1722425553198&quot;,&quot;lang&quot;:&quot;en&quot;,&quot;embedType&quot;:&quot;REGULAR&quot;,&quot;renderRawHtml&quot;:&quot;true&quot;,&quot;userAgent&quot;:&quot;Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36&quot;,&quot;pageTitle&quot;:&quot;Executive coaching « INPD&quot;,&quot;pageUrl&quot;:&quot;http://inpt.local/executive-coaching&quot;,&quot;referrer&quot;:&quot;http://inpt.local/about-us&quot;,&quot;isHubSpotCmsGeneratedPage&quot;:false,&quot;formTarget&quot;:&quot;#hbspt-form-0d08eeb5-5593-4600a6e2-ee47168af680&quot;,&quot;rumScriptExecuteTime&quot;:372.4000000357628,&quot;rumTotalRequestTime&quot;:740.3000000119209,&quot;rumTotalRenderTime&quot;:758.8000000119209,&quot;rumServiceResponseTime&quot;:367.89999997615814,&quot;rumFormRenderTime&quot;:18.5,&quot;connectionType&quot;:&quot;4g&quot;,&quot;firstContentfulPaint&quot;:0,&quot;largestContentfulPaint&quot;:0,&quot;locale&quot;:&quot;en&quot;,&quot;timestamp&quot;:1733394975275,&quot;originalEmbedContext&quot;:{&quot;portalId&quot;:&quot;9238273&quot;,&quot;formId&quot;:&quot;8dd082df-3b56-4488-ab2d-e66683ca6597&quot;,&quot;region&quot;:&quot;na1&quot;,&quot;target&quot;:&quot;#hbspt-form-0d08eeb5-5593-4600a6e2-ee47168af680&quot;,&quot;isBuilder&quot;:false,&quot;isTestPage&quot;:false,&quot;isPreview&quot;:false,&quot;isMobileResponsive&quot;:true},&quot;correlationId&quot;:&quot;0d08eeb5-5593-4600a6e2-ee47168af680&quot;,&quot;renderedFieldsIds&quot;:[&quot;firstname&quot;,&quot;lastname&quot;,&quot;email&quot;,&quot;phone&quot;,&quot;jobtitle&quot;,&quot;company&quot;,&quot;message&quot;],&quot;captchaStatus&quot;:&quot;NOT_APPLICABLE&quot;,&quot;emailResubscribeStatus&quot;:&quot;NOT_APPLICABLE&quot;,&quot;isInsideCrossOriginFrame&quot;:false,&quot;source&quot;:&quot;forms-embed-1.6227&quot;,&quot;sourceName&quot;:&quot;forms-embed&quot;,&quot;sourceVersion&quot;:&quot;1.6227&quot;,&quot;sourceVersionMajor&quot;:&quot;1&quot;,&quot;sourceVersionMinor&quot;:&quot;6227&quot;,&quot;allPageIds&quot;:{},&quot;_debug_embedLogLines&quot;:[{&quot;clientTimestamp&quot;:1733394974234,&quot;level&quot;:&quot;INFO&quot;,&quot;message&quot;:&quot;Retrieved pageContext values which may be overriden by the embed context: {\&quot;pageTitle\&quot;:\&quot;Executive coaching « INPD\&quot;,\&quot;pageUrl\&quot;:\&quot;http://inpt.local/executive-coaching\&quot;,\&quot;referrer\&quot;:\&quot;http://inpt.local/about-us\&quot;,\&quot;userAgent\&quot;:\&quot;Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36\&quot;,\&quot;isHubSpotCmsGeneratedPage\&quot;:false}&quot;},{&quot;clientTimestamp&quot;:1733394974234,&quot;level&quot;:&quot;INFO&quot;,&quot;message&quot;:&quot;Retrieved countryCode property from normalized embed definition response: \&quot;GB\&quot;&quot;}]}"><iframe
                            name="target_iframe_8dd082df-3b56-4488-ab2d-e66683ca6597" style="display: none;"></iframe>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */