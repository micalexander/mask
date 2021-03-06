<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7 <?php echo $is_logged_in = is_user_logged_in() ? 'wp-logged-in' : ''; ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8 <?php echo $is_logged_in = is_user_logged_in() ? 'wp-logged-in' : ''; ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9 <?php echo $is_logged_in = is_user_logged_in() ? 'wp-logged-in' : ''; ?>" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="<?php echo $is_logged_in = is_user_logged_in() ? 'wp-logged-in' : ''; ?>" <?php language_attributes();  ?>> <!--<![endif]-->
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

  <?php wp_head(); ?>

  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/screen.css" />
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/respond.min.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/ie.js"></script>
    <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
  <![endif]-->
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
  <script type="text/javascript">
    var site_url = location.host;
  </script>

</head>

<body <?php body_class(); ?>>
  <?php if (is_user_logged_in()): ?>
    <div class="custom-nav">
      <a href="<?php echo get_dashboard_url(); ?>">Admin</a> |
      <?php edit_post_link( __('Edit'), '<span class="edit-link">', '</span>' ); ?>
    </div>
  <?php endif; ?>
  <div class="wrap">
    <header class="region container" role="banner">
      <div class="wrapper">
        <div>
          <section class="branding">
            <a class="logo icon-lof-logo" href="<?php bloginfo('url') ?>">
              <h1><?php bloginfo('name') ?></h1>
              <p><?php bloginfo('description') ?></p>
            </a>
          </section>
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'primary-header-menu',
                'container'      => 'nav',
                'container_id'   => 'primary-header-menu'
              )
            );
          ?>
        </div>
      </div>
    </header>
    <div class="content-wrapper clearfix" role="main"> <!-- End Header -->