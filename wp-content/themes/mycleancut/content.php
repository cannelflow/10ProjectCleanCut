<?php
        $i = 0;
?>

<?php
            $i++;
            if($i % 2 != 0){
                // Odd Post
                $section_class = 'sec-2 row';
                $left_class = 'col-lg-5 col-sm-6 animated fadeInLeft';
                $right_class = 'col-lg-5 col-lg-offset-2 col-sm-6';
                $img_class = 'img-circle img-responsive animated fadeInRight';
            } else {
                // Even Post
                $section_class = 'sec-3 row';
                  $left_class = 'col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 animated fadeInRight';
                  $right_class = 'col-lg-5 col-sm-pull-6  col-sm-6';
                  $img_class='img-responsive img-circle animated fadeInLeft';
                    }
?>
    
<section class="<?php echo $section_class; ?>">
         <div class="container">
            <div class="<?php echo $left_class; ?>">
              <h2 class="section-heading"><?php the_title(); ?>:</h2>    
              <div class="blog-meta">
                          Posted on <?php the_time('F j, Y g:i a'); ?> By
                          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                              <?php the_author(); ?>
                          </a>
                          in
                          <?php
                            $categories = get_the_category();
                            $separator = ", ";
                            $output = '';

                            if($categories){
                              foreach($categories as $category){
                                $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name .'</a>'. $separator;
                                //$output .= $category->cat_name . $separator;

                              }
                            }
                            echo trim($output, $separator);
                          ?>
                        </div>
              <div class="blog-excerpt excerpt"><?php the_excerpt(); ?></div>
              <div class="blog-more"><a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a></div>
            </div>
            <div class="<?php echo $right_class; ?>">
             <?php the_post_thumbnail('full', array(
                            'class' => $img_class
                )); ?>
            </div>
         </div>
</section>   