<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section id="sarpra">
  <h3 class="mb-4 text-center">SARANA DAN PRASARANA DESA</h3>
  <p class="text-center mb-5">
    Berikut adalah data lengkap mengenai berbagai sarana dan prasarana yang mendukung kegiatan masyarakat desa dalam bidang pendidikan, kesehatan, transportasi, ekonomi, sosial, dan lingkungan.
  </p>

  <div class="row g-4">
    <!-- SARANA PENDIDIKAN -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <h5 class="mb-3 text-primary">Sarana Pendidikan</h5>
          <ul class="mb-0">
            <li>1 unit PAUD/TK</li>
            <li>2 unit Sekolah Dasar (SD)</li>
            <li>1 unit Sekolah Menengah Pertama (SMP)</li>
            <li>1 unit Perpustakaan Desa</li>
            <li>1 Balai Pelatihan Masyarakat</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- PRASARANA PENDIDIKAN -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <h5 class="mb-3 text-success">Prasarana Pendidikan</h5>
          <ul class="mb-0">
            <li>Gedung sekolah permanen</li>
            <li>Ruang kelas dengan peralatan belajar</li>
            <li>Perpustakaan dan laboratorium komputer</li>
            <li>Jaringan internet desa untuk sekolah</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- SARANA KESEHATAN -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <h5 class="mb-3 text-primary">Sarana Kesehatan</h5>
          <ul class="mb-0">
            <li>1 unit Puskesmas Pembantu</li>
            <li>1 unit Posyandu aktif</li>
            <li>1 unit Apotek Desa</li>
            <li>Tenaga medis dan kader kesehatan</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- PRASARANA KESEHATAN -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <h5 class="mb-3 text-success">Prasarana Kesehatan</h5>
          <ul class="mb-0">
            <li>Bangunan pelayanan kesehatan layak pakai</li>
            <li>Peralatan medis dasar dan ruang pemeriksaan</li>
            <li>Sistem air bersih dan sanitasi yang memadai</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- SARANA TRANSPORTASI -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <h5 class="mb-3 text-primary">Sarana Transportasi</h5>
          <ul class="mb-0">
            <li>Jalan desa beraspal sepanjang 4 km</li>
            <li>Jalan lingkungan diperkeras sepanjang 2 km</li>
            <li>1 unit jembatan penghubung antar dusun</li>
            <li>Tempat parkir umum</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- PRASARANA TRANSPORTASI -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <h5 class="mb-3 text-success">Prasarana Transportasi</h5>
          <ul class="mb-0">
            <li>Saluran drainase di sepanjang jalan utama</li>
            <li>Rambu dan penerangan jalan</li>
            <li>Perawatan rutin oleh perangkat desa</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- SARANA EKONOMI -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <h5 class="mb-3 text-primary">Sarana Ekonomi</h5>
          <ul class="mb-0">
            <li>Pasar desa beroperasi setiap hari</li>
            <li>1 unit koperasi simpan pinjam</li>
            <li>Warung dan UMKM aktif</li>
            <li>Sentra kerajinan dan hasil pertanian</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- PRASARANA EKONOMI -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <h5 class="mb-3 text-success">Prasarana Ekonomi</h5>
          <ul class="mb-0">
            <li>Bangunan kios dan los pasar permanen</li>
            <li>Jaringan listrik dan air bersih untuk pelaku usaha</li>
            <li>Ruang penyimpanan hasil pertanian</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- SARANA SOSIAL DAN BUDAYA -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <h5 class="mb-3 text-primary">Sarana Sosial & Budaya</h5>
          <ul class="mb-0">
            <li>Balai desa</li>
            <li>Lapangan serbaguna</li>
            <li>Tempat ibadah (masjid, gereja, pura)</li>
            <li>Gedung pertemuan warga</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- PRASARANA LINGKUNGAN -->
    <div class="col-md-6">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <h5 class="mb-3 text-success">Prasarana Lingkungan</h5>
          <ul class="mb-0">
            <li>Tempat pembuangan sampah sementara</li>
            <li>Jaringan drainase dan irigasi sawah</li>
            <li>Ruang terbuka hijau dan taman desa</li>
            <li>Program penghijauan dan kebersihan rutin</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
