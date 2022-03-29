<?php

add_action( 'admin_menu', 'social_media_expert_getting_started' );
function social_media_expert_getting_started() {    	    	
	add_theme_page( esc_html__('Get Started', 'social-media-expert'), esc_html__('Get Started', 'social-media-expert'), 'edit_theme_options', 'social-media-expert-guide-page', 'social_media_expert_test_guide');   
}

function social_media_expert_admin_enqueue_scripts() {
	wp_enqueue_style( 'social-media-expert-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'social_media_expert_admin_enqueue_scripts' );

if ( ! defined( 'SOCIAL_MEDIA_EXPERT_DOCS_FREE' ) ) {
define('SOCIAL_MEDIA_EXPERT_DOCS_FREE',__('https://www.misbahwp.com/docs/social-media-expert-free-docs/','social-media-expert'));
}
if ( ! defined( 'SOCIAL_MEDIA_EXPERT_DOCS_PRO' ) ) {
define('SOCIAL_MEDIA_EXPERT_DOCS_PRO',__('https://www.misbahwp.com/docs/social-media-expert-pro-docs','social-media-expert'));
}
if ( ! defined( 'SOCIAL_MEDIA_EXPERT_BUY_NOW' ) ) {
define('SOCIAL_MEDIA_EXPERT_BUY_NOW',__('https://www.misbahwp.com/themes/social-media-agency-wordpress-theme/','social-media-expert'));
}
if ( ! defined( 'SOCIAL_MEDIA_EXPERT_SUPPORT_FREE' ) ) {
define('SOCIAL_MEDIA_EXPERT_SUPPORT_FREE',__('https://wordpress.org/support/theme/social-media-expert','social-media-expert'));
}
if ( ! defined( 'SOCIAL_MEDIA_EXPERT_REVIEW_FREE' ) ) {
define('SOCIAL_MEDIA_EXPERT_REVIEW_FREE',__('https://wordpress.org/support/theme/social-media-expert/reviews/#new-post','social-media-expert'));
}
if ( ! defined( 'SOCIAL_MEDIA_EXPERT_DEMO_PRO' ) ) {
define('SOCIAL_MEDIA_EXPERT_DEMO_PRO',__('https://www.misbahwp.com/demo/social-media-expert/','social-media-expert'));
}

function social_media_expert_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( SOCIAL_MEDIA_EXPERT_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'social-media-expert' ) ?></a>			
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'social-media-expert' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( SOCIAL_MEDIA_EXPERT_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'social-media-expert' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( SOCIAL_MEDIA_EXPERT_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'social-media-expert' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','social-media-expert'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'social-media-expert'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>
		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','social-media-expert'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','social-media-expert'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','social-media-expert'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Secton Reordering','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','social-media-expert'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>		    
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'social-media-expert' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','social-media-expert'); ?></p>
					<div id="admin_pro_links">			
						<a class="blue-button-2" href="<?php echo esc_url( SOCIAL_MEDIA_EXPERT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'social-media-expert' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( SOCIAL_MEDIA_EXPERT_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'social-media-expert' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( SOCIAL_MEDIA_EXPERT_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'social-media-expert' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
