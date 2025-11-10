<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Admin Panel') ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="<?= base_url('admin/css/style.css'); ?>" />

    <!-- Font Awesome (icon) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="p-3">ADMIN</h4>
        <a href="<?= base_url('admin/dashboard') ?>"><i class="fa fa-home"></i> Dashboard</a>
        <a href="<?= base_url('admin/sejarah') ?>"><i class="fa fa-book"></i> Sejarah Desa</a>
        <a href="<?= base_url('admin/visimisi') ?>"><i class="fa fa-book"></i> Visi Misi</a>
        <a href="<?= base_url('admin/berita') ?>"><i class="fa fa-newspaper"></i> Berita</a>
        <a href="<?= base_url('admin/pengumuman') ?>"><i class="fa fa-newspaper"></i> Pengumuman</a>
        <a href="<?= base_url('admin/agenda') ?>"><i class="fa fa-newspaper"></i> Agenda</a>
        <a href="<?= base_url('logout') ?>"><i class="fa fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <!-- Topbar -->
        <div class="topbar">
            <span>Welcome, Admin</span>
            <span><?= date('d M Y H:i') ?></span>
        </div>

        <!-- Page Content -->
        <div class="mt-3">
            <?= $this->renderSection('content') ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
