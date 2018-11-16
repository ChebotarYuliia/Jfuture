<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/bg-or.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&amp;subset=cyrillic" rel="stylesheet">

    <title>Jfuture</title>
    <?php wp_head(); ?>
</head>
<body id='body' <?php body_class(); ?>>
<div class="main">
    <!--parallax-->
    <div class="scene">
        <i data-offset="40" class="parallax bg-1"></i>
        <i data-offset="30" class="parallax bg-2"></i>
        <i data-offset="70" class="parallax bg-4"></i>
        <i data-offset="50" class="parallax bg-5"></i>
        <i data-offset="80" class="parallax bg-6"></i>
        <i data-offset="90" class="parallax bg-8"></i>
        <i data-offset="40" class="parallax bg-9"></i>
        <i data-offset="100" class="parallax bg-10"></i>
        <i data-offset="80" class="parallax bg-11"></i>
        <i data-offset="100" class="parallax bg-12"></i>
        <i data-offset="100" class="parallax bg-13"></i>
        <i data-offset="50" class="parallax bg-14"></i>
        <i data-offset="100" class="parallax bg-15"></i>
        <i data-offset="40" class="parallax bg-16"></i>
        <i data-offset="70" class="parallax bg-17"></i>
        <i data-offset="70" class="parallax bg-18"></i>
        <i data-offset="80" class="parallax bg-19"></i>
        <i data-offset="80" class="parallax bg-20"></i>
    </div>
    <div class="container-fluid wrapper header-container">
        <header class="header">
            <div class="wr-logo">
                <a class="navbar-brand logo-link scroll-navigation" href="#top">
                    <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="logo">
                </a>
            </div>
            <nav class="wr-nav navbar">
                <button type="button" class="my-mob-btn collapsed navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-9" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse hidden-xs" id="bs-example-navbar-collapse-9">
                    <ul class="nav navbar-nav" id="main-menu">
                        <li class="item current-menu-item"><a class="text-uppercase text-center scroll-navigation" href="#unique"><?php echo __('[:en]Why us[:ru]почему мы[:]'); ?></a></li>
                        <li class="item"><a class="text-uppercase text-center scroll-navigation" href="#principles"><?php echo __('[:en]Principles[:ru]принципы[:]'); ?></a></li>
                        <li class="item"><a class="text-uppercase text-center scroll-navigation" href="#education"><?php echo __('[:en]Training[:ru]обучение[:]'); ?></a></li>
                        <li class="item"><a class="text-uppercase text-center scroll-navigation" href="#contact"><?php echo __('[:en]Contact us[:ru]связь с нами[:]'); ?></a></li>
                    </ul>
                </div>
            </nav>
            <div class="wr-phone portfolio-experiment">
                <a class="text-uppercase popup-btn"  data-mfp-src="#contact-form" href="#">
                    <span class="text"><?php echo __('[:en]Connect[:ru]связаться[:]'); ?></span>
                    <span class="line -right"></span>
                    <span class="line -top"></span>
                    <span class="line -left"></span>
                    <span class="line -bottom"></span>
                </a>
            </div>
	        <?php echo __('[:en]<a href="/ru" class="lang">En</a>[:ru]<a href="/en" class="lang">Ru</a>[:]'); ?>
            <ul class="nav navbar-nav mobile-menu visible-xs-block">
                <li class="item"><a class="text-uppercase text-center scroll-navigation" href="#top">jfuture</a></li>
                <li class="item current-menu-item"><a class="text-uppercase text-center scroll-navigation" href="#unique"><?php echo __('[:en]Why us[:ru]почему мы[:]'); ?></a></a></li>
                <li class="item"><a class="text-uppercase text-center scroll-navigation" href="#principles"><?php echo __('[:en]Principles[:ru]принципы[:]'); ?></a></li>
                <li class="item"><a class="text-uppercase text-center scroll-navigation" href="#education"><?php echo __('[:en]Training[:ru]обучение[:]'); ?></a></li>
                <li class="item"><a class="text-uppercase text-center scroll-navigation" href="#contact"><?php echo __('[:en]Contact us[:ru]связь с нами[:]'); ?></a></li>
            </ul>
            <div class="desktop-burger visibility-none">
                <span class="first"></span>
                <span class="second"></span>
                <span class="third"></span>
            </div>
            <a href="phone:" class="mobile-phone"></a>
            <a href="mailto:" class="mobile-mail"></a>
        </header>
    </div>
