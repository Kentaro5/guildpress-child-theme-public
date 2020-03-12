<?php

class Detail_View_Custom_Fields{

	public function __construct()
	{
		$this->load();
	}

	public function load()
	{
		add_action( 'add_meta_boxes',             array( $this, 'add_custom_meta_box' ) );
		add_action( 'save_post',                  array( $this, 'save' ) );
	}

	public function add_custom_meta_box(){

		add_meta_box( 'gp_lesson_detail_overview_items', '概要ページ項目',  array( $this,'meta_box' ) , 'guild_lesson_detail', 'normal', 'high' );
	}

	public function meta_box(){

		$this->wpfunc = new WpFunc;
		$this->basic = new Basic;

		$post_id = ( isset($_GET['post']) && $_GET['post'] !== "" ) ? intval( $_GET['post'] ) : '';

		//inputの名前を設定。
		$desc_name = 'guild_press_lesson_overview_desc';

		$desc_value = $this->wpfunc->get_post_meta( $post_id, $desc_name, true );

		wp_nonce_field( 'guild_press_overview_setting', 'guild_press_overview_setting_box', false );
		?>
		<h4>ページの概要を入力してください</h4>
			<textarea name="<?php echo $desc_name; ?>" style="width: 100%;" rows="6"><?php echo $this->basic->trim_script( $desc_value ); ?></textarea>
		<?php

	}

	//postが更新された時に、各postにブロックのチェックの値を更新。
	public function save(){

		// Quit if the nonce isn't there, or is wrong.
		if ( ! isset( $_POST['guild_press_overview_setting_box'] ) || ! wp_verify_nonce( $_POST['guild_press_overview_setting_box'], 'guild_press_overview_setting' ) ) {
			return;
		}

		// Quit if the current user cannot edit posts.
		if ( ! current_user_can( 'edit_posts' ) ) {
			return;
		}

		$save_items_args = array(
			'guild_press_lesson_overview_desc' => ''
		);

		// Get value.
		$save_items_args['guild_press_lesson_overview_desc'] = ( isset( $_POST['guild_press_lesson_overview_desc'] ) && $_POST['guild_press_lesson_overview_desc'] !== '' ) ? $_POST['guild_press_lesson_overview_desc'] : null;

		// Need the post object.
		global $post;

		foreach ($save_items_args as $key => $value) {
			// Update accordingly.
			if ( $value !== null ) {

				update_post_meta( $post->ID, $key, $value );
			} else {

				delete_post_meta( $post->ID, $key );
			}

		}

	}

}
new Detail_View_Custom_Fields();