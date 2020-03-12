<div class="post-bkg">
	<div class="content-box mb0">
		<div class="row display-flex">
			<div class="col-xs-12 col-md-7 posts-box" data-right-height-content="data-right-height-content" id="lesson-list-box">
				<div class="page-lesson-detail-box posts-box-detail-box">
					<h1 class="post-title"><?php esc_html( the_title() ); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
			<div class="col-xs-12 col-md-4 col-md-offset-1 posts-box" data-right-height-content="data-right-height-content" id="widget-list-box">
				<?php dynamic_sidebar( 'gp-side-bar-widget' ); ?>
			</div>
		</div>
	</div>
</div>