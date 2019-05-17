$(document).ready(function(){
	// On ready events


	// LazyLoading function: for better ux
	function LazyLoading(){
		$('.lazy').Lazy({
			bind: "event",
			effect: "fadeIn",
			effectTime: 500
		});
	}

    LazyLoading();
});
