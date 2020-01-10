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
       
    <div class="blog-article-section">
      <div class="title-container">
        <h2>PREVIOUS ARTICLES</h2>
      </div>
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
