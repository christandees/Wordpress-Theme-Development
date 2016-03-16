<?php get_header(); ?>
<section>
	
	<section role="sub" class="row">
    <h1><small>Archive of: </small><br><?php wp_title(''); ?></h1>
	<section class="col-8">
    	
        	<!--blog roll post-->
            <?php  
		
				$eventquery = new WP_Query( 'posts_per_page=-1');

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
            
        
        
        
        
        
        <hr width="97%"><hr width="98%">
    </section>
    
    
    <?php get_sidebar();?>
</section>
    <?php get_footer(); ?>
        
        
        
        
        
        <hr width="97%"><hr width="98%">
    </section>
    
    
    <?php get_sidebar();?>
</section>
    <?php get_footer(); ?>
</section>
