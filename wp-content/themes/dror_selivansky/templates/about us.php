<?php

/* Template Name: About us */

//get_header();
?>

<section class="about_detail_otr">
<?php
if( have_rows('about_detail') ):

    while( have_rows('about_detail') ) : the_row();

    ?>

        <div class="container">
            <div class="about_detail_otr_main">
                <div class="about_detail_image">
                <?php
                        $image = get_sub_field('about_detail_image');
                        if ($image): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                </div>
                <div class="about_us_content">
                <h2> <?php the_sub_field('about_details_title'); ?> </h2>
                <p><?php the_sub_field('about_details_description');?> </p>
                </div>
            </div>


        </div>
        <?php
        // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
?>
    </section>




<?php //get_footer(); ?>