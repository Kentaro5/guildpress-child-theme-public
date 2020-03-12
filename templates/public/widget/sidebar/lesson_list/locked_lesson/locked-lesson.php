<?php

$gp_data['post_id'] = get_the_ID();;
$guild_press_desc_name = 'guild_press_lesson_overview_desc';
$gp_data['post_overview_desc'] = $this->wpfunc->get_post_meta( $gp_data['post_id'], $guild_press_desc_name, true );

?>
<div class="widget-detail-box widget-detail-lesson lesson-bg-lock">

    <div class="lesson-list-detail-desc-box">
        <h2><?php echo $this->wpfunc->esc_html( $gp_data['post_title'] ); ?></h2>
        <p><?php echo  $this->wpfunc->esc_html( $gp_data['post_overview_desc'] ); ?></p>
    </div>

    <div class="icon-lock-side-bar">
        <span class="glyphicon glyphicon-lock" aria-hidden="true">
        </span>
    </div>

</div>