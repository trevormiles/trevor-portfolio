<?php
/*
* Template Name: Front Page
*/

get_header(); ?>




<div class="mobileSideMenu">
	
	<div class="mobile-header">
			
		<div class="mobile-brand">
			<div class="mobile-brand__logo"></div>
		</div>

		<div class="mobile-nav-toggle">
			<img src="/wp-content/themes/trevors-theme/assets/img/hamburger-icon.svg" class="hamburger-icon" onClick="openNav()">
		</div>
		
	</div>

	<div id="mySidenav" class="sidenav">
		
		<a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a>
		
		<div class="mobile-links-container">
			
			<div class="sideMenu__link">
				<a href="#about" onClick="closeNav()" class="underline">About</a>
			</div>
			
			<div class="sideMenu__link">
				<a href="#portfolio" onClick="closeNav()" class="underline">Portfolio</a>
			</div>

			<div class="sideMenu__link">
				<a href="#experience" onClick="closeNav()" class="underline">Experience</a>
			</div>

			<div class="sideMenu__link">
				<a href="#skills" onClick="closeNav()" class="underline">Skills</a>
			</div>

			<div class="sideMenu__link">
				<a href="#contact" onClick="closeNav()" class="underline">Contact</a>
			</div>

			<div class="sideMenu__link">
				<a data-toggle="modal" data-target="#viewResume" onClick="closeNav()" class="underline resumeLink">Resume</a>
			</div>

			</div>
		
	</div>
	
</div>






<div class="sideMenu">
	
	<div class="sideMenu__container">
		
		<div class="sideMenu__logo-container"></div>
		
		<div class="list-group sideMenu__links" id="list-example">
			
			<div>
				<a href="#about" class="underline list-group-item">About</a>
			</div>
			
			<div>
				<a href="#portfolio" class="underline list-group-item">Portfolio</a>
			</div>
			
			<div>
				<a href="#experience" class="underline list-group-item">Experience</a>
			</div>
			
			<div>
				<a href="#skills" class="underline list-group-item">Skills</a>
			</div>
			
			<div>
				<a href="#contact" class="underline list-group-item">Contact</a>
			</div>
			
			<div>
				<a data-toggle="modal" data-target="#viewResume" class="underline list-group-item resumeLink">Resume</a>
			</div>
			
		</div>
		
	</div>
	
</div>


<div class="modal fade" id="viewResume" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<i class="fas fa-times"></i>
</button>

<div class="modal-dialog modal-xl">

	<div class="modal-content">

		<div class="modal-body">


			<img src="/wp-content/uploads/2020/01/Resume-Trevor-Miles.jpg" style="width: 100%;">


		</div>

	</div>

</div>	

</div>






