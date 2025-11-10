<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section id="pembangunan">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold">Pembangunan Desa</h2>
      <p class="text-muted">Informasi progres pembangunan dan kegiatan desa</p>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="assets/img/artikel.jpeg" class="card-img-top" alt="Pembangunan Jalan Desa">
          <div class="card-body">
            <h5 class="card-title">Pembangunan Jalan Desa</h5>
            <p class="card-text">Proyek peningkatan infrastruktur jalan di Dusun Sukamaju sepanjang 2 km.</p>
            <div class="progress mb-2" style="height: 10px;">
              <div class="progress-bar bg-success" style="width: 90%;"></div>
            </div>
            <small class="text-muted">Progres: 90%</small>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="assets/img/artikel.jpeg" class="card-img-top" alt="Rehabilitasi Irigasi">
          <div class="card-body">
            <h5 class="card-title">Rehabilitasi Irigasi</h5>
            <p class="card-text">Pemeliharaan saluran irigasi untuk mendukung pertanian warga.</p>
            <div class="progress mb-2" style="height: 10px;">
              <div class="progress-bar bg-warning" style="width: 70%;"></div>
            </div>
            <small class="text-muted">Progres: 70%</small>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <img src="assets/img/artikel.jpeg" class="card-img-top" alt="Pembangunan Posyandu">
          <div class="card-body">
            <h5 class="card-title">Pembangunan Posyandu</h5>
            <p class="card-text">Fasilitas kesehatan untuk balita dan ibu hamil di Dusun Mekarsari.</p>
            <div class="progress mb-2" style="height: 10px;">
              <div class="progress-bar bg-info" style="width: 50%;"></div>
            </div>
            <small class="text-muted">Progres: 50%</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
