<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('User_model');
		$this->load->model('Air_quality_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function air_quality()
	{
		if (!$this->session->userdata('user')) {
			$this->session->set_flashdata('error', 'Silakan login terlebih dahulu');
			return redirect('home');
		}

		$data['search'] = $this->input->get('search');
		$data['air_quality'] = $this->Air_quality_model->get_all($data['search']);
		$this->load->view('air_quality', $data);
	}

	public function air_quality_form()
	{
		if (!$this->session->userdata('user')) {
			$this->session->set_flashdata('error', 'Silakan login terlebih dahulu');
			return redirect('home');
		}

		$this->load->view('air_quality_form');
	}

	public function save_air_quality()
	{
		if (!$this->session->userdata('user')) {
			$this->session->set_flashdata('error', 'Silakan login terlebih dahulu');
			return redirect('home');
		}

		$data = array(
			'bulan' => $this->input->post('bulan'),
			'karbon_monoksida' => $this->input->post('karbon_monoksida'),
			'kategori' => $this->input->post('kategori'),
			'max' => $this->input->post('max'),
			'nitrogen_dioksida' => $this->input->post('nitrogen_dioksida'),
			'ozon' => $this->input->post('ozon'),
			'parameter_pencemar_kritis' => $this->input->post('parameter_pencemar_kritis'),
			'periode_data' => $this->input->post('periode_data'),
			'pm_duakomalima' => $this->input->post('pm_duakomalima'),
			'pm_sepuluh' => $this->input->post('pm_sepuluh'),
			'stasiun' => $this->input->post('stasiun'),
			'sulfur_dioksida' => $this->input->post('sulfur_dioksida'),
			'tanggal' => $this->input->post('tanggal')
		);

		foreach ($data as $value) {
			if (trim((string) $value) === '') {
				$this->session->set_flashdata('error', 'Semua data wajib diisi');
				return redirect('air-quality/create');
			}
		}

		if (!$this->Air_quality_model->insert_data($data)) {
			$this->session->set_flashdata('error', 'Data gagal disimpan');
			return redirect('air-quality/create');
		}

		$this->session->set_flashdata('success', 'Data berhasil disimpan');
		return redirect('air-quality');
	}

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if (empty($username) || empty($password)) {
			$this->session->set_flashdata('error', 'Mohon untuk melengkapi username dan password');
			return redirect('home', 'auto', 401);
		}

		$result = $this->User_model->get_by_credentials($username, $password);

		if (is_null($result)) {
			$this->session->set_flashdata('error', 'Username atau password salah');
			$this->output->set_status_header(401);

			$login_url = base_url('home');
			echo "<script>window.location.href='{$login_url}';</script>";
			exit;
		}

		$this->session->set_userdata('user', $result);
		return redirect('air-quality');
 	}

	public function logout()
	{
		$this->session->sess_destroy();
		return redirect('home');
	}
}
