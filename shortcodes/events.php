<?php

function get_events($type, $items)
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
    'post_type' => 'event',
  );

    $the_query = new WP_Query($args);
    ?>

<?php if ($type == 'row') : ?>
<div class="">
<?php else : ?>
<div class="">
<?php endif;
    ?>


<div class="event-slider">
<?php while ($the_query->have_posts()) : $the_query->the_post();
    $name = get_the_title($post->ID);
    $photo = get_the_post_thumbnail($post->ID, 'venturelab-370');
    $link = get_permalink($post->ID);
    $excerpt = get_the_excerpt($post->ID);
    ?>

<div class="event-item">
  <?php if ($photo) : ?>
    <a class="th" role="button" aria-label="Thumbnail" href="<?php echo $link;
?>">
      <?php echo $photo;
?>
    </a>
  <?php endif;
?>
      <div class="text-inner">
        <?php if ($name) : ?>
        <h5><?php echo $name;
      ?></h5>
        <?php endif;
      ?>
      <?php if ($excerpt) : ?>
        <p><?php echo $excerpt;
    ?></p>
      <?php endif;
    ?>

    <p><a href="<?php echo $link; ?>" class="read-more"><?php _e('View event Details', 'venturelab'); ?></a></p>

      </div>
</div>

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
add_shortcode('events', 'get_events');
