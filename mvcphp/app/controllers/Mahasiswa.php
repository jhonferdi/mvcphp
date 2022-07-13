<?php 

class Mahasiswa extends Controller {
    public function index(){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaByID($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function insert(){
        if ($this->model('Mahasiswa_Model')->insertDataMahasiswa($_POST)>0){
            popMessage::setPop('berhasil', 'ditambahkan', 'success');
            header('Location: http://localhost/mvcphp/public/mahasiswa');
            exit;
        } else {
            popMessage::setPop('gagal', 'ditambahkan', 'danger');
            header('Location: http://localhost/mvcphp/public/mahasiswa');
            exit;
        }
    }

    public function delete($id){
        if ($this->model('Mahasiswa_Model')->deleteDataMahasiswa($id)>0){
            popMessage::setPop('berhasil', 'dihapus', 'success');
            header('Location: http://localhost/mvcphp/public/mahasiswa');
            exit;
        } else {
            popMessage::setPop('gagal', 'dihapus', 'danger');
            header('Location: http://localhost/mvcphp/public/mahasiswa');
            exit;
        }
    }

    public function getubah(){
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaByID($_POST['id']));
    }

    public function update(){
        if ($this->model('Mahasiswa_Model')->updateDataMahasiswa($_POST)>0){
            popMessage::setPop('berhasil', 'diubah', 'success');
            header('Location: http://localhost/mvcphp/public/mahasiswa');
            exit;
        } else {
            popMessage::setPop('gagal', 'diubah', 'danger');
            header('Location: http://localhost/mvcphp/public/mahasiswa');
            exit;
        }
    }

    public function search(){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->searchMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}