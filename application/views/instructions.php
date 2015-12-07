<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">
	<div class="col-md-8">
		<a href="<?php $page = ($_GET['page'] < 2 ? "1" : $_GET['page']-1); echo site_url("site/instructions?page=" . $page); ?>" class="btn btn-default">Bak</a>
		<a href="<?php $page = $_GET['page']+1; echo site_url("site/instructions?page=" . $page); ?>" class="btn btn-default pull-right">Fram</a>
		<div class="well">
		<?php
			echo br(1);
			foreach ($instructions as $row)
			{
				echo nl2br($row->page_text);
			}
		?>
		</div>
	</div>
</div>