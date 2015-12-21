<?php
  $columnWidth = get_sub_field('column_width');
?>
<?php // echo $columnWidth; ?>
<?php if(get_sub_field('text')) : ?>
  <div class="small-3 columns">
    <div class="inner">
      <?php the_sub_field('text'); ?>
    </div>
  </div>
<?php endif; ?>
