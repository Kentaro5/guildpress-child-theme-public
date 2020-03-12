<?php get_header(); ?>

<div class="content-box">
	<?php if( have_posts()) : ?>
		<div class="row flex-eq-height">
			<?php while ( have_posts() ) : the_post(); 
				?>
				<div class="col-xs-12 col-md-4 post-lists">
					<a href="<?php echo esc_url( the_permalink() ); ?>" title="" class="posts-lists-link">
						<div class="single-post-box">
							<div class="single-post-content">
								<div class="center">

									<?php $thumbnail = get_the_post_thumbnail_url();  ?>
									<?php if( $thumbnail  === false) : ?>
		
										<img  class="single-post-thumbnail" src="<?php echo TEMP_DIR_URI.'/assets/img/no-image.png'; ?>" alt=""  style="width: 100%;">

										<?php else : ?>

											<img class="single-post-thumbnail" src="<?php echo esc_url(get_the_post_thumbnail_url() ); ?>" style="width: 100%;">
										<?php endif; ?>

								</div>
								<h2 class="single-post-title">
									<?php echo esc_html(the_title() ); ?>
								</h2>
								<p class="single-post-text">
									<?php echo esc_html( get_the_excerpt() ) ?>
								</p>

								<p class="single-post-link-text mb0">
									詳細はこちら
								</p>
							</div>
						</div>
					</a>
				</div>

			<?php endwhile; ?>
		</div>
	<?php else : ?>	
		<p>投稿がまだありません。</p>
	<?php endif; ?>
</div>
<div class="center posts_pagination">
	<?php the_posts_pagination(); ?>
</div>


<?php get_footer(); ?>