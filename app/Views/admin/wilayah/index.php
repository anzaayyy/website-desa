<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="container">

  <h3 class="fw-bold mb-3">Data Wilayah</h3>

  <a href="/admin/wilayah/create" class="btn btn-primary mb-3">+ Tambah Wilayah</a>

  <?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>

  <div class="table-responsive">
    <table class="table table-bordered align-middle">
      <thead class="table-light text-center">
        <tr>
          <th>No</th>
          <th>Nama Wilayah</th>
          <th>RT</th>
          <th>RW</th>
          <th>Luas</th>
          <th>Deskripsi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach($wilayah as $w): ?>
        <tr>
          <td class="text-center"><?= $no++ ?></td>
          <td><?= esc($w['nama_wilayah']) ?></td>
          <td class="text-center"><?= esc($w['jumlah_rt']) ?></td>
          <td class="text-center"><?= esc($w['jumlah_rw']) ?></td>
          <td class="text-center"><?= esc($w['luas']) ?></td>
          <td><?= esc($w['deskripsi']) ?></td>
          <td class="text-center">
            <a href="/admin/wilayah/edit/<?= $w['id_wilayah'] ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="/admin/wilayah/delete/<?= $w['id_wilayah'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>

<?= $this->endSection() ?>
