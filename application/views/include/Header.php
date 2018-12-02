<?php 
	$k = 0;
	if (!isset($_SESSION['type']))
		$_SESSION['type'] = 'uzb';
	
	if ($_SESSION['type'] != 'rus')
		$k++;

	if ($_SESSION['type'] != 'eng')
		$k++;

	if ($_SESSION['type'] != 'uzb')
		$k++;

	if ($k == 3)
		$_SESSION['type'] = 'uzb';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-reboot.min.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Hello, world!</title>
</head>