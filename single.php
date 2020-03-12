<?php $basic = new Basic(); $wpfunc = new WpFunc(); ?>
<?php get_header(); ?>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post();  ?>

		<?php
		//現在のポストタイプ取得
		$post_type = $wpfunc->get_post_type();

		if( $post_type === 'guild_lesson' ){

			//レッスンページの概要表示
			get_template_part( '/templates/public/lesson/overview/single-lesson-overview' );
			get_template_part( '/templates/public/lesson/overview/single-lesson-overview-contents-with-sidebar' );

		}elseif( $post_type === 'guild_lesson_detail' ){

			//レッスンページの詳細表示
			get_template_part( '/templates/public/lesson/detail/single-lesson-detail-overview' );
			get_template_part( '/templates/public/lesson/detail/single-lesson-detail-contents-with-sidebar' );
		}else{

			get_template_part( '/templates/public/posts/post' );
		}

		?>
	<?php endwhile; ?>

	<?php get_footer(); ?>

<?php else : ?>

	<p>コンテンツがありません</p>
	<?php get_footer(); ?>

<?php endif; ?>