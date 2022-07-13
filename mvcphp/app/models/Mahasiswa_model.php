<?php

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getMahasiswa(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaByID($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->Single();
    }

    public function insertDataMahasiswa($data){
        $query =  "INSERT INTO mahasiswa VALUES ('', :nama, :nim, :kelas)";
        $this->db->query($query);
        $this->db->bind('nama', htmlspecialchars($data['nama']));
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('kelas', $data['kelas']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteDataMahasiswa($id){
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataMahasiswa($data){
        $query =  "UPDATE mahasiswa SET nama = :nama, nim = :nim, kelas = :kelas WHERE id= :id";
        $this->db->query($query);
        $this->db->bind('nama', htmlspecialchars($data['nama']));
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('id', $data['id']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchMahasiswa(){
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword OR nim LIKE :keyword OR kelas LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}