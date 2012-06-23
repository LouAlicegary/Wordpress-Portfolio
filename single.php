<?php include('headerSingle.php'); ?>
<div class="mainCategory"> 	<span class="smallerFontSize">Project Category: </span>	<br />	<a href="<?php echo get_option('home'); ?>"><?php foreach((get_the_category()) as $category) { echo $category->cat_name;}?></a></div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="singlePageBg">
			<h2>
		    	<?php the_title(); ?>
		  	</h2>
		  	<br>			<div class="singleText">				<?php the_content(''); ?>				<a href="<?php echo get_option('home'); ?>/">[return to main page]</a>				<br>				<br>			</div>
		</div>
	<?php endwhile; else: ?>
		<p>No projects are listed under this category.</p><?php endif; ?>
<?php get_footer(); ?>
