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
		$this->load->model('Database');

		$data['heading'] = 'Clam tool page';
		$data['results'] = $this->Database->show("clam");

		$this->load->view('header', $data);
		$this->load->view('nav');
		$this->load->view('about', $data);
		$this->load->view('footer');
	}

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