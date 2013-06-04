// Menu builder thank to Pierre Bertet
(function(){
	var doc = document.querySelectorAll('.instructions');
	var h1 = doc.querySelectorAll('h1');
	var titles = doc.querySelectorAll('h2');
	var toc = doc.createElement('nav');
	var tocList = toc.appendChild(doc.createElement('ul'));

	function addItem(title, index) {
		var item = doc.createElement('li');
		var link = doc.createElement('a');
		title.id = 'title-' + index;
		link.href = '#title-' + index;
		link.textContent = title.textContent;
		item.appendChild(link);
		tocList.appendChild(item);
	}
	for (var i=0; i < titles.length; i++) {
		addItem(titles[i], i+1);
	}
	h1.parentNode.insertBefore(toc, h1.nextSibling);
}());

// Text boxes
$('nav button').click(function(e){
	e.preventDefault();
	var opener = $(this),
	oclass = opener.attr('class');
	pid = $('#' + oclass);
	$('body').toggleClass(oclass);
	pid.toggle();
});

// // Images
// var bigImg = $('<div class="olive-large" />'),
// 	imgFrame;
// 
// $('.vbox img').click(function(e){
//     $this = $(this);
// 	if (imgFrame) {
// 		imgFrame.css('z-index', '1');
// 	}
// 	imgFrame = $('.frame');
// 	imgFrame.css('z-index', '6');
// 	bigImg.appendTo(imgFrame);
// 	bigImg.html('<img width="auto" height="auto" alt="'+ this.alt +'" title="'+ this.title +'" src="'+ this.src +'" />');
// 	bigImg.show();
// 	$window.resize();
// });
// bigImg.click(function(){
// 	bigImg.hide();
// });


