<?php
class donasi_c extends CI_Controller{
	    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_donasi');
    }
	public function index($nama = '')
	{
		$data['judul']='Masukkan Donasi';
		$data['nama']=$nama;
		$this->load->view('template/header', $data);
		$this->load->view('donasi/index', $data);
		

		$this->load->view('template/footer');
		}


		public function data_donasi(){
			
			$this->load->view('donasi/donasi');
	    }

	    public function inputan()
	    {
	    	$data['nama'] = $this->input->post('nama');
	    	$data['email'] = $this->input->post('email');
	    	$data['nohp'] = $this->input->post('nohp');
	    	$data['donasi'] = $this->input->post('donasi');

	   $this->load->view('donasi/tampil_donasi',$data);
	    }
}
?>