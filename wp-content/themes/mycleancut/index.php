<?php get_header() ; ?>

<section class="row title-bar">
      <div class="container">
        <div class="col-md-4">
            <h1>Blog</h1>
        </div>
        <div class="col-md-8">
            <?php if(is_active_sidebar('subnav')) : ?>
              <?php dynamic_sidebar('subnav'); ?>
            <?php endif; ?>
        </div>
      </div>
</section>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php if(has_post_format($format, $post_id) && get_post_format($post_id) == 'aside') : ?>
          <?php
            // Aside Content
            get_template_part('content', get_post_format()) ;
    ?>
    <?php elseif(has_post_format($format, $post_id) && get_post_format($post_id) == 'gallery') : ?>
          <?php
            // Gallery Content
            get_template_part('content-gallery', get_post_format()) ;
          ?>
    <?php else : ?>
          <?php
            // Standard Content
            get_template_part('content', get_post_format()) ; 
          ?>
    <?php endif; ?>

  

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer() ; ?>