<?php

function get_community($type, $items)
{
    ob_start();
    extract(shortcode_atts(array(
    'type' => '',
    'items' => 0,
 ), $type, $items));

    $args = array(
    'orderby' => 'date',
    'order' => 'asc',
    'posts_per_page' => $items,
    'post_type' => 'community',
  );

    $the_query = new WP_Query($args);
    $count = 1;
    ?>

<?php if ($type == 'row') : ?>
<div class="community-row">
<?php else : ?>
<div class="community-grid">
<?php endif;
    ?>


<div class="row small-collapse outer-row">
<?php while ($the_query->have_posts()) : $the_query->the_post();
    $name = get_the_title($post->ID);
    $photo = get_the_post_thumbnail($post->ID, 'venturelab-250');
    $link = get_permalink($post->ID);
    $excerpt = get_the_excerpt($post->ID);
    ?>
    <?php $numbers = array(4,5,6,10,11,12,16,17,18);
      if (in_array($count, $numbers)) {
          $class1 = 'small-push-6';
          $class2 = 'small-pull-6';
      }
      else {
        $class1 = '';
        $class2 = '';
      }
      ?>
<div class="small-4 columns">
  <div class="row small-collapse">
    <div class="small-6 columns <?php echo $class1; ?>">
      <div class="text-inner">
      <?php if ($excerpt) : ?>
        <p><?php echo $excerpt;
    ?></p>
      <?php endif;
    ?>
      <?php if ($name) : ?>
      <h5><?php echo $name;
    ?></h5>
      <?php endif;
    ?>
      </div>

    </div>
    <div class="small-6 columns <?php echo $class2; ?>">
      <?php if ($photo) : ?>
        <a class="th" role="button" aria-label="Thumbnail" href="<?php echo $link;
    ?>">
          <?php echo $photo;
    ?>
        </a>
      <?php endif;
    ?>
    </div>
  </div>
</div>
<?php
++$count;
    ?>
<?php endwhile;
    wp_reset_postdata();
    ?>
</div>
</div>
<?php

$result = ob_get_contents();
    ob_end_clean();

    return $result;
}
add_shortcode('community', 'get_community');
