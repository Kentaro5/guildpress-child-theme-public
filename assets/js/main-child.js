jQuery(".nav-link").on("click", function(e) {

	let window_size = jQuery(window).width();

	if( window_size > 800 ){
		return;
	}
	let parent = e.currentTarget.parentNode;
	if(parent.classList.contains('menu-item-has-children')){
		e.preventDefault();

		jQuery(this).next().slideToggle();
		jQuery(this).toggleClass("active");
	}
});
