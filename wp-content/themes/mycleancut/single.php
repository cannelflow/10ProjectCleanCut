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
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
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
            <div class="meta">
	          Posted on 
	          	<?php the_time('F j, Y g:i a'); ?>
	           by
	           <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                  <?php the_author(); ?>
              </a>
	          </div>
	          <?php the_content(); ?>
	          <?php comments_template(); ?>
        </article>
        <aside class="col-md-4">
            <?php if(is_active_sidebar('sidebar')) : ?>
              		<?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </aside>
    </div>
</section>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer() ; ?>