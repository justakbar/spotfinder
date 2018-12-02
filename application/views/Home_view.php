<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
	$this->load->view('include/header');
?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href = "<?php echo base_url(); ?>">
					<img src="<?php echo base_url(); ?>assets/images/main-logo.png" alt="Logo" style="display: block; margin: 10% auto 5%" width="300">
				</a>
			</div>
		</div>
		<form action = "<?php echo base_url(); ?>search/" method = "get" name = "search">
			<div class="form-row">
			    <div class="form-group col-md-10">
			      	<input type="text" class="form-control" placeholder="Qaysi tashkilotni izlayabsiz" name = "searchText">
			    </div>
			    <div class="form-group col-md-2">
			      	<button type="submit" class="btn btn-success btn-block">Qidirish</button>
			    </div>
			</div>
		</form>
	</div>
	<!-- js fayllar sahifani oxirida joylashtiramiz -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>