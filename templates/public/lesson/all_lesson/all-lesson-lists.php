
<h2 class="post-box-title main-color">
	<?php echo the_title(); ?>
</h2>


<div class="row flex-eq-height">
	<?php while ( $gp_data['query']->have_posts() ) : $gp_data['query']->the_post();  ?>

		<?php
		$gp_data['post_id'] = get_the_ID();
		//inputの名前を設定。
		$guild_press_desc_name = 'guild_press_overview_page_desc';
		$gp_data['post_overview_desc'] = $this->wpfunc->get_post_meta( $gp_data['post_id'], $guild_press_desc_name, true );
		$gp_data['post_link'] = get_permalink();
		$gp_data['post_thumb'] = get_the_post_thumbnail_url();
		?>

		<div class="col-xs-12 col-md-4 post-lists">
			<a href="<?php echo $this->wpfunc->esc_url( $gp_data['post_link'] ); ?>" title="" class="posts-lists-link">
				<div class="single-post-box">
					<div class="single-post-content">
						<div class="center">

							<?php if( !empty( $gp_data['post_thumb'] ) ) : ?>

								<img class="single-post-thumbnail" src="<?php echo $this->wpfunc->esc_url( $gp_data['post_thumb'] ); ?>" style="width: 100%;">

								<?php else : ?>

									<img  class="single-post-thumbnail" src="<?php echo $gp_data['no_image']; ?>" alt=""  style="width: 100%;">
								<?php endif; ?>

							</div>
							<h2 class="single-post-title">
								<?php echo $this->wpfunc->esc_html( the_title() ); ?>
							</h2>
							<p class="single-post-text">
								<?php echo $this->wpfunc->esc_html( $gp_data['post_overview_desc'] ); ?>
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

<div class="center">
	<?php $this->pagination( $gp_data['query'] ); ?>
</div>