<?php include('headerSingle.php'); ?>
<div class="mainCategory"> 
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="singlePageBg">
			<h2>
		    	<?php the_title(); ?>
		  	</h2>
		  	<br>
		</div>
	<?php endwhile; else: ?>
		<p>No projects are listed under this category.</p>
<?php get_footer(); ?>