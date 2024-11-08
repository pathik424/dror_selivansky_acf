<?php

/* Template Name: Home */

get_header();
?>

<section class="hero_banner">
    <div class="hero_banner_otr">
        <div class="hero_banner_main">
            <div class="hero_banner_title_content">
                <h1 class="title_h1"><?php the_field('banner_first_tittle') ?></h1>
                <h2 class="title_h2"><?php the_field('banner_second_tittle') ?></h2>
            </div>
            <div class="hero_banner_sub_title">
                <h3 class="title_h5"><?php the_field('banner_first_sub_tittle') ?></h3>
                <h3 class="title_h5"><?php the_field('banner_second_sub_tittle') ?></h3>
            </div>
        </div>
        <div class="hero_banner_image">
            <?php
            $image = get_field('banner_image');
            if ($image): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        </div>
    </div>
</section>



<section class="fiber_flexible_Content repeater_imge_content_single">
    <?php if (have_rows('first_section')):

        // Counter to limit display to the first row only
        $count = 0;
        while (have_rows('first_section')) : the_row();

            // Only display the first row
            if ($count == 0) :

    ?>
                <div class="flexible_image_content_otr">
                    <div class="flexible_img_content">
                        <h3> <?php the_sub_field('product_main_title'); ?></h3>
                        <?php
                        $image = get_sub_field('product_image');
                        if ($image): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                    </div>
                </div>

    <?php
                // Increment the counter and break the loop after the first iteration
                $count++;
                break;
            endif;


        endwhile;

    else:

    // no rows found

    endif; ?>

</section>


<section class="fiber_flexible_Content repeater_imge_content_four ">

    <div class="flexible_image_content_otr ">
        <?php if (have_rows('second_section')):

            // Counter to limit display to the first row only
            $count = 0;
            while (have_rows('second_section')) : the_row();

                // Only display the first row
                if ($count < 4) :

        ?>

                    <div class="flexible_img_content">
                        <h5><?php get_sub_field('product_main_title'); ?></h5>
                        <?php
                        $image = get_sub_field('product_image');
                        if ($image): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                    </div>


        <?php
                    // Increment the counter and break the loop after the first iteration
                    // Increment the counter
                    $count++;

                else :
                    // Stop the loop once four items have been displayed
                    break;
                endif;


            endwhile;

        else:

        // no rows found

        endif; ?>
    </div>
</section>



<section class="fiber_flexible_Content repeater_imge_content_single">
    <div class="flexible_image_content_otr">
        <?php if (have_rows('third_section')) :
            while (have_rows('third_section')) : the_row();
        ?>
                <div class="flexible_img_content">
                    <h3><?php the_sub_field('product_main_title'); ?></h3>

                    <?php
                        $image = get_sub_field('product_image');
                        if ($image): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                </div>
        <?php
                break;
            endwhile;
        else :
            echo '<p>No content found in fifth_section.</p>';
        endif; ?>
    </div>
</section>




<section class="fiber_flexible_Content repeater_imge_content_single">
    <div class="flexible_image_content_otr">
        <?php if (have_rows('fourth_section')) :
            while (have_rows('fourth_section')) : the_row();
        ?>
                <div class="flexible_img_content">
                    <h3><?php the_sub_field('product_main_title'); ?></h3>

                    <?php
                        $image = get_sub_field('product_image');
                        if ($image): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                </div>
        <?php
                break;
            endwhile;
        else :
            echo '<p>No content found in fifth_section.</p>';
        endif; ?>
    </div>
</section>

<section class="fiber_flexible_Content repeater_imge_content_four ">
    <div class="flexible_image_content_otr ">
        <div class="flexible_img_content">
            <h5>Floors</h5>
            <img src="<?php echo get_template_directory_uri(); ?>/images/image_box_2.png" alt="">
        </div>
        <div class="flexible_img_content">
            <h5>Casting</h5>
            <img src="<?php echo get_template_directory_uri(); ?>/images/image_box_3.png" alt="">
        </div>
        <div class="flexible_img_content">
            <h5>Slabs</h5>
            <img src="<?php echo get_template_directory_uri(); ?>/images/image_box_4.png" alt="">
        </div>
        <div class="flexible_img_content">
            <h5>Shot Creting</h5>
            <img src="<?php echo get_template_directory_uri(); ?>/images/image_box_5.png" alt="">
        </div>
    </div>
</section>

<section class="fiber_flexible_Content repeater_imge_content_double">
    <div class="flexible_image_content_otr ">
        <div class="flexible_img_content">
            <h4>Anti Bacterial Concretes</h4>
            <img src="<?php echo get_template_directory_uri(); ?>/images/image_box_8.png" alt="">
        </div>
        <div class="flexible_img_content">
            <h4>Anti Bacterial Fabrics</h4>
            <img src="<?php echo get_template_directory_uri(); ?>/images/image_box_9.png" alt="">
        </div>
    </div>
</section>

<section class="fiber_flexible_Content repeater_imge_content_single">
    <div class="flexible_image_content_otr">
        <div class="flexible_img_content">
            <h3>Concrete Fibers</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/image_box_1.png" alt="">
        </div>
    </div>
</section>

<section class="fiber_flexible_Content repeater_imge_content_thrice">
    <div class="flexible_image_content_otr ">
        <div class="flexible_img_content">
            <h5>Floors</h5>
            <img src="<?php echo get_template_directory_uri(); ?>/images/image_box_11.png" alt="">
        </div>
        <div class="flexible_img_content">
            <h5>Casting</h5>
            <img src="<?php echo get_template_directory_uri(); ?>/images/image_box_12.png" alt="">
        </div>
        <div class="flexible_img_content">
            <h5>Slabs</h5>
            <img src="<?php echo get_template_directory_uri(); ?>/images/image_box_13.png" alt="">
        </div>
    </div>
</section>

<section class="product lightwhite_bg">
    <div class="product_main">
        <div class="product_box">
            <a href="#">
                <h5>PRODUCTS</h5>
            </a>
        </div>
        <div class="product_box">
            <a href="#">
                <h5>PROJECTS</h5>
            </a>
        </div>
        <div class="product_box">
            <a href="#">
                <h5>CONSULATION</h5>
            </a>
        </div>
    </div>
</section>


<?php get_footer(); ?>