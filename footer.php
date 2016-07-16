<?php
    $wedje_options = get_option('wedje_option');
    
	$wedje_phone_number = $wedje_options['contact_number'];
    $wedje_email = $wedje_options['contact_email'];
	$wedje_facebook = $wedje_options['contact_facebook'];
	$wedje_linkedin = $wedje_options['contact_linkedin'];
	$wedje_contact_button_link = $wedje_options['contact_button_link'];
	$wedje_contact_button_text = $wedje_options['contact_button_text'];
	
    $wedje_logo = $wedje_options['wedje_logo'];
	
	$wedje_footer_blurb = $wedje_options['footer_blurb'];
	
	$wedje_ABN = $wedje_options['ABN_number'];
	$wedje_copyright = $wedje_options['wedje_copyright'];
	
	$wedje_html_ABN = '';
	$wedje_html_phone_number = '';
	$wedje_html_email = '';
	$wedje_html_facebook = '';
	$wedje_html_linkedin = '';
	$wedje_html_logo = '';
	$wedje_html_copyright = '';

	$child_theme_path = get_stylesheet_directory_uri();
	
	if ( $wedje_ABN != '' ) $wedje_html_ABN = 'ABN: ' . $wedje_ABN;	
	if ( $wedje_ABN != '' && $wedje_copyright != '' ) $wedje_html_ABN = ' | ABN: ' . $wedje_ABN;
	if ( $wedje_phone_number != '' ) $wedje_html_phone_number = '<span class="fa fa-phone"></span>' . $wedje_phone_number . '<br />';
	if ( $wedje_email != '' ) $wedje_html_email = '<span class="fa fa-envelope-o"></span><a href="mailto:' . $wedje_email . '"> ' . $wedje_email . '</a><br />' ;
	if ( $wedje_facebook != '') $wedje_html_facebook = '<span class="fa fa-facebook"></span><a href="' . $wedje_facebook . '"> ' . $wedje_facebook . '</a><br />';
	if ( $wedje_linkedin != '' ) $wedje_html_linkedin = '<span class="fa fa-linkedin"></span><a href="' . $wedje_email . '"> LinkedIn</a>' ;
	if ( $wedje_logo != '' ) $wedje_html_logo = '<img src="' . $wedje_logo . '">' ;
	if ( $wedje_copyright != '' ) $wedje_html_copyright = $wedje_copyright ;
?>	
	
	<footer id="main-footer"> 
		<div id="footer-bottom">
			<div class="container"> 
				<div id="wedje_footer_menu"><?php wp_nav_menu( array('menu' => 'Main Menu' )); ?></div>
				
				<div id="wedje_footer_align_fix"><div id="wedje_footer_logo"><?php echo $wedje_html_logo ?></div>
					<div id="wedje_footer_blurb"><p><?php echo $wedje_footer_blurb ?></p></div>
					<div id="wedje-info">
					<h3>Contact Details</h3>
						<div id="wedje-info-phone" class="wedje_footer_info_container">
							<div class="wedje_footer_info_cell"><div class="wedje_footer_info_align_fix"></div><?php echo $wedje_html_phone_number; ?></div>
						</div>
						<div id="wedje-info-email" class="wedje_footer_info_container">
							<div class="wedje_footer_info_cell"><div class="wedje_footer_info_align_fix"></div><?php echo $wedje_html_email; ?></div>
						</div>
						<div id="wedje-info-facebook" class="wedje_footer_info_container">
							<div class="wedje_footer_info_cell"><div class="wedje_footer_info_align_fix"></div><?php echo $wedje_html_facebook; ?></div>
						</div>
						<div id="wedje-info-linkedin" class="wedje_footer_info_container">
							<div class="wedje_footer_info_cell"><div class="wedje_footer_info_align_fix"></div><?php echo $wedje_html_linkedin; ?></div>
						</div>
						<div id="wedje-footer-contact-button-container"><a id="wedje-footer-contact-button" href="<?php echo $wedje_contact_button_link?>"><?php echo $wedje_contact_button_text ?></a></div>
					</div>
				</div>
				<div id="wedje_footer_client_copyright"><p id="copyright"><?php echo $wedje_html_copyright . $wedje_html_ABN ?></p></div>
				<div id="wedje_footer_attribution">For image and license attributions for this page, <a href="licensing">click here</a>.</div>
				<div id="wedje_footer_information"><p id="copyright"><?php printf( __( 'Designed by %1$s', 'Wedje' ), '<a href="http://wedje.com.au">Wedje Designs</a>'); ?></p><div id="wedje_footer_wedje_logo" style="text-align: right;"><?php echo '<img src="' . $child_theme_path . '/images/wedje_flat_white.png">'; ?></div>
				</div>
			</div> <!-- end .container -->
		</div> <!-- end #footer-bottom -->
	</footer> <!-- end #main-footer -->
<?php wp_footer(); ?>
</body>
</html>