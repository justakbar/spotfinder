<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
	$this->load->view('include/header');
?>
<body>
	<div class="main-bg">
	  	<div class="navbar-result">
		  	<div class="container">
		  		<form action = "<?php echo base_url(); ?>search/" method = "get" name = "search">
		  		  	<div class="form-row">
		  		  		<div class="form-group col-md-2">
		  		  			<a href = "<?php echo base_url(); ?>">
		  		  				<img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo">
		  		  			</a>
		  		  		</div>
				  		<div class = "form-group col-md-8">
				  		   	<input type="text" name = "searchText" class="form-control" placeholder="Qidirish">
				  		</div>
			  		    <div class="form-group col-md-2">
			  		      	<button type="submit" class="btn btn-success btn-block">Qidirish</button>
			  		    </div>
		  			</div>
		  		</form>
		  	</div>
	  	</div>
		
		<div class="container">
		    	<h2 class="organization-name">
		    		<?php
		    			echo $res;
		    		?>
		    		ta Natija
		    	</h2>
	    		<table class="table table-bordered table-hover">
	    		  <thead class="text-center thead-dark thead-blue">
	    		    <tr>
	    		      <th scope="col">Tashkilot nomi</th>
	    		      <th scope="col">Manzil</th>
	    		      <th scope="col">Ko'chaning eski nomi</th>
	    		    </tr>
	    		  </thead>
	    		  <tbody>
	    		  	<?php 
	    		  		if (is_array($data)) {
	    		  		foreach($data as $value) { 
	    		  	?>
	    		    <tr>
	    		      <td><a href = "<?php echo base_url(); ?>info/n/<?php echo $value['id']; ?>"><?php echo $value['company_name']; ?></td>
	    		      <td><?php echo $value['address']; ?></td>
	    		      <td><?php echo $value['region']; ?></td>
	    		    </tr>
	    		<?php }
	    		} else echo "Nothing found!"; ?>
	    		  </tbody>
		    	</table>
		</div>
	</div>
	<!-- js fayllar sahifani oxirida joylashtiramiz -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>