<?php
/**
 * Template Name: Articles
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
		<main id="main" class="site-main articles-background">
    
      <div id="featured-content" class="row">
        <?php
          $appraiser = get_field('appraiser');
          if($appraiser):

            $post = $appraiser['featured_post'];
	          setup_postdata( $post );
        ?>
      <div class="col-md-6 appr-sec2_col">
        <div class="appr-sec2_content">
          <h2 class="featured__title"><?php echo the_title(); ?></h2>
          <p class="featured-content__text"><?php echo get_the_excerpt(); ?></p>
          <p class="appr-sec2_emph"><a href="<?php echo the_permalink() ?>">Read More ></a></p>
        </div>
      </div>
      <div class="col-md-6 featured-content--right">
      <?php echo get_the_post_thumbnail(); ?>
      </div>

      </div>
      <?php wp_reset_postdata(); ?>
        <?php endif; ?>
        <div class="logo-container">
            <div id="philosophy_logo" class="rellax" data-rellax-speed="-3" data-rellax-percentage="0.5">
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



    <div class="blog-article-section">
      <div class="blog-article_row">
      <div class="blog-article__container">
              <?php 
              $args = array(
                'posts_per_page' => 9
            );
               $my_query = new WP_Query($args);

        if ( $my_query->have_posts() ) {
          
            while ( $my_query->have_posts() ) {
          
                $my_query->the_post();
          ?>

          <a href="<?php echo the_permalink(); ?>">
                <div class=" blog-article blog-article--<?php 
                    $postCount = $my_query->current_post + 1;
                    echo $postCount ;?>">
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

?>

  <?php 
 // Reset the `$post` data to the current post in main query.
 wp_reset_postdata();
 ?>
    <!-- <div id="loading-animation" style="display: none;"></div>
    <div id="category-post-content"></div>           -->

</div><!-- end blog article container -->
          <?php

$categories = get_categories(); ?>

<ul id="category-menu">
  <h3 class="widget-title">Categories</h3>
    <?php foreach ( $categories as $cat ) { ?>
    <li id="cat-<?php echo $cat->term_id; ?>"><a class="<?php echo $cat->slug; ?> ajax" onclick="return cat_ajax_get('<?php echo $cat->term_id; ?>', event);" href="#"><?php echo $cat->name; ?></a></li>

    <?php } ?>
</ul>
        </div>  <!-- end row -->
          </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
