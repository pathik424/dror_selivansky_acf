<?php

/* Template Name: Products */

get_header();
?>



<section class="our_product_otr">

    <?php if (have_rows('our_products')):
        while (have_rows('our_products')) : the_row();

    ?>
            <section class="our_products_main">
                <div class="container">
                    <div class="our_products">
                        <a href="#">
                            <h2> <?php the_sub_field('main_title'); ?> </h2>
                        </a>
                        <ul>
                            <?php while (have_rows('product_description')) : the_row(); ?>

                                <li><a href="#"><?php the_sub_field('product_description_listing'); ?></a></li>

                        </ul>
                    <?php endwhile; ?>
                    <div class="our_product_image">
                        <?php
                        $image = get_sub_field('background_image');
                        if ($image): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                        
                    </div>
                    </div>
                    <div>
            </section>
    <?php
        endwhile;

    else:

    // no rows found

    endif; ?>

</section>

<?php get_footer(); ?>