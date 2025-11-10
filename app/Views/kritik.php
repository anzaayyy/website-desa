<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section id="kritik">
  <div class="container">

    <div class="section-title text-center mb-5">
      <h2>Kritik</h2>
      <p>Sampaikan kritik Anda untuk meningkatkan layanan kami</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form action="#" method="post" class="bg-white p-4 rounded shadow-sm">
          <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email Anda" required>
          </div>
          <div class="mb-3">
            <textarea name="kritik" rows="5" class="form-control" placeholder="Tuliskan kritik Anda" required></textarea>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-danger px-4">Kirim Kritik</button>
          </div>
        </form>
      </div>
    </div>

  </div>
</section>

<?= $this->endSection() ?>
