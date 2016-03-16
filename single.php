<?php /* Template Name: Single */ ?>
<?php get_header(); ?>
<?php
	 if(have_posts()):
		while(have_posts()):
			the_post();
	?>

<section class="row">
<div class="col-8 postbg">
	<header class="col-12">
    	<div class="col-8">
   			<div class="single-title">
        		<h3><?php the_title(); ?></h3>
        	</div>
        	<div class="post-meta">
			Author: <?php the_author(); ?>, Posted On <?php the_date(); ?>
       	 	</div>
        </div>
        
        
    </header>
    <div id="feature-image">
    	 <?php the_post_thumbnail(); ?>
    </div>
	<article class="the-content">
    <?php the_content(); ?>
  
    <div class="col-12 content-right" >
        
        	<ul role="socialmedia" class="social">
            	<li><a href="http://www.facebook.com"><img src="<?php bloginfo('template_url'); ?>/images/socialmedia/facebook.png"></a></li>
                <li><a href="http://www.twitter.com"><img src="<?php bloginfo('template_url'); ?>/images/socialmedia/twitter.png"></a></li>
                <li><a href="https://plus.google.com/"><img src="<?php bloginfo('template_url'); ?>/images/socialmedia/googlePlus.png"></a></li>
                <li><a href="https://www.pinterest.com/"><img src="<?php bloginfo('template_url'); ?>/images/socialmedia/pintrest.png"></a></li>
                <li><a href="https://www.rss.com/"><img src="<?php bloginfo('template_url'); ?>/images/socialmedia/rss.png"></a></li>
            </ul>
        
        </div>
    </article>
      <hr width="98%"><hr width="97%">
	<?php comments_template(); ?>
	<hr width="98%"><hr width="97%">
	</div>
	<?php
		endwhile;
	previous_posts_link();
	next_posts_link();
	else:
		echo 'No Posts Found';
	endif;
	?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>