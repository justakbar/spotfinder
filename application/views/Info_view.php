<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
	$this->load->view('include/header');	
?>
<body>
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
	  	<?php
		  	if (!empty($data)) {
		  		$dt = array();
		  		foreach ($data as $val) {
		  			foreach ($val as $key => $value) {
		  				$dt[$key] = $value;
		  			}
		  		}
	  	?>
		<div class="container">
				<h2 class="text-center" style="margin: 5% 0 2% 0; color: #555">Informatsiya</h2>
	    		<table class="table table-bordered table-hover result-table">
	    		  <tbody>
	    		    <tr>
	    		      <td><?php echo $info[0] ?>:</td>
	    		      <td><?php echo $dt['company_name']; ?></td>
	    		    </tr>
	    		    <tr>
	    		      <td><?php echo $info[1] ?>:</td>
	    		      <td><?php echo $dt['address']; ?></td>
	    		    </tr>
	    		    <tr>
	    		      <td><?php echo $info[2] ?>:</td>
	    		      <td><?php echo $dt["telephone_number"]; ?></td>
	    		    </tr>
	    		    <tr>
	    		      <td><?php echo $info[3] ?>:</td>
	    		      <td><?php echo $dt['email']; ?></td>
	    		    </tr>
	    		    <tr>
	    		      <td><?php echo $info[4] ?>:</td>
	    		      <td><?php echo $dt['region']; ?></td>
	    		    </tr>
	    		    <tr>
	    		      <td><?php echo $info[5] ?>:</td>
	    		      <td><?php echo $dt['pochta_kod']; ?></td>
	    		    </tr>
	    		    <tr>
	    		      <td><?php echo $info[6] ?>:</td>
	    		      <td><?php echo $dt['old_name']; ?></td>
	    		    </tr>
	    		    <tr>
	    		      <td><?php echo $info[7] ?>:</td>
	    		      <td><?php echo $dt['moljal']; ?></td>
	    		    </tr>
	    		    <tr>
	    		      <td><?php echo $info[8] ?>:</td>
	    		      <td><?php echo $dt['taxi']; ?></td>
	    		    </tr>
	    		  </tbody>
		    	</table>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<h3 class="text-center offer-header">Taklif qilingan va ko'rilib chiqilayotgan ma'lumotlar</h3>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<p><b>Ko'chaning avvalgi nomi:</b> <br/> 
		    				<?php echo $new['manzil']; ?>
		    			</p>
		    		</div>
		    		<div class="col-md-12">
		    			<p><b>Mo'ljal:</b><br/>  <?php echo $new['moljal']; ?></p>
		    		</div>
		    		<div class="col-md-12">
		    			<p><b>Yo'nalishli taksilari:</b><br/><?php echo $new['taxi']; ?></p>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<h3 class="text-center offer-header">Sizda qanday taklif bor?</h3>
		    		</div>
		    	</div>
		    	<form action = "<?php echo base_url() . 'add/'; ?>" method = "post">
			    	<div class="row" style="margin-bottom: 100px">
			    		<input type = "hidden" value = "<?php echo $dt['id']; ?>" name = "com_id">
			    		<div class="form-group col-md-3">
					      	<input type="text" class="form-control" name = "old_name" placeholder="Ko'chaning eski nomini kiritish">
					    </div>
					    <div class="form-group col-md-3">
					      	<input type="text" class="form-control" name = "moljal" placeholder="Mo'ljal kiritish">
					    </div>
					    <div class="form-group col-md-3">
					      	<input type="text" class="form-control" name = "taxi" placeholder="Yo'nalish taksi kiritish">
					    </div>
					    <div class="form-group col-md-3">
					      	<button type="submit" class="btn btn-success btn-block" name = "send">Tasdiqlash</button>
					    </div>
			    	</div>
			    </form>
			<?php } else {
				echo '<h4 class = "text-center">Nothing found!</h4>';
			} ?>
		</div>
	<!-- js fayllar sahifani oxirida joylashtiramiz -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>