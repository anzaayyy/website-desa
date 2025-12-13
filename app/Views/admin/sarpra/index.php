<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between mb-2">
  <h3 class="fw-bold"> Manajemen Data Sarana & Prasarana</h3>
  <a href="<?= base_url('admin/sarpra/create') ?>" class="btn btn-primary">+ Tambah Data</a>
</div>

  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>

  <div class="table-responsive shadow-sm bg-white p-3 rounded">
    <table class="table table-bordered table-striped align-middle">
      <thead class="table-light">
        <tr class="text-center">
        <th>No</th>
        <th>Judul Sarana</th>
        <th>Deskripsi Sarana</th>
        <th>Judul Prasarana</th>
        <th>Deskrpsi Prasarana</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php if (!empty($sarpra)): ?>
      <?php foreach ($sarpra as $i => $row): ?>
        <tr>
          <td><?= $i+1 ?></td>
          <td><?= esc($row['judul_sarana']) ?></td>
          <td><?= esc($row['isi_sarana']) ?></td>
          <td><?= esc($row['judul_prasarana']) ?></td>
          <td><?= esc($row['isi_prasarana']) ?></td>
          <td>
            <a href="<?= base_url('admin/sarpra/edit/'.$row['id_sarana']) ?>" class="btn btn-sm btn-warning">Edit</a>
            <a href="<?= base_url('admin/sarpra/delete/'.$row['id_sarana']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="8" class="text-center">Belum ada data sarana prasarana.</td>
          </tr>
        <?php endif; ?>
    </tbody>
  </table>
</div>

<?= $this->endSection() ?>
