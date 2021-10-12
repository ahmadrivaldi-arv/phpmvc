<?php


class Mahasiswa_model{

    private $table = 'tbl_mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        $this->db->query('select * from '.$this->table);

        return $this->db->getAll();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query("select * from ".$this->table." where id=:id");

        $this->db->bind('id',$id);

        return $this->db->getOne();
    }

    public function tambahMahasiswa($data)
    {
        $query = "INSERT INTO tbl_mahasiswa VALUES (null,:nama,:nrp,:email,:jurusan)";

        $this->db->query($query);

        $this->db->bind('nama',$data['nama']);
        $this->db->bind('nrp',$data['nrp']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('jurusan',$data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusMahasiswa($id)
    {

        $query = "DELETE FROM tbl_mahasiswa WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('id',$id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editMahasiswa($data)
    {
        $query = "UPDATE tbl_mahasiswa SET nama = :nama,nrp = :nrp, email = :email, jurusan = :jurusan WHERE id = :id";

        $this->db->query($query);

        $this->db->bind('id',$data['id']);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('nrp',$data['nrp']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('jurusan',$data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}