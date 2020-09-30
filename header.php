<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <?php wp_title(); ?>
  <?php wp_site_icon(); ?>

  <!-- CSS  -->
  <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Dancing+Script|Kaushan+Script&display=swap" rel="stylesheet">
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">-->
  <?php wp_head(); ?>
  <style type="text/css">
  
      :root{
      <?php if ( true == get_theme_mod( 'bondhon_color_config') ) : ?>  
        --parallax-bg: #000000ad;
        --main-fc: #000000;
        --main-bg: #fff;
        --footer-c: #0a0d10;
        --footer-fc-a:#cccccc;
        --footer-fc:#cccccc;
      <?php else: ?>
        --parallax-bg:#663399ad;
        --main-fc:#663399;
        --main-bg: #fff;
        --footer-c: #4c2d74;
        --footer-fc:#cccccc;
        --footer-fc-a:#a55af1;

      <?php endif; ?> 
      }
    
    .recent_work_wrapper:after{
      background: url('<?php echo get_template_directory_uri(); ?>/image/divider_3.webp');
    }
  </style>
  
</head>
<body id="home">
  <nav class="main_nav" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php bloginfo('url'); ?>" class="brand-logo"><?php bloginfo('name'); ?></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#home">Home</a></li>
        <li><a href="#recent_work">Recent Work</a></li>
        <?php if ( true == get_theme_mod( 'bondhon_show_what_we_do', true ) ) : ?>
        <li><a href="#about">About</a></li>
        <?php endif; ?>
        <li><a href="#contact_us">Contact</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a class="sidenav-close" href="#home">Home</a></li>
        <li><a class="sidenav-close" href="#recent_work">Recent Work</a></li>
        <?php if ( true == get_theme_mod( 'bondhon_show_what_we_do', true ) ) : ?>
        <li><a class="sidenav-close" href="#about">About</a></li>         
        <?php endif; ?>
        <li><a class="sidenav-close" href="#contact_us">Contact</a></li>
      </ul>
      <a data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
