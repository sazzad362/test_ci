<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller {

	public function index()
	{
		if (isset($_POST) && !empty($_POST)) {

			$this->form_validation->set_rules('name', 'Site name', 'trim|required');
			$this->form_validation->set_rules('email', 'Site email', 'trim');
			$this->form_validation->set_rules('phone', 'Site phone', 'trim');
			if ($this->form_validation->run() === TRUE){

				$data = array();
				$data['name'] = $this->input->post('name', true);
				$data['email'] = $this->input->post('email', true);
				$data['phone'] = $this->input->post('phone', true);
				$this->db->insert('tbl_info', $data);

				$this->session->set_flashdata('message', 'Create new row');
				$this->load->view('insert');

			}else{
				$this->view_insert();
			}

		}else{

			$this->view_insert();
		}
	}

	public function view_insert()
	{
		$data = array();
		$this->db->select('*');    
		$this->db->from('tbl_info');
		$query = $this->db->get();
		$data['tbs_info'] = $query->result();

		$this->load->view('insert', $data);
	}

	public function action($id, $delete)
	{
		if ($delete == 'edit') {
			echo "okd";
		}
		if ($delete == 'delete') {
			$this->db->where('id', $id);
			$this->db->delete('tbl_info');

			$this->session->set_flashdata('delete', 'Row has been deleted');
			$this->view_insert();
		}
	}
}
