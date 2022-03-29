<footer>
  <div class="container">
    <?php
      if ( is_active_sidebar('social-media-expert-footer-sidebar')) {
        echo '<div class="row sidebar-area footer-area">';
          dynamic_sidebar('social-media-expert-footer-sidebar');
        echo '</div>';
      }
    ?>
    <div class="row">
      <div class="col-md-12">
        <p class="mb-0 py-3 text-center text-md-left">
          <?php
            if (!get_theme_mod('social_media_expert_footer_text') ) { ?>
              <a href="<?php echo esc_url(__('https://www.misbahwp.com/themes/free-social-media-wordpress-theme/', 'social-media-expert' )); ?>" target="_blank"><?php esc_html_e('Social Media WordPress Theme ','social-media-expert'); ?></a>
            <?php } else {
              echo esc_html(get_theme_mod('social_media_expert_footer_text'));
            }
          ?>
          <?php if ( get_theme_mod('social_media_expert_copyright_enable', true) == true ) : ?>
            <?php 
            /* translators: %s: Misbah WP */ 
            printf( esc_html__( 'by %s', 'social-media-expert' ), 'Misbah WP' ); ?>
            <a href="<?php echo esc_url(__('https://wordpress.org', 'social-media-expert' )); ?>" rel="generator"><?php  /* translators: %s: WordPress */  printf( esc_html__( ' | Proudly powered by %s', 'social-media-expert' ), 'WordPress' ); ?></a>
          <?php endif; ?>
        </p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
