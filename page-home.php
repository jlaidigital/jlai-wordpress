<?php

/*
	Template Name: page-home.php
*/

get_header();  ?>

<div class="main bgHeader">

<!-- 	<div class="bgHeader" style="background-image: url('<?php //the_field('hero_image') ?>');"> -->
        <div class="companyInfo">
            <h2><?php //the_field('hero_overlay') ?></h2>
            <?php //bloginfo('template_directory') ?>
    	</div> 


  <div class="container clearfix">
		
		<div class="group">
			<!-- To get a picture to display - 	<img class="logo" src="<?php //bloginfo('template_directory') ?>/img/jlailogo.png" alt="John Lai's Developer + Designer Logo"> -->
			<img class="logo" src="<?php bloginfo('template_directory') ?>/img/jlailogo.png" alt="John Lai's Developer + Designer Logo">
			<h1>John Lai </h1>
			<h2>Front-End Developer + Designer</h2>
			
			<div class="contentNav">
				<ul>
					<li><a href="#about"> About </a></li><span class="slash">/</span>
					<li><a href="#portfolio"> Portfolio </a></li> <span class="slash">/</span>
					<li><a href="#contact">Contact</a></li><span class="slash">/</span>
					<li><a href="mailto:lai.john.py@gmail.com">Email</a></li>
				</ul>
			</div>

		</div>
		<div class="arrow">
			<a href="#about"><i class="animated fadeInDown fa fa-angle-double-down"></i></a>
		</div>
 
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>