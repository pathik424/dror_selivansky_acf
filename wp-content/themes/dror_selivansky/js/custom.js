
jQuery(document).ready(function () {
    jQuery('.mobileIcon').click(function () {
      jQuery("body").toggleClass('menu-open');
    });
  });
  


// Product Inner Category Page 


$(document).ready(function() {
    // Initially open the first accordion and add 'active' class
    $('.accrodion_box:first-child .accordion_content').slideDown();
    $('.accrodion_box:first-child').addClass('active');
    $('.accrodion_box:first-child .accordion_title img').addClass('active');

    // On click event for the accordion title
    $('.accordion_title').click(function() {
        var $currentAccordionBox = $(this).parent('.accrodion_box');
        var $currentContent = $(this).next('.accordion_content');

        // Check if the current accordion is already open
        if ($currentAccordionBox.hasClass('active')) {
            // Do not allow it to close if it's the only open one
            if ($('.accrodion_box.active').length > 1) {
                // Allow closing this accordion box if others are open
                $currentContent.slideUp();
                $currentAccordionBox.removeClass('active');
                $(this).find('img').removeClass('active');
            }
        } else {
            // Close all other accordion boxes
            $('.accordion_content').slideUp();
            $('.accrodion_box').removeClass('active');
            $('.accordion_title img').removeClass('active');

            // Open the clicked accordion box
            $currentContent.slideDown();
            $currentAccordionBox.addClass('active');
            $(this).find('img').addClass('active');
        }
    });
});