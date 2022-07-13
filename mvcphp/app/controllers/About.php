<?php

class About extends Controller{
    public function index($nama = 'Jhon', $status = 'mahasiswa', $semester = 6){
        $dataA['nama'] = $nama;
        $dataA['status'] = $status;
        $dataA['semester'] = $semester; 
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $dataA);
        $this->view('templates/footer');
    }

    public function page(){
        $data['judul'] = 'Page';
        $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}