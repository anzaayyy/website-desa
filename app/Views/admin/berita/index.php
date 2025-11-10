<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<h2>Manajemen Berita</h2>
<a href="<?= base_url('admin/berita/create') ?>" class="btn btn-primary mb-3">+ Tambah Berita</a>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Tanggal</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($berita as $i => $b): ?>
    <tr>
      <td><?= $i+1 ?></td>
      <td><?= esc($b['judul']) ?></td>
      <td><?= $b['tanggal'] ?></td>
      <td>
        <?php if($b['gambar']): ?>
          <img src="<?= base_url($b['gambar']) ?>" width="100">
        <?php endif; ?>
      </td>
      <td>
        <a href="<?= base_url('admin/berita/edit/'.$b['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="<?= base_url('admin/berita/delete/'.$b['id']) ?>" onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?= $this->endSection() ?>
