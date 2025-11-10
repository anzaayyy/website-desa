<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<h2>Visi & Misi</h2>
<?php if ($visimisi): ?>
    <p><strong>Visi:</strong> <?= esc($visimisi['visi']) ?></p>
    <p><strong>Misi:</strong> <?= esc($visimisi['misi']) ?></p>
    <img src="<?= base_url($visimisi['gambar']) ?>" alt="Visi Misi" width="200">
    <br><br>
    <a href="<?= base_url('admin/visimisi/edit/'.$visimisi['id']) ?>" class="btn btn-primary">Edit</a>
<?php else: ?>
    <p>Data Visi & Misi belum ada</p>
<?php endif; ?>

<?= $this->endSection() ?>
