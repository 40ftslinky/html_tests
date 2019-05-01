<?php

add_action('wp_head', 'enfold_add_script');

  function enfold_add_script(){
    if is_page('page_id'); {
      ?>
        <!-- add the code here -->

        <!-- end added code -->
      <?php } ?>
  }
