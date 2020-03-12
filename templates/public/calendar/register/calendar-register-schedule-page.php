
<div class="bg-white form-box mb0">
    <form class="" name="form" action="<?php echo $this->wpfunc->esc_attr($this->wpfunc->home_url( $gp_data['wp_request'] )); ?>" method="post" id="<?php echo $gp_data['form_id_name']; ?>" >

        <div id="<?php echo $gp_data['id_name']; ?>" class="">
            <div class="wrap">

                <h2 class="mb40">予約カレンダー</h2>

                <div class="form-parts">
                    <p class="form-text">時間帯指定</p>
                    <input type="text" class="form-input" name="date_time1" id="date_time1" value="">〜
                    <input type="text" class="form-input" name="date_time2" id="date_time2" value="">
                </div>

                <div class="form-parts">
                    <label class="align_top">コメント</label>
                    <textarea name="comment" id="comment" class="form_textarea" rows="10" cols="30"></textarea>
                </div>

                <input type="hidden" name="guild_press_schedule_action" value="register_new_schedule" />
                <input type="hidden" name="action" value="update" />
                <input type="hidden" name="date_id" value="<?php echo $this->wpfunc->esc_attr($gp_data['date_id']); ?>" />
                <input type="hidden" name="s_id" value="<?php echo $this->wpfunc->esc_attr($gp_data['schedule_task_id']); ?>" />
                <input type="hidden" name="add_flag" value="salonpaymentfieldadd" />
                <input type="hidden" name="google_event_id" value="<?php echo $google_event_id; ?>" />
                <input type="hidden" name="the_month" value="<?php echo $this->wpfunc->esc_attr($gp_data['the_month']); ?>" />

                <input type="hidden" name="gp_month" value="<?php echo $this->wpfunc->esc_attr($gp_data['gp_month']); ?>" />
                <input type="hidden" name="gp_year" value="<?php echo $this->wpfunc->esc_attr($gp_data['gp_year']); ?>" />

                <div class="center">
                    <input type="submit" name="" class="form-btn btn_design" id="submit" value="スケジュール登録">
                </div>

                <?php echo $gp_data['wp_nonce']; ?>
            </div>
        </div>
    </form>
</div>