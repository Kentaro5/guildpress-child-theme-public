<?php $gp_data = get_query_var( 'guild_press_mypage_top_args', '' ); ?>
<div class="content-box mb0">
    <div class="my-page-top">

        <?php $this->show_success("情報を更新しました！"); ?>

        <div class="row">
            <div class="col-md-5">
                <div class="mypage-img-box">
                    <img id="profile-img" class="mypage-profile-img-card" src="<?php echo $gp_data['user']['user_avator']; ?>">
                </div>
            </div>
            <div class="col-md-7">

                <p class="mypage-user-name">お名前：<?php echo $this->wpfunc->esc_html( $gp_data['user']['user_name'] ); ?></p>

                <?php if( !empty( $gp_data['user']['user_rank'] ) ) : ?>
                    <p class="mypage-user-name">会員ランク：<?php echo $this->wpfunc->esc_html( $gp_data['user']['user_rank'] ); ?></p>
                <?php endif; ?>

                <p class="mypage-user-name">登録メールアドレス：<?php echo $this->wpfunc->esc_html( $gp_data['user']['user_email'] ); ?></p>
            </div>
        </div>
        <?php if( !empty( $gp_data['edit_page_link'] ) ) : ?>
            <div class="center">
                <a href="<?php echo $gp_data['edit_page_link']; ?>" >
                    <button type="button" id="" class="btn_design">情報を更新する</button>
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

