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