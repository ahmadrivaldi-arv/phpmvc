

<!-- <style>
    .card-img-rounded{
        border-radius:50%;
        width: 180px;
        height: 180px;
        margin: 40px auto 0 auto;
        display:block;
    }
    .card-body h5.card-title{
        font-weight:bold;
        font-size:24px;
    }
    .card-body{
        box-shadow:5px 20px 50px 20px  rgba(0,0,0,0.15);
        background-color:#0C4071;
        color:#fff;
        border-radius:10px;
    }
    .card-body button{
        border:none;
        display:block;
        width:138px;
        height: 100%;
        background-color:#00b4bf;
        padding:5px;
        font-size:24px;
        text-align:center;
        color:#fff;
        margin:30px auto 0 auto;
        border-radius:10px;
    }
    .card-body button a{
        color:#fff;
    }
</style> -->
<div class="container mt-5">

    <div class="row py-5 d-flex justify-content-center align-items-center">
        <div class="col-lg-5">
            <div class="card shadow-lg" style="border-radius:10px;">
                <img src="<?= BASE_URL ?>/img/tom-holland.jpg" class="card-img-top" alt="..." style="border-radius:10px">
                <div class="card-body">
                    <h5 class="card-title mb-3"><?= $data['mhs']['nama'] ?></h5>
                    <h6 class="card-subtitle text-muted mb-2"><?= $data['mhs']['nrp']?> | <?= $data['mhs']['email']?> </h6>
                    <p class="card-text"><?= $data['mhs']['nama'] ?> adalah seorang cerdikiawan dan dia kuliah mengambil jurusan <?= $data['mhs']['jurusan'] ?>.</p>
                    <a href="<?= BASE_URL ?>/mahasiswa" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="row d-flex py-5 justify-content-center align-items-center">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <img src="<?= BASE_URL ?>/img/tom-holland.jpg" alt="" class="card-img-top card-img-rounded">
                    <h5 class="card-title text-center pt-3"><?= $data['mhs']['nama'] ?></h5>
                    <h6 class="card-subtitle text-muted mb-2 text-center"><?= $data['mhs']['email'] ?></h6>
                    <p class="card-text text-center"><?= $data['mhs']['nama'] ?> adalah seorang cerdikiawan dia berkuliah di kampusku dengan mengambil jurusan <?= $data['mhs']['jurusan'] ?>!</p>
                    <a href="<?= BASE_URL ?>/mahasiswa"><button class="btn"><i class="fas fa-arrow-left"></i></button></a>
                </div>
            </div>
        </div>
    </div> -->


</div>