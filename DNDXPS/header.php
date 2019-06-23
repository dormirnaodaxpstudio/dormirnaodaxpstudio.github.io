<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

	<title><?php wp_title(''); ?></title>

	<?php include_once("analytics-track.php"); ?>
</head>

<body>
<div class="container">
	<div id="header" class="site-header d-none d-sm-block"> <!-- ride only in the screens xs -->
		<header>
			<nav class="container v-center" role="navigation">
				<div clas="row d-flex p-relative">
					<nav class="navbar">
						<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-jogo.png" alt="Dormir Não Dá XP"></a>	
							<ul role="nav" id="nav"><?php wp_nav_menu(array("theme_location" => "header-menu")); ?></ul>
							
						</div>
					</div>
				</nav>
			</header>
		</div>

	<div id="mySidenav" class="sidenav d-block d-sm-none">
		<a href="javascript:void(0)" class="closebtn" id="closeNav">&times;</a>
		<nav> <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?> </nav>
	</div>



