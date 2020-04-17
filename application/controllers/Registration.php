<?php

class Registration extends ci_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Registration_model');
	}
	public function index()
	{
		$this->load->view('Layouts/header');
		$datas = $this->Registration_model->getAll();
		$this->load->view('Registration/index', ['datas' => $datas]);
		$this->load->view('Layouts/footer');
	}
	public function store()
	{
		$InsertData = [];
		$InsertData['name'] =  $_POST['name'];
		// $this->input->post('name');
		$InsertData['mobile'] = $_POST['mobile'];
		$InsertData['gender'] = $_POST['gender'];
		$InsertData['subject'] = $_POST['subject'];
		$InsertData['district'] = $_POST['district'];
		$InsertData['address'] = $_POST['address'];
		$result = $this->Registration_model->add($InsertData);
		if ($result == 1) {
			echo '1';
			$this->session->set_flashdata('success', 'Successfully Inserted!');
			redirect('Registration/index');
		} else {
			echo '0';
			$this->session->set_flashdata('error', 'Something Went Wrong!');
			$this->load->view('Registration/index');
		}
	}
	public function getOne()
	{
		echo $this->uri->segment(3);
		echo 'edit';
	}
	public function showOne()
	{
		echo 'view';
	}
	public function deleteOne()
	{
		echo 'delete';
	}
}
?>
