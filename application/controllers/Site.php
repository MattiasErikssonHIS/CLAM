<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->model('Database');

		$data['heading'] = 'Front Page';
		$data['results'] = $this->Database->show("index");

		$this->load->view('header', $data);
		$this->load->view('nav');
		$this->load->view('site', $data);
		$this->load->view('footer');
	}

	public function about()
	{
		$this->load->model('Database');

		$data['heading'] = 'About page';
		$data['results'] = $this->Database->show("about");

		$this->load->view('header', $data);
		$this->load->view('nav');
		$this->load->view('about', $data);
		$this->load->view('footer');
	}

	public function clam()
	{
		$data['message'] = "";
		$this->load->model('Database');

		$data['heading'] = 'Clam tool page';
		$data['results'] = $this->Database->show("clam");

		$this->load->view('header', $data);
		$this->load->view('nav');
		$this->load->view('clam', $data);
		$this->load->view('footer');
	}

	public function results()
	{
		$data['clam'] = $this->input->post();
		array_pop($data['clam']);
		foreach($data['clam'] as $key => $row) {

		}

		$this->load->model('Database');
		$data['heading'] = 'The results';
		//$data['results'] = $this->Database->show("results");
		$this->load->view('header', $data);
		$this->load->view('nav');
		$this->load->view('result', $data);
		$this->load->view('footer');
	}

	public function calculate()
	{
		$compute['A'] = $_POST['saturation'];
		$compute['B'] = $_POST['variant_flora'];
		$compute['C'] = $_POST['lvl_of_difficulty'];
		$compute['D'] = $_POST['difficulty_of_use'];
		$compute['E'] = $_POST['production_awareness'];
		$compute['F'] = $_POST['num_of_tools'];
		$compute['G'] = $_POST['mapping_of_workstation'];
		$compute['H'] = $_POST['parts_ident'];
		$compute['I'] = $_POST['info_cost'];
		$compute['J'] = $_POST['quality_of_instructions'];
		$compute['K'] = $_POST['poke_a_yoke'];

		$Kf = 1;
		$start = 1;

		foreach ($compute as $key => $value) {
			foreach ($compute as $key2 => $value2) {
				if ($value > $value2) {
					$result[$key] = 2;
				} elseif ($value < $value2 || $key === $key2) {
					$result[$key] = 0;
				} else {
					$result[$key] = 1;
				}
				echo $key . " " . $key2 . " " . $value . " " . $value2 . " " . $result[$key] . "<br/>";
			}
			echo "<br/>";
		}
	}

	// Part of the CRUD
	public function insert()
	{
		$this->load->model("Database");
		$newRow = array();
		$this->Database->insert($newRow);
		$message = "Successfully inserted data";
		return $message;
	}

	public function update()
	{
		$this->load->model("Database");

		$newRow = array();

		$this->Database->update($newRow);
		$message = "Successfully updated data";
		return $message;
	}

	public function delete()
	{
		$this->load->model("Database");

		$newRow = array();
		$this->Database->delete($newRow);
		$message = "Successfully deleted data";
		return $message;
	}
}