
// Hero Banner Slider

var swiper = new Swiper(".hero_banner_main_swipper", {
    slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".banner_pagination",
        clickable: true,
      },
  });




// Featured Slider

  var swiper = new Swiper(".featured_slide ", {
    navigation: {
      nextEl: ".featured_pag .swiper-button-next",
      prevEl: ".featured_pag .swiper-button-prev",
    },
  });



  // Tabbing Of The Ranking


  jQuery(document).ready(function($) {
    // Hide all content boxes except the first one and add active class to the first content box
    jQuery('.ranking .tabbing_content_box').first().addClass('active');
  
    // Set the first tab as active
    jQuery('.ranking .tabbing_tabs ul li').first().addClass('active');
  
    // Handle tab click event
    jQuery('.ranking .tabbing_tabs ul li').click(function(event) {
      event.preventDefault();
  
      // Remove active class from all tabs
      jQuery('.ranking .tabbing_tabs ul li').removeClass('active');
  
      // Add active class to the clicked tab
      jQuery(this).addClass('active');
  
      // Get the index of the clicked tab
      var index = jQuery(this).index();
  
      // Hide all content boxes and remove active class, then show the corresponding content box and add active class
      jQuery('.ranking .tabbing_content_box').removeClass('active').hide();
      jQuery('.ranking .tabbing_content_box').eq(index).addClass('active').show();
    });
  });
  

  // Tabbing Of The regions

  jQuery(document).ready(function($) {
    // Hide all content boxes except the first one and add active class to the first content box
    jQuery('.regions .tabbing_content_box').first().addClass('active');
  
    // Set the first tab as active
    jQuery('.regions .tabbing_tabs ul li').first().addClass('active');
  
    // Handle tab click event
    jQuery('.regions .tabbing_tabs ul li').click(function(event) {
      event.preventDefault();
  
      // Remove active class from all tabs
      jQuery('.regions .tabbing_tabs ul li').removeClass('active');
  
      // Add active class to the clicked tab
      jQuery(this).addClass('active');
  
      // Get the index of the clicked tab
      var index = jQuery(this).index();
  
      // Hide all content boxes and remove active class, then show the corresponding content box and add active class
      jQuery('.regions .tabbing_content_box').removeClass('active').hide();
      jQuery('.regions .tabbing_content_box').eq(index).addClass('active').show();
    });
  });
  


// Trending Mobile Swiper 

  var swiper = new Swiper(".mobile_swiper", {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
      nextEl: ".trending_tab_pagination .swiper-button-next",
      prevEl: ".trending_tab_pagination .swiper-button-prev",
    },
  });



  document.getElementById('searchIcon').addEventListener('click', function() {
    var searchResults = document.getElementById('searchResults');
    if (searchResults.style.display === 'none' || searchResults.style.display === '') {
        searchResults.style.display = 'block';
    } else {
        searchResults.style.display = 'none';
    }
  });
  
  
  $('.search-bar').click(function(){
    $(this).parent().toggleClass('open');
    $('body').toggleClass('search_open');
  });
  
  
  
  document.addEventListener('DOMContentLoaded', function() {
    var readMoreLink = document.querySelector('.readmorelink');
    var searchInput = document.getElementById('searchInput');
  
    // Event listener for the "Read More" link click
    readMoreLink.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default link behavior
        performSearch();
    });
  
    // Event listener for pressing "Enter" key in the search input
    searchInput.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault(); // Prevent the default form submission
            performSearch();
        }
    });
  
    function performSearch() {
        var searchTerm = searchInput.value.trim();
  
        if (searchTerm !== "") {
            console.log("Searching for: " + searchTerm);
            // Example: Redirect to a search results page
            window.location.href = "/search-results-page?query=" + encodeURIComponent(searchTerm);
        } else {
            alert("Please enter a search term.");
        }
    }
  });

  jQuery(document).ready(function () {
    jQuery('.mobileIcon').click(function () {
      jQuery("body").toggleClass('menu-open');
    });
})
