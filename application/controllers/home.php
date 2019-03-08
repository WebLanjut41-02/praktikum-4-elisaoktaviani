<?php 
class home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('m_data');
	}
	public function index($nama = '')
	{
		$this->load->database();
		$jumlah_data = $this->m_data->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_ur().'index.php/home/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['id_donasi'] = $this->m_data->data($config['per_page'],$from);
		$this->load->view('tampil_donasi',$data);
		$data['judul']='Halaman Home';
		$data['nama']=$nama;
		$this->load->view('template/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('template/footer');


	}
}
 ?>