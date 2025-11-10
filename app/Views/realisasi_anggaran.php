<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section id="realisasi">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold">Realisasi Anggaran Desa</h2>
      <p class="text-muted">Transparansi penggunaan dana desa tahun 2025</p>
    </div>

    <div class="table-responsive mb-4">
      <table class="table table-striped align-middle">
        <thead class="table-dark">
          <tr>
            <th>No</th>
            <th>Bidang</th>
            <th>Anggaran</th>
            <th>Realisasi</th>
            <th>Persentase</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Pemerintahan Desa</td>
            <td>Rp150.000.000</td>
            <td>Rp120.000.000</td>
            <td>80%</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Pembangunan</td>
            <td>Rp300.000.000</td>
            <td>Rp270.000.000</td>
            <td>90%</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Pemberdayaan Masyarakat</td>
            <td>Rp100.000.000</td>
            <td>Rp85.000.000</td>
            <td>85%</td>
          </tr>
        </tbody>
      </table>
    </div>
    <canvas id="anggaranChart" height="120"></canvas>
  </div>
</section>

<?= $this->endSection() ?>
