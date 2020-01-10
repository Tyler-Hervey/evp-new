<?php
/**
 * Template Name: For Appraisers
 *
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
		<main id="main" class="site-main about-background">

    <div id="appraisers-header"class="header">
          <?php
				$header = get_field('header');
				if($header):
			?>
		<div class="header_bg" style="  background-image: linear-gradient(181deg, rgba(8, 8, 8, 0.52), rgba(22, 22, 22, 0.66) 51%), url('<?php echo $header['image']; ?>');">
			<div class=" container header_container header_container--primary">

				<div class="heading heading--pre header_pre"><?php echo $header['pre_title'] ;?></div>
					<h1 class=" heading heading--primary text-shadow--primary" >
            <?php echo $header['title'] ;?> 
					</h1>
      <?php endif; ?>
				</div>
			</div>
		</div>
		
    <div id="philosophy" class="philosophy">
			<div class="philosophy_text-container">
         <?php
				$philosophy = get_field('philosophy');
				if($philosophy):
			?>
					<div class="philosophy_h2"><?php echo $philosophy['title'] ;?> </div>
					<p class="philosophy_paragraph"><?php echo $philosophy['text'] ;?> </p>
       <?php endif; ?>
			</div>
			<div id="philosophy_logo" class="rellax" data-rellax-speed="-2">
        <svg width="626px" height="542px" viewBox="0 0 626 542" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <linearGradient x1="85.7852199%" y1="18.8827322%" x2="2.22997859%" y2="88.7687505%" id="linearGradient-1">
                    <stop stop-color="#F3F7F9" offset="0%"></stop>
                    <stop stop-color="#313F4C" offset="43.0962916%"></stop>
                    <stop stop-color="#34393D" offset="100%"></stop>
                    <stop stop-color="#223341" offset="100%"></stop>
                </linearGradient>
            </defs>
            <g id="Philosophy-svg" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" opacity="0.099269">
                <g id="Appraisers" transform="translate(-408.000000, -1038.000000)" fill="url(#linearGradient-1)" stroke="#979797">
                    <g id="mission" transform="translate(86.000000, 1023.000000)">
                        <path d="M776.301273,530 L654,530 L719.031705,301 L909,301 L776.301273,530 Z M361,300 L552.824769,300 L618,529 L493.99565,529 L361,300 Z M786.186181,61 L909,275 L726,275 L786.186181,61 Z M546,272 L363,272 L485.813987,58 L546,272 Z M691,300 L636.5,495 L582,300 L691,300 Z M573.124924,272 L508,43 L764,43 L698.875076,272 L573.124924,272 Z M790.997084,16 L478.999028,16 L323,286.001943 L478.999028,556 L790.997084,556 L947,286.001943 L790.997084,16 L790.997084,16 Z" id="EVP_Logos_CMYK_Mark_BW"></path>
                    </g>
                </g>
            </g>
         </svg>
      </div>
    </div>

        <div class="container-fluid appr-sec2">
          <div class="row">
              <?php
                $appraiser = get_field('appraiser');
                if($appraiser):
              ?>
            <div class="col-md-6 appr-sec2_col">
              <div class="appr-sec2_content">
                <p><?php echo $appraiser['text'] ;?></p>
                <p class="appr-sec2_emph"><?php echo $appraiser['emph'] ;?></p>
              </div>
            </div>
            <div class="col-md-6">
              <img src="<?php echo $appraiser['image'] ;?>" alt="">
            </div>
             <?php endif; ?>	
          </div>  
        </div>
        
        
        <div class="appr-post ">
        <div class="appr-post_bg"> </div>
      <div class="container-fluid">
        <div class="row appr-post_row">
         <?php $loop = new WP_Query(array('post_type' => 'appraisal', 'orderby' => 'post_id','order' => 'ASC', 'posts_per_page' => 3 ) ); ?>
                <?php  while ( $loop->have_posts() ) : $loop->the_post(); ?>
      
          <div class="appr-post_article col-sm-4">
          <a href="<?php echo get_permalink(); ?>">
            <div class="appr-post_title--container">
              <div class="appr-post_title--number">0<?php 
              $postCount = $loop->current_post + 1;
              echo $postCount;
               ;?></div>
              <div class="appr-post_title--text"><?php the_title() ;?></div>
  
            </div>
            </a>
            <a href="<?php echo get_permalink(); ?>">
            <div class="appr-post_thumbnial" style="background-image: linear-gradient(rgba(25, 31, 36, 0.5),rgba(25, 31, 36, 0.5)),url('<?php echo get_the_post_thumbnail_url() ?>'); ">
              </div> </a>
              <div class="appr-post_description"><?php the_excerpt();?></div>
              <a href="<?php echo get_permalink(); ?>"><span class="appr-post_cta">READ MORE  ></span></a>
          </div>

          <?php endwhile; ?>
          </div>


        </div>
      </div>




        <!-- </div> troubleshooting premeture ending of content and main sections of site -->

    <div class="testimonial_bg u-full-height">
			<div class="testimonial_bg--logo rellax" data-rellax-speed="-4"></div>
			<div class="container-fluid ">
				<div class="row ">
          <div class="col-md-12 offset-0 col-lg-5 offset-1 testimonial_content">
              <div class="testimonial_line">Testimonial</div>
              <div class="testimonial_slider">
                <?php $loop = new WP_Query(array('post_type' => 'appr_testimonial', 'orderby' => 'post_id','order' => 'ASC' ) ); ?>
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

					<div class="col-md-5 testimonial_img" style="background-image: linear-gradient(rgba(25, 31, 36, 0.5), rgba(25, 31, 36, 0.5)), url(<?php echo get_field( 'testimonial_image' ); ?>);"></div>
				</div>
			</div>
		</div>


    <div class="form">
        <div class="form_bg"></div>
        <div class="form_card">
          <div class="form_card-heading-container">
          						<?php
						$contact = get_field('contact');
							if($contact):
						?>
              <h2 class="form_card-heading form_card-heading--main">
                <?php echo $contact['title']?> 
      
              </h2>
            </div>
            <div class="container-fluid form_card-content">
              <div class="row">
                <div class="col-sm-5">
                  <p class="form_card-paragraph paragraph paragraph--secondary"><?php echo $contact['text'];?> </p>
											<?php endif; ?>
              </div>
              <div class="col-sm-7">
                    <?php echo do_shortcode("[ninja_form id=1]"); ?> 
                  <span class="green-arrow--right"></span>
              </div>
            </div>
          </div>
        </div>
      </div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
