<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('title'); ?></title>
<link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>

<body>
<div class="wrapper">
<header role="main">
	<!--menuBar-->
    <div id="mainHeader" >
    <div class="row">
		<!--Main Nav-->
        <nav role="main" class="col-4">
        	<?php wp_nav_menu(array(
		'menu' => 'primary_nav',
		'container' => '',
		'menu_class' => 'nostyles'
	));?>
        </nav>
        <!--Social Media Links-->
        <div class="col-4" >
        
        	<ul role="socialmedia" class="nostyles">
            	<li><a href="http://www.facebook.com"><img src="<?php bloginfo('template_url'); ?>/images/socialmedia/facebook.png"></a></li>
                <li><a href="http://www.twitter.com"><img src="<?php bloginfo('template_url'); ?>/images/socialmedia/twitter.png"></a></li>
                <li><a href="https://plus.google.com/"><img src="<?php bloginfo('template_url'); ?>/images/socialmedia/googlePlus.png"></a></li>
                <li><a href="https://www.pinterest.com/"><img src="<?php bloginfo('template_url'); ?>/images/socialmedia/pintrest.png"></a></li>
                <li><a href="https://www.rss.com/"><img src="<?php bloginfo('template_url'); ?>/images/socialmedia/rss.png"></a></li>
            </ul>
        
        </div>
        <!--Search bar-->
		
	</div>
    </div>
    <!--Main Title-->
    <div class="row" id="titleHeader">
    	<div id="main-title"><h1><?php bloginfo('title'); ?></h1></div><br>
       	<div id="sub-title"><h2><?php bloginfo('description'); ?></h2></div>
    	<hr width="99%"><hr width="98%">
    </div>
    <div class="clear"></div>
</header>