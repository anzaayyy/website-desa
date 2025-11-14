<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<h2>Daftar Pengumuman</h2>
<a href="<?= base_url('admin/pengumuman/create') ?>" class="btn btn-primary mb-3">Tambah Pengumuman</a>

<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>Judul</th>
    <th>Deskripsi</th>
    <th>Tanggal</th>
    <th>Gambar</th>
    <th>Aksi</th>
  </tr>
  <?php $no=1; foreach($pengumuman as $p): ?>
  <tr>
    <td><?= $no++ ?></td>
    <td><?= esc($p['judul']) ?></td>
    <td><?= esc($p['deskripsi']) ?></td>
    <td><?= esc($p['tanggal']) ?></td>
    <td><?= esc($p['gambar']) ?></td>
    <td>
      <a href="<?= base_url('admin/pengumuman/edit/'.$p['id_pengumuman']) ?>" class="btn btn-sm btn-warning">Edit</a>
      <a href="<?= base_url('admin/pengumuman/delete/'.$p['id_pengumuman']) ?>" onclick="return confirm('Hapus?')" class="btn btn-sm btn-danger">Delete</a>
    </td>
  </tr>
  <?php endforeach; ?>
</table>

<?= $this->endSection() ?>
