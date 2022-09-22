<?php
class Profil_model extends CI_Model
{


    public function update_data($data)
    {
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('tbl_user',$data);
  

    }
    public function simpan_data()
    {
      $config['upload_path'] = './assets';
      $config['allowed_types'] = 'jpg|png|gif|jpeg';
      $config['max_size'] = '2048000';
      // $config['max_width'] = '1024';
      // $config['max_height'] = '768';
      $config['file_name'] = url_title($this->input->post('gambar'));
      $filename = $this->upload->file_name;
      $this->upload->initialize($config);
      $this->upload->do_upload('gambar');
      $data = $this->upload->data();
  
  
      $data = array(
        'id_produk' => "",
        'nama_produk' => $this->input->post('nama_produk'),
        'harga' => $this->input->post('harga'),
        'kategori'         => $this->input->post('id'),
        'deskripsi' => $this->input->post('deskripsi'),
        'gambar' => $data['file_name']
      );
      $this->db->insert('tbl_produk', $data);
      $this->session->set_flashdata('pesan', 'Ditambahkan');
      redirect('barang');
    }
    public function getdata()
    {
      $data=$this->session->userdata('nimnis');

      $query= "SELECT `tbl_user`.*,`tbl_dokumen`.*
      FROM `tbl_user` 
      LEFT JOIN `tbl_dokumen` 
      on `tbl_user`.`nimnis`=`tbl_dokumen`.`nimnis_doc`
      WHERE `tbl_user`.`nimnis`='$data'"
      ;
    return $this->db->query($query)->row_array();
    }
    public function hitungmagang()
    {
      $query= "SELECT COUNT(`tbl_user`.`id`) 
      AS magang FROM `tbl_user` 
      WHERE `tbl_user`.`role_id`=2"
      ;
      return $this->db->query($query)->row_array();
    }


}
