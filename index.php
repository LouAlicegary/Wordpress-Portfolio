<?php 
	$cats = get_categories("orderby=id");
	if($cats != NULL) {
					<div class="mainCategory" id="<?php echo $cat->slug?>" style="display:none;">
					<div class="toggleMainCategory">
						<div class="aboutHolder">
					    	<?php if (have_posts()) : ?>
						    	<?php while (have_posts()) : the_post(); ?>
					    		<?php endwhile; ?>
<?php 			} 
					<div class="mainCategory" id="<?php echo $cat->slug?>" style="display:none;">
					<div class="toggleMainCategory">
						<div class="contactHolder">
					        				<?php the_title(); ?>
					      				<?php the_content(); ?>
					    		<?php endwhile; ?>
					</div>
					<div class="toggleMainCategory">
					    	<?php if (have_posts()) : ?>
						  				<div class="cCRight">
					    		<?php endwhile; ?>
					    	<?php endif; ?>
<?php 
					<div class="toggleMainCategory">	
					      				<div class="postTitleBar"></div>
<?php 
			}
		}
	} 
<?php get_footer(); ?>