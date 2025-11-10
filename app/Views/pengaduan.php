<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section id="pengaduan">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2>Pengaduan</h2>
      <p>Sampaikan pengaduan Anda agar segera ditindaklanjuti</p>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form action="#" method="post" class="bg-light p-4 rounded shadow-sm">
          <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email Anda" required>
          </div>
          <div class="mb-3">
            <select name="kategori" class="form-control" required>
              <option value="">Pilih Kategori Pengaduan</option>
              <option value="layanan">Layanan</option>
              <option value="sarana">Sarana / Prasarana</option>
              <option value="lainnya">Lainnya</option>
            </select>
          </div>
          <div class="mb-3">
            <textarea name="pengaduan" rows="5" class="form-control" placeholder="Tuliskan pengaduan Anda" required></textarea>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-warning px-4">Kirim Pengaduan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
