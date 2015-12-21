<?php
  $columnWidth = get_sub_field('column_width');
?>
<?php // echo $columnWidth; ?>
<?php if( have_rows('slider') ): ?>
  <div class="slider">
  <?php while( have_rows('slider') ): the_row(); ?>
    <?php
      $image = get_sub_field('image');
      $text = get_sub_field('text');
      $size = 'venturelab-860';
    	$image = $image['sizes'][ $size ];
     ?>
      <div class="slide">
        <div class="row fullwidth collapse">
          <div class="small-6 columns">
            <?php if($image) : ?>
              <img src="<?php echo $image; ?>" alt="">
            <?php endif; ?>
          </div>
          <div class="small-6 columns">
            <?php if($text) : ?>
              <div class="slider-text">
              <?php echo $text; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
  <?php endwhile; ?>
</div>
<?php endif; ?>
