<?php

/* Template Name: Slider */

//get_header();
?>

<div class="pure-slider">

    <?php if (have_rows('slider_repeater')): ?>
        <ul class="slides">
            <?php while (have_rows('slider_repeater')) : the_row(); ?>
                <li id="slide-<?php echo get_row_index(); ?>"> <!-- Using dynamic slide ID -->
                    <?php
                        $image = get_sub_field('slider_image'); // Get image from sub-field
                        if ($image): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                </li>
            <?php endwhile; ?>
        </ul>

        <ul class="thumbnails">
            <?php while (have_rows('slider_repeater')) : the_row(); ?>
                <li>
                    <?php
                    // For each slide, fetch the thumbnail image from ACF sub-fields
                    $thumbnail = get_sub_field('slider_image'); // Assuming you have a 'thumbnail_image' sub-field
                    if ($thumbnail): ?>
                        <a href="#slide-<?php echo get_row_index(); ?>">
                            <img src="<?php echo esc_url($thumbnail['url']); ?>" alt="<?php echo esc_attr($thumbnail['alt']); ?>" />
                        </a>
                    <?php endif; ?>
                </li>
            <?php endwhile; ?>
        </ul>

    <?php else: ?>
        <!-- No rows found (optional fallback content) -->
        <p>No slides available.</p>
    <?php endif; ?>

</div>



<?php //get_footer(); ?>

<style>
    .pure-slider {
	display: block;
	position: relative;
	width: 100%;
	overflow: hidden;
}
.pure-slider .slides {
	overflow: hidden;
	overflow: hidden;
	width: 100%;
	height: 70vmin;
	margin: 0;
	padding: 0;
	list-style: none;
}
.pure-slider .slides > li {
	width: 100%;
	height: 70vmin;
	position: absolute;
	z-index: 1;
	overflow: hidden;
}
.pure-slider .slides > li > img {
	width: 100%;
	height: auto;
}
/*
.pure-slider .slides > li:first-child:not(:target) {
	z-index: 1;
	-webkit-transform: translateY(0%);
	        transform: translateY(0%);
}
*/
.pure-slider .thumbnails {
	display: block;
	position: relative;
	padding: 0;
	margin: 0;
	list-style: none;
}
.pure-slider .thumbnails > li {
	float: left;
	width: 20%;
}
.pure-slider .thumbnails > li > a {
	display: block;
}
.pure-slider .thumbnails > li > a > img {
	width: 100%;
	height: auto;
}

.pure-slider .slides li:target {
	z-index: 3;
	-webkit-animation: slide 1s 1;
}
.pure-slider .slides li:not(:target) {
	-webkit-animation: hidden 1s 1;
}
@-webkit-keyframes slide {
	0% {
		-webkit-transform: translateX(-100%);
		        transform: translateX(-100%);
	}
	100% {
		-webkit-transform: translateX(0%);
		        transform: translateX(0%);
	}
}
@keyframes slide {
	0% {
		-webkit-transform: translateX(-100%);
		        transform: translateX(-100%);
	}
	100% {
		-webkit-transform: translateX(0%);
		        transform: translateX(0%);
	}
}
@-webkit-keyframes hidden {
	0% {
		z-index: 2;
		-webkit-transform: translateX(0%);
		        transform: translateX(0%);
	}
	100% {
		z-index: 2;
		-webkit-transform: translateX(100%);
		        transform: translateX(100%);
	}
}
@keyframes hidden {
	0% {
		z-index: 2;
		-webkit-transform: translateX(0%);
		        transform: translateX(0%);
	}
	100% {
		z-index: 2;
		-webkit-transform: translateX(100%);
		        transform: translateX(100%);
	}
}
</style>