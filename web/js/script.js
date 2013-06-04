// Text boxes
$('nav button').click(function(e){
	e.preventDefault();
	var opener = $(this),
	oclass = opener.attr('class');
	pid = $('#' + oclass);
	$('body').toggleClass(oclass);
	pid.toggle();
});

// Images
var bigImg = $('<div class="olive-large" />'),
	imgFrame;

$('.vbox img').click(function(e){
    $this = $(this);
	if (imgFrame) {
		imgFrame.css('z-index', '1');
	}
	imgFrame = $('.frame');
	imgFrame.css('z-index', '6');
	bigImg.appendTo(imgFrame);
	bigImg.html('<img width="auto" height="auto" alt="'+ this.alt +'" title="'+ this.title +'" src="'+ this.src +'" />');
	bigImg.show();
	$window.resize();
});
bigImg.click(function(){
	bigImg.hide();
});


