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

<a href="<?php echo $this->wpfunc->esc_url( $gp_data['post_link'] ); ?>" class="lesson_link">
    <div class="lesson-list-detail-box">
        <div class="row">
            <div class="col-md-3 lesson-list-detail-num-box rounded-circle">
                <p class="center">step<br/><?php echo $step_num; ?></p>
            </div>
            <div class="col-md-9 lesson-list-detail-desc-box">
                <h2><?php echo $this->wpfunc->esc_html( $gp_data['post_title'] ); ?></h2>
                <p><?php echo $this->wpfunc->esc_html( $gp_data['post_overview_desc'] ); ?></p>
            </div>
        </div>
    </div>
</a>
