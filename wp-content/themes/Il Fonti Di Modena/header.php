
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il Fonti Di Modena</title>
    <?php wp_head() ?>
  </head>
<body>

      <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      ?>

      <div class="rowlogo" style="background-color:#000000">
            <div class="logo"><img src="<?php echo $logo[0]; ?>"></div>
      </div>


       

  