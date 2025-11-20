<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
    
      <!-- Profil Desa -->
      <h1 class="mb-4">PROFIL DESA</h1>

      <section id="sejarah"  class="reveal">
        <div class="container">
          <div class="row g-4 align-items-center">
            <div class="col-md-4 text-center">
              <img
                src="<?= base_url('uploads/profil/' . $sejarah['gambar']); ?>"
                alt="<?= esc($sejarah['alt_gambar']); ?>"
                style="width: 300px; height: 300px; object-fit: cover; border-radius: 8px;"
              />
            </div>

            <div class="col-md-8">
              <h3 class="fw-bold"><?= esc(strtoupper($sejarah['judul'])); ?></h3>
              <div class="card-text mb-3">
                <?= $sejarah['isi']; ?>
              </div>
              <small class="text-muted">
                Diperbarui: <?= date('d M Y', strtotime($sejarah['updated_at'])); ?>
              </small>
            </div>
          </div>
        </div>
      </section>

      <!-- Visi Misi -->
      <section id="vm"  class="reveal">
        <h2 class="mb-4 text-center">VISI & MISI</h2>
        <div class="row g-4">
          <div class="col-md-4 text-center">
            <h3 class="card-title">VISI</h3>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
              exercitationem distinctio accusantium impedit dicta optio
              reprehenderit eligendi porro ullam assumenda eos quam, sint illum
              dolor aperiam blanditiis repellat dolores ipsum.
            </p>
          </div>
          <div class="col-md-4 text-center">
            <img
              src="assets/img/VM.jpeg"
              alt="visimisi"
              class="img-fluid"
              style="width: 300px; height: 300px; object-fit: cover"
            />
          </div>
          <div class="col-md-4 text-center">
            <h3 class="card-title">MISI</h3>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Temporibus excepturi voluptatibus deserunt incidunt, blanditiis
              possimus perspiciatis. Architecto placeat fugit at rerum? Voluptas
              quisquam odit, optio atque inventore aspernatur sunt suscipit.
            </p>
          </div>
        </div>
      </section>

      <!-- Struktur Organisasi -->
      <section id="struktur" class="reveal">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3>STRUKTUR DESA</h3>
          <a href="<?= base_url('struktur'); ?>" class="btn-bg"> Selengkapnya </a>
        </div>
        <div class="row g-4 mb-4">
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Foto Perangkat Desa"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lengkap</h5>
                <p class="text-muted mb-0">Jabatan</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Foto Perangkat Desa"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lengkap</h5>
                <p class="text-muted mb-0">Jabatan</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Foto Perangkat Desa"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lengkap</h5>
                <p class="text-muted mb-0">Jabatan</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Foto Perangkat Desa"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lengkap</h5>
                <p class="text-muted mb-0">Jabatan</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Perangkat Desa -->
      <section id="perangkat" class="reveal">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3>PERANGKAT DESA</h3>
          <a href="<?= base_url('perangkat'); ?>" class="btn-bg"> Selengkapnya </a>
        </div>
        <div class="row g-4 mb-4">
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Foto Perangkat Desa"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lengkap</h5>
                <p class="text-muted mb-0">Jabatan</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Foto Perangkat Desa"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lengkap</h5>
                <p class="text-muted mb-0">Jabatan</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Foto Perangkat Desa"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lengkap</h5>
                <p class="text-muted mb-0">Jabatan</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Foto Perangkat Desa"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lengkap</h5>
                <p class="text-muted mb-0">Jabatan</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Berita -->
      <h1 class="mb-4">BERITA</h1>

      <section id="berita" class="reveal">
        <h3 class="mb-4 text-center">BERITA</h3>
        <div class="row g-4 mb-4">
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">JUDUL ARTIKEL</h5>
                <p class="text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                </p>
                <p class="text-muted mb-2">20 Juni 2026</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">JUDUL ARTIKEL</h5>
                <p class="text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                </p>
                <p class="text-muted mb-2">20 Juni 2026</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-4 mb-4">
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">JUDUL ARTIKEL</h5>
                <p class="text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                </p>
                <p class="text-muted mb-2">20 Juni 2026</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">JUDUL ARTIKEL</h5>
                <p class="text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                </p>
                <p class="text-muted mb-2">20 Juni 2026</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-4 mb-4">
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">JUDUL ARTIKEL</h5>
                <p class="text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                </p>
                <p class="text-muted mb-2">20 Juni 2026</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">JUDUL ARTIKEL</h5>
                <p class="text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                </p>
                <p class="text-muted mb-2">20 Juni 2026</p>
              </div>
            </div>
          </div>
        </div>
        <a href="<?= base_url('berita'); ?>" class="btn-bg"> Selengkapnya </a>
      </section>

      <!-- Pengumuman Desa -->
      <section id="pengumuman" class="reveal">
        <h2 class="mb-4 text-center">PENGUMUMAN DESA</h2>
        <div class="row g-4 mb-4">
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">JUDUL ARTIKEL</h5>
                <p class="text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                </p>
                <p class="text-muted mb-2">20 Juni 2026</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">JUDUL ARTIKEL</h5>
                <p class="text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                </p>
                <p class="text-muted mb-2">20 Juni 2026</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-4 mb-4">
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">JUDUL ARTIKEL</h5>
                <p class="text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                </p>
                <p class="text-muted mb-2">20 Juni 2026</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                style="width: 100px; height: 100px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">JUDUL ARTIKEL</h5>
                <p class="text-muted mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                </p>
                <p class="text-muted mb-2">20 Juni 2026</p>
              </div>
            </div>
          </div>
        </div>
        <a href="<?= base_url('pengumuman'); ?>" class="btn-bg"> Selengkapnya </a>
      </section>

      <!-- Agenda Desa -->
      <section id="agenda" class="reveal">
        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="mb-0">AGENDA DESA</h3>
          <a href="<?= base_url('agenda'); ?>" class="btn-bg"> Selengkapnya </a>
        </div>
        <div class="row g-4">
          <div class="col-md-3 text-center">
            <div class="align-items-center">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                class="mb-3"
                style="width: 150px; height: 150px; object-fit: cover"
              />
              <div>
                <h5>JUDUL ARTIKEL</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="align-items-center">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                class="mb-3"
                style="width: 150px; height: 150px; object-fit: cover"
              />
              <div>
                <h5>JUDUL ARTIKEL</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="align-items-center">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                class="mb-3"
                style="width: 150px; height: 150px; object-fit: cover"
              />
              <div>
                <h5>JUDUL ARTIKEL</h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 text-center">
            <div class="align-items-center">
              <img
                src="assets/img/artikel.jpeg"
                alt="Artikel"
                class="mb-3"
                style="width: 150px; height: 150px; object-fit: cover"
              />
              <div>
                <h5>JUDUL ARTIKEL</h5>
              </div>
            </div>
          </div>
        </div>
      </section>

      <h1 class="mb-4">DATA DESA</h1>

      <!-- Jumlah Penduduk -->
      <section id="penduduk" class="reveal">
        <h3 class="mb-4 text-center">JUMLAH PENDUDUK</h3>
        <div class="row g-4 d-flex align-items-center">
          <div class="col-md-6">
            <!-- canvas untuk grafik -->
            <canvas id="myChartPenduduk" width="300" height="200"></canvas>
          </div>
          <div class="col-md-6">
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel
              facere eos maiores voluptatem magnam corrupti officia nam.
              Mollitia ab expedita omnis adipisci perferendis temporibus dolorem
              similique nobis voluptatibus, eveniet a. Lorem ipsum dolor sit
              amet consectetur adipisicing elit. Repudiandae provident
              consequuntur tempora perferendis accusamus quis, asperiores
              corporis voluptatum. Obcaecati nam optio iure itaque placeat
              quaerat nesciunt sint rem accusantium sapiente.
            </p>
            <a href="<?= base_url('penduduk'); ?>" class="btn-bg"> Lihat Detail </a>
          </div>
        </div>
      </section>

      <!-- Wilayah -->
      <section id="wilayah" class="reveal">
        <h3 class="mb-4">WILAYAH</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel facere
          eos maiores voluptatem magnam corrupti officia nam. Mollitia ab
          expedita omnis adipisci perferendis temporibus dolorem similique nobis
          voluptatibus, eveniet a.
        </p>
        <div class="row g-4 mb-3 align-items-center text-center">
          <div class="col-md-4">
            <div class="stat-item">
              <div class="stat-number" data-value="5">5</div>
              <div class="stat-label">Dusun</div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="stat-item">
              <div class="stat-number" data-value="12">12</div>
              <div class="stat-label">RW</div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="stat-item">
              <div class="stat-number" data-value="68">68</div>
              <div class="stat-label">RT</div>
            </div>
          </div>
        </div>
        <a href="<?= base_url('wilayah'); ?>" class="btn-bg"> Lihat Detail </a>
      </section>

      <!-- Lembaga -->
      <section id="lembaga" class="reveal">
        <h3 class="mb-4 text-center">LEMBAGA</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel facere
          eos maiores voluptatem magnam corrupti officia nam. Mollitia ab
          expedita omnis adipisci perferendis temporibus dolorem similique nobis
          voluptatibus, eveniet a.
        </p>
        <div class="row g-4 mb-4">
          <div class="col-md-3">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Artikel"
                style="width: 50px; height: 50px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lembaga</h5>
                <p class="text-muted mb-0">Ketua : Name</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Artikel"
                style="width: 50px; height: 50px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lembaga</h5>
                <p class="text-muted mb-0">Ketua : Name</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Artikel"
                style="width: 50px; height: 50px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lembaga</h5>
                <p class="text-muted mb-0">Ketua : Name</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Artikel"
                style="width: 50px; height: 50px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lembaga</h5>
                <p class="text-muted mb-0">Ketua : Name</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-4 mb-4">
          <div class="col-md-3">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Artikel"
                style="width: 50px; height: 50px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lembaga</h5>
                <p class="text-muted mb-0">Ketua : Name</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Artikel"
                style="width: 50px; height: 50px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lembaga</h5>
                <p class="text-muted mb-0">Ketua : Name</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Artikel"
                style="width: 50px; height: 50px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lembaga</h5>
                <p class="text-muted mb-0">Ketua : Name</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="d-flex align-items-center gap-3">
              <img
                src="assets/img/pejabat.jpeg"
                alt="Artikel"
                style="width: 50px; height: 50px; object-fit: cover"
              />
              <div>
                <h5 class="mb-1">Nama Lembaga</h5>
                <p class="text-muted mb-0">Ketua : Name</p>
              </div>
            </div>
          </div>
        </div>
        <a href="<?= base_url('lembaga'); ?>" class="btn-bg"> Lihat Detail </a>
      </section>

      <!-- sarana prasarana -->
      <section id="sarpra" class="reveal">
        <h3 class="mb-4">SARANA DAN PRASARANA</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel facere
          eos maiores voluptatem magnam corrupti officia nam. Mollitia ab
          expedita omnis adipisci perferendis temporibus dolorem similique nobis
          voluptatibus, eveniet a.
        </p>
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-4">
            <h4 class="">SARANA</h4>
            <canvas id="chartSarana" style="max-height: 350px"></canvas>
          </div>
          <div class="col-md-6 text-center mb-4">
            <h4 class="">PRASARANA</h4>
            <canvas id="chartPrasarana" style="max-height: 350px"></canvas>
          </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
          <a href="<?= base_url('sarana_prasarana'); ?>" class="btn-bg">Selengkapnya</a>
        </div>
      </section>

      <h1 class="mb-4">INFORMASI</h1>

      <!-- APBDes -->
      <section id="APBDes" class="reveal">
        <h5 class="text-center">
          ANGGARAN PENDAPATAN DAN BELANJA DESA
          <br />
          (APBDes)
        </h5>
        <div class="mb-3 align-items-center text-center">
          <div class="mb-3 state-item">
            <div class="state-number">Rp 1.350.000.000</div>
            <div class="state-label">PENDAPATAN</div>
          </div>
          <div class="mb-3 state-item">
            <div class="state-number">Rp 1.325.500.000</div>
            <div class="state-label">REALISASI PENDAPATAN</div>
          </div>
          <div class="mb-3 state-item">
            <div class="state-number">Rp 1.250.000.000</div>
            <div class="state-label">RENCANA BELANJA</div>
          </div>
          <div class="mb-3 state-item">
            <div class="state-number">Rp 1.223.000.000</div>
            <div class="state-label">REALISASI BELANJA</div>
          </div>
          <div class="mb-3 state-item">
            <div class="state-number">Rp 50.000.000</div>
            <div class="state-label">PEMBIAYAAN (SiLPA)</div>
          </div>
          <div class="mb-3 state-item">
            <div class="state-number">Rp 102.500.000</div>
            <div class="state-label">SISA ANGGARAN</div>
          </div>
        </div>
        <a href="<?= base_url('APBDes'); ?>" class="btn-bg"> Selengkapnya </a>
      </section>

      <!-- Realisasi Anggaran -->
       <section id="realisasi" class="reveal">
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

      <!-- Pembangunan -->
       <section id="pembangunan" class="reveal">
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

      <h1 class="mb-4">LAYANAN PUBLIK</h1>

      <!-- Persuratan -->
       <section id="persuratan" class="reveal">
        <div class="container">
          <div class="text-center mb-4">
            <h2 class="fw-bold">Layanan Persuratan</h2>
            <p class="text-muted">Ajukan surat keterangan secara online dengan mudah dan cepat</p>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-8">
              <form class="bg-white p-4 rounded shadow-sm">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap Anda" required>
                </div>

                <div class="mb-3">
                  <label for="nik" class="form-label">NIK</label>
                  <input type="text" class="form-control" id="nik" placeholder="Nomor Induk Kependudukan" required>
                </div>

                <div class="mb-3">
                  <label for="jenisSurat" class="form-label">Jenis Surat</label>
                  <select class="form-select" id="jenisSurat" required>
                    <option value="">Pilih Jenis Surat</option>
                    <option>Surat Keterangan Domisili</option>
                    <option>Surat Keterangan Usaha</option>
                    <option>Surat Keterangan Tidak Mampu</option>
                    <option>Surat Pengantar SKCK</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="keterangan" class="form-label">Keterangan Tambahan</label>
                  <textarea class="form-control" id="keterangan" rows="3" placeholder="Tuliskan keterangan tambahan..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">Kirim Permohonan</button>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Layanan Mandiri -->
      <section id="layananpu" class="reveal">
        <div class="mb-4">
          <p class="card-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel facere
            eos maiores voluptatem magnam corrupti officia nam. Mollitia ab
            expedita omnis adipisci perferendis temporibus dolorem similique
            nobis voluptatibus, eveniet a.
          </p>
        </div>
        <h3>LAYANAN ONLINE</h3>
        <div class="row g-4 mb-4 d-flex align-items-center">
          <div class="col-md-6">
            <img
              src="assets/img/profil.jpeg"
              alt="sejarah"
              style="width: 500px; height: 300px; object-fit: cover"
            />
          </div>
          <div class="col-md-6">
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel
              facere eos maiores voluptatem magnam corrupti officia nam.
              Mollitia ab expedita omnis adipisci perferendis temporibus dolorem
              similique nobis voluptatibus, eveniet a. Lorem ipsum dolor sit
              amet consectetur, adipisicing elit. Amet incidunt vero officia
              libero sunt, hic modi ex recusandae iusto enim sint, earum cum
              optio atque animi iure sapiente inventore. Ratione. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit. Delectus similique
              dolorem officiis sunt mollitia blanditiis, nemo quasi libero
              praesentium minima laborum ab dolores hic porro, magnam recusandae
              sint architecto tempore.
            </p>
            <a href="<?= base_url('layanan_mandiri'); ?>" class="btn-bg"> Permohonan Surat </a>
          </div>
        </div>
      </section>

      <!-- Informasi Layanan -->
