<?php

	/*
		Template Name: Bottom Content Layout
	*/
?>

<?php get_header() ; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 <section class="row title-bar">
    <div class="container">
        <div class="col-md-6">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="col-md-6">
        <div class="sub-nav">
		  <ul>
		   <?php
		      $args = array(
		          'child_of'	=> get_top_parent(),
		          'title_li'	=> ''
		          );
		   ?>
		   <?php wp_list_pages($args); ?>
		  </ul>
		 </div>
    </div>
    </div>
</section>

<section class="article row">
    <div class="container">
        <article class="col-md-8">
            <div class="post-thumbnail">
             <?php the_post_thumbnail(); ?>
            </div>
	          <?php the_content(); ?>
        </article>
        <aside class="col-md-4">
            <?php if(is_active_sidebar('sidebar')) : ?>
              		<?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </aside>
    </div>
</section>

<?php if(is_active_sidebar('bottom')) : ?>
        	<?php dynamic_sidebar('bottom'); ?>
<?php endif; ?>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer() ; ?>