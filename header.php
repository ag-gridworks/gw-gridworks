<?php
/**
 * The header
 * @package Gridworks
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<header class="go-navbar">
		<ul class="topnav" id="myTopnav">
			<li><a class="brand" href="<?php echo site_url(); ?>">grid<b><span style="color: #3ddbc2">.</span>works </b></a></li>
			<li class="nav-button"><a href="javascript:void(0)" onclick="openNav()"><i style="font-size: 27px" class="fa fa-navicon" aria-hidden="true"></i></a></li>
		</ul>
		<div id="myNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;<p class="closebtn-text">Fechar</p></a>
			<div class="overlay-content">
			<?php if(is_home()): ?>
			<a href="javascript:void(0)" onclick="goTo(box1)">Nossos Serviços</a>
			<a href="javascript:void(0)" onclick="goTo(box2)"">Projetos</a>
			<a href="javascript:void(0)" onclick="goTo(box3)">Contato</a>
			<?php else: ?>
			<?php wp_nav_menu(); ?>
			<?php endif; ?>
			</div>
		</div>
	</header>
	
	<!-- Content Holder -->
	<div class="gw-container">