<?php
define("BASE_URL", "http://localhost/cURL-with-web-interface/");
$baseurl = 'http://localhost/cURL-with-web-interface/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cURL Your Link!</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">
	<script type='text/javascript' src='<?php echo BASE_URL; ?>assets/js/bootstrap.min.js'></script>
</head>
<body>
		<div class="col-12 p-3 bg-info text-white">
			<div class="row">
				<div class="col">
			      	cURL Your Link
			    </div>
			    <div class="col text-right">
			      	Dibuat dengan sepenuh hati menggunakan PHP
			    </div>
			</div>
		</div>

		<div class="col-12 p-3 bg-light text-dark" style="padding-bottom: 100px">

			<div class="container">
				<blockquote class="blockquote text-center" style="margin: 100px 0px">
				  <p class="mb-0">Curl merupakan singkatan dari “Client URL”. Curl command dibuat untuk mengecek</br> konektivitas ke URL dan juga sebagai tool transfer data.</p>
				  <footer class="blockquote-footer">Penjelasan cURL</footer>
				</blockquote>

				<form action="<?php echo BASE_URL; ?>result.php" method="post">
				
					<div class="input-group mb-3">
					  	<div class="input-group-prepend">
					    	<span class="input-group-text" id="inputGroup-sizing-default">Url :</span>
					  	</div>
			  		<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="url">
					</div>
					<div class="container">
						<div class="d-flex justify-content-center" style="margin-bottom: 50px">
							<div class="col form-check form-check-inline">
								<input class="form-check-input" type="radio" name="method" id="inlineRadio1" value="POST" checked>
								<label class="form-check-label" for="inlineRadio1">POST</label>
							</div>
							<div class="col form-check form-check-inline">
								<input class="form-check-input" type="radio" name="method" id="inlineRadio1" value="GET">
								 <label class="form-check-label" for="inlineRadio1">GET</label>
							</div>
							<div class="col form-check form-check-inline">
								<input class="form-check-input" type="radio" name="method" id="inlineRadio1" value="PUT">
								  <label class="form-check-label" for="inlineRadio1">PUT</label>
							</div>
							<div class="col form-check form-check-inline">
								<input class="form-check-input" type="radio" name="method" id="inlineRadio1" value="DELETED">
								  <label class="form-check-label" for="inlineRadio1">DELETE</label>
							</div>
						</div>
					
					</div>
				
					<h5 class="text-center">FORM FIELD</h5>

					<div class="container">

						<div class="form-check row" style="margin-bottom: 20px">
						  	<input class="form-check-input" type="checkbox" id="req1" value="option1" name="check1" aria-label="...">
						  	<div class="form-row">
							  	<div class="col-4">
							      	<input type="text" class="form-control" placeholder="KEY" id="key1" name="key1" disabled>
							      	
							    </div>
							    <div class="col-8">
							      	<input type="text" class="form-control" placeholder="VALUE" id="value1" name="value1" disabled>
							      	
							    </div>
							</div>
						</div>

						<div class="form-check row" style="margin-bottom: 20px">
						  	<input class="form-check-input" type="checkbox" id="req2" value="option1" name="check1" aria-label="...">
						  	<div class="form-row">
							  	<div class="col-4">
							      	<input type="text" class="form-control" placeholder="KEY" id="key2" name="key2"  disabled>
							      	
							    </div>
							    <div class="col-8">
							      	<input type="text" class="form-control" placeholder="VALUE" id="value2" name="value2" disabled>
							      	
							    </div>
							</div>
						</div>

						<div class="form-check row" style="margin-bottom: 20px">
						  	<input class="form-check-input" type="checkbox" id="req3" value="option1" name="check1" aria-label="...">
						  	<div class="form-row">
							  	<div class="col-4">
							      	<input type="text" class="form-control" placeholder="KEY" id="key3" name="key3" disabled>
							      	
							    </div>
							    <div class="col-8">
							      	<input type="text" class="form-control" placeholder="VALUE" id="value3" name="value3" disabled>
							 
							    </div>
							</div>
						</div>

						<div class="form-check row" style="margin-bottom: 20px">
						  	<input class="form-check-input" type="checkbox" id="req4" value="option1" name="check1" aria-label="...">
						  	<div class="form-row">
							  	<div class="col-4">
							      	<input type="text" class="form-control" placeholder="KEY" id="key4" name="key4" disabled>
							      	
							    </div>
							    <div class="col-8">
							      	<input type="text" class="form-control" placeholder="VALUE" id="value4" name="value4" disabled>
							 
							    </div>
							</div>
						</div>

						<div class="form-check row" style="margin-bottom: 20px">
						  	<input class="form-check-input" type="checkbox" id="req5" value="option1" name="check1" aria-label="...">
						  	<div class="form-row">
							  	<div class="col-4">
							      	<input type="text" class="form-control" placeholder="KEY" id="key5" name="key5" disabled>
							      	
							    </div>
							    <div class="col-8">
							      	<input type="text" class="form-control" placeholder="VALUE" id="value5" name="value5" disabled>
							 
							    </div>
							</div>
						</div>

						<div class="form-check row" style="margin-bottom: 20px">
						  	<input class="form-check-input" type="checkbox" id="req6" value="option1" name="check1" aria-label="...">
						  	<div class="form-row">
							  	<div class="col-4">
							      	<input type="text" class="form-control" placeholder="KEY" id="key6" name="key6" disabled>
							      	
							    </div>
							    <div class="col-8">
							      	<input type="text" class="form-control" placeholder="VALUE" id="value6" name="value6" disabled>
							 
							    </div>
							</div>
						</div>

						<div class="form-check row" style="margin-bottom: 20px">
						  	<input class="form-check-input" type="checkbox" id="req7" value="option1" name="check1" aria-label="...">
						  	<div class="form-row">
							  	<div class="col-4">
							      	<input type="text" class="form-control" placeholder="KEY" id="key7" name="key7" disabled>
							      	
							    </div>
							    <div class="col-8">
							      	<input type="text" class="form-control" placeholder="VALUE" id="value7" name="value7" disabled>
							 
							    </div>
							</div>
						</div>

						<div class="form-check row" style="margin-bottom: 20px">
						  	<input class="form-check-input" type="checkbox" id="req8" value="option1" name="check1" aria-label="...">
						  	<div class="form-row">
							  	<div class="col-4">
							      	<input type="text" class="form-control" placeholder="KEY" id="key8" name="key8" disabled>
							      	
							    </div>
							    <div class="col-8">
							      	<input type="text" class="form-control" placeholder="VALUE" id="value8" name="value8" disabled>
							 
							    </div>
							</div>
						</div>

						<input id='key1hidden' type='hidden' value='No' name='key1'>
						<input id='value1hidden' type='hidden' value='No' name='value1'>
						<input id='key2hidden' type='hidden' value='No' name='key2'>
						<input id='value2hidden' type='hidden' value='No' name='value2'>
						<input id='key3hidden' type='hidden' value='No' name='key3'>
						<input id='value3hidden' type='hidden' value='No' name='value3'>
						<input id='key4hidden' type='hidden' value='No' name='key4'>
						<input id='value4hidden' type='hidden' value='No' name='value4'>
						<input id='key5hidden' type='hidden' value='No' name='key5'>
						<input id='value5hidden' type='hidden' value='No' name='value5'>
						<input id='key6hidden' type='hidden' value='No' name='key6'>
						<input id='value6hidden' type='hidden' value='No' name='value6'>
						<input id='key7hidden' type='hidden' value='No' name='key7'>
						<input id='value7hidden' type='hidden' value='No' name='value7'>
						<input id='key8hidden' type='hidden' value='No' name='key8'>
						<input id='value8hidden' type='hidden' value='No' name='value8'>
							  	
					</div>	
					<div class="text-center">
					<button type="submit" class="btn btn-primary btn-lg">Submit</button>		
						
					</div>

					
				</form>
							
			</div>

			<div class="container text-center" style="margin-top:100px; margin-bottom: 100px">
				<h1 class="display-4">
					Kelompok 7
				</h1>
				<p class="lead">
					Sultan Baharuddin Ulil Amrie - 42517016</br>
				Hasri Annisa - 42517034</br>
				Gabril Hozanna - 42517042
				</p>
				

			</div>
		</div>
			
		<div class="col-12 p-3 bg-dark text-white text-center">
			<!-- Footer -->
			<footer class="page-footer font-small blue">

			  <!-- Copyright -->
			  <div class="footer-copyright text-center py-3">© 2020 Copyright:
			    <a href="https://t.me/Roooodie"> Sultan Baharuddin Ulil Amrie</a>
			  </div>
			  <!-- Copyright -->

			</footer>
			<!-- Footer -->
		</div>
	

