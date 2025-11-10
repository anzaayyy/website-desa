<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section id="penduduk">
  <div class="container">
    <h3 class="text-center fw-bold mb-4">JUMLAH PENDUDUK</h3>

    <p class="text-muted text-center mb-5">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel
              facere eos maiores voluptatem magnam corrupti officia nam.
              Mollitia ab expedita omnis adipisci perferendis temporibus dolorem
              similique nobis voluptatibus, eveniet a. Lorem ipsum dolor sit
              amet consectetur adipisicing elit. Repudiandae provident
              consequuntur tempora perferendis accusamus quis, asperiores
              corporis voluptatum. Obcaecati nam optio iure itaque placeat
              quaerat nesciunt sint rem accusantium sapiente.
    </p>

              <div class="mb-5">
            <!-- canvas untuk grafik -->
            <canvas id="myChartDetail"></canvas>
          </div>

    <!-- Statistik Umum -->
    <div class="row text-center mb-5">
      <div class="col-6 col-md-3 mb-3">
        <div class="p-3 bg-light rounded shadow-sm">
          <h4 class="fw-bold mb-0">3.457</h4>
          <small>Total Penduduk</small>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-3">
        <div class="p-3 bg-light rounded shadow-sm">
          <h4 class="fw-bold mb-0">1.782</h4>
          <small>Laki-Laki</small>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-3">
        <div class="p-3 bg-light rounded shadow-sm">
          <h4 class="fw-bold mb-0">1.675</h4>
          <small>Perempuan</small>
        </div>
      </div>
      <div class="col-6 col-md-3 mb-3">
        <div class="p-3 bg-light rounded shadow-sm">
          <h4 class="fw-bold mb-0">870</h4>
          <small>Kepala Keluarga</small>
        </div>
      </div>
    </div>

    <!-- Tabel Data Penduduk -->
    <div class="card shadow-sm">
      <div class="card-header bg-primary text-white fw-bold">
        Rekap Penduduk per Dusun
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-bordered table-striped mb-0 text-center">
            <thead class="table-light">
              <tr>
                <th>No</th>
                <th>Nama Dusun</th>
                <th>Laki-Laki</th>
                <th>Perempuan</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>1</td><td>Dusun Sumber Rejo</td><td>430</td><td>410</td><td>840</td></tr>
              <tr><td>2</td><td>Dusun Mekar Sari</td><td>350</td><td>340</td><td>690</td></tr>
              <tr><td>3</td><td>Dusun Sukamaju</td><td>500</td><td>475</td><td>975</td></tr>
              <tr><td>4</td><td>Dusun Sidomulyo</td><td>502</td><td>450</td><td>952</td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>