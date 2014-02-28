<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Berg
 * @since Berg 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() . '/images/bergicon.png'; ?>"/>
	<link rel="icon" href="<?php echo get_template_directory_uri() . '/images/favicon.ico'; ?>" />
</head>

<body <?php body_class(); ?>>

<?php /* Start HTML taken from bergcloud.com header.erb */ ?>
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  <a class="navbar-brand" href="<?php echo berg_get_domain(); ?>" title="To the front page"><span>Berg</span></a>
    </div>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo berg_get_domain(); ?>">Home</a></li>
        <li class=""><a href="<?php echo berg_get_domain(); ?>overview/">Overview</a></li>
        <li class=""><a href="<?php echo berg_get_domain(); ?>case-studies/">Case Studies</a></li>
        <li class=""><a href="<?php echo berg_get_domain(); ?>get-started/">Get Started</a></li>
        <li><a href="http://remote.bergcloud.com/developers/platform/">Dev Center</a></li>
		<li class="active<?php if (is_front_page()) { ?> active-unlink<?php } ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Blog</a></li>
        <li class=""><a href="<?php echo berg_get_domain(); ?>store/" class="modal-link"  data-toggle="modal" data-target="#shop-modal">Store</a></li> 
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
<?php /* End HTML taken from bergcloud.com header.erb */ ?>

<div class="container container-padded">

	<div class="row">

		<div id="main-content" class="col-md-9">

<?php if ( ! is_front_page()) { ?>
	<div class="home-link"><a href="<?php echo home_url(); ?>">&larr; Berg Blog front page</a></div>
<?php } ?>

