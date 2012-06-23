<?php 	get_header();
	$cats = get_categories("orderby=id");
	if($cats != NULL) {		foreach ($cats as $cat) {			query_posts('category_name='.$cat->slug);			if (($cat->slug) !=("blog")) {				if (($cat->slug) ==("about")) {?>
					<div class="mainCategory" id="<?php echo $cat->slug?>" style="display:none;">						<span class="description" style="display:none;"></span>						<a href="#" class="maxMin"></a>					</div>
					<div class="toggleMainCategory">
						<div class="aboutHolder">
					    	<?php if (have_posts()) : ?>
						    	<?php while (have_posts()) : the_post(); ?>							    	<div class="about">							    		<h2 class="about">								    		<?php the_title(); ?>										</h2>										<?php the_content(); ?>									</div>					
					    		<?php endwhile; ?>							<?php endif; ?>						</div>					</div>			
<?php 			} 				else if (($cat->slug) ==("contact")) { ?>					
					<div class="mainCategory" id="<?php echo $cat->slug?>" style="display:none;">						<span class="description" style="display:none;"></span>						<a href="#" class="maxMin"></a>					</div>					
					<div class="toggleMainCategory">
						<div class="contactHolder">							<?php if (have_posts()) : ?>								<?php while (have_posts()) : the_post(); ?>									<div class="contact">										<h2 class="contact">
					        				<?php the_title(); ?>										</h2>
					      				<?php the_content(); ?>									</div>
					    		<?php endwhile; ?>							<?php endif; ?>						</div>
					</div><?php				} 				else if (($cat->slug) ==("resume")) {?>					<div class="mainCategory" id="<?php echo $cat->slug?>" style="display:none;">						<span class="description" style="display:none;"></span>						<a href="#" class="maxMin"></a>					</div>					
					<div class="toggleMainCategory">						<div class="postWrapper">
					    	<?php if (have_posts()) : ?>								<?php while (have_posts()) : the_post(); ?>									<div class="post">										<div class="postTitleBar"></div>										<div class="cCLeft">											<h2 class="post">												<?php the_title(); ?>											</h2>										</div>					
						  				<div class="cCRight">						  					<a href="http://www.loualicegary.com/resume.doc" rel="bookmark" title="View<?php the_title_attribute(); ?>">[click here to download]</a>						  				</div>									</div>
					    		<?php endwhile; ?>
					    	<?php endif; ?>						</div>					</div>
<?php 				} 				else { ?>					<div class="mainCategory" id="<?php echo $cat->slug?>">						<?php echo $cat->cat_name?>						<br />						<span class="smallerFontSize">contains [<?php echo (get_category_by_slug($cat->slug)->count); ?>] project<?php if (get_category_by_slug($cat->slug)->count != 1) { echo 's';}?></span> 						<a href="#" class="maxMin"></a>					</div>					
					<div class="toggleMainCategory">							<div class="postWrapper">							<?php if (have_posts()) : ?>								<?php while (have_posts()) : the_post(); ?>									<div class="post">
					      				<div class="postTitleBar"></div>										<div class="cCLeft">											<h2 class="post">												<?php the_title(); ?>											</h2>										</div>										<div class="cCRight">											<a href="<?php the_permalink() ?>" rel="bookmark" title="View <?php the_title_attribute(); ?>">[click here to view demo]</a>										</div>									</div>								<?php endwhile; ?>							<?php endif; ?>						</div>					</div>
<?php 				}
			}
		}
	} ?>
<?php get_footer(); ?>
