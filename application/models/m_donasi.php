<?php
defined('BASEPATH') OR exit('No direct script access allowed');

public class m_donasi extends CI_Model{
    public function donasi($id_donasi,$zakat,$infaq,$shadaqah,$jumlah_donasi){
        $data = array(
            'id_donasi' => $id_donasi,
            'zakat' => $zakat,
            'infaq' => $infaq,
            'shadaqah' => $shadaqah,
            'jumlah_donasi' => $jumlah_donasi
        );
    }
    public function getdonasi(){
        $this->db->from('masjapp');
        $query = this->db->get();

        return $query->result();
    }

}


?>