
<div class="bkg-white">
    <div class="content-box mb0">
        <div class="row display-flex">
            <div class="col-xs-12 col-md-7 lesson-list-box" data-right-height-content="data-right-height-content" id="lesson-list-box">
                <div class="page-lesson-detail-box">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-md-offset-1 lesson-list-box" data-right-height-content="data-right-height-content" id="widget-list-box">
                <?php dynamic_sidebar( 'gp-side-bar-widget' ); ?>
            </div>
        </div>
    </div>
</div>