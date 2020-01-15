<?php
/*
Template Name: Blog-News
*/
?>
<?php global $optimizer;?>
<?php get_header(); ?>


    <div class="page_fullwidth_wrap layer_wrapper">
        
        <!--CUSTOM PAGE HEADER STARTS-->
            <?php get_template_part('framework/core','pageheader'); ?>
        <!--CUSTOM PAGE HEADER ENDS-->
  
    <div id="content">
        <div class="center">
            <div class="single_wrap no_sidebar">
                <div class="single_post">
					
					
					
					 <!-- begin Catherine's Code -->
					  	   <?php 
// the query
	
$args = array(
    'post_type' => array( 'post' )
);
 
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?><hr>
	
					
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					
					<p><i>
<?php the_time( get_option( 'date_format' ) ); ?></i></p>
		<p><?php the_content(); ?></p>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
    <!-- pagination here -->
 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
	   
	    <!-- end Catherine's Code -->
				
                        <!--EDIT BUTTON START-->
                       
                        <!--EDIT BUTTON END-->
                        
                        <!--PAGE CONTENT START--> 
                        <div class="single_post_content">

                                <!--THE CONTENT START-->
                                
                                <!--THE CONTENT END-->
                        </div>
                        <!--PAGE CONTENT END-->                       
                  </div>
            
                  </div><!--single_post class END-->
                      
                  <!--COMMENT START: Calling the Comment Section. If you want to hide comments from your posts, remove the line below-->     
                
                  <!--COMMENT END-->
                  
        
            
              </div><!--single_wrap class END-->
           
            
            </div>
        </div>
   </div><!--layer_wrapper class END-->
<?php get_footer(); ?>