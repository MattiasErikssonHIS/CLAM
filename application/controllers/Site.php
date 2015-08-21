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

	public function clam($result = null)
	{
		$data['message'] = "";
		$this->load->model('Database');

		$data['heading'] = 'Clam tool page';
		$data['results'] = $this->Database->show("clam");

		$data['calc_result'] = $result;

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
		$indata1 = array();
		$results = array();
		$sums = array();

		$weight_range1 = array(1,4,9,10,7,11,2,4,3,4,7);
		$weight_factors = array(1,3,5,7,9,11,13,15,17,19,21,23,25);

		$indata1[] = $_POST['saturation'];
		$indata1[] = $_POST['variant_flora'];
		$indata1[] = $_POST['lvl_of_difficulty'];
		$indata1[] = $_POST['difficulty_of_use'];
		$indata1[] = $_POST['production_awareness'];
		$indata1[] = $_POST['num_of_tools'];
		$indata1[] = $_POST['mapping_of_workstation'];
		$indata1[] = $_POST['parts_ident'];
		$indata1[] = $_POST['info_cost'];
		$indata1[] = $_POST['quality_of_instructions'];
		$indata1[] = $_POST['poke_a_yoke'];

		$weight_range2 = $weight_range1;

		foreach ($weight_range1 as $key1 => $X) {
			$Z = 0;
			foreach ($weight_range2 as $key2 => $Y) {
				if ($key1 === $key2) {
					$Z = 0 - $Z;
					$results[$key1][$key2] = $Z;
					break;
				}

				if ($X < $Y) {
					$results[$key1][$key2] = 0;
				} elseif ($X === $Y) {
					$results[$key1][$key2] = 1;
				} elseif ($X > $Y) {
					$results[$key1][$key2] = 2;
				}
				$Z += $results[$key1][$key2];

			}
		}

		$sum_it_up = array();
		$add_flag = 0;
		while ($add_flag <= 10) {
			foreach ($results as $key => $result_array) {
				if (isset($result_array[$add_flag])) {
					if (!isset($sum_it_up[$add_flag])) {
						$sum_it_up[$add_flag] = 0;
					}
					$sum_it_up[$add_flag] += $result_array[$add_flag];
				}
			}
			$sum_it_up[$add_flag] += $weight_factors[$add_flag];
			$add_flag++;
		}


		$float_array = array();
		$weighted_score_array = array();

		foreach ($sum_it_up as $key => $value) {

			$float_array[] = $sum_it_up[$key]/array_sum($sum_it_up);
		}

		foreach ($float_array as $key => $float) {
			$float_array[$key] = round($float, 2);
		}

		foreach ($indata1 as $key => $estimate) {
			$weighted_score_array[] = $estimate*$float_array[$key];
		}

		$points = array_sum($weighted_score_array);

		$this->clam($points);
	}

	public function instructions()
	{
		$this->load->model('Database');


		if ($_GET['page'] < 1) {
			$_GET['page'] = 1;
		}

		$page = $_GET['page'];

		$data['heading'] = 'Instructions page';
		$data['results'] = $this->Database->show("instructions");
		$data['instructions'] = $this->Database->get_instructions($page);
		$data['page'] = $page;

		$this->load->view('header', $data);
		$this->load->view('nav');
		$this->load->view('instructions', $data);
		$this->load->view('footer');
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