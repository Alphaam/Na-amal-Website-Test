<!doctype html>
<html <?php language_attributes();?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<title><?php wp_title('');?><?php if (wp_title('', false)) {echo ' :';}?> <?php bloginfo('name');?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-blue.svg" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-blue.svg" rel="apple-touch-icon-precomposed">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description');?>">

		<?php wp_head();?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class();?>>
		<header id="header">
        <nav id="stickyNav" class="navbar fixed-top navbar-expand-lg navbar-light">
          <div class="container">
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/HomePage/IntroSection/logo-blue.svg" alt="logo" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
              wp_nav_menu(array(
                  'theme_location' => 'header-menu',
                  'depth' => 2,
                  'menu_class' => 'nav navbar-nav ml-auto',
                  'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                  'walker' => new WP_Bootstrap_Navwalker(),
              ));
            ?>
          </div>
          </div>
		  </nav>
    </header>
