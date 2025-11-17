<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="fw-bold">Data Perangkat Desa</h3>
    <a href="<?= base_url('admin/perangkat/create') ?>" class="btn btn-primary">+ Tambah</a>
</div>

<?php if (session()->getFlashdata('success')): ?>
  <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Foto</th>
    <th>Nama</th>
    <th>Jabatan</th>
    <th>Aksi</th>
  </tr>

  <?php foreach ($perangkat as $p): ?>
    <tr>
      <td><?= $p['id_perangkat'] ?></td>
      <td>
        <img src="<?= base_url('uploads/perangkat/' . ($p['foto'] ?? 'pejabat.jpeg')) ?>"
             width="60" class="rounded">
      </td>
      <td><?= esc($p['nama']) ?></td>
      <td><?= esc($p['jabatan']) ?></td>
      <td>
        <a class="btn btn-sm btn-warning" href="<?= base_url('admin/perangkat/edit/'.$p['id_perangkat']) ?>">Edit</a>
        <a class="btn btn-sm btn-danger" href="<?= base_url('admin/perangkat/delete/'.$p['id_perangkat']) ?>"
           onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
      </td>
    </tr>
  <?php endforeach; ?>

</table>

<?= $this->endSection() ?>
