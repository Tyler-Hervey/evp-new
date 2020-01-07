<?php
/**
 * Template Name: Who we Are
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

    <div id="about-header"class="header">
		<div class="header_bg header_bg--primary ">
			<div class=" container header_container header_container--primary">
      <?php
				$header = get_field('header');
				if($header):
			?>
				<div class="heading heading--pre header_pre"><?php echo $header['pre_title'] ;?></div>
					<h1 class=" heading heading--primary text-shadow--primary" >
            <?php echo $header['title'] ;?> 
					</h1>
      <?php endif; ?>
				</div>
			</div>
		</div>
		<div class="evp-mission">
			<div class="text--container">
         <?php
				$mission = get_field('mission');
				if($mission):
			?>
					<div class="mission-h2"><?php echo $mission['title'] ;?> </div>
					<p class="mission-paragraph"><?php echo $mission['text'] ;?> </p>
       <?php endif; ?>
			</div>
			<div id="evp-letters" class="rellax" data-rellax-speed="-4">E V P</div>
    </div>

		<div id="quote-from-drew" class="container-fluid">

      <div class="row">
      <div class=" col-sm-12 col-md-8 offset-md-2">
        <div class="mission-video-module">

        </div>

          <!-- <video width="320" height="240" onclick="this.play()" controls>
            <source src="movie.mp4" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
          Your browser does not support the video tag.
          </video> -->

          </div>
      </div>
  <div class="row">
    <div class=" col-sm-12 col-md-8 offset-md-2">
      <div class="quote-module">
					<?php the_field('quote') ?>
      </div>
    </div>
  </div>


    </div>

    <div class="blog-article-section container-fluid">
      <div class="row blog-article_row">
              <?php 
              $args = array(
                'posts_per_page' => 3
            );
               $my_query = new WP_Query($args);

  
        if ( $my_query->have_posts() ) {
          
            while ( $my_query->have_posts() ) {
          
                $my_query->the_post();
          ?>
                <a href="<?php echo the_permalink(); ?>">
                <div class="blog-article--<?php 
                    $postCount = $my_query->current_post + 1;
                    echo $postCount ;?> col-sm-4">
                  <div class="blog-title--container">
                    <div class="blog-title--number">0<?php 

                    echo $postCount;
                    ;?></div>
                    <div class="blog-title--text"><?php the_title() ;?></div>

                  </div>
                  </a>
                  <a href="<?php echo the_permalink(); ?>">
                  <div class="blog-thumbnial--<?php echo $postCount ;?>"style="background-image: linear-gradient(rgba(25, 31, 36, 0.5),rgba(25, 31, 36, 0.5)),url('<?php echo get_the_post_thumbnail_url(); ?>'); ">
                    </div> </a>
                    <div class="article--description"><?php the_excerpt();?></div>
                    <a href="<?php echo the_permalink(); ?>"><span class="blog-cta">READ MORE  ></span></a>
                </div>
          <?php 
            }
          
        }
  
 // Reset the `$post` data to the current post in main query.
 wp_reset_postdata();
  
 ?>
  
            
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
