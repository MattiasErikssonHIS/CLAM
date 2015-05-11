<?php

class Math extends CI_Model{
	function add($val1, $val2)
	{
		return $val1 + $val2;
	}

	public function sub($val1, $val2)
	{
		return $val1 - $val2;
	}
}