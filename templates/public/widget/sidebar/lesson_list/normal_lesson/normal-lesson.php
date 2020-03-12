<?php

$gp_data['post_id'] = get_the_ID();
$guild_press_desc_name = 'guild_press_lesson_overview_desc';
$gp_data['post_overview_desc'] = $this->wpfunc->get_post_meta( $gp_data['post_id'], $guild_press_desc_name, true );

?>
<a href="<?php echo $this->wpfunc->esc_url( $gp_data['post_link'] ); ?>" class="lesson_link">

    <div class="widget-detail-box widget-detail-lesson widget-detail-lesson-top">
        <div class="lesson-list-detail-desc-box">
            <h2><?php echo $this->wpfunc->esc_html( $gp_data['post_title'] ); ?></h2>
            <p><?php echo  $this->wpfunc->esc_html( $gp_data['post_overview_desc'] ); ?></p>
        </div>
    </div>

</a>