<?php

class Database extends CI_Model
{
	function show($page)
	{
		$query = $this->db->get_where("pageData", array("page" => $page));
		return $query->result();
	}

	function get_instructions($page)
	{
		$this->db->where('page_number', $page);
		$query = $this->db->get('instructions');
		return $query->result();
	}

	function insert($text)
	{
		$this->db->insert("text", $text);
	}

	function update($text){
		$this->db->update("text", $text, "id = 1");
	}

	function delete($text)
	{
		$this->db->delete("text", $text);
	}
}