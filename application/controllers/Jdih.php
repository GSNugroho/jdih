<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('./application/third_party/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Jdih extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		if ((!empty($_SESSION['nmUser'])) && (!empty($_SESSION['unameApp'])) && (!empty($_SESSION['passwrdApp'])) && (!empty($_SESSION['nik'])) && (!empty($_SESSION['gugus']))) {
			$this->load->library('session');
			$this->load->model('M_jdih');
			$this->load->library('form_validation');
			$this->load->library('ftp');
		} else {
			echo "Silahkan Login Terlebih Dahulu";
			// print_r($_SESSION); 
			echo redirect(base_url('../'));
		}
    }

	public function index()
	{
		$data = array(
			'prtn' => $this->M_jdih->get_prtn_baru(),
			'jns_1' => $this->M_jdih->get_t_jns1(),
			'jns_2' => $this->M_jdih->get_t_jns2(),
			'jns_3' => $this->M_jdih->get_t_jns3(),
			'jns_4' => $this->M_jdih->get_t_jns4(),
			'jns_5' => $this->M_jdih->get_t_jns5(),
			'jns_6' => $this->M_jdih->get_t_jns6(),
			'jns_7' => $this->M_jdih->get_t_jns7(),
			'jns_8' => $this->M_jdih->get_t_jns8(),
			'jns_9' => $this->M_jdih->get_t_jns9(),
			'jns_10' => $this->M_jdih->get_t_jns10(),
			'jns_11' => $this->M_jdih->get_t_jns11(),
			'r_l1' => $this->M_jdih->get_t_rl1(),
			'r_l2' => $this->M_jdih->get_t_rl2(),
			'grafik' => $this->M_jdih->get_tot_grafik_jns(),
			'grafik2' => $this->M_jdih->get_tot_grafik_rl()
		);
		$this->load->view('jdih/jdih_db', $data);
	}
	
	public function create()
	{
		$data = array(
			'dd_jns' => $this->M_jdih->get_jns(),
			'r_lingkup' => set_value('r_lingkup'),
			'jns_prtn' => set_value('jns_prtn'),
			'id_jns_prtn' => set_value('id_jns_prtn'),
			'th_prtn' => set_value('th_prtn'),
			'nmr_prtn' => set_value('nmr_prtn'),
			'nm_prtn' => set_value('nm_prtn'),
			'sts_prtn' => set_value('sts_prtn'),
			'stru_prtn' => set_value('stru_prtn'),
			'datau' => set_value('data')
		);
		$this->load->view('jdih/jdih_input_form', $data);
	}

	public function create_action()
	{
		$this->_rules();
		if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
		$kd_jdih = $this->kode();
		$dl_sts = 1;
		$data = array(
			'kd_jdih' => $this->kode(),
			'r_lingkup' => $this->input->post('r_lingkup', TRUE),
			'jns_prtn' => $this->input->post('id_jns_prtn', TRUE),
			'th_prtn' => $this->input->post('th_prtn', TRUE),
			'nmr_prtn' => $this->input->post('nmr_prtn', TRUE),
			'nm_prtn' => $this->input->post('nm_prtn', TRUE),
			'sts_prtn' => $this->input->post('sts_prtn', TRUE),
			'stru_prtn' => $this->input->post('stru_prtn', TRUE),
			'date_create' => date('Y-m-d'),
			'nm_doc_prtn' => $kd_jdih,
			'dl_sts' => $dl_sts
			// 'uradd' => $this->session->userdata('unameApp')
		);
		$this->do_upload();
		$this->M_jdih->insert($data);
		$this->session->set_flashdata('message', 'Tambah Data Peraturan Berhasil');
		redirect('Jdih/list_jdih');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('r_lingkup', 'Ruang Lingkup', 'trim|required');
		$this->form_validation->set_rules('jns_prtn', 'Jenis Peraturan', 'trim|required');
		$this->form_validation->set_rules('id_jns_prtn', 'Jenis Peraturan', 'trim|required');
		$this->form_validation->set_rules('th_prtn', 'Tahun Peraturan', 'trim|required');
		$this->form_validation->set_rules('nmr_prtn', 'Nomor Peraturan', 'trim|required');
		$this->form_validation->set_rules('nm_prtn', 'Nama Peraturan', 'trim|required');
		$this->form_validation->set_rules('sts_prtn', 'Status Peraturan', 'trim|required');
		$this->form_validation->set_rules('stru_prtn', 'Struktur Yang Berkaitan', 'trim|required');

		$this->form_validation->set_error_delimiters('<i class="fa fa-fw fa-info-circle text-danger"></i><span class="text-danger">', '</span>');
	}


	public function update($id){
		$row = $this->M_jdih->get_by_id($id);

		if($row){
			$rows = $this->M_jdih->get_by_id_jns($row->jns_prtn);
			if($rows){
				$jns_prtn = $rows->nm_jdih_jns;
			}

			$data = array(
				'kd_jdih' => set_value('kd_jdih', $row->kd_jdih),
				'r_lingkup' => set_value('r_lingkup', $row->r_lingkup),
				'jns_prtn' => set_value('jns_prtn', $jns_prtn),
				'id_jns_prtn' => set_value('id_jns_prtn', $row->jns_prtn),
				'th_prtn' => set_value('th_prtn', $row->th_prtn),
				'nmr_prtn' => set_value('nmr_prtn', $row->nmr_prtn),
				'nm_prtn' => set_value('nm_prtn', $row->nm_prtn),
				'sts_prtn' => set_value('sts_prtn', $row->sts_prtn),
				'stru_prtn' => set_value('stru_prtn', $row->stru_prtn),
				'nm_doc_prtn' => set_value('nm_doc_prtn', $row->nm_doc_prtn)
			);
			$this->load->view('jdih/jdih_edit_form', $data);
		}
	}

	public function update_action(){
		$data = array(
			'r_lingkup' => $this->input->post('r_lingkup', TRUE),
			'jns_prtn' => $this->input->post('id_jns_prtn', TRUE),
			'th_prtn' => $this->input->post('th_prtn', TRUE),
			'nmr_prtn' => $this->input->post('nmr_prtn', TRUE),
			'nm_prtn' => $this->input->post('nm_prtn', TRUE),
			'sts_prtn' => $this->input->post('sts_prtn', TRUE),
			'stru_prtn' => $this->input->post('stru_prtn', TRUE)
		);
		
		if(!empty($_FILES)){
			$this->do_upload_update($this->input->post('kd_jdih'));			
		}else{
			$this->input->post('data');}

		$this->M_jdih->update($this->input->post('kd_jdih'), $data);
		$this->session->set_flashdata('message', 'Sunting Data Peraturan Berhasil');
		redirect(base_url('jdih/list_jdih'));
	}

	public function read($id){
		$row = $this->M_jdih->get_by_id($id);

		if($row){
			$rl = $row->r_lingkup;
		if($rl == 1){
			$r_lingkup = 'Nasional';
		}else if($rl == 2){
			$r_lingkup = 'Internal RS';
		}else{
			$r_lingkup = '';
		}

		$js_prtn = $this->M_jdih->get_by_id_jns($row->jns_prtn);
		if($js_prtn){
			$j_prtn = $js_prtn->nm_jdih_jns;
		}

		$sp = $row->sts_prtn;
		if($sp == 1){
			$sts_prtn = 'Berlaku';
		}else if($sp == 2){
			$sts_prtn = 'Tidak Berlaku';
		}else{
			$sts_prtn ='';
		}
			$data = array(
				'kd_jdih' => set_value('kd_jdih', $row->kd_jdih),
				'r_lingkup' => $r_lingkup,
				'jns_prtn' => $j_prtn,
				'th_prtn' => set_value('th_prtn', $row->th_prtn),
				'nmr_prtn' => set_value('nmr_prtn', $row->nmr_prtn),
				'nm_prtn' => set_value('nm_prtn', $row->nm_prtn),
				'sts_prtn' => $sts_prtn,
				'stru_prtn' => set_value('stru_prtn', $row->stru_prtn),
				'nm_doc_prtn' => set_value('nm_doc_prtn', $row->nm_doc_prtn)
			);

			
		$this->load->view('jdih/jdih_read', $data);
		}
	}

	public function delete($id){
		$row = $this->M_jdih->get_by_id($id);
		$dl_sts = 0;

		if($row){
			$data = array(
				'dl_sts' => $dl_sts
			);
			$this->M_jdih->update($id, $data);
			$this->delete_file($id);
			$this->session->set_flashdata('messages', 'Hapus Data Peraturan Berhasil');
			redirect(base_url('Jdih/list_jdih'));
		}
	}

	public function delete_file($id){
		$this->load->helper('security');
		$this->load->helper('file');
		
		// $path = base_url('uploads/');
		$e_name = $id.'.pdf';
		$en_name = do_hash($e_name, 'md5');
    	unlink(FCPATH.'https://dt.rspantiwaluyo.com/jdih/'.$en_name.'.pdf');
	}

	public function list_jdih()
	{
		$this->load->view('jdih/jdih_list');
	}

	public function daftar_prtn(){
		$this->load->view('jdih/jdih_daftar');
	}
	
	public function do_upload()
	{
		$this->load->helper('security');
		$name = $this->kode().'.pdf';
		$en_name = do_hash($name, 'md5');
		
		$config = array(
		'upload_path' => "uploads/",
		'file_name' => $en_name,
		'allowed_types' => "pdf",
		'max_size' => "2048000",
		);
		$this->load->library('upload', $config);

		if($this->upload->do_upload('data'))
		{
			$upload_data = $this->upload->data();
        	$fileName = $upload_data['file_name'];
                
        	//File path at local server
        	$source = 'uploads/'.$fileName;
                
			//FTP configuration
			$ciphertext = 'bqySZoc9IFNZfT+lAUW1tFIQPGyNhgtqq/Iv5U5Zdhs7BQ+SAbbmbYgwnva56gKnZN6+zEl1lPbVL+hgBZSEBQ==';
			$c = base64_decode($ciphertext);
			$ivlen = openssl_cipher_iv_length($cipher="AES-256-CBC");
			$iv = substr($c, 0, $ivlen);
			$hmac = substr($c, $ivlen, $sha2len=32);
			$ciphertext_raw = substr($c, $ivlen+$sha2len);
			$key = 'RSPW5010';
			$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);

			$ftp_config['hostname'] = 'dt.rspantiwaluyo.com'; 
        	$ftp_config['username'] = 'ftp-rspw';
			$ftp_config['password'] = $original_plaintext;
			$ftp_config['port']		= 2121;
        	$ftp_config['debug']    = TRUE;
                
        	//Connect to the remote server
        	$this->ftp->connect($ftp_config);
                
        	//File upload path of remote server
			$destination = '/Web/upload/jdih/'.$fileName;
                
        	//Upload file to the remote server
        	$this->ftp->upload($source, ".".$destination);
                
        	//Close FTP connection
        	$this->ftp->close();
                
        	//Delete file from local server
        	@unlink($source);
		}
		else
		{
			$this->session->set_flashdata('messages', 'Upload Data Peraturan Gagal');
			redirect(base_url('Jdih/list_jdih'));
		}
	}

	public function do_upload_update($id)
	{
		$this->load->helper('security');
		$name = $id.'.pdf';
		$en_name = do_hash($name, 'md5');

		$config = array(
			'upload_path' => "uploads/",
			'file_name' => $en_name,
			'allowed_types' => "pdf",
			'overwrite' => TRUE,
			'max_size' => "2048000"
		);
		$this->load->library('upload', $config);
		if($this->upload->do_upload('data'))
		{
			
			$upload_data = $this->upload->data();
			$fileName = $upload_data['file_name'];
        // //File path at local server
        	$source = 'uploads/'.$fileName;
                
		//FTP configuration
			
			$ciphertext = 'bqySZoc9IFNZfT+lAUW1tFIQPGyNhgtqq/Iv5U5Zdhs7BQ+SAbbmbYgwnva56gKnZN6+zEl1lPbVL+hgBZSEBQ==';
			$c = base64_decode($ciphertext);
			$ivlen = openssl_cipher_iv_length($cipher="AES-256-CBC");
			$iv = substr($c, 0, $ivlen);
			$hmac = substr($c, $ivlen, $sha2len=32);
			$ciphertext_raw = substr($c, $ivlen+$sha2len);
			$key = 'RSPW5010';
			$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);

			$ftp_config['hostname'] = 'dt.rspantiwaluyo.com'; 
        	$ftp_config['username'] = 'ftp-rspw';
			$ftp_config['password'] = $original_plaintext;
			$ftp_config['port']		= 2121;
			$ftp_config['debug']    = TRUE;
			
        // Connect to the remote server
        	$this->ftp->connect($ftp_config);
        
        //File upload path of remote server
        	$destination = '/Web/upload/jdih/'.$fileName;
                
        //Upload file to the remote server
        	$this->ftp->upload($source, ".".$destination);
                
        //Close FTP connection
        	$this->ftp->close();
                
        //Delete file from local server
        	@unlink($source);
		}
	}

	public function download($id){
		$this->load->helper('download');
		$this->load->helper('security');

		$row = $this->M_jdih->get_by_id($id);
		if($row){
			$nm_prtn = $row->nm_prtn;
		}

		$e_name = $id.'.pdf';
		$en_name = do_hash($e_name, 'md5');

		if($this->uri->segment(3))
		{	
		    // $data   = file_get_contents('uploads/'.$en_name.'.pdf');
		    $data   = file_get_contents('https://dt.rspantiwaluyo.com/jdih/'.$en_name.'.pdf');
		}
		// $name   = $this->uri->segment(3);
		$name = $nm_prtn.'.pdf';
		force_download($name, $data);
	}

	public function read_pdf($id){
		$this->load->helper('download');
		$this->load->helper('security');
		// $id = base64_decode($id);

		$row = $this->M_jdih->get_by_id($id);
		if($row){
			$nm_prtn = $row->nm_prtn;
		}

		$e_name = $id.'.pdf';
		$en_name = do_hash($e_name, 'md5');
		$data = array('en_name' => $en_name);
		$this->load->view('jdih/jdih_read_pdf', $data);
	}

	public function export_excel(){
		$this->load->view('jdih/jdih_export');
	}

	public function export(){
		$data = $this->M_jdih->getexport();

		$spreadsheet = new Spreadsheet;

		$spreadsheet->setActiveSheetIndex(0)
					->setCellValue('A1', 'No')
					->setCellValue('B1', 'Nama Peraturan')
					->setCellValue('C1', 'Jenis Peraturan')
					->setCellValue('D1', 'Ruang Lingkup')
					->setCellValue('E1', 'Tahun Terbit')
					->setCellValue('F1', 'Nomor Peraturan')
					->setCellValue('G1', 'Status Peraturan')
					->setCellValue('H1', 'Bagian Terkait');
		$kolom = 2;
		$nomor = 1;
		foreach($data as $row) {

               $spreadsheet->setActiveSheetIndex(0)
                           ->setCellValue('A' . $kolom, $nomor)
                           ->setCellValue('B' . $kolom, $row->nm_prtn)
                           ->setCellValue('C' . $kolom, $row->jns_prtn)
						   ->setCellValue('D' . $kolom, $row->r_lingkup)
                           ->setCellValue('E' . $kolom, $row->th_prtn)
                           ->setCellValue('F' . $kolom, $row->nmr_prtn)
                           ->setCellValue('G' . $kolom, $row->sts_prtn)
                           ->setCellValue('H' . $kolom, $row->stru_prtn);
               $kolom++;
               $nomor++;

          }

          $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Data_PKS.xlsx"');
		// header('Content-Disposition: attachment;filename="Data_PKS.xls"');
	  	header('Cache-Control: max-age=0');

	  $writer->save('php://output');
	}

	public function jns_prtn(){
		$this->load->view('jns_jdih/jns_jdih_list');
	}
	public function create_jns_prtn(){
		$this->load->view('jns_jdih/jns_jdih_input');
	}
	public function create_jns_prtn_action(){
		$row = $this->M_jdih->get_by_jns_like($this->input->post('jns_prtn', TRUE));
		if($row){
			$this->session->set_flashdata('messagess', 'Nama Jenis Peraturan Tidak Boleh Sama');
			$this->create_jns_prtn();
		}else{
		$nomor = $this->M_jdih->get_no();
		foreach($nomor as $row){
			$dt = $row->maxkode;
		}
		$no = $dt;
		$no++;

		$aktif = 1;
		$data = array(
			'id_jns' => $no,
			'nm_jdih_jns' => $this->input->post('jns_prtn', TRUE),
			'bt_aktif' =>$aktif
		);

		$this->M_jdih->insert_jns($data);
		$this->session->set_flashdata('message', 'Tambah Data Jenis Peraturan Berhasil');
		redirect(base_url('Jdih/jns_prtn'));
	}
	}
	public function update_jns_prtn($id){
		$row = $this->M_jdih->get_by_id_jns($id);

		if($row){
			$data = array(
				'id_jns' => set_value('id_jns', $row->id_jns),
				'jns_prtn' => set_value('nm_jdih_jns', $row->nm_jdih_jns),
			);
			$this->load->view('jns_jdih/jns_jdih_edit', $data);
		}
	}
	public function update_jns_prtn_action(){
		$data = array(
			'nm_jdih_jns' => $this->input->post('jns_prtn', TRUE)
		);
		$this->M_jdih->update_jns($this->input->post('id_jns', TRUE), $data);
		$this->session->set_flashdata('message', 'Sunting Data Jenis Peraturan Berhasil');
		redirect(base_url('Jdih/jns_prtn'));
	}
	public function delete_jns_prtn($id){
		$row = $this->M_jdih->get_by_id_jns($id);

		$aktif = 0;
		if($row){
			$data = array(
				'bt_aktif' => $aktif
			);
		}
		$this->M_jdih->update_jns($id, $data);
		$this->session->set_flashdata('messages', 'Hapus Data Jenis Peraturan Berhasil');
		// $this->load->view('jns_jdih/jns_jdih_list');
		redirect(base_url('Jdih/jns_prtn'));
	}

	function kode(){
        $kode = $this->M_jdih->get_kode();
        foreach($kode as $row){
            $data = $row->maxkode;
        }

        $kd_jdih = $data;
        $noUrut = (int) substr($kd_jdih, 4, 6);
        $noUrut++;
        $char = "JDIH";
        $kodebaru = $char.sprintf("%06s", $noUrut);
        return $kodebaru;
	}

	function nomor_peraturan($jns_prtn){
		if($jns_prtn == 10){
			$kode = $this->M_jdih->get_no_se($jns_prtn);
			foreach($kode as $row){
				$data = $row->maxkode();
			}

			$nmr_prtn = $data;
			$noUrut = (int) substr($nmr_prtn, 0,3);
			$noUrut++;
			$char1 = "SE";
			$char2 = date('Y');
			$char3 = "RSPW";
			$nmr_br = $noUrut.'/'.$char1.'/'.$char3.'/'.$char2;
			return $nmr_br;

		}
	}

	function uploadifive(){
		$targetFolder = '/jdih/uploads';

		// Set the allowed file extensions
		$fileTypes = array('jpg', 'jpeg', 'gif', 'png', 'pdf'); // Allowed file extensions

		$verifyToken = md5('unique_salt' . $_POST['timestamp']);

		if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
			$tempFile   = $_FILES['Filedata']['tmp_name'];
			$uploadDir  = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
			//$targetFile = $uploadDir . basename($_FILES['Filedata']['name']);
			$targetFile = rtrim($uploadDir, '/') . '/' . $_FILES['Filedata']['name'];
			echo $targetFile;
			// Validate the filetype
			$fileParts = pathinfo($_FILES['Filedata']['name']);
			if (in_array(strtolower($fileParts['extension']), $fileTypes)) {

				// Save the file
				move_uploaded_file($tempFile, $targetFile);
				// echo $targetFile;
				echo 1;

			} else {

				// The file type wasn't allowed
				echo 'Invalid file type.';

			}
		}
	}

	function check(){
		$targetFolder = '/jdih/uploads'; // Relative to the root and should match the upload folder in the uploader script/

		if (file_exists($_SERVER['DOCUMENT_ROOT'] . $targetFolder . '/' . $_POST['filename'])) {
			echo 1;
		} else {
			echo 0;
		}
	}

	function tbl_list(){
		## Read value
		$draw = $_POST['draw'];
		$baris = $_POST['start'];
		$rowperpage = $_POST['length']; // Rows display per page
		$columnIndex = $_POST['order'][0]['column']; // Column index
		$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
		$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
		$searchValue = $_POST['search']['value']; // Search value

		## Search 
		$searchQuery = " ";
		$searchByLingkup = $this->input->post('searchByLingkup');
		$searchByStatus  = $this->input->post('searchByStatus');
		if($searchByLingkup != ''){
			$searchQuery .= "and r_lingkup = '".$searchByLingkup."'";
		}
		if($searchByStatus != ''){
			$searchQuery .= "and sts_prtn = '".$searchByStatus."'";
		}

		if($searchValue != ''){
		$searchQuery .= " and (
		nm_jdih_jns like '%".$searchValue."%' or 
		th_prtn like '%".$searchValue."%' or 
		nmr_prtn like '%".$searchValue."%' or 
		nm_prtn like '%".$searchValue."%' or
		stru_prtn like '%".$searchValue."%' ) ";
		}

		## Total number of records without filtering
		$sel = $this->M_jdih->get_total_dt();
		// $records = sqlsrv_fetch_array($sel);
		foreach($sel as $row){
			$totalRecords = $row->allcount;
		}
		

		## Total number of record with filtering
		$sel = $this->M_jdih->get_total_fl($searchQuery);
		// $records = sqlsrv_fetch_assoc($sel);
		foreach($sel as $row){
			$totalRecordwithFilter = $row->allcount;
		}
		

		## Fetch records
		$empQuery = $this->M_jdih->get_total_ft($searchQuery, $columnName, $columnSortOrder, $baris, $rowperpage);
		$empRecords = $empQuery;
		$data = array();

		foreach($empRecords as $row){
		$cek = '<a href="perawatan/cek/'.$row->kd_jdih.'" class="btn btn-success btn-circle">
		<i class="fas fa-check"></i>
		</a>';
		
		$button = '
		<a href="read/'.$row->kd_jdih.'.html" class="btn btn-info">
		<i class="fa fa-info"></i>
		</a>
		<a href="update/'.$row->kd_jdih.'.html" class="btn btn-warning">
        <i class="fa fa-edit"></i>
        </a>
		<a href="delete/'.$row->kd_jdih.'" class="btn btn-danger">
		<i class="fa fa-trash"></i>
		</a>
		';
		$en_kd = base64_encode($row->kd_jdih);
		$pdf = '
		<a href="read_pdf/'.$row->kd_jdih.'" target="_blank">
		<i class="fa fa-file-pdf-o"></i>
		'.$row->nm_prtn.'
		</a>
		';
		
		$rl = $row->r_lingkup;
		if($rl == 1){
			$r_lingkup = 'Nasional';
		}else if($rl == 2){
			$r_lingkup = 'Internal RS';
		}else{
			$r_lingkup = '';
		}

		$sp = $row->sts_prtn;
		if($sp == 1){
			$sts_prtn = 'Berlaku';
		}else if($sp == 2){
			$sts_prtn = 'Tidak Berlaku';
		}else{
			$sts_prtn ='';
		}

		$data[] = array( 
			"nm_jdih_jns" => $row->nm_jdih_jns,
			"r_lingkup" => $r_lingkup,
			"th_prtn" => $row->th_prtn,
			"nmr_prtn" => $row->nmr_prtn,
			"nm_prtn" => $row->nm_prtn,
			"sts_prtn" => $sts_prtn,
			"stru_prtn" => $row->stru_prtn,
			"nm_doc_prtn" => $pdf,
			"action" => $button
		);
		}

		## Response
		$response = array(
		"draw" => intval($draw),
		"iTotalRecords" => $totalRecords,
		"iTotalDisplayRecords" => $totalRecordwithFilter,
		"aaData" => $data
		);

		echo json_encode($response);
	}

	function tbl_jns_prtn(){
		## Read value
		$draw = $_POST['draw'];
		$baris = $_POST['start'];
		$rowperpage = $_POST['length']; // Rows display per page
		$columnIndex = $_POST['order'][0]['column']; // Column index
		$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
		$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
		$searchValue = $_POST['search']['value']; // Search value

		## Search 
		$searchQuery = " ";
		if($searchValue != ''){
		$searchQuery = " and (
		nm_jdih_jns like '%".$searchValue."%' ) ";
		}

		## Total number of records without filtering
		$sel = $this->M_jdih->get_total_dt_jns();
		// $records = sqlsrv_fetch_array($sel);
		foreach($sel as $row){
			$totalRecords = $row->allcount;
		}
		

		## Total number of record with filtering
		$sel = $this->M_jdih->get_total_fl_jns($searchQuery);
		// $records = sqlsrv_fetch_assoc($sel);
		foreach($sel as $row){
			$totalRecordwithFilter = $row->allcount;
		}
		

		## Fetch records
		$empQuery = $this->M_jdih->get_total_ft_jns($searchQuery, $columnName, $columnSortOrder, $baris, $rowperpage);
		$empRecords = $empQuery;
		$data = array();

		foreach($empRecords as $row){
		
		$button = '
		<a href="update_jns_prtn/'.$row->id_jns.'" class="btn btn-warning btn-circle">
        <i class="fa fa-edit"></i>
        </a>
		<a href="delete_jns_prtn/'.$row->id_jns.'" class="btn btn-danger btn-circle">
		<i class="fa fa-trash"></i>
		</a>
		';
		
		$data[] = array( 
			"nm_jdih_jns" => $row->nm_jdih_jns,
			"action" => $button
		);
		}

		## Response
		$response = array(
		"draw" => intval($draw),
		"iTotalRecords" => $totalRecords,
		"iTotalDisplayRecords" => $totalRecordwithFilter,
		"aaData" => $data
		);

		echo json_encode($response);
	}

	function autojenis() {
        $returnData = array();
        
        // Get skills data
        $conditions['searchTerm'] = $this->input->get('term');
        $conditions['conditions']['bt_aktif'] = '1';
        $skillData = $this->M_jdih->autojns($conditions);
        
        // Generate array
        if(!empty($skillData)){
            foreach ($skillData as $row){
                $data['id'] = $row['id_jns'];
                $data['value'] = $row['nm_jdih_jns'];
                array_push($returnData, $data);
            }
        }
        
        // Return results as json encoded array
        echo json_encode($returnData);die;
	}
	
	function autostrk() {
        $returnData = array();
        
        // Get skills data
        $conditions['searchTerm'] = $this->input->get('term');
        // $conditions['conditions']['bt_aktif'] = '1';
        $skillData = $this->M_jdih->autostrk($conditions);
        
        // Generate array
        if(!empty($skillData)){
            foreach ($skillData as $row){
                $data['id'] = $row['vc_k_gugus'];
                $data['value'] = $row['vc_n_gugus'];
                array_push($returnData, $data);
            }
        }
        
        // Return results as json encoded array
        echo json_encode($returnData);die;
    }
}
?>
