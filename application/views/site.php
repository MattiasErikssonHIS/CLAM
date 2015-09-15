<?php defined('BASEPATH') OR exit('No direct script access allowed');

	foreach ($results as $row)
	{
		$title = $row->title;
		$text1 = $row->text1;
		$text2 = $row->text2;
	}
?>

<div class="text-area-frontpage">
	<p><?php echo $text1; ?></p>
	<p><?php echo $text2; ?></p>
</div>