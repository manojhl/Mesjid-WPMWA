<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>
<?php 
global $page, $paged;

if( is_search() ){
    wp_title( '', true, 'left' );
    echo ' | ';
}else wp_title('|', true, 'right');

bloginfo('name');

if( is_front_page() ){
    echo ' | ';
    bloginfo('description');
}

if( $paged >= 2 || $page >=2 ){
    echo ' | ' . sprintf( 'Halaman %s', max($paged, $page) );
}

?>
    </title>
<meta name="viewport" content="width=device-width, user-scalable=2" />
<!-- Style Sheet -->
<?php if ( ! empty(mesjidThemeGetOption('styleRequest')) ): ?>
<link rel="<?php echo mesjidThemeGetOption('styleRequest');?>" href="<?php bloginfo('stylesheet_url');?>" as="style">
<?php endif; ?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url');?>">
<?php wp_head(); ?>
<!-- EndStyle Sheet -->
</head>
<body <?php body_class(); ?> >
<div id="wrap">
<!-- Header -->
        <header class="header">
            <div class="menu-header container">
                <div class="brand">
            <a href="<?php echo esc_url(home_url('/')); ?>"><h1> <?php bloginfo('name'); ?> </h1></a>
                </div>
                <?php
                wp_nav_menu([
                    'container'      => 'nav',
                    'container_id'   => 'utility-nav',
                    'theme_location' => 'place_utility'
                ]);
                ?>
        </div>
        </header> 
<!-- EndHeader -->

