$(document).ready(function(){
	var snapper = new Snap({
	  element: document.getElementById('content')
	});

	$('.flat-menu').click(function(){
		snapper.open('left');
		return false;
	});
	
	$('.sidebar-header').click(function(){
		snapper.close();
		return false;
	});

	
	$('.deploy-sidebar, .page-header, .close-icon').click(function(){
		if( snapper.state().state=="left" ){
			snapper.close();
		} else {
			snapper.open('left');
		}
		return false;
	});
});