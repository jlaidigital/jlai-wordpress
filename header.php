<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500,900|Roboto+Condensed:400italic,400,700' rel='stylesheet' type='text/css'>

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css">
  
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
<div class="wrapper navFull">  
    <div class="container">
        <div class="header clearfix"> 
              <div class="navLeft">
                <h1>
                   <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
                   <?php bloginfo( 'name' ); ?>
                  </a>
                </h1>
              </div>
              <nav class="navRight">
                  <?php wp_nav_menu( array(
                    'container' => false,
                    'theme_locations' => 'primary'
                  )); ?>
                
              </nav>

        </div>
    </div> <!-- /.container -->
  </header><!--/.header-->
</div>

