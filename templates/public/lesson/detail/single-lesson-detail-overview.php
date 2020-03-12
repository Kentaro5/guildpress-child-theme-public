
<?php
$post_id = get_the_ID();

$basic = new Basic();
$wpfunc = new WpFunc();

//inputの名前を設定。
$guild_press_desc_name = 'guild_press_lesson_overview_desc';

$guild_press_desc_value = $wpfunc->get_post_meta( $post_id, $guild_press_desc_name, true );

//改行を入れる。
$guild_press_desc_value = nl2br($guild_press_desc_value, true);


?>

<div class="container">
    <div class="content-box mb0">
        <div class="row">
            <div class="col-md-12 center">

                <div class="lesson-detail-box">

                    <h2 class="page-title"><?php echo $wpfunc->esc_html( the_title() ); ?></h2>

                    <p><?php echo $basic->trim_script($guild_press_desc_value); ?></p>

                </div>
            </div>
        </div>
    </div>
</div>