
<div class="container-fluid page-detail-box pb0" id="all-lesson-box">
    <div class="content-box mb0">
        <div class="row display-flex">
            <div class="col-md-7 lesson-list-box" id="lesson-list-box">
                <?php the_content(); ?>
            </div>
            <div class="col-md-4 col-md-offset-1 lesson-list-box" id="widget-list-box">
                <?php dynamic_sidebar( 'gp-side-bar-widget' ); ?>
            </div>
        </div>
    </div>
</div>



