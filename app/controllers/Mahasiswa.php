<?php


class Mahasiswa extends Controller{


    public function index()
    {
        $data_params = ['title'=>"Mahasiswa",'nav_status'=>['page_mahasiswa'=>'active']];
        $data_params['mhs'] = $this->model("Mahasiswa_model")->getAllMahasiswa();
        $this->view("templates/header",$data_params);
        $this->view("mahasiswa/index",$data_params);
        $this->view("templates/footer");
    }    
    public function detail($id)
    {
        $data_params = ['title'=>"Detail Mahasiswa",'nav_status'=>['page_mahasiswa'=>'active']];

        $data_params['mhs'] = $this->model("Mahasiswa_model")->getMahasiswaById($id);
        $this->view("templates/header",$data_params);
        $this->view("mahasiswa/detail",$data_params);
        $this->view("templates/footer");
    }    

    public function tambah()
    {

        if($this->model("Mahasiswa_model")->tambahMahasiswa($_POST) > 0 )
        {
            FlasherMessage::setMessage('Data berhasil ditambahkan','Success','success');
            header("Location:". BASE_URL ."/mahasiswa");
            exit;
        }else
        {
            FlasherMessage::setMessage('Data gagal ditambahkan','Gagal','danger');
            header("Location:". BASE_URL ."/mahasiswa");
            exit;
        }
        
    }

    public function hapus($id)
    {
        if($this->model("Mahasiswa_model")->hapusMahasiswa($id) > 0)
        {
            FlasherMessage::setMessage("Data berhasil dihapus","Dihapus","success");
            header("location:". BASE_URL ."/mahasiswa");
            exit;
        }else
        {
            FlasherMessage::setMessage("Data gagal dihapus","Gagal","danger");
            header("location:". BASE_URL ."/mahasiswa");
            exit;
        }
    }

    public function edit()
    {
        if($this->model("Mahasiswa_model")->editMahasiswa($_POST) > 0)
        {
            FlasherMessage::setMessage("Data berhasil diupdate","Update","success");
            header("location:". BASE_URL ."/mahasiswa");
            exit;
        }else
        {
            FlasherMessage::setMessage("Data gagal diupdate","Gagal","danger");
            header("location:". BASE_URL ."/mahasiswa");
            exit;
        }
    }
}