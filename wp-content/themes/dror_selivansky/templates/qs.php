<?php

/* Template Name: qs */

//get_header();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/QS/QS/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/QS/QS/css/media.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/QS/QS/css/swiper_min.css">
</head>

<body>

    <div class="header_top">
        <div class="container">
            <div class="header_top_main">
                <h1 class="title_h1">Header Top</h1>
            </div>
        </div>
    </div>
    
    <header class="header">
        <div class="container">
            <div class="header_main">
                <div class="left_header">
                    <div class="mobileIcon">
                        <a href="#."></a>
                    </div>  
                    <div class="header_logo">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/Logo.svg" alt=""></a>
                    </div>
                    <div class="header_links mobile">
                        <ul>
                            <li><a href="#featured">Featured</a></li>
                            <li><a href="#ranking">Rankings</a></li>
                            <li><a href="#regions">Regions</a></li>
                            <li><a href="#">Subscribe</a></li>
                        </ul>
                    </div>
                </div>
                <div class="right_header ">
                    <div class="toprightSection" id=myOverlay>
                        <div class="search">
                            <div class="search-bar">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" id="searchIcon">
                                    <path d="M19 19L14.65 14.65M17 9C17 13.4183 13.4183 17 9 17C4.58172 17 1 13.4183 1 9C1 4.58172 4.58172 1 9 1C13.4183 1 17 4.58172 17 9Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="search-results" id="searchResults">
                                <div class="search_input_icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" id="searchIcon">
                                        <path d="M19 19L14.65 14.65M17 9C17 13.4183 13.4183 17 9 17C4.58172 17 1 13.4183 1 9C1 4.58172 4.58172 1 9 1C13.4183 1 17 4.58172 17 9Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <input type="text" placeholder="Search in GEN" id="searchInput">
                                </div>
                                <div class="readMoreBtn d-none d-xxl-flex d-xl-flex d-lg-flex align-items-center justify-content-start">
                                    <a class="readmorelink" tabindex="0"><img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/Vectorreadmore.png" class="readmoreimg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btnLogin d-none d-xxl-block d-xl-block d-lg-block mobile">
                        <a href="#kontakt" >Login</a>
                    </div>
                    <div class="btnRegister d-none d-xxl-block d-xl-block d-lg-block mobile">
                    <a href="#kontakt" class="btn btn-orange-contact navButton fw-bold">Register</a>
                    </div> 
                    <div class="for_mobile right_menu">
                        <div class="header_links">
                            <ul>
                                <li><a href="#featured">Featured</a></li>
                                <li><a href="#ranking">Rankings</a></li>
                                <li><a href="#regions">Regions</a></li>
                                <li><a href="#">Subscribe</a></li>
                            </ul>
                        </div>
                        <div class="login_ragi">
                            <div class="btnLogin d-none d-xxl-block d-xl-block d-lg-block ">
                                <a href="#kontakt" >Login</a>
                            </div>
                            <div class="btnRegister d-none d-xxl-block d-xl-block d-lg-block ">
                                <a href="#kontakt" class="btn btn-orange-contact navButton fw-bold">Register</a>
                            </div>
                        </div>
                    </div>
                    
                 </div>
            </div>
        </div>
    </header>

    <section class="hero_banner">
        <div class="container">
            <div class="hero_banner_main_swipper swiper mySwiper">
                <div class="hero_banner_slides_otr swiper-wrapper">
                    <div class="hero_banner_slides swiper-slide">
                        <div class="hero_banner_img animated_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_img.png" alt="">
                        </div>
                        <div class="hero_banner_slides_content flex_col_20">
                            <div class="banner_content_title_img_content fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kay Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et
                                    velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora
                                    torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                            viewBox="0 0 11 10" fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hero_banner_slides swiper-slide">
                        <div class="hero_banner_img animated_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_img.png" alt="">
                        </div>
                        <div class="hero_banner_slides_content flex_col_20 ">
                            <div class="banner_content_title_img_content fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kay Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et
                                    velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora
                                    torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                            viewBox="0 0 11 10" fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hero_banner_slides swiper-slide">
                        <div class="hero_banner_img animated_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_img.png" alt="">
                        </div>
                        <div class="hero_banner_slides_content flex_col_20">
                            <div class="banner_content_title_img_content fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kay Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et
                                    velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora
                                    torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                            viewBox="0 0 11 10" fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hero_banner_slides swiper-slide">
                        <div class="hero_banner_img animated_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_img.png" alt="">
                        </div>
                        <div class="hero_banner_slides_content flex_col_20">
                            <div class="banner_content_title_img_content fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kay Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et
                                    velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora
                                    torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                            viewBox="0 0 11 10" fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination banner_pagination"></div>
            </div>
        </div>
    </section>

    <Section>
    <div class="vertical-section">
  Content above
</div>
<div class="sticky-container">
  <main>
    <section>
      <div>
        <div>
        <div class="trending_tab flex_col_20 swiper-slide">
                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kay Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                        <li>Asia</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center textoverflow">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per
                                    conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"
                                            fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
        </div>
      </div>
    </section>
    <section>
      <div>
        <div>
        <div class="trending_tab flex_col_20 swiper-slide">
                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kay Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                        <li>Asia</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center textoverflow">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per
                                    conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"
                                            fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
        </div>
      </div>
    </section>
    <section>
      <div>
        <div>
        <div class="trending_tab flex_col_20 swiper-slide">
                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kay Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                        <li>Asia</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center textoverflow">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per
                                    conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"
                                            fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
        </div>
      </div>
    </section>
    <section>
      <div>
        <div>
        <div class="trending_tab flex_col_20 swiper-slide">
                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kay Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                        <li>Asia</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center textoverflow">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per
                                    conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"
                                            fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
        </div>
      </div>
    </section>
  </main>
</div>
<div class="vertical-section">
  Content Below
