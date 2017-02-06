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

<div class="<?php echo $section_class; ?>">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <hr class="section-heading-spacer">
            <div class="clearfix"></div>
            <h2 class="section-heading"><?php the_title(); ?></h2>
            <div class="excerpt"><?php the_content(); ?></div>
        </div>
    </div>
  </div>
</div>
