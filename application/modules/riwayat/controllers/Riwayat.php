<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Riwayat extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	//   is_logged_in();
	  $this->load->model("Riwayat_model",'riwayat');
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('tbl_user',['email' => 
		$this->session->userdata('email')]) ->row_array();
		$data['title']="Riwayat";
		$data['riwayat']=$this->riwayat->getriwayat();
	
	
		// $data['absensi'] = $this->Riwayat_model->getallabsn();
		$this->load->view('template/v_template',$data);
		$this->load->view('v_riwayat',$data);
		$this->load->view('template/v_template_footer');
		
	}
	public function pdf()
	{
		
		$this->load->library('dompdf_gen');
		$data['user'] =$this->riwayat->getuser();
		$data['absensi'] =$this->riwayat->getriwayat();
		$this->load->view('laporan_pdf',$data);
		
		$paper_size = 'A4';
		$orientation = 'landscape';
		$html =$this->output->get_output();
	
		$this->dompdf->set_paper($paper_size, $orientation);
		
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Catatan_aktivitas_magang.pdf",array('Attachment'=>0));

		
	}

	
	public function export()
	{
		$magang = $this->riwayat->export();
		
		
	
		$spreadsheet = new Spreadsheet();
		// tulis header/nama kolom 
		$spreadsheet->setActiveSheetIndex(0)
					->setCellValue('A1', 'No.')
					->setCellValue('B1', 'Tanggal')
					->setCellValue('C1', 'Aktivitas')
					->setCellValue('D1', 'Uraian Aktivitas')
					->setCellValue('E1', 'Foto Aktivitas')
					->setCellValue('F1', 'Tugas Link')
					->setCellValue('G1', 'Tugas File');
		
		$column = 2;
		$nomor = 1;
		// tulis data mobil ke cell
		foreach($magang as $data) {
			$spreadsheet->setActiveSheetIndex(0)
						->setCellValue('A' . $column, $nomor)
						->setCellValue('B' . $column, date('j F Y', strtotime($data->tanggal)))
						->setCellValue('C' . $column, $data->aktivitas)
						->setCellValue('D' . $column, $data->uraian_aktivitas)
						->setCellValue('E' . $column, base_url('/assets/doc/img_absen/').$data->foto_aktivitas)
						->setCellValue('F' . $column, $data->tgs_link)
						->setCellValue('G' . $column, base_url('/assets/doc/tugas/').$data->tgs_file);
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
		$fileName = 'Riwayat Aktivitas';
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

}