</div>

    </Section>



    <section class="trending_now">
        <div class="container">
            <div class="trending_main">
                <div class="trending_main_title">
                    <div class="title_left">
                        <h1 class="title_h1">Trending now</h1>
                        <div class="featured_slides_pagination trending_tab_pagination">
                            <div class="swiper_pag_aero swiper-button-prev left_aero">
                                <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/left_aero.svg" alt="">
                            </div>
                            <div class="swiper_pag_aero swiper-button-next right_aero">
                                <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/right_aero.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="view_all">
                        <a href="#" class="btn black_btn">View all</a>
                    </div>
                </div>
                <div class="trending_content_otr  swiper mySwiper mobile_swiper">
                    <div class="trending_content_main ">
                        <div class="trending_tab flex_col_20 swiper-slide">
                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kay Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                        <li>Asia</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center textoverflow">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per
                                    conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"
                                            fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="trending_tab flex_col_20 swiper-slide">
                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kay Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                        <li>Asia</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center textoverflow">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per
                                    conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"
                                            fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="trending_tab flex_col_20 swiper-slide">
                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kay Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                        <li>Asia</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center textoverflow">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per
                                    conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"
                                            fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="trending_tab flex_col_20 swiper-slide">
                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kay Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                        <li>Asia</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center textoverflow">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per
                                    conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"
                                            fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="trending_tab flex_col_20 swiper-slide">
                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kay Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                        <li>Asia</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center textoverflow">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per
                                    conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"
                                            fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="trending_tab flex_col_20 swiper-slide">
                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                <div class="banner_top_img ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                    <p>Kayyyy Hegmann</p>
                                </div>
                                <div class=small_intro>
                                    <ul>
                                        <li>Featured</li>
                                        <li>Asia</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="banner_content_center textoverflow">
                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                                    interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per
                                    conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="read_more hover_yellow">
                                <a href="#">Read More
                                    <div class="yellow_aero">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"
                                            fill="none">
                                            <path
                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                fill="#1D1D1B" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mobile_trending_content_main swiper-wrapper">
                        <div class="trending_slides swiper-slide">
                            <div class="trending_tab flex_col_20">
                                <div class="banner_content_title_img_content twelve_p fourteen_p">
                                    <div class="banner_top_img ">
                                        <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                        <p>Kay Hegmann</p>
                                    </div>
                                    <div class=small_intro>
                                        <ul>
                                            <li>Featured</li>
                                            <li>Asia</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="banner_content_center textoverflow">
                                    <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                </div>
                            </div>
                            <div class="trending_tab flex_col_20">
                                <div class="banner_content_title_img_content twelve_p fourteen_p">
                                    <div class="banner_top_img ">
                                        <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                        <p>Kay Hegmann</p>
                                    </div>
                                    <div class=small_intro>
                                        <ul>
                                            <li>Featured</li>
                                            <li>Asia</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="banner_content_center textoverflow">
                                    <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                </div>
                            </div>
                            <div class="trending_tab flex_col_20">
                                <div class="banner_content_title_img_content twelve_p fourteen_p">
                                    <div class="banner_top_img ">
                                        <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                        <p>Kay Hegmann</p>
                                    </div>
                                    <div class=small_intro>
                                        <ul>
                                            <li>Featured</li>
                                            <li>Asia</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="banner_content_center textoverflow">
                                    <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                </div>
                            </div>

                        </div>
                        <div class="trending_slides swiper-slide">
                            <div class="trending_tab flex_col_20">
                                <div class="banner_content_title_img_content twelve_p fourteen_p">
                                    <div class="banner_top_img ">
                                        <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                        <p>Patel</p>
                                    </div>
                                    <div class=small_intro>
                                        <ul>
                                            <li>Featured</li>
                                            <li>Asia</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="banner_content_center textoverflow">
                                    <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                </div>
                            </div>
                            <div class="trending_tab flex_col_20">
                                <div class="banner_content_title_img_content twelve_p fourteen_p">
                                    <div class="banner_top_img ">
                                        <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                        <p>Kay Hegmann</p>
                                    </div>
                                    <div class=small_intro>
                                        <ul>
                                            <li>Featured</li>
                                            <li>Asia</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="banner_content_center textoverflow">
                                    <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                </div>
                            </div>
                            <div class="trending_tab flex_col_20">
                                <div class="banner_content_title_img_content twelve_p fourteen_p">
                                    <div class="banner_top_img ">
                                        <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                        <p>Kay Hegmann</p>
                                    </div>
                                    <div class=small_intro>
                                        <ul>
                                            <li>Featured</li>
                                            <li>Asia</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="banner_content_center textoverflow">
                                    <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                </div>
                            </div>

                        </div>
                        <div class="trending_slides swiper-slide">
                            <div class="trending_tab flex_col_20">
                                <div class="banner_content_title_img_content twelve_p fourteen_p">
                                    <div class="banner_top_img ">
                                        <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                        <p>Desai</p>
                                    </div>
                                    <div class=small_intro>
                                        <ul>
                                            <li>Featured</li>
                                            <li>Asia</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="banner_content_center textoverflow">
                                    <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                </div>
                            </div>
                            <div class="trending_tab flex_col_20">
                                <div class="banner_content_title_img_content twelve_p fourteen_p">
                                    <div class="banner_top_img ">
                                        <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                        <p>Kay Hegmann</p>
                                    </div>
                                    <div class=small_intro>
                                        <ul>
                                            <li>Featured</li>
                                            <li>Asia</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="banner_content_center textoverflow">
                                    <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                </div>
                            </div>
                            <div class="trending_tab flex_col_20">
                                <div class="banner_content_title_img_content twelve_p fourteen_p">
                                    <div class="banner_top_img ">
                                        <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                        <p>Kay Hegmann</p>
                                    </div>
                                    <div class=small_intro>
                                        <ul>
                                            <li>Featured</li>
                                            <li>Asia</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="banner_content_center textoverflow">
                                    <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <section class="featured" id="featured">
        <div class="container">
            <div class="featured_main">
                <div class="featured_top">
                    <div class="featured_left">
                        <div class="featured_title">
                            <div class="featured_title_left">
                                <h1 class="title_h1">Latest</h1>
                                <div class="featured_slides_pagination featured_pag">
                                    <div class="swiper_pag_aero swiper-button-prev left_aero">
                                        <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/left_aero.svg" alt="">
                                    </div>
                                    <div class="swiper_pag_aero swiper-button-next right_aero">
                                        <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/right_aero.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="view_all">
                                <a href="#" class="btn black_btn">View all</a>
                            </div>
                        </div>
                        <div class="featured_slide_otr featured_slide swiper mySwiper">
                            <div class="featured_slide_main swiper-wrapper">
                                <div class="featured_slides swiper-slide">
                                    <div class="featured_tab flex_col_20">
                                        <div class="featured_img animated_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_img.png" alt="">
                                        </div>
                                        <div class="featured_content flex_col_20">
                                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                                <div class="banner_top_img ">
                                                    <img src="./images/hero_banner_user_img.png" alt="">
                                                    <p>Kay Hegmann</p>
                                                </div>
                                                <div class=small_intro>
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li>Asia</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="banner_content_center textoverflow">
                                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                                    vulputate libero et velit interdum, ac aliquet odio mattis. Class
                                                    aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                                    inceptos himenaeos.</p>
                                            </div>
                                            <div class="read_more hover_yellow">
                                                <a href="#">Read More
                                                    <div class="yellow_aero">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                            viewBox="0 0 11 10" fill="none">
                                                            <path
                                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                                fill="#1D1D1B" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured_tab flex_col_20">
                                        <div class="featured_img animated_img">
                                            <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_img.png" alt="">
                                        </div>
                                        <div class="featured_content flex_col_20">
                                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                                <div class="banner_top_img ">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/QS/QS/images/hero_banner_user_img.png" alt="">
                                                    <p>Kay Hegmann</p>
                                                </div>
                                                <div class=small_intro>
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li>Asia</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="banner_content_center textoverflow">
                                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                                    vulputate libero et velit interdum, ac aliquet odio mattis. Class
                                                    aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                                    inceptos himenaeos.</p>
                                            </div>
                                            <div class="read_more hover_yellow">
                                                <a href="#">Read More
                                                    <div class="yellow_aero">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                            viewBox="0 0 11 10" fill="none">
                                                            <path
                                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                                fill="#1D1D1B" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured_slides swiper-slide">
                                    <div class="featured_tab flex_col_20">
                                        <div class="featured_img animated_img">
                                            <img src="./images/hero_banner_img.png" alt="">
                                        </div>
                                        <div class="featured_content flex_col_20">
                                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                                <div class="banner_top_img ">
                                                    <img src="./images/hero_banner_user_img.png" alt="">
                                                    <p>Kay Hegmann</p>
                                                </div>
                                                <div class=small_intro>
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li>Asia</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="banner_content_center textoverflow">
                                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                                    vulputate libero et velit interdum, ac aliquet odio mattis. Class
                                                    aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                                    inceptos himenaeos.</p>
                                            </div>
                                            <div class="read_more hover_yellow">
                                                <a href="#">Read More
                                                    <div class="yellow_aero">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                            viewBox="0 0 11 10" fill="none">
                                                            <path
                                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                                fill="#1D1D1B" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured_tab flex_col_20">
                                        <div class="featured_img animated_img">
                                            <img src="./images/hero_banner_img.png" alt="">
                                        </div>
                                        <div class="featured_content flex_col_20">
                                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                                <div class="banner_top_img ">
                                                    <img src="./images/hero_banner_user_img.png" alt="">
                                                    <p>Kay Hegmann</p>
                                                </div>
                                                <div class=small_intro>
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li>Asia</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="banner_content_center textoverflow">
                                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                                    vulputate libero et velit interdum, ac aliquet odio mattis. Class
                                                    aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                                    inceptos himenaeos.</p>
                                            </div>
                                            <div class="read_more hover_yellow">
                                                <a href="#">Read More
                                                    <div class="yellow_aero">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                            viewBox="0 0 11 10" fill="none">
                                                            <path
                                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                                fill="#1D1D1B" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured_slides swiper-slide">
                                    <div class="featured_tab flex_col_20">
                                        <div class="featured_img animated_img">
                                            <img src="./images/hero_banner_img.png" alt="">
                                        </div>
                                        <div class="featured_content flex_col_20">
                                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                                <div class="banner_top_img ">
                                                    <img src="./images/hero_banner_user_img.png" alt="">
                                                    <p>Kay Hegmann</p>
                                                </div>
                                                <div class=small_intro>
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li>Asia</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="banner_content_center textoverflow">
                                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                                    vulputate libero et velit interdum, ac aliquet odio mattis. Class
                                                    aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                                    inceptos himenaeos.</p>
                                            </div>
                                            <div class="read_more hover_yellow">
                                                <a href="#">Read More
                                                    <div class="yellow_aero">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                            viewBox="0 0 11 10" fill="none">
                                                            <path
                                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                                fill="#1D1D1B" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured_tab flex_col_20">
                                        <div class="featured_img animated_img">
                                            <img src="./images/hero_banner_img.png" alt="">
                                        </div>
                                        <div class="featured_content flex_col_20">
                                            <div class="banner_content_title_img_content twelve_p fourteen_p">
                                                <div class="banner_top_img ">
                                                    <img src="./images/hero_banner_user_img.png" alt="">
                                                    <p>Kay Hegmann</p>
                                                </div>
                                                <div class=small_intro>
                                                    <ul>
                                                        <li>Featured</li>
                                                        <li>Asia</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="banner_content_center textoverflow">
                                                <h3>What Do People In The UK Really Think About Higher Education?</h3>
                                                <p>Korem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
                                                    vulputate libero et velit interdum, ac aliquet odio mattis. Class
                                                    aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                                    inceptos himenaeos.</p>
                                            </div>
                                            <div class="read_more hover_yellow">
                                                <a href="#">Read More
                                                    <div class="yellow_aero">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                            viewBox="0 0 11 10" fill="none">
                                                            <path
                                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                                fill="#1D1D1B" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured_sidebar">
                        <h1 class="title_h1">QS Insights Magazine</h1>
                        <div class="featured_side_img">
                            <img src="./images/featured_sidebar_img.png" alt="">
                            <div class="featured_hover_content">
                                <div class="featured_content_top">
                                    <h3>QS Insights Magazine - January 2024</h3>
                                    <p>Take a closer look at the individuals who are contributing their insights and expertise to shape higher education. From the first female Dean of Vlerick Business School, Marion Debruyne, to...</p>
                                </div>
                                <div class="featured_btn">
                                    <div class="read_more hover_yellow">
                                        <a href="#">Read More
                                            <div class="yellow_aero">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                    viewBox="0 0 11 10" fill="none">
                                                    <path
                                                        d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                        fill="#1D1D1B" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="featured_btm">
                    <img src="./images/add.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="qs_stories">
        <div class="container">
            <div class="qs_stories_main">
                <h2 class="title_h2">QS GEN is looking for stories</h2>
                <p>Share your institution's latest developments with us.</p>
                <a href="#" class="btn black_btn">Submit a story</a>
            </div>
        </div>
    </section> 

    <section class="tabbing ranking bg_light_blue" id="ranking">
        <div class="container">
            <div class="tabbing_main">
                <div class="tabbing_title">
                    <h1 class="title_h1">Rankings</h1>
                    <a href="#" class="btn black_btn">View all</a>
                </div>
                <div class="tabbing_tab_otr">
                    <div class="tabbing_tabs">
                        <ul>
                            <li><a href="#">Overal Rankings</a></li>
                            <li><a href="#">Global</a></li>
                            <li><a href="#">Asia & Oceania </a></li>
                            <li><a href="#">Europe & Americas</a></li>
                            <li><a href="#">Middle East</a></li>
                        </ul>
                    </div>
                    <div class="tabbing_content_otr">
                        <div class="tabbing_content_box">
                            <div class="left_side_content animated_img">
                                <img src="./images/ranking_img.png" alt="">
                                <div class="left_img_text">
                                    <div class="banner_content_title_img_content fourteen_p twelve_p">
                                        <div class="banner_top_img">
                                            <img src="./images/hero_banner_user_img.png" alt="">
                                            <p>Kay Hegmann - Rank</p>
                                        </div>
                                        <div class=small_intro>
                                            <ul>
                                                <li>Featured</li>
                                                <li>Sponsored</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="left_content_btm">
                                        <div class="banner_content_center">
                                            <div class="left_content_btm_title">
                                                <h3>UiTM ranks among top 150 in QS World University Rankings by 2021
                                                    Subject? </h3>
                                            </div>
                                            <div class="left_btm_content_text textoverflow">
                                                <p>Universiti Teknologi MARA (UiTM) has been ranked among the top 150 in
                                                    the Petroleum Engineering category in the QS World University
                                                    Rankings by 2021 Subject. </p>
                                                <div class="read_more hover_yellow">
                                                    <a href="#">Read More
                                                        <div class="yellow_aero">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                                height="10" viewBox="0 0 11 10" fill="none">
                                                                <path
                                                                    d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                                    fill="#1D1D1B" />
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right_side_content">
                                <div class="right_content_box">
                                    <div class="right_content_title">
                                        <div class="banner_content_title_img_content fourteen_p twelve_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right_content_img_text">
                                        <div class="right_content_img animated_img">
                                            <img src="./images/ranking_img-2.png" alt="">
                                        </div>
                                        <div class="right_content_text">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right_content_box">
                                    <div class="right_content_title">
                                        <div class="banner_content_title_img_content fourteen_p twelve_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right_content_img_text">
                                        <div class="right_content_img animated_img">
                                            <img src="./images/ranking_img-2.png" alt="">
                                        </div>
                                        <div class="right_content_text">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabbing_content_box">
                            <div class="left_side_content animated_img">
                                <img src="./images/ranking_img.png" alt="">
                                <div class="left_img_text">
                                    <div class="banner_content_title_img_content fourteen_p twelve_p">
                                        <div class="banner_top_img">
                                            <img src="./images/hero_banner_user_img.png" alt="">
                                            <p>Kay Hegmann Global</p>
                                        </div>
                                        <div class=small_intro>
                                            <ul>
                                                <li>Featured</li>
                                                <li>Sponsored</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="left_content_btm">
                                        <div class="banner_content_center">
                                            <div class="left_content_btm_title">
                                                <h3>UiTM ranks among top 150 in QS World University Rankings by 2021
                                                    Subject? </h3>
                                            </div>
                                            <div class="left_btm_content_text textoverflow">
                                                <p>Universiti Teknologi MARA (UiTM) has been ranked among the top 150 in
                                                    the Petroleum Engineering category in the QS World University
                                                    Rankings by 2021 Subject. </p>
                                                <div class="read_more hover_yellow">
                                                    <a href="#">Read More
                                                        <div class="yellow_aero">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                                height="10" viewBox="0 0 11 10" fill="none">
                                                                <path
                                                                    d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                                    fill="#1D1D1B" />
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right_side_content">
                                <div class="right_content_box">
                                    <div class="right_content_title">
                                        <div class="banner_content_title_img_content fourteen_p twelve_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right_content_img_text">
                                        <div class="right_content_img animated_img">
                                            <img src="./images/ranking_img-2.png" alt="">
                                        </div>
                                        <div class="right_content_text">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right_content_box">
                                    <div class="right_content_title">
                                        <div class="banner_content_title_img_content fourteen_p twelve_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right_content_img_text">
                                        <div class="right_content_img animated_img">
                                            <img src="./images/ranking_img-2.png" alt="">
                                        </div>
                                        <div class="right_content_text">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabbing_content_box">
                            <div class="left_side_content animated_img">
                                <img src="./images/ranking_img.png" alt="">
                                <div class="left_img_text">
                                    <div class="banner_content_title_img_content fourteen_p twelve_p">
                                        <div class="banner_top_img">
                                            <img src="./images/hero_banner_user_img.png" alt="">
                                            <p>Kay Hegmann Asia</p>
                                        </div>
                                        <div class=small_intro>
                                            <ul>
                                                <li>Featured</li>
                                                <li>Sponsored</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="left_content_btm">
                                        <div class="banner_content_center">
                                            <div class="left_content_btm_title">
                                                <h3>UiTM ranks among top 150 in QS World University Rankings by 2021
                                                    Subject? </h3>
                                            </div>
                                            <div class="left_btm_content_text textoverflow">
                                                <p>Universiti Teknologi MARA (UiTM) has been ranked among the top 150 in
                                                    the Petroleum Engineering category in the QS World University
                                                    Rankings by 2021 Subject. </p>
                                                <div class="read_more hover_yellow">
                                                    <a href="#">Read More
                                                        <div class="yellow_aero">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                                height="10" viewBox="0 0 11 10" fill="none">
                                                                <path
                                                                    d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                                    fill="#1D1D1B" />
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right_side_content">
                                <div class="right_content_box">
                                    <div class="right_content_title">
                                        <div class="banner_content_title_img_content fourteen_p twelve_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right_content_img_text">
                                        <div class="right_content_img animated_img">
                                            <img src="./images/ranking_img-2.png" alt="">
                                        </div>
                                        <div class="right_content_text">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right_content_box">
                                    <div class="right_content_title">
                                        <div class="banner_content_title_img_content fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right_content_img_text">
                                        <div class="right_content_img animated_img">
                                            <img src="./images/ranking_img-2.png" alt="">
                                        </div>
                                        <div class="right_content_text">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabbing_content_box">
                            <div class="left_side_content animated_img">
                                <img src="./images/ranking_img.png" alt="">
                                <div class="left_img_text">
                                    <div class="banner_content_title_img_content fourteen_p twelve_p">
                                        <div class="banner_top_img">
                                            <img src="./images/hero_banner_user_img.png" alt="">
                                            <p>Kay Hegmann Europe</p>
                                        </div>
                                        <div class=small_intro>
                                            <ul>
                                                <li>Featured</li>
                                                <li>Sponsored</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="left_content_btm">
                                        <div class="banner_content_center">
                                            <div class="left_content_btm_title">
                                                <h3>UiTM ranks among top 150 in QS World University Rankings by 2021
                                                    Subject? </h3>
                                            </div>
                                            <div class="left_btm_content_text textoverflow">
                                                <p>Universiti Teknologi MARA (UiTM) has been ranked among the top 150 in
                                                    the Petroleum Engineering category in the QS World University
                                                    Rankings by 2021 Subject. </p>
                                                <div class="read_more hover_yellow">
                                                    <a href="#">Read More
                                                        <div class="yellow_aero">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                                height="10" viewBox="0 0 11 10" fill="none">
                                                                <path
                                                                    d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                                    fill="#1D1D1B" />
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right_side_content">
                                <div class="right_content_box">
                                    <div class="right_content_title">
                                        <div class="banner_content_title_img_content fourteen_p twelve_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right_content_img_text">
                                        <div class="right_content_img animated_img">
                                            <img src="./images/ranking_img-2.png" alt="">
                                        </div>
                                        <div class="right_content_text">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right_content_box">
                                    <div class="right_content_title">
                                        <div class="banner_content_title_img_content fourteen_p twelve_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right_content_img_text">
                                        <div class="right_content_img animated_img">
                                            <img src="./images/ranking_img-2.png" alt="">
                                        </div>
                                        <div class="right_content_text">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabbing_content_box">
                            <div class="left_side_content animated_img">
                                <img src="./images/ranking_img.png" alt="">
                                <div class="left_img_text">
                                    <div class="banner_content_title_img_content fourteen_p twelve_p">
                                        <div class="banner_top_img">
                                            <img src="./images/hero_banner_user_img.png" alt="">
                                            <p>Kay Hegmann Middele East</p>
                                        </div>
                                        <div class=small_intro>
                                            <ul>
                                                <li>Featured</li>
                                                <li>Sponsored</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="left_content_btm">
                                        <div class="banner_content_center">
                                            <div class="left_content_btm_title">
                                                <h3>UiTM ranks among top 150 in QS World University Rankings by 2021
                                                    Subject? </h3>
                                            </div>
                                            <div class="left_btm_content_text textoverflow">
                                                <p>Universiti Teknologi MARA (UiTM) has been ranked among the top 150 in
                                                    the Petroleum Engineering category in the QS World University
                                                    Rankings by 2021 Subject. </p>
                                                <div class="read_more hover_yellow">
                                                    <a href="#">Read More
                                                        <div class="yellow_aero">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                                height="10" viewBox="0 0 11 10" fill="none">
                                                                <path
                                                                    d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                                    fill="#1D1D1B" />
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right_side_content">
                                <div class="right_content_box">
                                    <div class="right_content_title">
                                        <div class="banner_content_title_img_content fourteen_p twelve_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right_content_img_text">
                                        <div class="right_content_img animated_img">
                                            <img src="./images/ranking_img-2.png" alt="">
                                        </div>
                                        <div class="right_content_text">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="right_content_box">
                                    <div class="right_content_title">
                                        <div class="banner_content_title_img_content fourteen_p twelve_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right_content_img_text">
                                        <div class="right_content_img animated_img">
                                            <img src="./images/ranking_img-2.png" alt="">
                                        </div>
                                        <div class="right_content_text">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> 

    <section class="tabbing regions" id="regions">
        <div class="container">
            <div class="tabbing_main">
                <div class="tabbing_title">
                    <h1 class="title_h1">Regions</h1>
                    <a href="#" class="btn black_btn">View all</a>
                </div>
                <div class="tabbing_tab_otr">
                    <div class="tabbing_tabs">
                        <ul>
                            <li><a href="#">Global</a></li>
                            <li><a href="#">Asia & Oceania </a></li>
                            <li><a href="#">Europe & Americas</a></li>
                            <li><a href="#">Middle East</a></li>
                        </ul>
                    </div>
                    <div class="tabbing_content_otr">
                        <div class="tabbing_content_box">
                            <div class="region_left">
                                <div class="featured_tab flex_col_20">
                                    <div class="featured_img animated_img">
                                        <img src="./images/hero_banner_img.png" alt="">
                                    </div>
                                    <div class="featured_content flex_col_20">
                                        <div class="banner_content_title_img_content twelve_p fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann Global</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="banner_content_center textoverflow">
                                            <h3>University of South Australia launches Global Executive MBA in Defence and Space</h3>
                                            <p>The University of South Australia in Adelaide, Australia has partnered with the University of Exeter (UK) and Carnegie Mellon University (USA) to launch the Global Executive MBA in Defence and Space, the first program of its kind to meet the challenges facing the sectors.</p>
                                        </div>
                                        <div class="read_more hover_yellow">
                                            <a href="#">Read More
                                                <div class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="region_right">
                                <div class="featured_tab flex_col_20 flex_row">
                                    <div class="featured_img animated_img">
                                        <img src="./images/hero_banner_img.png" alt="">
                                    </div>
                                    <div class="featured_content flex_col_20">
                                        <div class="banner_content_title_img_content twelve_p fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Rankings</li>
                                                    <li>Asia & Oceania</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="right_content_text banner_content_center ">
                                            <h3>An affordable water purification system developed by Satbayev University scientists</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured_tab flex_col_20 flex_row">
                                    <div class="featured_img animated_img">
                                        <img src="./images/hero_banner_img.png" alt="">
                                    </div>
                                    <div class="featured_content flex_col_20">
                                        <div class="banner_content_title_img_content twelve_p fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Asia</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="right_content_text banner_content_center">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabbing_content_box">
                            <div class="region_left">
                                <div class="featured_tab flex_col_20">
                                    <div class="featured_img animated_img">
                                        <img src="./images/hero_banner_img.png" alt="">
                                    </div>
                                    <div class="featured_content flex_col_20">
                                        <div class="banner_content_title_img_content twelve_p fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann Asia</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="banner_content_center textoverflow">
                                            <h3>University of South Australia launches Global Executive MBA in Defence and Space</h3>
                                            <p>The University of South Australia in Adelaide, Australia has partnered with the University of Exeter (UK) and Carnegie Mellon University (USA) to launch the Global Executive MBA in Defence and Space, the first program of its kind to meet the challenges facing the sectors.</p>
                                        </div>
                                        <div class="read_more hover_yellow">
                                            <a href="#">Read More
                                                <div class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="region_right">
                                <div class="featured_tab flex_col_20 flex_row">
                                    <div class="featured_img animated_img">
                                        <img src="./images/hero_banner_img.png" alt="">
                                    </div>
                                    <div class="featured_content flex_col_20">
                                        <div class="banner_content_title_img_content twelve_p fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Rankings</li>
                                                    <li>Asia & Oceania</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="right_content_text banner_content_center ">
                                            <h3>An affordable water purification system developed by Satbayev University scientists</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured_tab flex_col_20 flex_row">
                                    <div class="featured_img animated_img">
                                        <img src="./images/hero_banner_img.png" alt="">
                                    </div>
                                    <div class="featured_content flex_col_20">
                                        <div class="banner_content_title_img_content twelve_p fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Asia</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="right_content_text banner_content_center">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabbing_content_box">
                            <div class="region_left">
                                <div class="featured_tab flex_col_20">
                                    <div class="featured_img animated_img">
                                        <img src="./images/hero_banner_img.png" alt="">
                                    </div>
                                    <div class="featured_content flex_col_20">
                                        <div class="banner_content_title_img_content twelve_p fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann Europe</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="banner_content_center textoverflow">
                                            <h3>University of South Australia launches Global Executive MBA in Defence and Space</h3>
                                            <p>The University of South Australia in Adelaide, Australia has partnered with the University of Exeter (UK) and Carnegie Mellon University (USA) to launch the Global Executive MBA in Defence and Space, the first program of its kind to meet the challenges facing the sectors.</p>
                                        </div>
                                        <div class="read_more hover_yellow">
                                            <a href="#">Read More
                                                <div class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="region_right">
                                <div class="featured_tab flex_col_20 flex_row">
                                    <div class="featured_img animated_img">
                                        <img src="./images/hero_banner_img.png" alt="">
                                    </div>
                                    <div class="featured_content flex_col_20">
                                        <div class="banner_content_title_img_content twelve_p fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Rankings</li>
                                                    <li>Asia & Oceania</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="right_content_text banner_content_center ">
                                            <h3>An affordable water purification system developed by Satbayev University scientists</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured_tab flex_col_20 flex_row">
                                    <div class="featured_img animated_img">
                                        <img src="./images/hero_banner_img.png" alt="">
                                    </div>
                                    <div class="featured_content flex_col_20">
                                        <div class="banner_content_title_img_content twelve_p fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Asia</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="right_content_text banner_content_center">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabbing_content_box">
                            <div class="region_left">
                                <div class="featured_tab flex_col_20">
                                    <div class="featured_img animated_img">
                                        <img src="./images/hero_banner_img.png" alt="">
                                    </div>
                                    <div class="featured_content flex_col_20">
                                        <div class="banner_content_title_img_content twelve_p fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann Middle East</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="banner_content_center textoverflow">
                                            <h3>University of South Australia launches Global Executive MBA in Defence and Space</h3>
                                            <p>The University of South Australia in Adelaide, Australia has partnered with the University of Exeter (UK) and Carnegie Mellon University (USA) to launch the Global Executive MBA in Defence and Space, the first program of its kind to meet the challenges facing the sectors.</p>
                                        </div>
                                        <div class="read_more hover_yellow">
                                            <a href="#">Read More
                                                <div class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="region_right">
                                <div class="featured_tab flex_col_20 flex_row">
                                    <div class="featured_img animated_img">
                                        <img src="./images/hero_banner_img.png" alt="">
                                    </div>
                                    <div class="featured_content flex_col_20">
                                        <div class="banner_content_title_img_content twelve_p fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Rankings</li>
                                                    <li>Asia & Oceania</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="right_content_text banner_content_center ">
                                            <h3>An affordable water purification system developed by Satbayev University scientists</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured_tab flex_col_20 flex_row">
                                    <div class="featured_img animated_img">
                                        <img src="./images/hero_banner_img.png" alt="">
                                    </div>
                                    <div class="featured_content flex_col_20">
                                        <div class="banner_content_title_img_content twelve_p fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Asia</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="right_content_text banner_content_center">
                                            <h3>Out Now: QS World University Rankings 2020</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>Following the Supreme Court’s ruling, US universities must carefully
                                                    and meaningfully look at alternative approaches to fostering student
                                                    diversity within their campuses. Seb Murray writes.</p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="extra_space">
                    <img src="./images/religion_img.png" alt="">
                </div>
            </div>
    </section> 

    <section class="editorials bg_light_black">
        <div class="container">
            <div class="editorials_main">
                <div class="editorials_title">
                    <h1 class="title_h1">Editorials</h1>
                    <a href="#" class="btn black_btn">View all</a>
                </div>
                <div class="editorials_content">
                    <div class="tabbing_content_box">
                        <div class="left_side_content animated_img">
                            <img src="./images/editorials.png" alt="">
                            <div class="left_img_text">
                                <div class="banner_content_title_img_content fourteen_p twelve_p">
                                    <div class="banner_top_img">
                                        <img src="./images/hero_banner_user_img.png" alt="">
                                        <p>Kay Hegmann - Rank</p>
                                    </div>
                                    <div class=small_intro>
                                        <ul>
                                            <li>Featured</li>
                                            <li>Sponsored</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="left_content_btm">
                                    <div class="banner_content_center">
                                        <div class="left_content_btm_title">
                                            <h3>From parity to planet </h3>
                                        </div>
                                        <div class="left_btm_content_text textoverflow">
                                            <p>What does it mean to empower and educate a woman in today’s environment? By changing one woman’s world, we are setting the stage for a more equitable, greener future for all. </p>
                                            <div class="read_more hover_yellow">
                                                <a href="#">Read More
                                                    <div class="yellow_aero">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="11"
                                                            height="10" viewBox="0 0 11 10" fill="none">
                                                            <path
                                                                d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                                fill="#1D1D1B" />
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right_side_content">
                            <div class="right_content_box">
                                <div class="right_content_title">
                                    <div class="banner_content_title_img_content fourteen_p twelve_p">
                                        <div class="banner_top_img ">
                                            <img src="./images/hero_banner_user_img.png" alt="">
                                            <p>Kay Hegmann</p>
                                        </div>
                                        <div class=small_intro>
                                            <ul>
                                                <li>Featured</li>
                                                <li>Sponsored</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="right_content_img_text">
                                    <div class="right_content_img animated_img">
                                        <img src="./images/editorials-1.png" alt="">
                                    </div>
                                    <div class="right_content_text">
                                        <h3>Out Now: QS World University Rankings 2020</h3>
                                        <div class="right_content_text_btn textoverflow">
                                            <p>Following the Supreme Court’s ruling, US universities must carefully
                                                and meaningfully look at alternative approaches to fostering student
                                                diversity within their campuses. Seb Murray writes.</p>
                                            <a href="#" class="yellow_aero">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                    viewBox="0 0 11 10" fill="none">
                                                    <path
                                                        d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                        fill="#1D1D1B" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right_content_box">
                                <div class="right_content_title">
                                    <div class="banner_content_title_img_content fourteen_p twelve_p">
                                        <div class="banner_top_img ">
                                            <img src="./images/hero_banner_user_img.png" alt="">
                                            <p>Kay Hegmann</p>
                                        </div>
                                        <div class=small_intro>
                                            <ul>
                                                <li>Featured</li>
                                                <li>Sponsored</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="right_content_img_text">
                                    <div class="right_content_img animated_img">
                                        <img src="./images/editorials-2.png" alt="">
                                    </div>
                                    <div class="right_content_text">
                                        <h3>University of South Australia launches MBA in Defence & Space</h3>
                                        <div class="right_content_text_btn textoverflow">
                                            <p>Following the Supreme Court’s ruling, US universities must carefully and meaningfully look at alternative approaches to fostering student diversity within their campuses. Seb Murray writes.</p>
                                            <a href="#" class="yellow_aero">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                    viewBox="0 0 11 10" fill="none">
                                                    <path
                                                        d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                        fill="#1D1D1B" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>

    <section class="most_read bg_light_blue">
        <div class="container">
            <div class="most_read_main">
                 <div class="most_read_title">
                    <h1 class="title_h1">Most read</h1>
                 </div>
                 <div class="most_read_content_adv">
                     <div class="most_read_content">
                        <div class="most_read_content_top">
                            <div class="region_right">
                                <div class="featured_tab flex_col_20 flex_row">
                                    <div class="featured_img animated_img">
                                        <img src="./images/hero_banner_img.png" alt="">
                                    </div>
                                    <div class="featured_content flex_col_20">
                                        <div class="banner_content_title_img_content twelve_p fourteen_p">
                                            <div class="banner_top_img ">
                                                <img src="./images/hero_banner_user_img.png" alt="">
                                                <p>Kay Hegmann</p>
                                            </div>
                                            <div class=small_intro>
                                                <ul>
                                                    <li>Featured</li>
                                                    <li>Sponsored</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="right_content_text banner_content_center ">
                                            <h3>University of South Australia launches Global Executive ..</h3>
                                            <div class="right_content_text_btn textoverflow">
                                                <p>The University of South Australia in Adelaide, Australia has partnered with the University of Exeter (UK) and Carnegie Mellon University (USA) to launch the Global Executive MBA in Defence and Space, the first program of its kind to meet the challenges facing the sectors.
                                                </p>
                                                <a href="#" class="yellow_aero">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10"
                                                        viewBox="0 0 11 10" fill="none">
                                                        <path
                                                            d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                            fill="#1D1D1B" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="most_read_content_btm">
                            <div class="featured_content flex_col_20">
                                <div class="banner_content_title_img_content twelve_p fourteen_p">
                                    <div class="banner_top_img ">
                                        <img src="./images/hero_banner_user_img.png" alt="">
                                        <p>Kay Hegmann</p>
                                    </div>
                                    <div class=small_intro>
                                        <ul>
                                            <li>Featured</li>
                                            <li>Sponsored</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right_content_text banner_content_center ">
                                    <h3>University of South Australia launches Global Executive ..</h3>
                                    <div class="read_more hover_yellow">
                                        <a href="#">Read More
                                            <div class="yellow_aero">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"
                                                    fill="none">
                                                    <path
                                                        d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                        fill="#1D1D1B" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="featured_content flex_col_20">
                                <div class="banner_content_title_img_content twelve_p fourteen_p">
                                    <div class="banner_top_img ">
                                        <img src="./images/hero_banner_user_img.png" alt="">
                                        <p>Kay Hegmann</p>
                                    </div>
                                    <div class=small_intro>
                                        <ul>
                                            <li>Featured</li>
                                            <li>Sponsored</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right_content_text banner_content_center ">
                                    <h3>University of South Australia launches Global Executive ..</h3>
                                    <div class="read_more hover_yellow">
                                        <a href="#">Read More
                                            <div class="yellow_aero">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10"
                                                    fill="none">
                                                    <path
                                                        d="M0.84001 5.84004H7.14001L5.22001 7.76004C4.89001 8.09004 4.89001 8.62004 5.22001 8.95004C5.55001 9.28004 6.08001 9.28004 6.41001 8.95004L9.77001 5.59004C10.1 5.26004 10.1 4.73004 9.77001 4.40004L6.41001 1.04004C6.25001 0.880039 6.03001 0.790039 5.82001 0.790039C5.61001 0.790039 5.39001 0.870039 5.23001 1.04004C4.90001 1.37004 4.90001 1.90004 5.23001 2.23004L7.15001 4.15004H0.85001C0.39001 4.15004 0.0100098 4.53004 0.0100098 4.99004C0.0100098 5.45004 0.39001 5.83004 0.85001 5.83004L0.84001 5.84004Z"
                                                        fill="#1D1D1B" />
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="most_read_adv">
                        <img src="./images/most_read_adv.png" alt="">
                     </div>
                 </div>
            </div>
        </div>
    </section> 

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="footer_main">
                    <div class="footer_logo">
                        <a href="#"><img src="./images/footer_logo.svg" alt=""></a>
                    </div>
                    <div class="footer_contact_links">
                        <div class="footer_links">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Press Centre</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Terms of Usage</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="footer_social_links">
                            <p>Follow us</p>
                            <div class="social_links">
                                <a href="#"><img src="./images/twitter.svg" alt=""></a>
                                <a href="#"><img src="./images/facebook.svg" alt=""></a>
                                <a href="#"><img src="./images/linkedin.svg" alt=""></a>
                                <a href="#"><img src="./images/youtube.svg    " alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="footer_btm_main">
                    <div class="copyright">
                        <p>© 2023 QS Quacquarelli Symonds Limited. All rights reserved.</p>
                        <p>Site by QS</p>
                    </div>
                    <div class="footer_btm_links">
                        <ul>
                            <li><a href="#">Terms &amp; conditions</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Cookie policy</a></li>
                            <li><a href="#">Information security policy</a></li>
                            <li><a href="#">Statement compliance</a></li>
                            <li><a href="#">Modern slavery statement</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer> 

    <script src="<?php echo get_template_directory_uri(); ?>/QS/QS/js/swiper_min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/QS/QS/js/custom.js"></script>

