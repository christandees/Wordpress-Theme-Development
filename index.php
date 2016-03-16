<?php get_header(); ?>
<!--Main content area-->
<!--featured post-->
<section role="main" class="row">
<div class="row">
	<?php  
		
		$eventquery = new WP_Query( 'posts_per_page=1');

		while($eventquery->have_posts()) : $eventquery->the_post();
	?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
    <div class="col-12" id="feature-image">
	
        <div class="feature-content-box"> 
        	<div class="feature-content-title-box"> <h2><?php the_title(); ?>  </h2></div> 
            	<div class="feature-snipet">
            		<?php the_excerpt(); ?>
                </div>
                
                
               
        </div>
        <div class="feature-date">
        	<div class="feature-month"><?php the_time('M'); ?></div>
            <div class="feature-day"><?php the_time('d'); ?></div>
            <div class="feature-year"><?php the_time('Y'); ?></div>
            
        </div>
        <?php the_post_thumbnail(); ?>
	</div></a>
     <?php 
		  endwhile;
		  wp_reset_query();
		  ?>
          
    <?php  
		
		$eventquery = new WP_Query( 'posts_per_page=3&offset=1');

		while($eventquery->have_posts()) : $eventquery->the_post();
	?>
<!--The sub featured posts -->    
<div class="row">
	<a href="<?php the_permalink(); ?>">
	 <?php echo '<div class="col-4 sub-feature-image">
    	<div class="sub-feature-image"> 
        	<div class="sub-feature-content">
           		<div class="sub-feature-title">';?><?php the_title(); ?><?php echo '</div>
            	<div class="sub-feature-month">';?><?php the_time('M'); ?><?php echo '</div>
            	<div class="sub-feature-year">';?><?php the_time('Y'); ?><?php echo '</div>
            	<div class="sub-feature-day">';?><?php the_time('d'); ?><?php echo '</div>
            </div>';?>
             <?php the_post_thumbnail(); ?>
    	<?php echo '</div>
    </div> ';?>
    <?php 
		  endwhile;
		  wp_reset_query();
		  ?>
 </a>  
</div>
</div>
</section>
<!--Blog roll-->
<section role="sub" class="row">
	<section class="col-8">
    	<hr width="98%"><hr width="97%">
        	<!--blog roll post-->
            <?php  
		
				$eventquery = new WP_Query( 'posts_per_page=3&offset=4');

				while($eventquery->have_posts()) : $eventquery->the_post();
			?>
            
           	<?php echo ' <div class="row">
            	
            	<div class="col-2">
             
                	<div class="roll-thumbnail">'; the_post_thumbnail('post-thumbnail', array( 'class'	=> "thumbnail attachment-post-thumbnail")); echo '</div>
                    
                    <div class="roll-date">
                    	<div class="col-6">
                        	<div class="roll-month">'; the_time('M'); echo '</div>
                        	<div class="roll-year">'; the_time('Y'); echo '</div>
                       </div>
                       <div class="col-6">
                        	<div class="roll-day">'; the_time('d'); echo '</div>
                       </div>
                    
                    </div>	
                    
                </div>
                <div class="col-10">
                	<div class="roll-post">
       		             <div class="roll-post-title">
                    		<h2>';the_title(); echo '</h2>
                  		 </div>
                         <div class="roll-post-snipet">
                         	<p>'; the_excerpt(); echo '</p>
                         </div>
                         <div ><a href="';the_permalink(); echo ' " class="link-to-post"> read more</a></div>
					</div>                
                </div>
            <hr width="97%">
            </div>'; ?>
            <?php 
		 	 endwhile;
		 	 wp_reset_query();
		  ?>	
            <footer class="row">
           		<a href="<?php bloginfo('url'); ?>/blogroll">
            	<div class="arrow-center">
                	<div class="arrow-down"></div>
            	</div>
                <div class="goto-roll">
                	see all posts
                </div>
           		</a>
            </footer>
        
        
        
        
        
        
        <hr width="97%"><hr width="98%">
    </section>
    
    <div class="col-4">
    <hr width="97%"><hr width="98%">
    </div>
    <?php get_sidebar();?>
</section>

<?php get_footer(); ?>