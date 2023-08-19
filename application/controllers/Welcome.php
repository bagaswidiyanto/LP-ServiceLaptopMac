<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['homeweb'] = $this->db->get('tbl_homeweb')->row();
		$this->data['service'] = $this->db->get('tbl_service')->result();
		$this->data['about_us'] = $this->db->get('tbl_about_us')->row();
		$this->data['why_us'] = $this->db->get('tbl_why_us')->result();
		$this->data['our_service'] = $this->db->get('tbl_our_service')->result();
		$this->data['testimoni'] = $this->db->get('tbl_testimoni')->result();
		$this->data['deskripsi_content1'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 1))->row();
		$this->data['deskripsi_content2'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 2))->row();
		$this->data['deskripsi_content3'] = $this->db->get_where('tbl_deskripsi_content', array('id' => 3))->row();
		$this->data['brand'] = $this->db->get('tbl_brand')->result();

		$this->web = 'content/v_home';
		// $this->data['navigation']=$this->db->get_where('tbl_navigation');
		$this->layout();
	}
}
