<?php

class Database extends CI_Model
{
	function show($page, $table = 'normalPageData')
	{
		$query = $this->db->get_where($table, array("page" => $page));
		return $query->result();
	}
}