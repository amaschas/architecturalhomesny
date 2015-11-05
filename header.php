<!DOCTYPE html>
<html>
	<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<div id="container">
			<div id="leftcol">
			<h1 id="header-logo">Architectural Homes NY</h1>
				<header id="main-header">
					<?php wp_nav_menu( array( 'menu' => 'Main' ) ); ?> 
				</header>
				<div id="content">