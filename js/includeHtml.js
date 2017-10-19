
// Insert header.html into index.html
function loadHeader(){
	$('#header').load('pages/header.html');
}

// Insert footer.html into index.html
function loadFooter(){
	$('#footer').load('pages/footer.html');
}

// Load default homepage when opening index.html
function defaultContent(){
	$('#main').load('pages/content/aboutUs.html');
}

// Insert desired html file (based on clicked menu item) in <main> tag of index.html
function setPage(pageName) {
	$('#main').empty(); // Clear content of <main>
	$('#main').load(pageName);
}

$(document).ready(function(){
	// Function to load desired html file when clicked link
	// !!IMPORTANT!! ID of menu item MUST be the same name as linked html file!!
	$('.navbar-nav a').not('.dropdown-toggle').click(function(){
		var linkId = $(this).attr('id');
		var fileName = linkId + '.html';
		var path = "pages/content/"
		console.log(linkId + ': ' + fileName);
		setPage(path + fileName);
		
		//Add pagename to titel
		document.title = '';
		document.title = 'Fairsoft - ' + $(this).text(); 
	});

});