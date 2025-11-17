<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section id="apbdes" class="mt-5">
  <h3 class="mb-4 text-center">ANGGARAN PENDAPATAN DAN BELANJA DESA (APBDes)</h3>
  <p class="text-center mb-5">
    Berikut adalah rincian pendapatan, belanja, dan pembiayaan desa tahun anggaran berjalan yang digunakan untuk mendukung pembangunan dan pemberdayaan masyarakat desa.
  </p>

  <!-- RINCIAN PENDAPATAN -->
  <div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
      <h5 class="mb-3 text-success">Rincian Pendapatan Desa</h5>
      <div class="table-responsive">
        <table class="table table-bordered align-middle">
          <thead class="table-light">
            <tr>
              <th>Kategori</th>
              <th>Jumlah (Rp)</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Pendapatan Asli Desa (PAD)</td>
              <td>150.000.000</td>
              <td>Dari hasil usaha desa dan retribusi</td>
            </tr>
            <tr>
              <td>Dana Desa (DD)</td>
              <td>750.000.000</td>
              <td>Dari Pemerintah Pusat</td>
            </tr>
            <tr>
              <td>Alokasi Dana Desa (ADD)</td>
              <td>350.000.000</td>
              <td>Dari Pemerintah Kabupaten/Kota</td>
            </tr>
            <tr>
              <td>Bantuan Keuangan Provinsi</td>
              <td>70.000.000</td>
              <td>Untuk program pembangunan tertentu</td>
            </tr>
            <tr class="fw-bold table-success">
              <td>Total Pendapatan</td>
              <td>1.320.000.000</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- RINCIAN BELANJA -->
  <div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
      <h5 class="mb-3 text-primary">Rincian Belanja Desa</h5>
      <div class="table-responsive">
        <table class="table table-bordered align-middle">
          <thead class="table-light">
            <tr>
              <th>Bidang</th>
              <th>Rencana (Rp)</th>
              <th>Realisasi (Rp)</th>
              <th>Persentase</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Penyelenggaraan Pemerintahan Desa</td>
              <td>350.000.000</td>
              <td>340.000.000</td>
              <td>97%</td>
            </tr>
            <tr>
              <td>Pembangunan Desa</td>
              <td>500.000.000</td>
              <td>480.000.000</td>
              <td>96%</td>
            </tr>
            <tr>
              <td>Pembinaan Kemasyarakatan</td>
              <td>200.000.000</td>
              <td>195.000.000</td>
              <td>98%</td>
            </tr>
            <tr>
              <td>Pemberdayaan Masyarakat</td>
              <td>150.000.000</td>
              <td>140.000.000</td>
              <td>93%</td>
            </tr>
            <tr class="fw-bold table-primary">
              <td>Total Belanja</td>
              <td>1.200.000.000</td>
              <td>1.155.000.000</td>
              <td>96%</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- RINCIAN PEMBIAYAAN -->
  <div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
      <h5 class="mb-3 text-warning">Rincian Pembiayaan Desa</h5>
      <div class="table-responsive">
        <table class="table table-bordered align-middle">
          <thead class="table-light">
            <tr>
              <th>Uraian</th>
              <th>Jumlah (Rp)</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Penerimaan Pembiayaan</td>
              <td>50.000.000</td>
              <td>Silpa Tahun Sebelumnya</td>
            </tr>
            <tr>
              <td>Pengeluaran Pembiayaan</td>
              <td>0</td>
              <td>-</td>
            </tr>
            <tr class="fw-bold table-warning">
              <td>Total Pembiayaan Netto</td>
              <td>50.000.000</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- RINGKASAN APBDES (DINAMIS DARI DB) -->
  <div class="card border-0 shadow-sm">
    <div class="card-body text-center">
      <h5 class="mb-3 text-dark">Ringkasan Akhir APBDes</h5>

      <?php if (!empty($apbdes)) : ?>
        <p class="mb-1">
          <strong>Total Pendapatan:</strong>
          Rp <?= number_format($apbdes['total_pendapatan'], 0, ',', '.'); ?>
        </p>
        <p class="mb-1">
          <strong>Total Belanja:</strong>
          Rp <?= number_format($apbdes['total_belanja'], 0, ',', '.'); ?>
        </p>
        <p class="mb-1">
          <strong>Pembiayaan Netto:</strong>
          Rp <?= number_format($apbdes['total_pembiayaan'], 0, ',', '.'); ?>
        </p>
        <p class="fw-bold text-success mt-3">
          Sisa Lebih Anggaran (SiLPA):
          Rp <?= number_format($apbdes['silpa'], 0, ',', '.'); ?>
        </p>
      <?php else : ?>
        <p class="text-muted">Data APBDes belum tersedia.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
