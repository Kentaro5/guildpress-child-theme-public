<div class="header mb48" id="header">
	<header>
		<nav id="top-menu" class="navbar navbar-default border_none main-color navbar-fixed" role="navigation">

			<nav class="navbar navbar-default border_none mb0 main-color nav-bar-box">

				<a class="navbar-brand title" href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html(bloginfo('name')); ?></a>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi">
						<span class="sr-only">メニュー</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="gnavi" class="collapse navbar-collapse">
					<!-- トップナビメニュー -->
					<?php wp_nav_menu(
						array(
							'container' => 'ul',
							'menu_class' => 'nav navbar-nav' ,
							 'list_item_class'  => 'nav-item',
						    'link_class'   => 'nav-link m-2 menu-item nav-active'

						)
					);
					?>

				</div>
			</nav>
		</nav><!-- top-menu -->
	</header>
</div>
