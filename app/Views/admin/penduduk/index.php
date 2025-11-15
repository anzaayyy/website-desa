<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="fw-bold">Data Penduduk</h3>
    <a href="<?= base_url('admin/penduduk/create') ?>" class="btn btn-primary">+ Tambah Penduduk</a>
</div>

<?php if (session()->getFlashdata('success')): ?>
  <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>JK</th>
            <th>Tgl Lahir</th>
            <th>Dusun</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($penduduk as $p): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= esc($p['nik']) ?></td>
            <td><?= esc($p['nama']) ?></td>
            <td><?= $p['jenis_kelamin']=='L' ? 'Laki-laki' : 'Perempuan' ?></td>
            <td><?= esc($p['tanggal_lahir']) ?></td>
            <td><?= esc($p['dusun']) ?></td>
            <td>
                <a href="<?= base_url('admin/penduduk/edit/'.$p['id_penduduk']) ?>" class="btn btn-sm btn-warning">Edit</a>
                <a onclick="return confirm('Yakin hapus?')" 
                   href="<?= base_url('admin/penduduk/delete/'.$p['id_penduduk']) ?>" 
                   class="btn btn-sm btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= $this->endSection() ?>
