<?php
/*
Template Name: Curriculum
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
				
				<h4 class="blue"> Click on a section or individual entry to offer feedback.</h1>
				
				<h1>1. Use of the IS 2010 Curriculum Report (section pending)</h1>
				<h1>2. Information Systems Model Curricula  (section pending)</h1>
				<h1>3. Principles Guiding the Curriculum Design (section pending)</h1>
 
<h1>4. Motivation for the Curriculum Revision (section pending)</h1>
				
				<h1><a href="http://dev-cidm6325-is2020-project.pantheonsite.io/assumptions/"> 
					5. Guiding Assumptions About the Information Systems Profession</a></h1>

                <div class="single_post" style="margin-top: -3em;">
					
					 <!-- begin Catherine's Code -->
					  <!--Assumptions Sections - Use of the Word Press Look to query a specific content type - i.e.-->
					  	   <?php 
// the query
	
$args = array(
    'post_type' => array( 'assumptions' )
);
 
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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
            
				
				
				 <h1>6. Key Elements of This Curriculum Revision (section pending)</h1>
 
<h1>7. Information Systems as a Field of Academic Study (section pending)</h1>
 
<h1>8. Relationship Between the IS Core Courses, the Minor, and the Major (section pending)</h1>
 
<h1>9. Outcome Expectations for Information Systems Graduates (section pending)</h1>
<h1>10. Architecture of the Information Systems Curriculum (section pending)</h1>
 
				
				
				<!--seeing if I can do two loops at once-->
				
				
				
				
				<a href="http://dev-cidm6325-is2020-project.pantheonsite.io/resources-for-is-degree-programs/"><h1>11. Resources for IS Degree Programs</h1></a>
				
				   <div class="single_post" style="margin-top: -3em;">
					
					 <!-- begin Catherine's Code -->
					  	   <?php 
// the query
	
$args = array(
    'post_type' => array( 'resources' )
);
 
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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
					   
					   
                      
                        <!--PAGE CONTENT END-->                       
                  </div>
				
				
				
				
				<!--end two loop experiment-->
				
				<h1>12.  Shared Courses with Other Computing Disciplines (section pending)</h1>
				<h1>13.  IS 2010 Course Specifications (section pending)</h1>
				<h1>
					14. References (section pending)</h1>
 				<h1> 15. Appendices </h1>
				
					   <div class="single_post" style="margin-top: -3em;">
					
					 <!-- begin Catherine's Code -->
					  	   <?php 
// the query
	
$args = array(
    'post_type' => array( 'appendixes' )
);
 
$the_query = new WP_Query( $args ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- pagination here -->
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
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