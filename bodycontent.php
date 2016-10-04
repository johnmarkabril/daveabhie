<?php 
	$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	$uri_segments = explode('/', $uri_path);
	// echo $uri_segments[2];
?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<?php include 'bodyleftcontent.php'; ?>
		</div>
		<div class="col-md-4">
			<?php include 'bodyrightcontent.php'; ?>
		</div>
	</div>	
</div>