
<?php

/*
  Template Name: single-portfolio, No Sidebar
*/

get_header();  ?>

<div class="section">
  <div class="innerWrapper">
    <div class="full">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


        <h2><?php the_title(); ?></h2>
        <p class="client"><?php the_field('client_name'); ?></p> 

        <div class="shortDesc">
          <?php the_field('short_desc'); ?>
        </div>


<!--     Grabing Image  -->
<!-- //just to grab the url and change this the the img src --> 
<!--  But you have to switch the image src to url instead of object
 -->   <!-- <img src="<?php //the_field('main_image') ?>" alt="">   
 -->
    

     <!--   teh first line gives the main image a variable
       the second line injects its echoing the image url. -->
       <?php $image = get_field('main_image') ?>
        <img src=" <?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>">
       







          <div class="portfolio-container">
            <?php  
              while(has_sub_field('portfolio_images') ) {
            ?>
            <div class="image">
              <?php $image = get_sub_field('image_one'); ?>
              <?php $desc = get_sub_field('image_desc'); ?>


              <!-- just to show it on page - -->
    <!--           <pre><?php //print_r($image); ?></pre> -->
                
    <!--             showing full size images -->
    <!--          <img src="<?php //echo $image['url']; ?>" alt="">  -->
    <!--           show thumb
     -->            
     <img src="<?php echo $image['sizes']['thumbnail'] ?>" alt="">
     <?php echo $desc ?>  
     
              <p><?php the_sub_field('caption'); ?></p>


            </div>

            <?php
            //end of portfolio_images repeater

              }

            ?>

          </div>


      </div>


        <?php the_content(); ?>
        
      <?php endwhile; // end of the loop. ?>
    </div>
  </div> <!-- /.innerWrapper -->
</div> <!-- /.section -->

<?php get_footer(); ?>