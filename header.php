<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo THEME_URL; ?>css/normalize.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mogra" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo THEME_URL; ?>libs/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo THEME_URL; ?>libs/jquery-ui-1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo THEME_URL; ?>libs/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo THEME_URL; ?>libs/owlcarousel/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo THEME_URL; ?>css/style.min.css">
  </head>
  <body <?php body_class(); ?>>
    <nav class="top-bar-menu">
      <div class="menu-container">
      <ul class="menu-list">
        <li class="logo"><a href="<?php echo home_url(); ?>">dszczepaniak.pl</a></li>
        <li><a href="#" class="categories-button">Kategorie</a></li>
        <li><a href="<?php echo THEME_URL; ?>autor">Twórca</a></li>
        <li><a href="<?php echo THEME_URL; ?>kontakt">Kontakt</a></li>
      </ul>
      <ul>
        <li class="toggle-button hamburger-icon"><i class="fa fa-bars" aria-hidden="true"></i></li>
      </ul>
    </div>
    </nav>
    <nav id="menu">
      <header>
        <div class="close"><i class="fa fa-times" id='close-icon' aria-hidden="true"></i></div>
        <h2 class="slideout-logo">dszczepaniak.pl</h2>
      </header>
      <ul class="sidemenu-list">
        <li><a href="<?php echo home_url(); ?>"><i class="fa fa-bars" aria-hidden="true"></i>strona główna</a></li>
        <li><a href="<?php echo THEME_URL; ?>autor"><i class="fa fa-user" aria-hidden="true"></i>twórca</a></li>
        <li><a href="<?php echo THEME_URL; ?>kontakt"><i class="fa fa-envelope" aria-hidden="true"></i>kontakt</a></li>
      </ul>
      <form role="search" method="get" id="searchform" class="searchform" action="http://dszczepaniak.pl">
				<div>
					<input type="text" value="" name="s" id="s" placeholder="szukaj...">
					<button type="=submit" id="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</form>
      <h3 class="categories-header">Kategorie</h3>
      <ul class="categories-list" id="categories-list">
        <?php
        $categories = get_categories();
        foreach($categories as $category):?>
        <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
        <?php endforeach; ?>
      </ul>
      <footer class="slideout-footer">
        <div><a href="http://steamcommunity.com/id/elszczepano/"> <i class="fa fa-steam" aria-hidden="true"></i></a></div>
        <div><a href="https://www.facebook.com/dominikszczepaniak98"> <i class="fa fa-facebook" aria-hidden="true"></i></a></div>
        <div><a href="https://github.com/elszczepano"> <i class="fa fa-github" aria-hidden="true"></i></a></div>
        <div><a href="<?php echo THEME_URL; ?>img/snapcode.png"> <i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a></div>
        <div><a href="https://stackoverflow.com/users/8209527/elszczepano"> <i class="fa fa-stack-overflow" aria-hidden="true"></i></a></div>
      </footer>
    </nav>
    <main id="panel">