</body>
</html>

<script>
	document.getElementById('req1').onchange = function() {
	    document.getElementById('key1').disabled = !this.checked;
	    document.getElementById('value1').disabled = !this.checked;
	    document.getElementById('key1hidden').disabled = true;
    	document.getElementById('value1hidden').disabled = true;
	};
	document.getElementById('req2').onchange = function() {
	    document.getElementById('key2').disabled = !this.checked;
	    document.getElementById('value2').disabled = !this.checked;
	    document.getElementById('key2hidden').disabled = true;
    	document.getElementById('value2hidden').disabled = true;
	};
	document.getElementById('req3').onchange = function() {
	    document.getElementById('key3').disabled = !this.checked;
	    document.getElementById('value3').disabled = !this.checked;
	    document.getElementById('key3hidden').disabled = true;
    	document.getElementById('value3hidden').disabled = true;
	};
	document.getElementById('req4').onchange = function() {
	    document.getElementById('key4').disabled = !this.checked;
	    document.getElementById('value4').disabled = !this.checked;
	    document.getElementById('key4hidden').disabled = true;
    	document.getElementById('value4hidden').disabled = true;
	};
	document.getElementById('req5').onchange = function() {
	    document.getElementById('key5').disabled = !this.checked;
	    document.getElementById('value5').disabled = !this.checked;
	    document.getElementById('key5hidden').disabled = true;
    	document.getElementById('value5hidden').disabled = true;
	};
	document.getElementById('req6').onchange = function() {
	    document.getElementById('key6').disabled = !this.checked;
	    document.getElementById('value6').disabled = !this.checked;
	    document.getElementById('key6hidden').disabled = true;
    	document.getElementById('value6hidden').disabled = true;
	};
	document.getElementById('req7').onchange = function() {
	    document.getElementById('key7').disabled = !this.checked;
	    document.getElementById('value7').disabled = !this.checked;
	    document.getElementById('key7hidden').disabled = true;
    	document.getElementById('value7hidden').disabled = true;
	};
	document.getElementById('req8').onchange = function() {
	    document.getElementById('key8').disabled = !this.checked;
	    document.getElementById('value8').disabled = !this.checked;
	    document.getElementById('key8hidden').disabled = true;
    	document.getElementById('value8hidden').disabled = true;
	};


</script>
