<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/bootstrap.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">

    <title><?= $data['title'] ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="<?= BASE_URL ?>">PHP<span class="text-danger">MVC</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= $data['nav_status']['page_home'] ?>" aria-current="page" href="<?= BASE_URL ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $data['nav_status']['page_mahasiswa'] ?>" href="<?= BASE_URL ?>/mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $data['nav_status']['page_about'] ?>" href="<?= BASE_URL ?>/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $data['nav_status']['page_login'] ?>" href="<?= BASE_URL ?>/login">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>