<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Website Desa') ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/style.css'); ?>" />

    <!-- Font Awesome (icon) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
</head>
<body class="admin-page">

    <!-- Sidebar -->
    <div class="sidebar">
        <span class="close-btn" onclick="closeSidebar()">✖</span>
            <div class="logo-admin">
                <a class="logo-img">
                    <img src="<?= base_url('assets/admin/img/logo.jpeg') ?>" alt="Logo Desa">
                </a>
                <h2>Admin Desa</h2>
            </div>
        <a href="<?= base_url('admin/dashboard') ?>"><i class="fa fa-home"></i> Dashboard</a>
        <a href="<?= base_url('admin/sejarah') ?>"><i class="fa fa-book"></i> Sejarah Desa</a>
        <a href="<?= base_url('admin/visimisi') ?>"><i class="fa fa-book"></i> Visi Misi</a>
        <a href="<?= base_url('admin/berita') ?>"><i class="fa fa-newspaper"></i> Berita</a>
        <a href="<?= base_url('admin/pengumuman') ?>"><i class="fa fa-newspaper"></i> Pengumuman</a>
        <a href="<?= base_url('admin/agenda') ?>"><i class="fa fa-newspaper"></i> Agenda</a>
        <a href="<?= base_url('admin/wilayah') ?>"><i class="fa fa-newspaper"></i> Wilayah</a>
        <a href="<?= base_url('logout') ?>"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="topbar">
            <span class="menu-toggle" onclick="toggleSidebar()">&#9776;</span>
            <span>Welcome, Admin</span>
            <div class="dropdown">
                <a class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="User" width="30" height="30" class="rounded-circle">
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userMenu">
                    <li>
                    <form action="<?= base_url('logout') ?>" method="post" class="m-0">
                        <button type="submit" class="dropdown-item text-danger">Log Out</button>
                    </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="">
            <?= $this->renderSection('content') ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/admin/js/script.js'); ?>"></script>
</body>
</html>
