<?php
/**
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EVP
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

    <div id="home_header"class="home_header">
      <div class="mobile-background"></div>
  <?php 
  $heroHeader = get_field('video_header');
  if($heroHeader)   :?>
    <video loop muted autoplay poster="<?php bloginfo('template_url'); ?>/img/EVP_hero_img.jpg" class="fullscreen-bg__video">
        <source src="<?php bloginfo('template_url'); ?>/img/EVP_FINAL.webm" type="video/webm">
        <source src="<?php bloginfo('template_url'); ?>/img/EVP_FINAL.mp4" type="video/mp4">
        <!-- <source src="video/big_buck_bunny.ogv" type="video/ogg"> -->
    </video>
     <div class="video_overlay"></div>
			<div class=" home_header_bg home_header_bg--primary">
				<div class="home_header_container">
					<h1 class="heading heading--primary heading--primary-hero" >
            <?php echo $heroHeader['header_title'] ?>
					</h1>
				</div>
			</div>
    </div>
<?php endif; ?>
<?php
  $EvpFacts = get_field('evp_facts');

  if($EvpFacts):
?>
    <!-- <div id="e-v-p">EVP</div> -->
    <div class="home-shadow container-fluid polygon-cta--container">
        <div class=" polygon-cta row">
          <div class="polygon-cta--container-left col-sm-12 col-md-6">
            <h2 class="h2">
                <?php echo $EvpFacts['title'] ?>
              </h2>
              <p class="polygon-cta--p paragraph_line">
                <?php echo $EvpFacts['paragraph'] ?>
              </p>
  
              <a class="button" href="<?php echo  $EvpFacts['button']['link'] ?>"><?php echo $EvpFacts['button']['text'] ?>
</a>

          </div>
          <div class="polygon-cta--container-right col-sm-12 col-md-6">
              <div class="fact-1">
                <span class="fact--title"><?php echo $EvpFacts['fact_1']['primary'] ?></span>
                <span class="fact--subtitle"><?php echo $EvpFacts['fact_1']['secondary'] ?></span>
            </div>
              <div class="fact-2">
                <span class="fact--title"><?php echo $EvpFacts['fact_2']['primary'] ?></span>
                <span class="fact--subtitle"><?php echo $EvpFacts['fact_2']['secondary'] ?></span>
              </div>
              <div class="fact-3">
                <span class="fact--title"><?php echo $EvpFacts['fact_3']['primary'] ?></span>
                <span class="fact--subtitle"><?php echo $EvpFacts['fact_3']['secondary'] ?></span>
              </div>
            </div>
          <div class="polygon--cta"></div>
      </div>

    </div>
  <?php endif; ?>
<?php $AnimatedCircles = get_field('animated_circles');

if($AnimatedCircles): ?>
    <div class="crop-circles container-fluid">

      <div class="row">
      <div class="polygon--crop-circles"></div>
        <div class=" col-sm-12 col-md-6">
          <div class="crop-circles---container-left">
            <h2 class="crop-circles--h2"><?php echo $AnimatedCircles['title'] ;?></h2>
          </div>
        </div>

        <div class="crop-circles--container-right col-sm-12 col-md-6">
          <div class="circles-wrapper">
              <div id="circle-1" class="circle-1">
                <div class="circle-background"></div>
                <div class="svg-container">
                  <p class="svg-text"><?php echo $AnimatedCircles['circle_text_1'] ;?></p>
                  <svg width="170px" height="52px" viewBox="0 0 266 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Present-og-color" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
                        <g id="Home-shadow" transform="translate(-990.000000, -2163.000000)" stroke="#FFFFFF">
                            <g id="section-2" transform="translate(0.000000, 1969.000000)">
                                <g id="circle-open" transform="translate(1128.000000, 244.500000) scale(-1, 1) translate(-1128.000000, -244.500000) translate(887.000000, 131.000000)">
                                    <path d="M172,63.5 L378.5,63.5 L172,63.5 Z M113.938274,114 L172,63.5 L113.938274,114 Z" id="Combined-Shape"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                  </svg> 
                </div>
    
              <img src="<?php bloginfo('template_url'); ?>/img/circle-one.png">
            </div>

              <div id="circle-2" class="circle-2 ">
              <div class="circle-background"></div>
                <div class="svg-container">
                  <p class="svg-text">
                  <?php echo $AnimatedCircles['circle_text_2'] ;?>
                    </p>
                  <svg width="170px" height="52px" viewBox="0 0 266 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Present-og-color" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
                        <g id="Home-shadow" transform="translate(-990.000000, -2163.000000)" stroke="#FFFFFF">
                            <g id="section-2" transform="translate(0.000000, 1969.000000)">
                                <g id="circle-open" transform="translate(1128.000000, 244.500000) scale(-1, 1) translate(-1128.000000, -244.500000) translate(887.000000, 131.000000)">
                                    <path d="M172,63.5 L378.5,63.5 L172,63.5 Z M113.938274,114 L172,63.5 L113.938274,114 Z" id="Combined-Shape"></path>
                                </g>
                            </g>
                        </g> 
                    </g>
                  </svg> 
                </div>
              
              <img src="<?php bloginfo('template_url'); ?>/img/circle-one.png">
            </div>
          </div>
          <div class="circles-wrapper">
            <div id="circle-3" class="circle-3">
            <div class="circle-background"></div>
              <div class="svg-container">
                <p class="svg-text">
                <?php echo $AnimatedCircles['circle_text_3'] ;?>  
               </p>
                <svg width="170px" height="52px" viewBox="0 0 266 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Present-og-color" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
                      <g id="Home-shadow" transform="translate(-990.000000, -2163.000000)" stroke="#FFFFFF">
                          <g id="section-2" transform="translate(0.000000, 1969.000000)">
                              <g id="circle-open" transform="translate(1128.000000, 244.500000) scale(-1, 1) translate(-1128.000000, -244.500000) translate(887.000000, 131.000000)">
                                  <path d="M172,63.5 L378.5,63.5 L172,63.5 Z M113.938274,114 L172,63.5 L113.938274,114 Z" id="Combined-Shape"></path>
                              </g>
                          </g>
                      </g>
                  </g>
                </svg> 
              </div>

            <img src="<?php bloginfo('template_url'); ?>/img/circle-one.png">
          </div>
            <div id="circle-4" class="circle-4">
            <div class="circle-background"></div>
            <div class="svg-container">
                <p class="svg-text">
                <?php echo $AnimatedCircles['circle_text_4'] ;?>  
               </p>
                <svg width="170px" height="52px" viewBox="0 0 266 25" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g id="Present-og-color" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="square">
                      <g id="Home-shadow" transform="translate(-990.000000, -2163.000000)" stroke="#FFFFFF">
                          <g id="section-2" transform="translate(0.000000, 1969.000000)">
                              <g id="circle-open" transform="translate(1128.000000, 244.500000) scale(-1, 1) translate(-1128.000000, -244.500000) translate(887.000000, 131.000000)">
                                  <path d="M172,63.5 L378.5,63.5 L172,63.5 Z M113.938274,114 L172,63.5 L113.938274,114 Z" id="Combined-Shape"></path>
                              </g>
                          </g>
                      </g>
                  </g>
                </svg> 
              </div>
            
            <img src="<?php bloginfo('template_url'); ?>/img/circle-one.png">
          </div>

      </div>

        </div>

      </div>
    </div>
  <?php endif; ?>
  <?php $serviceSlider = get_field('services_slider') ;

  if($serviceSlider):?>

    <div class="service-slider--container">

      <div class="service-slider">
        <div class="slide--1">
          <div class="slide-heading--container">
            <div class="slide-title--container">
              <span class="slide--number">01</span>
              <span class="slide--title"><?php echo $serviceSlider['title'] ?></span>
            </div>
            <div class="slide-heading--p"><?php echo $serviceSlider['paragraph'] ?></div>
          </div>
          <div class="slide--img slide--img--1">
          <a href="#contact-form"><button class="slide-cta--2" >Contact</button></a>
          <a href="/our-solutions"><button class="slide-cta--1">Explore</button></a>
          </div>

        </div>
        <div class="slide--2">
        <div class="slide-heading--container">
            <div class="slide-title--container">
              <span class="slide--number">02</span>
              <span class="slide--title"><?php echo $serviceSlider['title_2'] ?></span>
            </div>
            <div class="slide-heading--p"><?php echo $serviceSlider['paragraph_2'] ?></div>
          </div>
          <div class="slide--img slide--img--2">
          <a href="#contact-form"><button class="slide-cta--2" >Contact</button></a>
          <a href="/our-solutions/#tab2C"><button class="slide-cta--1">Explore</button></a>
          </div>
       </div>
        <!-- <div class="slide--3">
        <div class="slide-heading--container">
            <div class="slide-title--container">
              <span class="slide--number">03</span>
              <span class="slide--title">evp tech</span>
            </div>
            <div class="slide-heading--p">We transformed appraisal management 10 years ago with transparent pricing. See how we’re shaping the industry today. </div>
          </div>
          <div class="slide--img slide--img--3">
          <button class="slide-cta--2">Contact</button>
          <button class="slide-cta--1">Explore</button>
          </div>
        </div> -->
      </div>
      <div class="slider-dot--container">
       <div class="slider--dot">

          <span data-slick-index="0" class="progressBar"></span>
          <div class="dot-number">01</div>
       </div>
       <div class="slider--dot">
          <span data-slick-index="1" class="progressBar"></span>
          <div class="dot-number">02</div>
       </div>
       <!-- <div class="slider--dot">
          <span data-slick-index="2" class="progressBar"></span>
          <div class="dot-number">03</div>
       </div> -->
    </div>
    </div>
<!-- end service-slide--container -->
  <?php endif; ?>
 

    	<div class="testimonial_bg u-full-height">
			<div class="testimonial_bg--logo rellax" data-rellax-speed="-4"></div>
			<div class="container-fluid ">
				<div class="row ">
          <div class=" col-md-12 offset-0 col-lg-5 offset-1 testimonial_content">	
              <div class="testimonial_line">Testimonial</div>			
            <div class="testimonial_slider">
                <?php $loop = new WP_Query(array('post_type' => 'testimonial', 'orderby' => 'post_id','order' => 'ASC' ) ); ?>
                <?php  while ( $loop->have_posts() ) : $loop->the_post(); ?>
              <div class="slide">
                <div class="testimonial_content--container">
              <?php  $testimonials = get_field('user_testimonials');	if( $testimonials ): ?>
                  <p class="testimonial_paragraph"><?php echo $testimonials['quote']; ?></p>
                  <p class="testimonial_name"><?php echo $testimonials['name']; ?></p>
                  <p class="testimonial_job-title"><?php echo $testimonials['company_title']; ?></p>
                  <?php endif; ?>
                </div>
              </div>
                 <?php endwhile; ?>   
                <?php wp_reset_postdata(); ?>
            </div>
          </div>

					<div class="col-md-5 testimonial_img"></div>	
				</div>
			</div>
		</div>
    
<?php $form = get_field('form');

if($form):?>
        <div id="contact-form" class="form">
          <div class="form_bg"></div>
          <div class="form_card">
            <div class="form_card-heading-container">
              <h2 class="form_card-heading form_card-heading--main">
                <?php echo $form['title']; ?>
              </h2>
            </div>
            <div class="container-fluid form_card-content">
              <div class="row">
                <div class="col-sm-5">
                  <p class="form_card-paragraph paragraph paragraph--secondary"><?php echo $form['paragraph']; ?></p>
                </div>
                <div class="col-sm-7">
                  <?php echo do_shortcode("[ninja_form id=1]"); ?> 
                  <span class="green-arrow--right"></span>
                </div>
              </div>
            </div>		
          </div>
        </div>
  <?php endif; ?>
        
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
