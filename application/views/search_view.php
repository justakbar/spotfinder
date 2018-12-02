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
		  		  				<?php echo $sess; ?>
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
		    	<div class="row">
		    		<div class="col-md-12">
		    			<h3 class="text-center offer-header">Taklif qilingan va ko'rilib chiqilayotgan ma'lumotlar</h3>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<p>Manzil uchun takliflar: </p>
		    		</div>
		    		<div class="col-md-12">
		    			<p>Mo'ljal uchun takliflar: </p>
		    		</div>
		    		<div class="col-md-12">
		    			<p>Yo'nalishli taksilar uchun takliflar: </p>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<h3 class="text-center offer-header">Sizda qanday taklif bor?</h3>
		    		</div>
		    	</div>
		    	<div class="row" style="margin-bottom: 100px">
		    		<div class="form-group col-md-3">
				      	<input type="text" class="form-control" placeholder="Qaysi tashkilotni izlayabsiz">
				    </div>
				    <div class="form-group col-md-3">
				      	<input type="text" class="form-control" placeholder="Qaysi tashkilotni izlayabsiz">
				    </div>
				    <div class="form-group col-md-3">
				      	<input type="text" class="form-control" placeholder="Qaysi tashkilotni izlayabsiz">
				    </div>
				    <div class="form-group col-md-3">
				      	<button type="submit" class="btn btn-success btn-block">Tasdiqlash</button>
				    </div>
		    	</div>
		</div>
	</div>
	<!-- js fayllar sahifani oxirida joylashtiramiz -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>