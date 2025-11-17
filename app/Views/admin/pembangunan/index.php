<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between mb-2">
    <h3 class="fw-bold">Data Pembangunan Desa</h3>
    <a href="<?= site_url('admin/pembangunan/create') ?>" class="btn btn-primary">+ Tambah Data</a>
</div>

  <div class="table-responsive shadow-sm bg-white p-3 rounded">
    <table class="table table-bordered table-striped align-middle">
      <thead class="table-light">
        <tr class="text-center">
            <th>Nama</th>
            <th>Lokasi</th>
            <th>Anggaran</th>
            <th>Progres</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php if (!empty($pembangunan)): ?>
    <?php foreach ($pembangunan as $row): ?>
        <tr>
            <td><?= $row['nama_pembangunan'] ?></td>
            <td><?= $row['lokasi'] ?></td>
            <td><?= $row['anggaran'] ?></td>
            <td><?= $row['progres'] ?>%</td>
            <td>
                <a href="<?= site_url('admin/pembangunan/edit/'.$row['id_pembangunan']) ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= site_url('admin/pembangunan/delete/'.$row['id_pembangunan']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
            <?php else: ?>
          <tr><td colspan="7" class="text-center text-muted">Belum ada data pembangunan</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<?= $this->endSection() ?>