<main class="mainContent">
	
	<div class="trev-container">
	
		
		<div id="about">
			
		<div class="headline-section">
			
			<h3 class="font-extra-light">Trevor Miles</h3>
			<h1 class="font-semi-bold">Creative web developer <br>&amp; designer.</h1>
			<div class="headline-section__underline"></div>
			
		</div>
		
		
		
		<div class="about-section page-section">
			
			<div class="section-heading">
				<h3>About</h3>
			</div>
			
			<div class="about-section__block">
				<div class="vertical-line"></div>
				<h3 class="about-section__mission">Mission-driven, hard working and creative with a passion for thoughtful design and learning.</h3>
			</div>
			
			<div class="about-section__content">
			
				<div class="about-section__image-container">
					<img src="/wp-content/uploads/2019/11/trev-optimized-short.jpg" class="about-section__image">
				</div>
				
				<div class="about-section__content-paragraphs">
					<p class="about-section__content-paragraph">I've always loved to create things that people cherish and value. I attended Southern Utah University where I studied graphic design and was introduced to web development which I found a passion for and expanded on my studies outside of class. I am now experienced in front-end languages and back-end frameworks. I have 3 years of experience designing and developing websites and user interfaces.</p>
					
					<p class="about-section__content-paragraph">As a developer and designer, I enjoy making things that people love to interact with. I like to design modern and well thought out websites and interfaces that are intuitive and visually appealing. Then I like to develop those designs and see them come to life.</p>
				</div>
				
			</div>
			
		</div>
			
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="portfolio-section section-margin page-section" id="portfolio">
			
			
			
			
			<div class="portfolio-mobile">
				
				<div class="section-heading">
					<h3>Portfolio</h3>
				</div>
				
				
				
				
			
				<div class="accordion" id="accordionExample">
					
					
					
					<!-- Websites Mobile -->
					
				  <div class="card">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
							<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Websites
							</button>
							</h2>
						</div>

						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">



							<div class="portfolio-grid">

								<?php $loop = new WP_Query( array( 'post_type' => 'websites', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>

								<?php while( $loop->have_posts() ) : $loop->the_post(); ?>


									<?php 

										$name = get_field('website_name');
										$nameNoSpaces = preg_replace('/\s+/', '', $name);

									?>


									<a href="#" class="portfolio-piece" data-toggle="modal" data-target=".<?php echo $nameNoSpaces; ?>" style="background-image: url('<?php the_field('thumbnail_image'); ?>')">

										<div class="portfolio-hover">

											<div class="portfolio-hover__content">

												<h3 class="portfolio-hover__title">
													<?php the_field('website_name'); ?>
												</h3>

												<div class="portfolio-hover__underline"></div>

												<h5 class="portfolio-hover__subtitle">
													<?php the_field('website_subtitle'); ?>
												</h5>

											</div>

											<h6 class="portfolio-hover__see-more">See More <i class="fas fa-chevron-right"></i></h6>

											<div class="portfolio-hover__background"></div>

										</div>

									</a>

								<?php endwhile; ?>

							</div>


							</div>
						</div>
				  </div>
					
					
					
					
					
					<!-- Graphic Design Mobile -->
					
				  <div class="card">
					<div class="card-header" id="headingTwo">
					  <h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Graphic Design
						</button>
					  </h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					  <div class="card-body">
						
							
							
							<div class="portfolio-grid">

								<?php $loop = new WP_Query( array( 'post_type' => 'graphic_design', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>

								<?php while( $loop->have_posts() ) : $loop->the_post(); ?>


									<?php 

										$name = get_field('project_name');
										$nameNoSpaces = preg_replace('/\s+/', '', $name);

									?>


									<a href="#" class="portfolio-piece" data-toggle="modal" data-target=".<?php echo $nameNoSpaces; ?>" style="background-image: url('<?php the_field('thumbnail_image'); ?>')">

										<div class="portfolio-hover">

											<div class="portfolio-hover__content">

												<h3 class="portfolio-hover__title">
													<?php the_field('project_name'); ?>
												</h3>

												<div class="portfolio-hover__underline"></div>

												<h5 class="portfolio-hover__subtitle">
													<?php the_field('project_subtitle'); ?>
												</h5>

											</div>

											<h6 class="portfolio-hover__see-more">See More <i class="fas fa-chevron-right"></i></h6>

											<div class="portfolio-hover__background"></div>

										</div>

									</a>

								<?php endwhile; ?>

							</div>
							
							
							
					  </div>
					</div>
				  </div>
					
					
					
					
					
					
					
					<!-- Motion Graphics Mobile -->
					
				  <div class="card">
					<div class="card-header" id="headingThree">
					  <h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						  Motion Graphics
						</button>
					  </h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					  <div class="card-body">
						
							
							
							<div class="portfolio-grid">

								<?php $loop = new WP_Query( array( 'post_type' => 'motion_graphics', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>

								<?php while( $loop->have_posts() ) : $loop->the_post(); ?>


									<?php 

										$name = get_field('project_name');
										$nameNoSpaces = preg_replace('/\s+/', '', $name);

									?>


									<a href="#" class="portfolio-piece" data-toggle="modal" data-target=".<?php echo $nameNoSpaces; ?>" style="background-image: url('<?php the_field('thumbnail_image'); ?>')">

										<div class="portfolio-hover">

											<div class="portfolio-hover__content">

												<h3 class="portfolio-hover__title">
													<?php the_field('project_name'); ?>
												</h3>

												<div class="portfolio-hover__underline"></div>

												<h5 class="portfolio-hover__subtitle">
													<?php the_field('project_subtitle'); ?>
												</h5>

											</div>

											<h6 class="portfolio-hover__see-more">See More <i class="fas fa-chevron-right"></i></h6>

											<div class="portfolio-hover__background"></div>

										</div>

									</a>

								<?php endwhile; ?>

							</div>
							
							
							
					  </div>
					</div>
				  </div>
				</div>
				
			</div>
			
			
			
			
			
			
			
			
			
		
			<div class="portfolio-desktop">

				<nav>
					<div class="nav nav-tabs justify-content-end" id="nav-tab" role="tablist">
						<h3 class="mr-auto">Portfolio</h3>
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Websites</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Graphic Design</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Motion Graphics</a>
					</div>
				</nav>
				
				
				
				
				
	

				<div class="tab-content portfolio-content" id="nav-tabContent">						
					

					
					
					<!-- Websites Desktop -->				
					
					<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						
						<div class="portfolio-grid">
							
							<?php $loop = new WP_Query( array( 'post_type' => 'websites', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>

							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
							
							
							
							

								<?php 
								
									$name = get_field('website_name');
									$nameNoSpaces = preg_replace('/\s+/', '', $name);
							
								?>
							

								<div class="portfolio-piece" data-toggle="modal" data-target=".<?php echo $nameNoSpaces; ?>" style="background-image: url('<?php the_field('thumbnail_image'); ?>')">
									
									<div class="portfolio-hover">
										
										<div class="portfolio-hover__content">

											<h3 class="portfolio-hover__title">
												<?php the_field('website_name'); ?>
											</h3>
											
											<div class="portfolio-hover__underline"></div>

											<h5 class="portfolio-hover__subtitle">
												<?php the_field('website_subtitle'); ?>
											</h5>

										</div>
										
										<h6 class="portfolio-hover__see-more">See More <i class="fas fa-chevron-right"></i></h6>

										<div class="portfolio-hover__background"></div>
										
									</div>

								</div>						
							
							

							<?php endwhile; ?>
							
						</div>
						
					</div>
					
					
					
					
					
					
					
					<!-- Graphic Design Desktop -->
					
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						
						<div class="portfolio-grid">
							
							<?php $loop = new WP_Query( array( 'post_type' => 'graphic_design', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>

							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
							
							
							
							

								<?php 
								
									$name = get_field('project_name');
									$nameNoSpaces = preg_replace('/\s+/', '', $name);
							
								?>
							

								<div class="portfolio-piece" data-toggle="modal" data-target=".<?php echo $nameNoSpaces; ?>" style="background-image: url('<?php the_field('thumbnail_image'); ?>')">
									
									<div class="portfolio-hover">
										
										<div class="portfolio-hover__content">

											<h3 class="portfolio-hover__title">
												<?php the_field('project_name'); ?>
											</h3>
											
											<div class="portfolio-hover__underline"></div>

											<h5 class="portfolio-hover__subtitle">
												<?php the_field('project_subtitle'); ?>
											</h5>

										</div>
										
										<h6 class="portfolio-hover__see-more">See More <i class="fas fa-chevron-right"></i></h6>

										<div class="portfolio-hover__background"></div>
										
									</div>

								</div>						
							
							

							<?php endwhile; ?>
							
						</div>
					
					</div>
					
					
					
					
					
					
					
					
					<!-- Motion Graphics Desktop -->
					
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
					
					
						<div class="portfolio-grid">
							
							<?php $loop = new WP_Query( array( 'post_type' => 'motion_graphics', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>

							<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
							

								<?php 
								
									$name = get_field('project_name');
									$nameNoSpaces = preg_replace('/\s+/', '', $name);
							
								?>
							

								<div class="portfolio-piece" data-toggle="modal" data-target=".<?php echo $nameNoSpaces; ?>" style="background-image: url('<?php the_field('thumbnail_image'); ?>')">
									
									<div class="portfolio-hover">
										
										<div class="portfolio-hover__content">

											<h3 class="portfolio-hover__title">
												<?php the_field('project_name'); ?>
											</h3>
											
											<div class="portfolio-hover__underline"></div>

											<h5 class="portfolio-hover__subtitle">
												<?php the_field('project_subtitle'); ?>
											</h5>

										</div>
										
										<h6 class="portfolio-hover__see-more">See More <i class="fas fa-chevron-right"></i></h6>

										<div class="portfolio-hover__background"></div>
										
									</div>

								</div>						
							
							

							<?php endwhile; ?>
							
						</div>
						
					
					</div>
					
					
					
					
					
					
					
				</div>
				
			</div>
			
			
			
			
			
			<!---------------------------------------------- Modals Area -------------------------------------->
			
			
			<!-- Websites Modal -->
			
			<?php $loop = new WP_Query( array( 'post_type' => 'websites', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>

			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
			
			<?php 
								
					$name = get_field('website_name');
					$nameNoSpaces = preg_replace('/\s+/', '', $name);
							
			?>
			
			
				<div class="modal fade <?php echo $nameNoSpaces; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fas fa-times"></i>
				</button>

				<div class="modal-dialog modal-xl">

					<div class="modal-content">

						<div class="modal-body">

							<div class="modal__header-image-container">
								<img src="<?php the_field('hero_image'); ?>" class="modal__header-image">
							</div>

							<div class="container">

								<div class="modal__title-area">

									<h1 class="modal__title">
										<?php the_field('website_name'); ?>
									</h1>

									<h5 class="modal__sub-title">
										<?php the_field('website_subtitle'); ?>
									</h5>

									<?php if (get_field('view_site_link')) : ?>
										<a target="_blank" href="<?php the_field('view_site_link'); ?>" class="modal__view-site">
											View live site <i class="fas fa-external-link-alt"></i>
										</a>
									<?php endif; ?>

									<div class="modal__underline"></div>

									<p class="modal__paragraph">
										 <?php the_field('paragraph_content'); ?>
									</p>

								</div>


								<div class="modal__technology-used">

									<h5 class="modal__technology-used__title">Technology used:</h5>

									<div class="modal__underline background-red"></div>


									<?php if (get_field('front_end_tech')) : ?>

										<div class="modal__technology-section">

											<p class="modal__technology-section__title">
												Front End:
											</p>

											<p class="modal__technology-section__items">
												<?php the_field('front_end_tech'); ?>
											</p>

										</div>

									<?php endif; ?>


									<?php if (get_field('back_end_tech')) : ?>

										<div class="modal__technology-section">

											<p class="modal__technology-section__title">
												Back End:
											</p>

											<p class="modal__technology-section__items">
												<?php the_field('back_end_tech'); ?>
											</p>

										</div>

									<?php endif; ?>


									<?php if (get_field('design_tech')) : ?>

										<div class="modal__technology-section">

											<p class="modal__technology-section__title">
												Design Tools:
											</p>

											<p class="modal__technology-section__items">
												<?php the_field('design_tech'); ?>
											</p>

										</div>

									<?php endif; ?>


								</div>



								<div class="modal__gallery-area">

									<h5 class="modal__gallery-title">Selected Images:</h5>

									<div class="modal__underline"></div>

									<div class="modal__gallery-images">

										<?php the_field('gallery'); ?>

										<!--

<div class="modal__gallery-images__container">
<h5 class="modal__gallery-images__title">Home</h5>
<img src="/wp-content/uploads/2019/11/lkl-home-optimized.jpg"/>
</div>

										-->

									</div>

								</div>

							</div>

						</div>

					</div>
					
				</div>	
					
			</div>
			
		<?php endwhile; ?>
			
			
			
			
			
			
			
			
			
			
			<!-- Graphic Design Modal -->
			
			<?php $loop = new WP_Query( array( 'post_type' => 'graphic_design', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>

			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
			
			<?php 
								
					$name = get_field('project_name');
					$nameNoSpaces = preg_replace('/\s+/', '', $name);
							
			?>
			
			
				<div class="modal fade <?php echo $nameNoSpaces; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fas fa-times"></i>
				</button>

				<div class="modal-dialog modal-xl">

					<div class="modal-content">

						<div class="modal-body">

							<div class="modal__header-image-container">
								<img src="<?php the_field('hero_image'); ?>" class="modal__header-image">
							</div>

							<div class="container">

								<div class="modal__title-area">

									<h1 class="modal__title">
										<?php the_field('project_name'); ?>
									</h1>

									<h5 class="modal__sub-title">
										<?php the_field('project_subtitle'); ?>
									</h5>

									<div class="modal__underline"></div>

									<p class="modal__paragraph">
										 <?php the_field('paragraph_content'); ?>
									</p>

								</div>



								<div class="modal__gallery-area">

									<h5 class="modal__gallery-title">Selected Images:</h5>

									<div class="modal__underline"></div>

									<div class="modal__gallery-images">

										<?php the_field('gallery'); ?>

										<!--

<div class="modal__gallery-images__container">
<h5 class="modal__gallery-images__title">Home</h5>
<img src="/wp-content/uploads/2019/11/lkl-home-optimized.jpg"/>
</div>

										-->

									</div>

								</div>

							</div>

						</div>

					</div>
					
				</div>	
					
			</div>
			
		<?php endwhile; ?>
			
			
			
			
			
			
			
			
			<!-- Motion Graphics Modal -->
			
			<?php $loop = new WP_Query( array( 'post_type' => 'motion_graphics', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>

			<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
			
			<?php 
								
					$name = get_field('project_name');
					$nameNoSpaces = preg_replace('/\s+/', '', $name);
							
			?>
			
			
				<div class="modal fade <?php echo $nameNoSpaces; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fas fa-times"></i>
				</button>

				<div class="modal-dialog modal-xl">

					<div class="modal-content">

						<div class="modal-body">

							
							<?php the_field('video_link'); ?>
							

							<div class="container">

								<div class="modal__title-area">

									<h1 class="modal__title">
										<?php the_field('project_name'); ?>
									</h1>

									<h5 class="modal__sub-title">
										<?php the_field('project_subtitle'); ?>
									</h5>

									<div class="modal__underline"></div>

									<p class="modal__paragraph">
										 <?php the_field('paragraph_content'); ?>
									</p>

								</div>



								<div class="modal__gallery-area">

									<h5 class="modal__gallery-title">Selected Images:</h5>

									<div class="modal__underline"></div>

									<div class="modal__gallery-images">

										<?php the_field('gallery'); ?>

										<!--

<div class="modal__gallery-images__container">
<h5 class="modal__gallery-images__title">Home</h5>
<img src="/wp-content/uploads/2019/11/lkl-home-optimized.jpg"/>
</div>

										-->

									</div>

								</div>

							</div>

						</div>

					</div>
					
				</div>	
					
			</div>
			
		<?php endwhile; ?>
			
			
			
			
			
		</div>
		
		
		
		
		
		
		
		
		
		
		
		<div id="experience" class="experience-section section-margin page-section">
		
			<div class="section-heading">
				<h3>Experience</h3>
			</div>
			
			
		
			
			
			<div class="experience-company">
				
				<div class="experience__logo-area">
					
					<div class="experience__logo-container">
						<img src="/wp-content/uploads/2019/11/tenth-muse-cropped.png" class="experience__logo">
					</div>
					
					<div class="experience__dates-container">
						<p class="experience__dates">April 2019 - Present</p>
						<p class="experience__location font-light">St. George, Utah</p>
					</div>
					
				</div>
				
				<div class="experience__content-area">
					
					<div class="experience__title-area">
						<h3 class="experience__title">Tenth Muse Design</h3>
						<h4 class="experience__company-type font-light">Digital Marketing Agency</h4>
						<div class="experience__underline"></div>
					</div>
					
					<h5 class="experience__position">Web Developer Intern</h5>
					<ul class="experience__duties">
						<li class="experience__duty">Developed custom Wordpress sites for clients</li>
						<li class="experience__duty">Collaborated in a team of 3 developers to ensure quality development and clean coding strategies</li>
						<li class="experience__duty">Managed the day to day updates of the sites</li>
					</ul>
					
				</div>
				
			</div>
			
			
			
			
			
			
			<div class="experience-company">
				
				<div class="experience__logo-area">
					
					<div class="experience__logo-container">
						<img src="/wp-content/uploads/2019/11/Standard-Behavior-red.png" class="experience__logo">
					</div>
					
					<div class="experience__dates-container">
						<p class="experience__dates">April 2018 - September 2018</p>
						<p class="experience__location font-light">Salt Lake City, Utah</p>
					</div>
					
				</div>
				
				<div class="experience__content-area">
					
					<div class="experience__title-area">
						<h3 class="experience__title">Standard Behavior</h3>
						<h4 class="experience__company-type font-light">Digital Marketing Agency</h4>
						<div class="experience__underline"></div>
					</div>
					
					<h5 class="experience__position">Web Developer / Design Intern</h5>
					<ul class="experience__duties">
						<li class="experience__duty">Designed and developed custom websites using Webflow</li>
						<li class="experience__duty">Designed digital advertisements and graphics for clients</li>
						<li class="experience__duty">Managed the day to day updates of the sites</li>
					</ul>
					
				</div>
				
			</div>
			
			
			
			
			
			
			
			<div class="experience-company">
				
				<div class="experience__logo-area">
					
					<div class="experience__logo-container">
						<img src="/wp-content/uploads/2019/11/Kolob-svg.png" class="experience__logo">
					</div>
					
					<div class="experience__dates-container">
						<p class="experience__dates">November 2018 - April 2019</p>
						<p class="experience__location font-light">Cedar City, Utah</p>
					</div>
					
				</div>
				
				<div class="experience__content-area">
					
					<div class="experience__title-area">
						<h3 class="experience__title">Kolob Canyons Technology Group</h3>
						<h4 class="experience__company-type font-light">Infrared Fire Mapping Service</h4>
						<div class="experience__underline"></div>
					</div>
					
					<h5 class="experience__position">Web Developer / Designer</h5>
					<ul class="experience__duties">
						<li class="experience__duty">Designed and developed a custom Wordpress site</li>
						<li class="experience__duty">Created the branding and logo of the company</li>
						<li class="experience__duty">Created all promotional materials for the company</li>
					</ul>
					
				</div>
				
			</div>
			
			
			
		
		</div>
		
		
		
		
		
		
		
		
		<div id="skills" class="skills-section section-margin page-section">
		
			<div class="section-heading">
				<h3>Skills</h3>
			</div>
			
			<div class="skill-boxes-container">
				
				
				
			
				<div class="skill-box">
					
					<div class="skill-category">
						<p class="skill-category__title font-semi-bold">HTML &amp; CSS</p>
						<div class="skill-category__underline"></div>
					</div>
					
					<div class="skills-container">
					
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/html5.png" class="skill-icon">
							</div>
							
							<p class="skill-title">HTML 5</p>
							
						</div>
						
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/css3.png" class="skill-icon">
							</div>
							
							<p class="skill-title">CSS 3</p>
							
						</div>
						
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/sass.png" class="skill-icon">
							</div>
							
							<p class="skill-title">Sass</p>
							
						</div>
						
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/bootstrap.png" class="skill-icon">
							</div>
							
							<p class="skill-title">Bootstrap</p>
							
						</div>
						
						
					</div>
					
				</div>
				
				
				
				
				
				
				<div class="skill-box">
					
					<div class="skill-category">
						<p class="skill-category__title font-semi-bold">Javascript</p>
						<div class="skill-category__underline"></div>
					</div>
					
					<div class="skills-container">
					
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/javascript.png" class="skill-icon">
							</div>
							
							<p class="skill-title">Javascript</p>
							
						</div>
						
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/jquery.png" class="skill-icon">
							</div>
							
							<p class="skill-title">jQuery</p>
							
						</div>
						
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/nodejs-1.png" class="skill-icon">
							</div>
							
							<p class="skill-title">Node JS</p>
							
						</div>
						
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/react.png" class="skill-icon">
							</div>
							
							<p class="skill-title">React</p>
							
						</div>
						
						
					</div>
					
				</div>
				
				
				
				
				
				
				
				<div class="skill-box">
					
					<div class="skill-category">
						<p class="skill-category__title font-semi-bold">Back-End</p>
						<div class="skill-category__underline"></div>
					</div>
					
					<div class="skills-container">
					
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/laravel-framework-logo-C10176EC8C-seeklogo.com_.png" class="skill-icon">
							</div>
							
							<p class="skill-title">Laravel</p>
							
						</div>
						
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/php.png" class="skill-icon">
							</div>
							
							<p class="skill-title">PHP</p>
							
						</div>
						
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/mysql.png" class="skill-icon">
							</div>
							
							<p class="skill-title">MySQL</p>
							
						</div>
						
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/wordpress.png" class="skill-icon">
							</div>
							
							<p class="skill-title">Wordpress</p>
							
						</div>
						
						
					</div>
					
				</div>
				
				
				
				
				
				
				
				<div class="skill-box">
					
					<div class="skill-category">
						<p class="skill-category__title font-semi-bold">Adobe Creative Suite</p>
						<div class="skill-category__underline"></div>
					</div>
					
					<div class="skills-container">
					
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/illustrator.jpg" class="skill-icon">
							</div>
							
							<p class="skill-title">Illustrator</p>
							
						</div>
						
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/photoshop.jpg" class="skill-icon">
							</div>
							
							<p class="skill-title">Photoshop</p>
							
						</div>
						
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/indesign-cc.jpg" class="skill-icon">
							</div>
							
							<p class="skill-title">InDesign</p>
							
						</div>
						
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/adobe-xd.jpg" class="skill-icon">
							</div>
							
							<p class="skill-title">Adobe XD</p>
							
						</div>
						
						<div class="skill">
							
							<div class="skill-icon-container">
								<img src="/wp-content/uploads/2019/11/after-effects-cc.jpg" class="skill-icon">
							</div>
							
							<p class="skill-title">After Effects</p>
							
						</div>
						
						
					</div>
					
				</div>
				
				
				
				
				
				
				
			</div>
		
		</div>
		
		
		
		
		
		
		
		
		<div id="contact" class="contact-section section-margin page-section">
		
			<div class="section-heading">
				<h3>Contact</h3>
			</div>
			
			<div class="contact__methods-container">
				
				
				<div class="contact__method">
					
					<div class="contact__method__icon-container">
						<img src="/wp-content/uploads/2019/11/phone.png" class="contact__method__icon">
					</div>
					
					<p class="contact__method__text font-semi-bold">385-707-3234</p>
					
				</div>
				
				
				
				<div class="contact__method">
					
					<div class="contact__method__icon-container">
						<img src="/wp-content/uploads/2019/11/email.png" class="contact__method__icon">
					</div>
					
					<p class="contact__method__text font-semi-bold">miles.trev5@gmail.com</p>
					
				</div>
				
				
			</div>
		
		</div>
		
		
		
			
		
		
	</div>
	
	
	
	
	<div class="footer-section section-margin">
		
		<div class="trev-container">
			<p class="footer-content">Thanks for checking out my portfolio! <span class="footer-resume"><a href="#" data-toggle="modal" data-target="#viewResume">See my resume here.</a></span></p>
		</div>
		
	</div>
	
	
</main>
	



<?php get_footer(); ?>
