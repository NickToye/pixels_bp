<!DOCTYPE html>
<html>

<head>


	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="cleartype" content="on">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="Description" content="page description…"/>
	<meta name="Keywords" content="page keywords…"/>
	<meta name="author" content="">

	<link href="<?php bloginfo('stylesheet_directory'); ?>/-/img/ico/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- Font Awesome -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700|Oswald' rel='stylesheet' type='text/css'>




    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>



	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->





</head>


<body <?php body_class(); ?>>


	<header>
		<div class="wrapper">
			<nav class="navbar navbar--default" role="navigation">

				<div class="container-fluid">

					<!-- Brand and toggle get grouped for better mobile display -->
<!--
					<div class="navbar__header">
						<button type="button" class="navbar__toggle" data-toggle="collapse" data-target="#navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="brand" href="/"><img src="<?php bloginfo('template_url');?>/-/img/logo.jpg" alt="logo" width="500" height="500" /></a>

					</div>
-->
					<!-- Collect the nav links, forms, and other content for toggling -->
<!--
					<div class="pull-right collapse navbar__collapse" id="navbar">
						<ul class="pull-right list-inline list-unstyled socials">
							<li><a href="https://www.facebook.com/sfpuk"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/singforpleasure"><i class="fa fa-twitter"></i></a></li>
							<li class="just_giving"><a href="http://www.justgiving.com/singfp/donate/?utm_source=website_cid185321&amp;utm_medium=buttons&amp;utm_content=singfp&amp;utm_campaign=donate_white"><img src="<?php bloginfo('template_url');?>/-/img/justgiving_btn.png" alt="justgiving_btn" width="160" height="37" /></a></li>
						</ul>
						<?php wp_nav_menu( array('theme_location' => 'primary', 'menu' => '', 'menu_class' => 'nav navbar__nav navbar__right', 'container' => '', 'walker' => new My_Walker_Nav_Menu(), )); ?>


					</div>
--><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>




