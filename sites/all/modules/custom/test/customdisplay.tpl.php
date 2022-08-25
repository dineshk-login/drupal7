<?php global $base_url;?>
<?php $themePath = drupal_get_path('theme',$GLOBALS['theme']);?>
      <?php //echo "<pre>"; print_r($nodes);?>
        <?php foreach ($nodes as $node) {?>   
            
              <div><?php echo $node->title; ?></div>
              <div><?php echo $node->value; ?></div>
        <?php }?>