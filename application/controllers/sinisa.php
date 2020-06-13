<?php

class sinisa extends CI_Controller {
	//untuk mengeksekusi mahasiswa_mode lebih awal 
	function __construct(){
		parent:: __construct();
		$this->load->model('sinisa_model');
			// $this->load->library('template');
	}

	//READ BERANDA
    public function index(){
		$this->load->view('sinisa_home');
	}

	//KEMBALI
	public function back(){
		redirect('sinisa');
	}

	//READ PENYULUHAN
	public function penyuluhan(){
		$data['user'] = $this->sinisa_model->getAll()->result();
		$this->template->views('penyuluhan_view', $data);
	}

	/*public function pengajuan(){
		$this->load->view('crud/pengajuan_view');
	}*/

	//READ SEWA ALAT
	public function sewa(){
		$data['user'] = $this->sinisa_model->getSewa()->result_array();
		$this->load->view('sewa_view',$data);
	}

	//CRUD
	//TAMBAH PENGAJUAN PENYULUHAN USER
	public function tambah(){
		//$data['grup'] = $this->sinisa_model->getgrup()->result();
		//$data['user'] = $this->sinisa_model->getAll()->result();
		$this->load->view('crud/pengajuan_view');
	}

	//INPUT PENGAJUAN PENYULUHAN USER
	public function input(){
		$nama = $this->input->post('nama');
		$instansi = $this->input->post('nama_instansi');
		$status = $this->input->post('status');
		$tanggal_input = $this->input->post('tanggal_input');
		$tanggal_output = $this->input->post('tanggal_output');
		$materi = $this->input->post('materi');

		$data = array(
			'nama' => $nama,
			'nama_instansi' => $instansi,
			'status' => 'belum dikonfirmasi',
			'tanggal_input' => $tanggal_input,
			'tanggal_output' => $tanggal_output,
			'materi' => $materi
		);

		$this->sinisa_model->input_data($data, 'penyuluhan');
		redirect('sinisa/penyuluhan');
	}

	//EDIT PENYULUHAN ADMIN
	public function edit($id){
		$where = array('id' => $id);
		$data['grup'] = $this->sinisa_model->getgrup()->result();
		$data['user'] = $this->sinisa_model->edit_data($where, 'penyuluhan') ->result();
		// echo "<pre>";
		// print_r($data);
		$this->load->view('crud/edit_penyuluhan', $data);
	}

	//UPDATE PENYULUHAN ADMIN
	public function update(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$instansi = $this->input->post('nama_instansi');
		$tanggal_input = $this->input->post('tanggal_input');
		$tanggal_output = $this->input->post('tanggal_output');
		$materi = $this->input->post('materi');

		$data = array(
			'nama' =>$nama,
			'nama_instansi' => $instansi,
			'tanggal_input' => $tanggal_input,
			'tanggal_output' => $tanggal_output,
			'materi' => $materi
		);
		
		$where = array(
			'id' => $id
		);
		$this->sinisa_model->update_data($where,$data, 'penyuluhan');
		redirect('sinisa/penyuluhan');
	}

	//HAPUS PENYULUHAN ADMIN
	public function hapus($id){
		$where = array('id' => $id);
		$this->sinisa_model->hapus_data($where, 'penyuluhan');
		redirect('sinisa/penyuluhan');
	}

	/*public function konfirmasi($id){
		$where = array('id' => $id);
		$data['user'] = $this->sinisa_model->konfirmasi_data($where, 'penyuluhan') ->result();
		redirect('sinisa/penyuluhan');
	}*/

	//KONFIRMASI STATUS PENYULUHAN ADMIN
	public function konfirmasi_status($id){
		$status = $this->input->post('status');
		$data = array(
			'status' => 'sudah dikonfirmasi'
		);

		$where = array(
			'id' => $id
		);
		$this->sinisa_model->konfirmasi_status_data($where,$data, 'penyuluhan');
		redirect('sinisa/penyuluhan');
	}

	/*public function konfirmasi($id){
		$this->sinisa_model->konfirmasi_data($id, 'penyuluhan');
	}*/

	//READ DETAIL BARANG 
	public function detailsewa($id){
		$data['user'] = $this->sinisa_model->getdetailbarang($id)->row_array();
		$this->load->view('detailbarang_view',$data);
	}

	public function hapusbarang($id){
		$where = array('id_barang' => $$id);
		$data['grup'] = $this->sinisa_model->getgrup()->result();
		$this->sinisa_model->hapusdatabarang($where, 'barang');
		redirect('sinisa/sewa');
	}

	//EDIT BARANG ADMIN
	public function edit_barang($id){
		$where = array('id_barang' => $id);
		$data['grup'] = $this->sinisa_model->getgrup()->result();
		$data['user'] = $this->sinisa_model->editdatabarang($where, 'barang')->result();
		// echo "<pre>";
		// print_r($data);
		$this->load->view('crud/edit_barang', $data);
	}

