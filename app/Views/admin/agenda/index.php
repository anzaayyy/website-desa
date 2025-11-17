<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

  <div class="d-flex justify-content-between align-items-center mb-2">
    <h3 class="fw-bold">Daftar Agenda Desa</h3>
    <a href="<?= base_url('admin/agenda/create') ?>" class="btn btn-primary">+ Tambah Agenda</a>
  </div>

  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>

  <div class="table-responsive shadow-sm bg-white p-3 rounded">
    <table class="table table-bordered table-striped align-middle">
      <thead class="table-light">
        <tr class="text-center">
          <th width="5%">No</th>
          <th>Judul</th>
          <th>Tanggal</th>
          <th>Waktu</th>
          <th>Lokasi</th>
          <th>Gambar</th>
          <th width="15%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($agenda)): ?>
          <?php $no = 1; foreach ($agenda as $a): ?>
            <tr>
              <td class="text-center"><?= $no++ ?></td>
              <td><?= esc($a['judul']) ?></td>
              <td><?= esc($a['tanggal']) ?></td>
              <td><?= esc($a['waktu']) ?></td>
              <td><?= esc($a['lokasi']) ?></td>
              <td class="text-center">
                <?php if ($a['gambar']): ?>
                  <img src="<?= base_url($a['gambar']) ?>" width="80" height="60" style="object-fit:cover;border-radius:5px;">
                <?php else: ?>
                  <span class="text-muted">-</span>
                <?php endif; ?>
              </td>
              <td class="text-center">
                <a href="<?= base_url('admin/agenda/edit/'.$a['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
                <a href="<?= base_url('admin/agenda/delete/'.$a['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr><td colspan="7" class="text-center text-muted">Belum ada data agenda</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

<?= $this->endSection() ?>
