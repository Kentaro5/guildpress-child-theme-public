<?php get_header(); ?>

    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()): the_post(); ?>

                <div class="content-box">
                    <div class="row">
                        <div class="col-xs-12 col-md-12" style="">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>投稿がまだありません。</p>
        <?php endif; ?>
    </div>
<?php get_footer(); ?>