	//UPDATE BARANG ADMIN
	public function updatebarang(){
		$id = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$gambar = $this->input->post('gambar');

		$data = array(
			'nama_barang' =>$nama_barang,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $gambar
		);
		
		$where = array(
			'id_barang' => $id
		);
		$this->sinisa_model->updatedatabarang($where,$data, 'barang');
		redirect('sinisa/sewa');
	}

	//FORM INPUT SEWA BARANG USER 
	public function sewabarang(){
		$data['user'] = [
			'id_barang' => $this->input->get('id'),
			'nama_barang' => $this->input->get('nama_barang')
		];
		//$where = array('id_barang' => $id);
		$data['barang'] = $this->sinisa_model->getdetailbarang($this->input->get('id'))->row();
		//echo $this->input->get('id');
		//echo $this->input->get('nama_barang');
		// echo "<pre>";
		// print_r($data);
		$this->load->view('crud/sewa_barang',$data);
	}

	//INPUT DATA SEWA BARANG USER
	public function inputsewa(){
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$no_telepon = $this->input->post('no_telepon');
		$nama_barang = $this->input->post('nama_barang');
		$id_barang = $this->input->post('id_barang');
		$tanggalsewa = $this->input->post('tanggalsewa');
		$tanggalkembali = $this->input->post('tanggalkembali');
		$lamasewa = $this->input->post('lamasewa');
		$harga_sewa = $this->input->post('harga_sewa');
		$asal = $this->input->post('asal');
		$alamat = $this->input->post('alamat');

		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'no_telepon' => $no_telepon,
			'nama_barang' => $nama_barang,
			'id_barang' => $id_barang,
			'tanggal_sewa' => $tanggalsewa,
			'tanggal_kembali' => $tanggalkembali,
			'jumlah_hari' => $lamasewa,
			'harga_sewa' => $harga_sewa,
			'asal' => $asal,
			'alamat' => $alamat
		);

		$this->sinisa_model->inputdatasewa($data, 'sewa');
		redirect('sinisa/sewa');
	}

	//TAMBAH BARANG ADMIN
	public function tambah_barang(){
		$this->load->view('crud/tambah_barang');
	}

	//INPUT DATA BARANG ADMIN
	public function inputbarang(){
		$id_barang = $this->input->post('id_barang');
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$gambar = $this->input->post('gambar');

		$data = array(
			'id_barang' => $id_barang,
			'nama_barang' => $nama_barang,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $gambar
		);

		$this->sinisa_model->inputdatabarang($data, 'barang');
		redirect('sinisa/sewa');
	}

	/*public function daftar_penyewa(){
		$this->load->view('crud/penyewa_view');
	}*/

	//READ DAFTAR PENYEWA ADMIN
	public function daftar_penyewa(){
		$data['user'] = $this->sinisa_model->getdaftarpenyewa()->result_array();
		//var_dump($data);
		$this->load->view('crud/penyewa_view',$data);
	}

	public function editpenyewa($nik){
		$where = array('nik' => $nik);
		//$data['grup'] = $this->sinisa_model->getgrup()->result();
		$data['user'] = $this->sinisa_model->editdatapenyewa($where, 'sewa')->row_array();
		$this->load->view('crud/edit_penyewa', $data);
	}

	public function updatedatapenyewa(){
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$no_telepon = $this->input->post('no_telepon');
		$nama_barang = $this->input->post('nama_barang');
		$id_barang = $this->input->post('id_barang');
		$tanggal_sewa = $this->input->post('tanggal_sewa');
		$tanggal_kembali = $this->input->post('tanggal_kembali');
		$lama_sewa = $this->input->post('lama_sewa');
		$harga_sewa = $this->input->post('harga_sewa');
		$asal = $this->input->post('asal');
		$alamat = $this->input->post('alamat');
	
		$data = array(
			'nik' =>$nik,
			'nama' => $nama,
			'no_telepon' => $no_telepon,
			'nama_barang' => $nama_barang,
			'id_barang' => $id_barang,
			'tanggal_sewa' => $tanggal_sewa,
			'tanggal_kembali' => $tanggal_kembali,
			'jumlah_hari' => $lama_sewa,
			'harga_sewa' => $harga_sewa,
			'asal' => $asal,
			'alamat' => $alamat
		);
			
		$where = array(
			'nik' => $nik
		);
		$this->sinisa_model->updatedatabarang($where,$data, 'sewa');
		redirect('sinisa/daftar_penyewa');
	}

	public function hapuspenyewa($nik){
		$where = array('nik' => $nik);
		$this->sinisa_model->hapusdatapenyewa($where, 'sewa');
		redirect('sinisa/daftar_penyewa');
	}
}