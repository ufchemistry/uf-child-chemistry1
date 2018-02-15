<?php

##Modified 10/2013 by smk. Looks for child template header

##  If not found, uses parent template header.
$parentHeaderFile = get_theme_root() . '/' . get_template() . '/header.php';
$childHeaderFile = get_theme_root() . '/' . get_stylesheet() . '/header.php';
$parentFooterFile = get_theme_root() . '/' . get_template() . '/footer.php';
$childFooterFile = get_theme_root() . '/' . get_stylesheet() . '/footer.php';
if (file_exists($childHeaderFile)) { include($childHeaderFile); }
 else { include($parentHeaderFile); }
?>

	<?php ufandshands_breadcrumbs(); ?>
	
	<div id="content-wrap">
	  <div id="content-shadow">
		<div id="content" class="container">
		
			<?php get_sidebar(); //call in the sidebar and navigation ?>
	  
	  <?php
	
		$page_right_sidebar = ufandshands_sidebar_detector('page_right',false);
	   
		$article_width = '';
	 
		if(((!empty($ufandshands_sidebar_nav) || !empty($ufandshands_sidebar_widgets)) && $page_right_sidebar)) {
			$article_width = '12';
			$content_width = 460;

		} elseif (((!empty($ufandshands_sidebar_nav) || !empty($ufandshands_sidebar_widgets)) && !$page_right_sidebar)) {
			$article_width = '18';
			$content_width = 680;

		} elseif ((empty($ufandshands_sidebar_nav) && empty($ufandshands_sidebar_widgets) && $page_right_sidebar)) {
			$article_width = '17 box';
			$content_width = 660;

		} else {
			$article_width = '23 box';
			$content_width = 900;
		}
	   
	  ?><?php
##print("*<!-- *test: article_width=$article_width\ncontent_width=$content_width-->*");
 ?>
	  
			<article id="main-content" class="span-<?php echo $article_width; ?>" role="main">
<h2 class="page-title"><?php _e('404 Error: Not found', 'dynamicnewslite'); ?></h2>

				</article>
			
		<?php //page right sidebar
			if ($page_right_sidebar) {
				##echo "<aside id='local-sidebar' class='span-6 omega'>";
				##echo $page_right_sidebar;
				##echo "</aside><!-- end #local-sidebar -->";
			}
		?>
		
		</div>
	  </div>
	</div>
<?php include('user-role-menu.php'); ?>
<?php 
if (file_exists($childFooterFile)) { include($childFooterFile); }
 else { include($parentFooterFile); }
 ?>