<!DOCTYPE html>
<html lang="en">
<head>
	<div class="page-header">
		<?php
			foreach ($results as $row)
			{
				$title = $row->title;
			}
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $title; ?></title>
		<link href='<?php echo base_url(); ?>styles/css/bootstrap.css' type="text/css" rel='stylesheet' />
		<script src="<?php echo base_url(); ?>styles/js/bootstrap.js"></script>
	</div>
</head>
<body>