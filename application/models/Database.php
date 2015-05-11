<?php

class Database extends CI_Model
{
	function show()
	{
		$query = $this->db->query("SELECT * FROM text");
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