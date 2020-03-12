<?php
$lesson_num = $gp_data['count'] + 1;
$gp_data['post_id'] = get_the_ID();
$guild_press_desc_name = 'guild_press_lesson_overview_desc';
$gp_data['post_overview_desc'] = $this->wpfunc->get_post_meta( $gp_data['post_id'], $guild_press_desc_name, true );


if( $lesson_num < 10 ){

    $step_num = "0".strval( $lesson_num );

}else{

    $step_num = strval( $lesson_num );
}

?>
<?php if( $gp_data['is_now_post_comp'] ) : ?>
    <p class="lesson-list-status">
        <span class="lesson-list-status-complete-label" style="widht:160px;">
            受講済み
        </span>
    </p>
<?php else : ?>
    <p class="lesson-list-status">
        <span class="lesson-list-status-label" style="widht:160px;">
            未受講
        </span>
    </p>
<?php endif; ?>

<div class="lesson-list-detail-box lesson-bg-lock">

    <div class="row border_black pb20 bg_lock" style="">

        <div class="col-md-3 lesson-list-detail-num-box rounded-circle">
            <p class="center">step<br/><?php echo $step_num; ?></p>
        </div>

        <div class="col-md-9 lesson-list-detail-desc-box">

            <div class="lesson_desc">
                <h2 class="pl20 black"><?php echo $this->wpfunc->esc_html( $gp_data['post_title'] ); ?></h2>
                <p class="black"><?php echo $this->wpfunc->esc_html( $gp_data['post_overview_desc'] ); ?></p>

            </div>
        </div>

        <div class="icon_lock">
            <span class="font100 glyphicon glyphicon-lock" aria-hidden="true"></span>
        </div>
    </div>
</div>