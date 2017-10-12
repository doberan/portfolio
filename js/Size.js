getWindowSize();

function getWindowSize(){
	var sW,sH;
	sW	=	window.innerWidth;
	sH	=	window.innerHeight;
	$('html').css('width', sW);
	$('html').css('height', sH);
}