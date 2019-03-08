<?php 
class daftar_m extends CI_Controller{
	public function index($nama = '')
	{
		$data['judul']='Daftarkan Masjid';
		$data['nama']=$nama;
		$this->load->view('template/header', $data);
		$this->load->view('admin/daftar_m', $data);
		
		// $this->load->view('kegiatan/index', $data);
		// $this->load->view('masjid/index', $data);
		// $this->load->view('donasi/index', $data);
		// $this->load->view('berita/index', $data);
		// $this->load->view('komentar/index', $data);
		$this->load->view('template/footer');
		}


		public function data_m(){
			//$this->load->view('admin/daftar_m');
			// $data =array(1,2,3 );;
			$this->load->view('admin/daftar_m');
	    }

	public function prosesinput()
	{
		$data['nama_m'] = $this->input->post('nama_m');
		$data['a_masjid'] = $this->input->post('a_masjid');
		$data['t_berdiri'] = $this->input->post('t_berdiri');
		$data['j_tampungan'] = $this->input->post('j_tampungan');
		$data['s_tanah'] = $this->input->post('s_tanah');
		$data['l_tanah'] = $this->input->post('l_tanah');
		$data['l_bangunan'] = $this->input->post('l_bangunan');
		$data['email'] = $this->input->post('email');
		


		$this->load->view('admin/tampil_m',$data);	
	}
}
 ?>