<?= $this->extend('admin/template/template') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h2>Edit Pengumuman</h2>

    <form action="<?= base_url('admin/pengumuman/update/'.$pengumuman['id']) ?>" method="post" enctype="multipart/form-data">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="<?= esc($pengumuman['judul']) ?>" required>
        </div>

        <div class="mb-3">
            <label>Isi</label>
            <textarea name="isi" class="form-control" required><?= esc($pengumuman['isi']) ?></textarea>
        </div>

        <div class="mb-3">
            <label>Tanggal Posting</label>
            <input type="date" name="tanggal_post" class="form-control" value="<?= esc($pengumuman['tanggal_post']) ?>">
        </div>

        <div class="mb-3">
            <label>Tanggal Berlaku</label>
            <input type="date" name="tanggal_exp" class="form-control" value="<?= esc($pengumuman['tanggal_exp']) ?>">
        </div>

        <div class="mb-3">
            <label>Gambar</label><br>
            <?php if ($pengumuman['gambar']): ?>
                <img src="<?= base_url('uploads/pengumuman/'.$pengumuman['gambar']) ?>" width="100" class="mb-2">
            <?php endif; ?>
            <input type="file" name="gambar" class="form-control">
        </div>

        <div class="mb-3">
            <label>File Lampiran</label><br>
            <?php if ($pengumuman['file']): ?>
                <a href="<?= base_url('uploads/pengumuman/file/'.$pengumuman['file']) ?>" target="_blank">File lama</a><br>
            <?php endif; ?>
            <input type="file" name="file" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
<?= $this->endSection() ?>