</body>

</html>


<?php //get_footer(); ?>



<style>
    html,
body {
  margin: 0;
  font-family: sans-serif;
    background-image: linear-gradient(250deg, #16CC66, #0B6633 );

}

.vertical-section{
/*   height: 100vh; */
  display: flex;
  align-items: center;
  justify-content: center;
  background:tan;
}

.sticky-container main {
  overflow-x: hidden;
  display: flex;
  position: sticky;
  top:0;
/*   padding:30px 0; */
}

.sticky-container h1 {
  margin: 0;
  padding: 0;
}

.sticky-container section {
  min-width: 100%;
  min-height: calc(100vh - 60px);
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 4ch;
/*   padding:30px; */
  margin:0;
  padding:0;
}

.sticky-container section>div {
/*   background-color: white; */
  width:100%;
  height: calc(100vh - 120px);
  padding:60px;
  position: relative;
}

.sticky-container section>div>div{
  background-color: white;
  height: calc(100vh - 180px);
  border-radius: 10px;
  bottom:0;
  postion:absolute;
  padding:30px;
}

/* section:nth-child(even) {
  background-color: black;
}

section:nth-child(odd) {
  background-color: teal;
} */
</style>


<script>
    (function(){
    init();

    var g_containerInViewport;
    function init(){
        setStickyContainersSize();
        bindEvents();
    }

    function bindEvents(){
        window.addEventListener("wheel", wheelHandler);        
    }

    function setStickyContainersSize(){
        document.querySelectorAll('.sticky-container').forEach(function(container){
            const stikyContainerHeight = container.querySelector('main').scrollWidth;
            container.setAttribute('style', 'height: ' + stikyContainerHeight + 'px');
        });
    }

    function isElementInViewport (el) {
        const rect = el.getBoundingClientRect();
        return rect.top <= 0 && rect.bottom > document.documentElement.clientHeight;
    }

    function wheelHandler(evt){
        
        const containerInViewPort = Array.from(document.querySelectorAll('.sticky-container')).filter(function(container){
            return isElementInViewport(container);
        })[0];

        if(!containerInViewPort){
            return;
        }

        var isPlaceHolderBelowTop = containerInViewPort.offsetTop < document.documentElement.scrollTop;
        var isPlaceHolderBelowBottom = containerInViewPort.offsetTop + containerInViewPort.offsetHeight > document.documentElement.scrollTop;
        let g_canScrollHorizontally = isPlaceHolderBelowTop && isPlaceHolderBelowBottom;

        if(g_canScrollHorizontally){
            containerInViewPort.querySelector('main').scrollLeft += evt.deltaY;
        }
    }
})();
</script>