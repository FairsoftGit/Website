
// Insert header.html into index.html
function loadHeader(){
	$('#header').load('header.html');
}

// Insert footer.html into index.html
function loadFooter(){
	$('#footer').load('footer.html');
}

// Load default homepage when opening index.html
function defaultContent(){
	$('#main').load('aboutUs.html');
}

// Insert desired html file (based on clicked menu item) in <main> tag of index.html
function setPage(pageName) {
	$('#main').empty(); // Clear content of <main>
	$('#main').load(pageName);
}

$(document).ready(function(){
	// Function to load desired html file when clicked link
	// !!IMPORTANT!! ID of menu item MUST be the same name as linked html file!!
	$('.navbar-nav a').click(function(){
		var linkId = $(this).attr('id');
		var fileName = linkId + '.html';
		console.log(linkId + ': ' + fileName);
		setPage(fileName);
	});
});