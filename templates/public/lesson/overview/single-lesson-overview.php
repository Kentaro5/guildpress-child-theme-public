<?php
$post_id = get_the_ID();

$basic = new Basic();
$wpfunc = new WpFunc();
//inputの名前を設定。
$guild_press_text_name = 'guild_press_overview_page_text';
$guild_press_desc_name = 'guild_press_overview_page_desc';

$guild_press_slug_value = guild_press_get_page_slug();

$guild_press_lesson_count = guild_press_get_lesson_count( $guild_press_slug_value );


$guild_press_text_value = $wpfunc->get_post_meta( $post_id, $guild_press_text_name, true );
$guild_press_desc_value = $wpfunc->get_post_meta( $post_id, $guild_press_desc_name, true );

//改行を入れる。
$guild_press_desc_value = nl2br($guild_press_desc_value, true);

?>

<div class="container-fluid page-overview-box pb0">
    <div class="content-box mb0">
        <div class="row">
            <div class="col-md-12 center">

                <div class="lesson-detail-box">

                    <h2 class="page-title"><?php echo $wpfunc->esc_html( the_title() ); ?></h2>

                    <p><?php echo $basic->trim_script( $guild_press_desc_value ); ?></p>

                </div>
                <div class="lesson-detail-box">

                    <?php if( $guild_press_slug_value !== '' && $guild_press_lesson_count > 0 ) : ?>
                        <span class="lesson-label-parts">
                            全<?php echo $guild_press_lesson_count; ?>回
                        </span>
                    <?php endif; ?>

                    <?php if( $guild_press_text_value !== '' ) : ?>
                        <span class="lesson-label-parts">
                            <?php echo $wpfunc->esc_html( $guild_press_text_value ); ?>
                        </span>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
