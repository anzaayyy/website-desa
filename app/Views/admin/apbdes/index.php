<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between mb-2">
    <h3 class="fw-bold">Data APBDes</h3>
    <a href="<?= base_url('admin/apbdes/create') ?>" class="btn btn-primary">+ Tambah Data</a>
</div>

  <div class="table-responsive shadow-sm bg-white p-3 rounded">
    <table class="table table-bordered table-striped align-middle">
      <thead class="table-light">
        <tr class="text-center">
            <th>Tahun</th>
            <th>Total Pendapatan</th>
            <th>Total Belanja</th>
            <th>Total Pembiayaan</th>
            <th>SILPA</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            <?php if (!empty($apbdes)): ?>
            <?php foreach ($apbdes as $row): ?>
                <tr>
                    <td><?= $row['tahun'] ?></td>
                    <td><?= number_format($row['total_pendapatan'],0,',','.') ?></td>
                    <td><?= number_format($row['total_belanja'],0,',','.') ?></td>
                    <td><?= number_format($row['total_pembiayaan'],0,',','.') ?></td>
                    <td><?= number_format($row['silpa'],0,',','.') ?></td>
                    <td>
                        <a href="<?= base_url('admin/apbdes/edit/'.$row['id_apbdes']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a onclick="return confirm('Hapus data?')" href="<?= base_url('admin/apbdes/delete/'.$row['id_apbdes']) ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
                    <?php else: ?>
            <tr><td colspan="7" class="text-center text-muted">Belum ada data APBDes</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
  </div>

<?= $this->endSection() ?>