<section id="informasila" class="reveal">
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

      <h1 class="mb-4">KONTAK & PENGADUAN</h1>

      <!-- Kontak -->
      <section id="contact" class="reveal">
        <div class="container">

          <div class="section-title text-center mb-5">
            <h2>Kontak Kami</h2>
            <p>Hubungi kami untuk informasi lebih lanjut</p>
          </div>
          <div class="info bg-light p-4 rounded shadow-sm h-100">
            <div class="mb-3">
              <div class="map rounded shadow-sm overflow-hidden" style="height: 250px;">
                <iframe 
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.747760558396!2d106.827153!3d-6.175392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5c4e0f9c3f5%3A0x9d2bcb14f0a63d2!2sMonas!5e0!3m2!1sid!2sid!4v1633673636165!5m2!1sid!2sid" 
                  width="100%" 
                  height="100%" 
                  style="border:0;" 
                  allowfullscreen="" 
                  loading="lazy">
                </iframe>
              </div>
            </div>

            <div class="mb-3">
              <h5><i class="bi bi-telephone-fill me-2 text-primary"></i>Telepon</h5>
              <p>+62 812 3456 7890</p>
            </div>
            <div>
              <h5><i class="bi bi-envelope-fill me-2 text-primary"></i>Email</h5>
              <p>info@contoh.com</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Kritik -->
      <section id="kritik" class="reveal">
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

      <!-- Pengaduan -->
      <section id="pengaduan" class="reveal">
        <div class="container">

          <div class="section-title text-center mb-5">
            <h2>Pengaduan</h2>
            <p>Sampaikan pengaduan Anda agar segera ditindaklanjuti</p>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-8">
              <form action="#" method="post" class="bg-light p-4 rounded shadow-sm">
                <div class="mb-3">
                  <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
                </div>
                <div class="mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email Anda" required>
                </div>
                <div class="mb-3">
                  <select name="kategori" class="form-control" required>
                    <option value="">Pilih Kategori Pengaduan</option>
                    <option value="layanan">Layanan</option>
                    <option value="sarana">Sarana / Prasarana</option>
                    <option value="lainnya">Lainnya</option>
                  </select>
                </div>
                <div class="mb-3">
                  <textarea name="pengaduan" rows="5" class="form-control" placeholder="Tuliskan pengaduan Anda" required></textarea>
                </div>
                <div class="text-end">
                  <button type="submit" class="btn btn-warning px-4">Kirim Pengaduan</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </section>

<?= $this->endSection() ?>