
<!-- 
Writing it 
http://codex.wordpress.org/Class_Reference/WP_Query -->

<?php 
// the query
$portfolioArgs = array('post_type' => 'portfolio');
$the_query = new WP_Query( $portfolioArgs);

if ( $the_query->have_posts() ) : ?>

  <!-- pagination here -->

  <!-- the loop -->
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <?php $image = get_field('main_image') ?>
     <img src=" <?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>">

    <h2><?php the_title(); ?></h2>
    <p><?php the_content(); ?></p>

  <?php endwhile; ?>
  <!-- end of the loop -->

  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<!-- different way of writing it
 -->

<!--  To make a div into a button
                <a href="<?php //the_field('link'); ?>"></a>--> 


<div class="portfolio-containter">
                       <?php 
                       $portfolioArgs = array('post_type' => 'portfolio');
                       $portfolioQuery = new WP_Query($portfolioArgs);

                       if($portfolioQuery->have_posts()) {
                           while($portfolioQuery->have_posts()) {
                               $portfolioQuery->the_post();
                               ?>
                               <a href="<?php the_field('link'); ?>">
                               <div class="gallery">
                                    <?php 
                               if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                   the_post_thumbnail('full');
                               } 
                               ?><br>
                               <?php the_title(); ?>
                               <?php the_content(); ?>
                               </div></a>
                               <?php
                           }
                           //End of while loop
                           wp_reset_postdata();
                       }  //End of custom query
                       ?>
                   </div>

<!-- This hard code image
 -->                   <?php bloginfo('template_directory')?>/img/RaveneauxCC_EmailMarketing.jpg" alt="RaveneauxCC Email Blast">

<!-- To get Image from "home_image"
 -->                   <?php $image = get_field('home_image') ?>
                    <img src=" <?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>">