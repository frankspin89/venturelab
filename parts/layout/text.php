<?php
  $columnWidth = get_sub_field('column_width');
  $columnBgColor = get_sub_field('background_color');
  $columnText = get_sub_field('text');
  $columnTextAlignment = get_sub_field('text_alignment');

  if($columnWidth == 4) {
    $columnClass = 'small-3';
  } elseif($columnWidth == 6) {
    $columnClass = 'small-6';
  }  elseif($columnWidth == 8) {
    $columnClass = 'small-9';
  } else {
    $columnClass = 'small-12';
  }



?>
<?php if(get_sub_field('text')) : ?>
  <div class="<?php echo $columnClass; ?> columns text-<?php echo $columnTextAlignment; ?>">
    <?php if($columnBgColor) : ?>
      <div class="inner  bg-<?php echo $columnBgColor; ?>">
    <?php else : ?>
        <div class="inner">
    <?php endif; ?>
      <?php if($columnText) : ?>
        <?php echo $columnText; ?>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
