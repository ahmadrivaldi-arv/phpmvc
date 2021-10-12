<div class="container mt-5">

    <div class="row">
        <div class="col-lg-12">
            <?php FlasherMessage::showMessage() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahMahasiswa"><i
                    class="fas fa-plus"></i></button>
        </div>
    </div>
    <div class="row py-5">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">NRP</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data['mhs'] as $data_mhs): ?>
                        <tr>
                            <td><?=$data_mhs['nama'] ?></td>
                            <td><?=$data_mhs['nrp'] ?></td>
                            <td><?=$data_mhs['email'] ?></td>
                            <td><?=$data_mhs["jurusan"] ?></td>
                            <td>

                                <a href="<?= BASE_URL ?>/mahasiswa/detail/<?= $data_mhs['id'] ?>"
                                    class="text-warning text-decoration-none">
                                    <i class="fas fa-angle-double-right fa-lg"></i>
                                </a>


                                <a href=""
                                    class="text-primary text-decoration-none" data-bs-toggle="modal" data-bs-target="#editMahasiswa-<?= $data_mhs['id'] ?>">
                                    <i class="fas fa-edit fa-md"></i>
                                </a>
                                <a href="<?= BASE_URL ?>/mahasiswa/hapus/<?= $data_mhs['id'] ?>"
                                    class="text-danger text-decoration-none"
                                    onclick="return confirm('Yakin ingin menghapus?')">
                                    <i class="fas fa-trash fa-md"></i>
                                </a>

                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</div>




<!-- Modal -->
<div class="modal fade" id="tambahMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah data mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL ?>/mahasiswa/tambah" method="post">

                    <div class="form-group mb-2">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" name="nama" id='nama'>
                    </div>
                    <div class="form-group mb-2">
                        <label for="nrp" class="form-label">NRP:</label>
                        <input type="number" class="form-control" name="nrp" id='nrp'>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id='email'>
                    </div>
                    <div class="form-group mb-2">
                        <label for="jurusan" class="form-label">Jurusan:</label>
                        <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                            <option selected>Pilih Jurusan</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Industry">Teknik Industry</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Ilmu Hukum">Ilmu Hukum</option>
                            <option value="Matematika">Matematika</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Modal -->
<?php foreach ($data['mhs'] as $data_mhs):?>
<div class="modal fade" id="editMahasiswa-<?= $data_mhs['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit data mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL ?>/mahasiswa/edit" method="post">
                    <input type="hidden" value="<?= $data_mhs['id'] ?>" name="id">
                    <div class="form-group mb-2">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" class="form-control" name="nama" id='nama' value="<?= $data_mhs['nama']?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="nrp" class="form-label">NRP:</label>
                        <input type="number" class="form-control" name="nrp" id='nrp'  value="<?= $data_mhs['nrp']?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" id='email' value="<?= $data_mhs['email']?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jurusan" class="form-label">Jurusan:</label>
                        <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                            <option selected><?= $data_mhs['jurusan']?></option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Industry">Teknik Industry</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Ilmu Hukum">Ilmu Hukum</option>
                            <option value="Matematika">Matematika</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Change</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>