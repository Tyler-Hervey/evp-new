<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EVP
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main bg_white">
    <?php
				// Start the Loop.
			while ( have_posts() ) :
        the_post();
        
        $header = get_field('header');
        if($header) :
 ?>
		
		 <div id="service_header"class="header ">
			
			<div class="header_bg header_bg--post ">
				<div class=" container header_container header_container--primary">
					<div class="heading heading--pre header_pre">
            <?php echo $header['tagline'] ; ?>
          </div>
						<h1 class=" heading heading--primary heading--primary-post text-shadow--primary" >
            <?php echo $header['title'] ; ?>
						</h1>
					</div>
				</div>
			</div>
      <?php endif ?>
      <?php $quote = get_field('article_quote');?>

			<div class="container post_container">
				
				<div class="post_image" style="background-image: linear-gradient(rgba(25, 31, 36, 0.5),rgba(25, 31, 36, 0.5)),url('<?php echo get_the_post_thumbnail_url() ?>'); "></div>
				<div class="post_quote">
     <?php     if ($quote) { echo $quote;}  ?>
        </div>
				<h2 class="post_title heading heading--secondary"><?php the_title(); ?></h2>
				<p class="post_date paragraph "><?php the_date() ?></p>

				<div class="post_content paragraph ">
							
					<?php the_content(); ?>
				
				</div>
        	<div class="post_bg--logo"></div>
			</div>
	
     

      <?php	endwhile; ?>



    <div class="post-article-section ">
        <div class="post-article-bg"> </div>
      <div class="container-fluid">
        <div class="row post-article_row">
          <?php query_posts('posts_per_page=3');
      if (have_posts()) : while (have_posts()) : the_post();?>
          <div class="post-article--<?php $wp_query->current_post + 1 ;?> col-sm-4">
          <a href="<?php echo get_permalink(); ?>">
            <div class="post-title--container">
              <div class="post-title--number">0<?php 
              $postCount = $wp_query->current_post + 1;
              echo $postCount;
               ;?></div>
              <div class="post-title--text"><?php the_title() ;?></div>
  
            </div>
            </a>
            <a href="<?php echo get_permalink(); ?>">
            <div class="post-thumbnial--<?php echo $postCount ;?>" style="background-image: linear-gradient(rgba(25, 31, 36, 0.5),rgba(25, 31, 36, 0.5)),url('<?php echo get_the_post_thumbnail_url() ?>'); ">
              </div> </a>
              <div class="post-article--description"><?php the_excerpt();?></div>
              <a href="<?php echo get_permalink(); ?>"><span class="post-cta">READ MORE  ></span></a>
          </div>

          <?php endwhile; endif; ?>
          <!-- <div class="post-article--2 col-sm-4">
          <div class="post-title--container">
          <div class="post-title--number">02</div>
              <div class="post-title--text">deminimus changes</div>
              </div>
            <div class="post-thumbnial--2">
            </div>
            <p class="post-article--description">Preparing for the upcoming deminimus change</p>
            <span class="post-cta">READ MORE  ></span>
          </div>
          <div class="post-article--3 col-sm-4">
          <div class="post-title--container">
          <div class="post-title--number">03</div>
              <div class="post-title--text">deminimus changes</div>
              </div>
            <div class="post-thumbnial--3">
            </div>
            <p class="post-article--description">Preparing for the upcoming deminimus change</p>
              <span class="post-cta">READ MORE  ></span>
          </div> -->
          </div>


        </div>
      </div>
    
          
			


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
