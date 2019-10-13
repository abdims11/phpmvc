<?php 

class Mahasiswa extends Controller{
	public function index()
	{
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
		$this->view('templates/header',$data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id = null)
	{
		$data['judul'] = 'Detail Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('templates/header',$data);
		$this->view('mahasiswa/detail', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		//var_dump($_POST);
		if ($this->model('Mahasiswa_model')->setMahasiswa($_POST) > 0) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
		 	header('location: ' . BASEURL . '/mahasiswa');
		 	exit;
		 }else {
		 	Flasher::setFlash('gagal', 'ditambahkan', 'danger');
		 	header('location: ' . BASEURL . '/mahasiswa');
		 	exit;
		 }
	}

	public function hapus($id)
	{
		if ($this->model('Mahasiswa_model')->hapusMahasiswa($id) > 0) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
		 	header('location: ' . BASEURL . '/mahasiswa');
		 	exit;
		 }else {
		 	Flasher::setFlash('gagal', 'dihapus', 'danger');
		 	header('location: ' . BASEURL . '/mahasiswa');
		 	exit;
		 }

	}

	public function getEdit()
	{
		echo json_encode( $this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']) );
	}

	public function edit()
	{
		if ($this->model('Mahasiswa_model')->editMahasiswa($_POST) > 0) {
			Flasher::setFlash('berhasil', 'diedit', 'success');
		 	header('location: ' . BASEURL . '/mahasiswa');
		 	exit;
		 }else {
		 	Flasher::setFlash('gagal', 'diedit', 'danger');
		 	header('location: ' . BASEURL . '/mahasiswa');
		 	exit;
		 }
	}

	public function cari()
	{
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->cariMahasiswa();
		$this->view('templates/header',$data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}
}