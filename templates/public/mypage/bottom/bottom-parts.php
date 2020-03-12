<?php $gp_data = get_query_var( 'guild_press_mypage_top_args', '' ); ?>

<div class="content-box">

    <div class="my-page-bottom">
        <h2 class="my-page-user-title center">学習状況</h2>
        <div class="row" >
            <?php for ($i=0; $i < count( $gp_data['user_progress_details'] ); $i++) : ?>
            <div class="col-md-4">
                <div class="row progress-box">
                    <div class="col-md-4">
                        <p class="mb0"><?php echo urldecode( $this->wpfunc->esc_html( $gp_data['user_progress_details'][$i]['lesson_category'] ) ); ?></p>
                    </div>
                    <div class="col-md-8">
                        <div class="b-radius">
                            <div class="progress" style="margin-bottom: 0px;">
                                <div class="progress-bar b-radius main-color" role="progressbar" style="width: <?php echo $gp_data['user_progress_details'][$i]['progress_bar_num'] ?>%;" >
                                    <span class=""><?php echo $this->wpfunc->esc_html( $gp_data['user_progress_details'][$i]['user_data_lesson_str'] ).'/'.$this->wpfunc->esc_html( $gp_data['user_progress_details'][$i]['str_lesson_posts_str'] ); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
            <!-- col-md-4 -->

        </div>
    </div>
</div>
