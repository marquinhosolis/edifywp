<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- PRECONNECT AND PRELOADS -->
	<link rel="preconnect" href="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js" as="script" >
	<!-- END PRECONNECT AND PRELOADS -->
	
	<!-- CSS INCLUDES -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
	<!-- END CSS INCLUDES -->
	
	<?php wp_head(); ?>
</head>

<body>
	<header>
			<div class="container">
				<div class="logoHeader">
					<a href='<?php echo site_url(); ?>'>
						<img src="<?php echo get_stylesheet_directory_uri()?>/images/logo.svg" alt="Reading.com logo" />
					</a>
				</div>
				<nav>
					<ul>
						<li>
							<a href="#meus-livros">Meus livros</a>
						</li>
					</ul>
				</nav>

				<div class="avatarHeader">
					<img
						src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=35"
						alt="Avatar"
					/>
					<img src="<?php echo get_template_directory_uri(); ?>/images/caret-down.svg" alt="caret down">
				</div>
			</div>
		</header>
	