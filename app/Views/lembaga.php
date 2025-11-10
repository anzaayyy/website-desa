<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section id="lembaga">
  <h3 class="mb-4 text-center">LEMBAGA DESA</h3>
  <p class="text-center mb-5">
    Berikut adalah informasi lebih lengkap mengenai berbagai lembaga yang berperan dalam mendukung jalannya pemerintahan dan pembangunan di desa.
  </p>

  <div class="row g-4">
    <!-- Lembaga BPD -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <img src="assets/img/pejabat.jpeg" alt="Ketua BPD" class="rounded-circle me-3" style="width: 70px; height: 70px; object-fit: cover;">
            <div>
              <h5 class="mb-0">Badan Permusyawaratan Desa (BPD)</h5>
              <p class="text-muted mb-0">Ketua: Suyatno</p>
            </div>
          </div>
          <p>
            BPD merupakan lembaga yang berfungsi menampung dan menyalurkan aspirasi masyarakat desa, serta menjadi mitra pemerintah desa dalam menyusun dan mengawasi pelaksanaan kebijakan desa.
          </p>
        </div>
      </div>
    </div>

    <!-- Lembaga PKK -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <img src="assets/img/pejabat.jpeg" alt="Ketua PKK" class="rounded-circle me-3" style="width: 70px; height: 70px; object-fit: cover;">
            <div>
              <h5 class="mb-0">Pemberdayaan dan Kesejahteraan Keluarga (PKK)</h5>
              <p class="text-muted mb-0">Ketua: Sri Wahyuni</p>
            </div>
          </div>
          <p>
            PKK memiliki peran penting dalam peningkatan kesejahteraan keluarga melalui berbagai program seperti kesehatan, pendidikan, ekonomi kreatif, dan ketahanan pangan tingkat rumah tangga.
          </p>
        </div>
      </div>
    </div>

    <!-- Lembaga Karang Taruna -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <img src="assets/img/pejabat.jpeg" alt="Ketua Karang Taruna" class="rounded-circle me-3" style="width: 70px; height: 70px; object-fit: cover;">
            <div>
              <h5 class="mb-0">Karang Taruna</h5>
              <p class="text-muted mb-0">Ketua: Dimas Ardiansyah</p>
            </div>
          </div>
          <p>
            Karang Taruna merupakan organisasi kepemudaan yang berperan dalam pembinaan dan pengembangan generasi muda desa agar berdaya saing, kreatif, dan berperan aktif dalam kegiatan sosial masyarakat.
          </p>
        </div>
      </div>
    </div>

    <!-- Lembaga LPM -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <img src="assets/img/pejabat.jpeg" alt="Ketua LPM" class="rounded-circle me-3" style="width: 70px; height: 70px; object-fit: cover;">
            <div>
              <h5 class="mb-0">Lembaga Pemberdayaan Masyarakat (LPM)</h5>
              <p class="text-muted mb-0">Ketua: Supriyanto</p>
            </div>
          </div>
          <p>
            LPM membantu pemerintah desa dalam melaksanakan pembangunan serta pemberdayaan masyarakat melalui perencanaan dan pelaksanaan program pembangunan yang partisipatif.
          </p>
        </div>
      </div>
    </div>

    <!-- Lembaga Linmas -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <img src="assets/img/pejabat.jpeg" alt="Ketua Linmas" class="rounded-circle me-3" style="width: 70px; height: 70px; object-fit: cover;">
            <div>
              <h5 class="mb-0">Perlindungan Masyarakat (Linmas)</h5>
              <p class="text-muted mb-0">Ketua: Rudi Hartono</p>
            </div>
          </div>
          <p>
            Linmas bertugas menjaga keamanan, ketertiban, dan ketenteraman masyarakat desa, serta siap siaga dalam kegiatan sosial dan kebencanaan.
          </p>
        </div>
      </div>
    </div>

    <!-- Lembaga RT/RW -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex align-items-center mb-3">
            <img src="assets/img/pejabat.jpeg" alt="Ketua RT/RW" class="rounded-circle me-3" style="width: 70px; height: 70px; object-fit: cover;">
            <div>
              <h5 class="mb-0">Rukun Tetangga & Rukun Warga (RT/RW)</h5>
              <p class="text-muted mb-0">Koordinator: Sutrisno</p>
            </div>
          </div>
          <p>
            RT dan RW merupakan lembaga kemasyarakatan yang berperan langsung dalam menjembatani komunikasi antara warga dan pemerintah desa, serta mengelola kegiatan sosial di lingkungan masing-masing.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
