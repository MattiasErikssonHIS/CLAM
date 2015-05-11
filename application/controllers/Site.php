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

	public function send_email()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("fullName", "Full name", "required");
		$this->form_validation->set_rules("message", "Message", "required");

		if ($this->form_validation->run() === FALSE)
		{
			$data['message'] = "";
			$this->load->model('Database');
			$data['heading'] = 'Clam tool page';
			$data['results'] = $this->Database->show("clam");
			$this->load->view('header', $data);
			$this->load->view('nav');
			$this->load->view('clam', $data);
			$this->load->view('footer');
		} else {
			$data['message'] = set_value('message');
			$this->load->model('Database');
			$data['heading'] = 'Clam tool page';
			$data['results'] = $this->Database->show("clam");
			$this->load->view('header', $data);
			$this->load->view('nav');
			$this->load->view('clam', $data);
			$this->load->view('footer');
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