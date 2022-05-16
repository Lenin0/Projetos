<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">

        <?php wp_head(); ?>
    
    </head>
    <body>
        
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="custom-botao" href="https://www.instagram.com/f5ads/">Instagram</a>
        <a href="https://www.linkedin.com/company/f5ads/" class="custom-botao">Linkedin</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <?php wp_nav_menu(array('theme_location' => 'primary', 
                            'menu_class' => 'navbar-nav',
                            'container' => false,
                            'walker' => new WP_Bootstrap_Navwalker())); ?>
  </div>
</nav>