<?php
    $wedje_options = get_option('wedje_option');
	
    $wedje_logo = $wedje_options['wedje_logo'];
	
	$wedje_copyright = $wedje_options['wedje_copyright'];
	$wedje_html_copyright = '';

	$child_theme_path = get_stylesheet_directory_uri();
	
	if ( $wedje_copyright != '' ) $wedje_html_copyright = $wedje_copyright ;
?>	
	
	<footer id="main-footer"> 
		<div id="footer-bottom">
			<div class="container"> 
				<div id="wedje_footer_menu"><?php wp_nav_menu( array('menu' => 'Main Menu' )); ?></div>
				
				<div id="wedje_footer_information">
				    <div id="wedje_footer_wedje_logo" style="text-align: right; padding-bottom: 30px; ">
				        <a href="http://wedje.com.au" target="_newtab"><?php echo '<img src="' . $child_theme_path . '/images/wedje_flat_white.png">'; ?></a>
			        </div>
				</div>
				<div id="wedje_footer_client_copyright" style="text-align: right;">
				    <p id="copyright"><?php echo $wedje_html_copyright ?></p>
			    </div>
				
			</div> <!-- end .container -->
		</div> <!-- end #footer-bottom -->
	</footer> <!-- end #main-footer -->
<?php wp_footer(); ?>
</body>
</html>
