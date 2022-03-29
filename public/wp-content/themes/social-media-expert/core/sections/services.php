<?php if ( get_theme_mod('social_media_expert_services_section_enable') ) : ?>

<?php $args = array(
	'post_type' => 'post',
	'post_status' => 'publish',
	'category_name' =>  get_theme_mod('social_media_expert_serives_category'),
	'posts_per_page' => get_theme_mod('social_media_expert_serives_number'),
); ?>

<div class="services py-5 text-center">
	<div class="container">
		<?php if ( get_theme_mod('social_media_expert_serives_first_heading') ) : ?>
			<p class="colr"><?php echo esc_html(get_theme_mod('social_media_expert_serives_first_heading')); ?></p>
		<?php endif; ?>
		<?php if ( get_theme_mod('social_media_expert_serives_second_heading') ) : ?>
			<h3 class="pb-4"><?php echo esc_html(get_theme_mod('social_media_expert_serives_second_heading')); ?></h3>
		<?php endif; ?>
		<div class="row">
		    <?php $arr_posts = new WP_Query( $args );
		    if ( $arr_posts->have_posts() ) :
		      while ( $arr_posts->have_posts() ) :
		        $arr_posts->the_post();
		        ?>
		        <div class="col-lg-3 col-md-3 col-sm-3">
			        <div class="service_inner_box mb-4">
						<?php if ( has_post_thumbnail() ) :
							the_post_thumbnail();
						endif; ?>
		        		<h4 class="my-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		            	<p class="mb-0"><?php echo wp_trim_words( get_the_content(), 10 ); ?></p>
			        </div>
			    </div>
		      <?php
		    endwhile;
		    wp_reset_postdata();
		    endif; ?>
		</div>
	</div>
</div>

<?php endif; ?>