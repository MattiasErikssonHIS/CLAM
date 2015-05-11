<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Index';
		$data['heading'] = 'This is the front page';
		$this->load->view('header', $data);
		$this->load->view('nav', $data);
		$this->load->view('site', $data);
		$this->load->view('footer', $data);
	}

	public function home()
	{
		$data['title'] = 'Home';
		$this->load->view('home', $data);
	}

	public function about()
	{
		$data['title'] = "About";
		$this->load->view('header', $data);
		$this->load->view('nav', $data);
		$this->load->view('about', $data);
		$this->load->view('footer', $data);
	}

	public function show()
	{
		$this->load->model("Database");
		$data['results'] = $this->Database->show();
		$data['title'] = "Show database and stuff";

		$this->load->view('header', $data);
		$this->load->view('nav', $data);
		$this->load->view('database', $data);
		$this->load->view('footer', $data);
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