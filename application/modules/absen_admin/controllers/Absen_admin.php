<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Absen_admin extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
		if ($this->session->userdata('role_id') !=1 && $this->session->userdata('role_id') !=5){
			redirect('user/blocked');
		
		}
	  
	  $this->load->model("Absen_admin_model",'absen');
	}
	public function index()
	{
		$data['title'] = 'Catatan Aktivitas';
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')])->row_array();
		$data['role']=$this->db->get_where('tbl_user')->result_array();
		$data['absen']=$this->absen->getabsn();
		
		
		// $data['absensi'] = $this->Riwayat_model->getallabsn();
		$this->load->view('template/v_template',$data);
		$this->load->view('v_absen_admin',$data);
		$this->load->view('template/v_template_footer');
		
	}
	public function pdf()
	{
		$this->load->library('dompdf_gen');

		$data['absensi'] = $this->absen->getabsn();
		$this->load->view('laporan_pdf',$data);


		$paper_size = 'A4';
		$orientation = 'potrait';
		
		
		$html =$this->output->get_output();
		
		$this->dompdf->set_paper($paper_size, $orientation);
		
		$this->dompdf->load_html($html);
		
		$this->dompdf->render();
		$this->dompdf->stream("Catatan_aktivitas_magang.pdf",array('Attachment'=>0));

		
	}

	public function export()
	{
		$magang = $this->absen->export();
		
		
	
		$spreadsheet = new Spreadsheet();
		// tulis header/nama kolom 
		$spreadsheet->setActiveSheetIndex(0)
					->setCellValue('A1', 'No.')
					->setCellValue('B1', 'Tanggal')
					->setCellValue('C1', 'Nama')
					->setCellValue('D1', 'NIM / NISN')
					->setCellValue('E1', 'Aktivitas')
					->setCellValue('F1', 'Uraian Aktivitas')
					->setCellValue('G1', 'Foto Aktivitas')
					->setCellValue('H1', 'Tugas Link')
					->setCellValue('I1', 'Tugas File');
		
		$column = 2;
		$nomor = 1;
		// tulis data mobil ke cell
		foreach($magang as $data) {
			$spreadsheet->setActiveSheetIndex(0)
						->setCellValue('A' . $column, $nomor)
						->setCellValue('B' . $column, date('j F Y', strtotime($data->tanggal)))
						->setCellValue('C' . $column, $data->nama)
						->setCellValue('D' . $column, $data->nimnis)
						->setCellValue('E' . $column, $data->aktivitas)
						->setCellValue('F' . $column, $data->uraian_aktivitas)
						->setCellValue('G' . $column, base_url('/assets/doc/img_absen/').$data->foto_aktivitas)
						->setCellValue('H' . $column, $data->tgs_link)
						->setCellValue('I' . $column, base_url('/assets/doc/tugas/').$data->tgs_file);
			$column++;
			$nomor++;
			foreach (range('A', $spreadsheet->getActiveSheet()->getHighestDataColumn()) as $col) {
				$spreadsheet->getActiveSheet()
					->getColumnDimension($col)
					->setAutoSize(true);
			}
		}
		// tulis dalam format .xlsx
		$writer = new Xlsx($spreadsheet);
		$fileName = 'Riwayat Aktivitas Peserta Magang';
		// Redirect hasil generate xlsx ke web client
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename='.$fileName.'.xlsx');
		header('Cache-Control: max-age=0');
	
		$writer->save('php://output');
	}

	public function download($absn)
	{
		$this->load->helper(array('download','url'));
		force_download(FCPATH.'./assets/doc/tugas/'.$absn, null);
		redirect('riwayat');
	}
	public function verif_absen($id)
	{
		
		$id1 =$id;
		$data = array(
			'verif_absn' => 1
		  );
		  $this->db->where('id',$id1);
		  $this->db->update('tbl_absensi', $data);
		
		  redirect(base_url('absen_admin')); 

	}

}