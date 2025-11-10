<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section id="informasila">
  <div class="container">
    <div class="mb-4 text-center">
      <h3 class="mb-3">INFORMASI LAYANAN</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel facere eos
        maiores voluptatem magnam corrupti officia nam. Mollitia ab expedita
        omnis adipisci perferendis temporibus dolorem similique nobis
        voluptatibus, eveniet a.
      </p>
    </div>

    <!-- Baris 1 -->
    <div class="row g-4 mb-4">
      <div class="col-md-6">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h6 class="fw-semibold text-primary mb-3">
              Jenis Surat yang Umum Dilayani
            </h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Surat Keterangan Domisili (SKD)</li>
              <li class="list-group-item">Surat Keterangan Usaha (SKU)</li>
              <li class="list-group-item">Surat Keterangan Tidak Mampu (SKTM)</li>
              <li class="list-group-item">Surat Pengantar Pembuatan KTP / KK / Akta</li>
              <li class="list-group-item">Surat Keterangan Kelahiran / Kematian</li>
              <li class="list-group-item">Surat Keterangan Pindah / Datang Penduduk</li>
              <li class="list-group-item">Surat Pengantar Nikah (N1 - N4)</li>
              <li class="list-group-item">Surat Keterangan Tanah / Waris</li>
              <li class="list-group-item">Surat Rekomendasi Lainnya</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card h-100 shadow-sm border-0 bg-light">
          <div class="card-body">
            <h6 class="fw-semibold text-primary mb-3">Proses Pelayanan</h6>
            <ol class="list-group list-group-numbered">
              <li class="list-group-item">
                Warga mengajukan permohonan ke RT/RW untuk surat pengantar
              </li>
              <li class="list-group-item">Membawa pengantar & berkas ke Kantor Desa</li>
              <li class="list-group-item">Petugas desa memverifikasi data</li>
              <li class="list-group-item">
                Surat dibuat, ditandatangani Kepala Desa atau Sekretaris Desa
              </li>
              <li class="list-group-item">
                Surat bisa langsung diambil warga (biasanya 1 hari kerja)
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Baris 2 -->
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card h-100 shadow-sm border-0 bg-light">
          <div class="card-body">
            <h6 class="fw-semibold text-primary mb-3">
              Syarat Umum Pengajuan Surat
            </h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Fotokopi KTP & KK</li>
              <li class="list-group-item">Surat pengantar RT/RW</li>
              <li class="list-group-item">
                Dokumen pendukung (akta lahir, surat nikah, ijazah, dll sesuai kebutuhan)
              </li>
              <li class="list-group-item">
                Mengisi formulir permohonan di Kantor Desa
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h6 class="fw-semibold text-primary mb-3">Jam Layanan (Umumnya)</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Senin - Jumat : 08.00 - 14.00</li>
              <li class="list-group-item">Istirahat : 12.00 - 13.00</li>
              <li class="list-group-item">
                Sabtu - Minggu : Libur (kecuali ada pelayanan darurat)
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>
