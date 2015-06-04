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
					<div class="group clearfix">
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
  	</div> <!-- /.container -->
</div> <!-- /.main -->

<!-- 	End of header --> 

<!-- first row -->	

	<div id="about" class="about clearfix">
		<div class="container">

		<div class="smallBody">
			<h3>Welcome to my portfolio</h3>
			<div class="linePortfolio"></div>
			<div class="threeHalf">
		
				<img src="<?php bloginfo('template_directory') ?>/img/john_lai.jpg" alt="John Lai's picture smiling"></div>
			<div class="sevenHalf">
				<p>I’m a Toronto based Front-end Developer & Designer currently enrolled in HackerYou.</p>

				<p>As a graduate from Creative Advertising and Advertising & Graphic Design Program at Seneca and Humber College, I was granted an opportunity at Normark Inc. (Rapala Canada), where I have designed products that are currently being sold at chain retailers across Canada such as Le Baron, Canadian Tire, and Wal-Mart. Upon completion of the internship, I worked as a Web Content Designer & SEO Specialist at Jonas Club Software, and finished the certificate of Web Optimization Analyst.</p>
			</div>
				
		</div>
		</div>
	</div>

	<!--Content 2nd Row -->	

		<div class="recentWork clearfix">
			<h3>Recent Work</h3>
				<div class="linePortfolio"></div>

					<?php 
					// the query
					$portfolioArgs = array('post_type' => 'portfolio','posts_per_page' => 3);
					$the_query = new WP_Query( $portfolioArgs);

					if ( $the_query->have_posts() ) : ?>

						<!-- pagination here -->

						<!-- the loop -->
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
					<div class="oneThird">
						<a href="<?php the_field('url'); ?>" target="_blank">

							<div class="projectImg">
								<?php $image = get_field('main_image') ?>
								 <img src=" <?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>">
								 <div class="seeLive"><span>View Live</span></div>
							</div>

							<div class="projectDes">
								<h3><?php the_title(); ?></h3>
								<div class="linePortfolio"></div>
								<p><?php the_content(); ?></p>
							</div>
						</a>
					</div>

						<?php endwhile; ?>
						<!-- end of the loop -->

						<!-- pagination here -->

						<?php wp_reset_postdata(); ?>

					<?php else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>

		<!-- 	<div class="onethird">
					<div class="projectImg">
						<img src="<?php //bloginfo('template_directory')?>/img/RaveneauxCC_EmailMarketing.jpg" alt="RaveneauxCC Email Blast">
					</div>
					<div class="projectDes">
						<h3>EBlast Design</h3>
						<div class="linePortfolio"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut perspiciatis quo libero esse ex possimus enim laborum repellendus eum nemo. Cumque suscipit eum, consectetur officiis repellendus, minima quia aspernatur veniam.</p>
					</div>
				</div> -->

				<!-- <div class="onethird">
					<div class="projectImg">
						<img src="<?php //bloginfo('template_directory')?>/img/mysteric_river_web_splash.jpg" alt="Renegade Fishing Rod Combo">
					</div>
					<div class="projectDes">
						<h3>Web Template Design</h3>
						<div class="linePortfolio"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut perspiciatis quo libero esse ex possimus enim laborum repellendus eum nemo. Cumque suscipit eum, consectetur officiis repellendus, minima quia aspernatur veniam.</p>
					</div>
				</div>
		 -->
		</div>

	<div class="contactSection clearfix">
	
			<div class="contactLeft">
			<h3>Say Hello</h3>
			<div class="linePortfolio alignRight "></div>
				<p class="emailMe">
				Email Me: <a class="hovercolor" href="mailto:chat@jlai.digital">
				Chat@jlai.digital
				</a></p>
				or
				<p class="callMe">
				Call Me: <a class="hovercolor" href="tel:6472966528">647.296.6528
				<a></p>	

				<p class="socialIcons"><a href="https://twitter.com/jlaidigital" target="_blank" ><i class="fa fa-twitter iconcolor"></i>
				</a>
				<a href="https://www.linkedin.com/in/jlaidigital" target="_blank">
				<i class="fa fa-linkedin iconcolor"></i>
				</a>
				<a href="https://github.com/jlaidigital" target="_blank">
				<i class="fa fa-github"></i></a>
				</p>
				
			</div>
			<div class="contactRight">
				<div class="formWrapper">
					<?php the_field('contact_form'); ?>
				</div>
			</div>
	</div>





    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php //the_title(); ?></h2>
      <?php //the_content(); ?>

    <?php endwhile; // end the loop?>

<!-- footer loop -->
<?php get_footer(); ?>