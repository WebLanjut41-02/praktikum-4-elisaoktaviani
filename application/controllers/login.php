<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
 public function index(){
  $username = $this->session->userdata('username');
  if($username==""){
   $this->load->view('login');
  }else{
   redirect('login/admin');
  }
 }
  public function cekdata()
 {
  $username = $this->input->post("username");
  $password = $this->input->post("password");
  $user = array(
  		array("username" => "andi","password" => 1234),
  		array("username" => "budi","password" => 4321),
  		array("username" => "charlie","password" => 3821),
  );
  foreach($user as $isi){
 	if($username==$isi['username'] && $password==$isi['password']){
 		$this->session->set_userdata(array('username'=>$username));
 		redirect('login/admin');
 	}}
 	redirect('login');
 }
 public function admin(){
  $username = $this->session->userdata('username');
   if($username==""){
    redirect('login');
   }else{
    $this->load->view('admin');
   }
 }
 public function logout(){
  $this->session->sess_destroy();
  redirect('login');
 }
}

?>