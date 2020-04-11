<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="img/favicon.ico" rel="shortcut icon"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&amp;display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<div id="preloder" style="display: none;">
		<div class="loader" style="display: none;"></div>
</div>

<header class="header-section clearfix">
		<a href="index.html" class="site-logo">
			<img src="http://localhost/wordpress/wp-content/uploads/2020/04/logo.png" alt="">
		</a>
 <?php        get_template_part('home/menu','user'); ?>
<?php        wp_nav_menu(array('theme_location'=>'top-menu','menu_class' => 'main-menu','container' => false)); ?>   
</header>

