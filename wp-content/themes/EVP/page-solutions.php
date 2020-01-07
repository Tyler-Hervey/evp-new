<?php
/**
 * Template Name: Solutions
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
		<main id="main" class="site-main">

    <div id="service_header"class="header">
		<div class="header_bg header_bg--primary ">
			<div class=" container header_container header_container--primary">
				<?php
					$header = get_field('header');
					if($header):
				?>
				<div class="heading heading--pre header_pre"><?php echo $header['pre_title'] ?> </div>
					<h1 class=" heading heading--primary text-shadow--primary" >
          	<?php echo $header['title'] ?> 
					</h1>
					<?php endif; ?>
				</div>
			</div>
		</div>


	<div class="tabs-container"><div>



	<ul id="tabs" class="">

				<li><a id="tab1"><span class="tab_num">01</span> <span class="tab_title">EVP Appraisal Management</span></a></li>
				<li><a id="tab2"><span class="tab_num">02</span> <span class="tab_title">WAIVIT</span></a></li>
				<!-- <li><a id="tab3"><span class="tab_num">03</span> <span class="tab_title">EVP Tech</span></a></li> -->
				
	</ul>

		<div class=" tab-folder-bar"></div>

	
	
	<!--*******TAB 1*******-->
	<div class="tab-content-container" id="tab1C">
		
		<div class="container-fluid service">
			<div class="row">
				<div class="col-md-6">
					<?php
						$tab1_sec1 = get_field('tab1_section1');
							if($tab1_sec1):
						?>
					<h2 class="heading heading--secondary"><?php echo $tab1_sec1['title'] ?></h2>
					<div class="paragraph_line--container">
						<p class="paragraph paragraph_line"><?php echo $tab1_sec1['text'] ?></p>
					</div>
					<?php endif; ?>
				</div>
				<div class="col-md-6 service_img service_img--appraisal"></div>	
			</div>
		</div>
		
		<div class="container-fluid service--2">
			<div class="row">
				<div class="col-md-6">
						<?php
						$tab1_sec2 = get_field('tab1_section2');
							if($tab1_sec2):
						?>
					<h2 class="heading heading--secondary"><?php echo $tab1_sec2['title'] ?></h2>
				<div class="paragraph_container">
					<p class="paragraph paragraph--secondary"><?php echo $tab1_sec2['text'] ?></p>
					<?php endif; ?>
				</div>

				</div>
				<div class="col-md-6">
					<h3 class="heading heading--tertiary"><?php echo $tab1_sec2['image_title'] ?></h3>
					
					<img class="service_graph" src="<?php echo get_bloginfo('template_url') ?>/img/graph.png" alt="">
				</div>	
			</div>
		</div>	
	</div><!--TAB 1 Content Container -->
	
	<!--*******TAB 2******* -->
	<div class="tab-content-container" id="tab2C">
		<div class="container-fluid service">
				<div class="row">
					<div class="col-md-6">
							<?php
						$tab2_sec1 = get_field('tab2_section1');
							if($tab2_sec1):
						?>
						<h2 class="heading heading--secondary"><?php echo $tab2_sec1['title'] ?></h2>
						<div class="paragraph_line--container">
							<p class="paragraph paragraph_line"><?php echo $tab2_sec1['text'] ?></p>
						</div>
						<?php endif; ?>
					</div>
					<div class="col-md-6 service_img service_img--eval"></div>	
				</div>
			</div>
				
			<div class="eval">
				<div class="eval_bg"></div>
				<div class="eval_card">
					<div class="eval_card-heading-container">
								<?php
						$tab2_sec2 = get_field('tab2_section2');
							if($tab2_sec2):
						?>
						<h2 class="eval_card-heading eval_card-heading--main">
							<?php echo $tab2_sec2['title'] ?>
						</h2>
					</div>
					<div class="container-fluid eval_card-content">
						<div class="row">
							<div class="col-sm-6 order-2 order-sm-1">
								<ul class="fa-ul eval_card-list">
									<li class="eval_card-list--item paragraph paragraph--primary"><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $tab2_sec2['bullet_1'] ?></li>
									<li class="eval_card-list--item paragraph paragraph--primary"><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $tab2_sec2['bullet_2'] ?></li>
									<li class="eval_card-list--item paragraph paragraph--primary"><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $tab2_sec2['bullet_3'] ?>t</li>
									<li class="eval_card-list--item paragraph paragraph--primary"><span class="fa-li"><i class="fas fa-check"></i></span><?php echo $tab2_sec2['bullet_4'] ?></li>
								</ul>	
							</div>
							<div class="col-sm-6 order-1 order-sm-2">
								<h3 class="eval_card-heading">
									<?php echo $tab2_sec2['sub_title'] ?>
								</h3>
								<p class="eval_card-paragraph paragraph paragraph--secondary"><?php echo $tab2_sec2['text'] ?></p>
									<?php endif; ?>
							</div>
						</div>
					</div>		
				</div>
			</div>
		</div><!--TAB 2 Content Container -->
		
		<!--*******TAB 3******* -->

		<!-- <div class="tab-content-container" id="tab3C">
		<div class="container-fluid service">
				<div class="row">
					<div class="col-md-6">
						<h2 class="heading heading--secondary">The Highest Quality Valuations in Half The Time</h2>
						<div class="paragraph_line--container">
							<p class="paragraph paragraph_line">Sit amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet commodo. Sit amet consectetur adipiscing elit duis tristique.</p>
						</div>
					</div>
					<div class="col-md-6 service_img service_img--tech"></div>	
				</div>
			</div>
			<div class="tech_bg">
				<div class="tech_logo"></div>
				<div class="container-fluid service--2">
					<div class="row">
						<div class="col-md-7 tech_content">
							<div class="tech_heading-container">
								<h2 class="tech_heading tech_heading--main">
									Cutting Edge & Modernized <br>Property Valuations  
								</h2>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<ul class="fa-ul tech_list">
										<li class="tech_list--title"><span class="fa-li"><i class="tech_list--icon fas fa-square-full"></i></span>EVP - Eval</li>
										<li><p class="tech_list--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> </li>
									</ul>
									<ul class="fa-ul tech_list">
										<li class="tech_list--title"><span class="fa-li"><i class="tech_list--icon fas fa-square-full"></i></span>Inspection App</li>
										<li><p class="tech_list--text">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et doloresed do eiusmod.  </p> </li>
									</ul>
								</div>
						
								<div class="col-sm-6">
									<ul class="fa-ul tech_list">
										<li class="tech_list--title"><span class="fa-li"><i class="tech_list--icon fas fa-square-full"></i></span>Evaluation App</li>
										<li><p class="tech_list--text">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utmagna aliqua lmagna.  </p> </li>
									</ul>
									<ul class="fa-ul tech_list">
										<li class="tech_list--title"><span class="fa-li"><i class="tech_list--icon fas fa-square-full"></i></span>Evaluation App</li>
										<li><p class="tech_list--text">Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utmagna aliqua lmagna.</p> </li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-5 u-flex">	
							<img class="tech_img"src="<?php echo get_bloginfo('template_url') ?>/img/AdobeStock_57688175.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!--TAB 3 Content Container -->

	</div><!--TAB-CONTAINER -->

    <div class="testimonial_bg u-full-height u-z-index-neg">
			<div class="testimonial_bg--logo rellax" data-rellax-speed="-6"></div>
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
                <?php echo $contact['title'] ?> 
              </h2>
            </div>
            <div class="container-fluid form_card-content">
              <div class="row">
                <div class="col-sm-5">
                  <p class="form_card-paragraph paragraph paragraph--secondary"><?php echo $contact['text'] ?> </p>
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
