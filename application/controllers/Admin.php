<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->model('M_Dashboard');
		// $this->load->model('M_Menu');
		// $this->load->library('encryption');
	}

	public function index()
	{

		$data['active'] = "admin";
		$data['devices_online'] = $this->M_Dashboard->count_devices();
		$data['devices_by_name'] = $this->M_Dashboard->count_device_by_name();
		$data['devices_by_tahun'] = $this->M_Dashboard->count_device_by_tahun();
		$data['devices_by_users'] = $this->M_Dashboard->count_device_by_users();
		

		$this->load->view('admin/partial/admin_header', $data);
		$this->load->view('admin/partial/admin_sidebar',$data);
		$this->load->view('admin/partial/admin_topbar');
		$this->load->view('admin/index', $data);
		$this->load->view('admin/partial/admin_footer', $data);
	}

	public function statistic()
	{

		$data['active'] = "statistic";

		$this->load->view('admin/partial/admin_header', $data);
		$this->load->view('admin/partial/admin_sidebar',$data);
		$this->load->view('admin/partial/admin_topbar');
		$this->load->view('admin/statistic');
		$this->load->view('admin/partial/admin_footer');
	}
	public function list()
	{

		$data['active'] = "list";
		$data['all_devices'] = $this->M_Dashboard->semua_devices();

		$this->load->view('admin/partial/admin_header',$data);
		$this->load->view('admin/partial/admin_sidebar',$data);
		$this->load->view('admin/partial/admin_topbar');
		$this->load->view('admin/list', $data);
		$this->load->view('admin/partial/admin_footer', $data);
	}
	public function users()
	{

		$data['active'] = "users";

		$this->load->view('admin/partial/admin_header', $data);
		$this->load->view('admin/partial/admin_sidebar',$data);
		$this->load->view('admin/partial/admin_topbar');
		$this->load->view('admin/users');
		$this->load->view('admin/partial/admin_footer');
	}
	public function setting()
	{

		$data['active'] = "setting";

		$this->load->view('admin/partial/admin_header', $data);
		$this->load->view('admin/partial/admin_sidebar',$data);
		$this->load->view('admin/partial/admin_topbar');
		$this->load->view('admin/setting');
		$this->load->view('admin/partial/admin_footer');
	}
}
