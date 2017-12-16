<?php
$selected_slider= get_posts(array(
  'meta_query' => array(
      array(
          'key' => 'main-slider',
          'value' => 'slider',
          'compare' => 'LIKE'
        )
      )
));
 ?>
