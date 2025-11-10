<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<section id="agenda">
  <div class="text-center mb-4">
    <h3 class="mb-0">AGENDA DESA</h3>
  </div>

  <div class="row g-4">
    <div class="col-md-3 text-center">
      <div class="card border-0 shadow-sm h-100">
        <img
          src="assets/img/agenda1.jpg"
          alt="Agenda Desa"
          class="card-img-top"
          style="height: 180px; object-fit: cover"
        />
        <div class="card-body">
          <h5 class="card-title mb-2">Rapat Koordinasi Pembangunan</h5>
          <p class="text-muted small mb-1">📅 10 Juli 2026</p>
          <p class="text-muted small mb-2">📍 Balai Desa Sukamaju</p>
          <a href="#" class="text-primary fw-semibold small">Lihat Detail</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 text-center">
      <div class="card border-0 shadow-sm h-100">
        <img
          src="assets/img/agenda2.jpg"
          alt="Agenda Desa"
          class="card-img-top"
          style="height: 180px; object-fit: cover"
        />
        <div class="card-body">
          <h5 class="card-title mb-2">Gotong Royong Bersih Desa</h5>
          <p class="text-muted small mb-1">📅 15 Juli 2026</p>
          <p class="text-muted small mb-2">📍 Dusun Krajan</p>
          <a href="#" class="text-primary fw-semibold small">Lihat Detail</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 text-center">
      <div class="card border-0 shadow-sm h-100">
        <img
          src="assets/img/agenda3.jpg"
          alt="Agenda Desa"
          class="card-img-top"
          style="height: 180px; object-fit: cover"
        />
        <div class="card-body">
          <h5 class="card-title mb-2">Pelatihan Digital UMKM</h5>
          <p class="text-muted small mb-1">📅 22 Juli 2026</p>
          <p class="text-muted small mb-2">📍 Aula Kantor Desa</p>
          <a href="#" class="text-primary fw-semibold small">Lihat Detail</a>
        </div>
      </div>
    </div>

    <div class="col-md-3 text-center">
      <div class="card border-0 shadow-sm h-100">
        <img
          src="assets/img/agenda4.jpg"
          alt="Agenda Desa"
          class="card-img-top"
          style="height: 180px; object-fit: cover"
        />
        <div class="card-body">
          <h5 class="card-title mb-2">Musyawarah Rencana Kerja</h5>
          <p class="text-muted small mb-1">📅 30 Juli 2026</p>
          <p class="text-muted small mb-2">📍 Balai Desa Sukamaju</p>
          <a href="#" class="text-primary fw-semibold small">Lihat Detail</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>