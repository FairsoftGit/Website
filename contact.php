<?php
	$thisPage="contact";
	include ('includes/header.php');
?>
	</div>
	<main class="row" id="main">
	<!-- vanaf hier bewerken -->
		
	<div id="contact">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		<div class="page-header">
			<h1>Contact</h1>
		</div>
    	<h3>Contactformulier</h3>
    	<form action="mailto:jhel@avans.nl" method="post" enctype="text/plain" class="form-horizontal">
    		<div class="form-group">
    			<label class="control-label" for="name">Naam :</label>
    			<input type="text" class="form-control" id="name">
    		</div>
    		<div class="form-group">
    			<label class="control-label" for="e-mail">E-mail :</label>
    			<input type="email" class="form-control" id="e-mail">
    		</div>
    		<div class="form-group">
    			<label class="control-label" for="phone">Telefoon :</label>
    			<input type="tel" class="form-control" id="phone">
    		</div>
    		<div class="form-group">
    			<label class="control-label" for="text">Vraag / opmerking :</label>
    			<textarea rows="6" class="form-control" id="text"></textarea>
    		</div>
    		<div class="form-group">
    			<button type="submit" class="btn btn-primary">Verzenden</button>
    		</div>
    		
    	</form>
    </div>
    <div class="content-img-container col-xs-12 col-sm-6 col-md-6 col-lg-6">
    	<img class="content-img" src="img/contact-pic.png" alt="Contactpagina">
    </div>
</div>
		
	<!-- Tot hier bewerken -->

	</main>
	<div class="row" id="footer">
		
<?php
		include ('includes/footer.php');
?>