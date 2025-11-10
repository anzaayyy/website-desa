<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<h2>Daftar Pengumuman</h2>
<a href="<?= base_url('admin/pengumuman/create') ?>" class="btn btn-primary mb-3">Tambah Pengumuman</a>

<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Judul</th>
    <th>Gambar</th>
    <th>File</th>
    <th>Tanggal Posting</th>
    <th>Berlaku Hingga</th>
    <th>Aksi</th>
  </tr>
  <?php $no=1; foreach($pengumuman as $p): ?>
  <tr>
    <td><?= $no++ ?></td>
    <td><?= esc($p['judul']) ?></td>
    <td><?= esc($p['gambar']) ?></td>
    <td><?= esc($p['file']) ?></td>
    <td><?= esc($p['tanggal_post']) ?></td>
    <td><?= esc($p['tanggal_exp']) ?></td>
    <td>
      <a href="<?= base_url('admin/pengumuman/edit/'.$p['id']) ?>" class="btn btn-sm btn-warning">Edit</a>
      <a href="<?= base_url('admin/pengumuman/delete/'.$p['id']) ?>" onclick="return confirm('Hapus?')" class="btn btn-sm btn-danger">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<?= $this->endSection() ?>
