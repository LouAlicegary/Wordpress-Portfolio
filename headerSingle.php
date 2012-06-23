<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>
			<?php bloginfo('name'); ?>
		</title>
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" title="style-color" type="text/css" media="screen" />
		
		<?php wp_head();?>
		
		<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollTo.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.cookie.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.url.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/site.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/switchstylesheet.js" language="javascript" type="text/javascript"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/standard.js" type="text/javascript"></script>
	
	</head>
	
	<body>
		<div id="wrapper"> <!-- Closing Div Tag is in footer file-->
			
			<div id="topSpacer"></div>
			<div id="topBarName"><?php bloginfo('description'); ?></div>
			
			<div id="menuWrapper">
			  <h1>
			  	<a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
			  </h1>
			  <?php 
				  $cats = get_categories("orderby=id");
				  if($cats != NULL) {
				  	foreach ($cats as $cat) {
				  		$menuList[] = $cat->cat_name;
				  		$linkList[] = $cat->slug;
				  	}
				  } 
			  ?>
			
			    <div class="menu">
			      <ul>
			        <li><a href="<?php echo get_option('home'); ?>/#<?php echo $linkList[2]?>">Contact</a></li>
			      </ul>
			    </div>
				
			    <div class="menuSpacer"></div>
			
			    <div class="menu">
			      <ul>
			        <li><a href="<?php echo get_option('home'); ?>/#<?php echo $linkList[1]?>">About Me</a></li>
			      </ul>
			    </div>
				
			    <div class="menuSpacer"></div>
			
			    <div class="menu">
					<a href="<?php echo get_option('home'); ?>/#<?php echo $linkList[0]?>">Resume</a>
				</div>
			</div>
