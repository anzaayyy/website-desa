<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section id="wilayah">
  <div class="container">
    <!-- Header -->
    <div class="text-center mb-4">
      <h3 class="mb-0 fw-bold">DATA WILAYAH</h3>
    </div>

    <!-- Deskripsi umum -->
    <p class="text-muted mb-4">
      Wilayah Desa Makmur Jaya terbagi menjadi beberapa dusun, RW, dan RT dengan karakteristik geografis yang beragam. 
      Setiap wilayah memiliki peran penting dalam penyelenggaraan pemerintahan desa serta pengelolaan potensi sumber daya alam dan masyarakatnya.
    </p>

    <!-- Statistik Wilayah -->
    <div class="row text-center mb-5">
      <div class="col-md-4 col-6 mb-3">
        <div class="p-3 bg-white shadow-sm rounded">
          <h4 class="fw-bold mb-0">5</h4>
          <p class="text-muted mb-0">Dusun</p>
        </div>
      </div>
      <div class="col-md-4 col-6 mb-3">
        <div class="p-3 bg-white shadow-sm rounded">
          <h4 class="fw-bold mb-0">12</h4>
          <p class="text-muted mb-0">RW</p>
        </div>
      </div>
      <div class="col-md-4 col-6 mb-3">
        <div class="p-3 bg-white shadow-sm rounded">
          <h4 class="fw-bold mb-0">68</h4>
          <p class="text-muted mb-0">RT</p>
        </div>
      </div>
    </div>

    <!-- Peta Wilayah -->
    <div class="card shadow-sm mb-5">
      <div class="card-header bg-primary text-white fw-bold">Peta Wilayah Desa</div>
      <div class="card-body text-center">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.168218877116!2d110.42364307462837!3d-8.189533982038153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a53bfb65a2ad5%3A0x7b2b41a2ecb928aa!2sBalai%20Desa!5e0!3m2!1sid!2sid!4v1696420000000!5m2!1sid!2sid"
          width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
      </div>
    </div>

    <!-- Grafik Luas Wilayah dan Penggunaan Lahan -->
    <div class="row g-4 mb-5">
      <div class="col-md-6">
        <div class="card shadow-sm p-3">
          <h5 class="text-center mb-3">Luas Wilayah per Dusun (Ha)</h5>
          <canvas id="chartLuasWilayah"></canvas>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card shadow-sm p-3">
          <h5 class="text-center mb-3">Penggunaan Lahan</h5>
          <canvas id="chartLahan"></canvas>
        </div>
      </div>
    </div>

    <!-- Tabel Data Wilayah -->
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white fw-bold">Rincian Data Wilayah per Dusun</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered align-middle">
            <thead class="table-light text-center">
              <tr>
                <th>No</th>
                <th>Nama Dusun</th>
                <th>RW</th>
                <th>RT</th>
                <th>Luas (Ha)</th>
                <th>Potensi Utama</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">1</td>
                <td>Dusun Sumber Rejo</td>
                <td class="text-center">3</td>
                <td class="text-center">18</td>
                <td class="text-center">145</td>
                <td>Pertanian & Peternakan</td>
              </tr>
              <tr>
                <td class="text-center">2</td>
                <td>Dusun Mekar Sari</td>
                <td class="text-center">2</td>
                <td class="text-center">12</td>
                <td class="text-center">120</td>
                <td>Perkebunan & UMKM</td>
              </tr>
              <tr>
                <td class="text-center">3</td>
                <td>Dusun Sukamaju</td>
                <td class="text-center">3</td>
                <td class="text-center">20</td>
                <td class="text-center">165</td>
                <td>Perdagangan & Jasa</td>
              </tr>
              <tr>
                <td class="text-center">4</td>
                <td>Dusun Sidomulyo</td>
                <td class="text-center">2</td>
                <td class="text-center">10</td>
                <td class="text-center">130</td>
                <td>Perikanan & Pariwisata</td>
              </tr>
              <tr>
                <td class="text-center">5</td>
                <td>Dusun Tegal Asri</td>
                <td class="text-center">2</td>
                <td class="text-center">8</td>
                <td class="text-center">110</td>
                <td>Kerajinan & Industri Rumah Tangga</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</section>

<?= $this->endSection() ?>
