<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>

<!-- Profil Desa -->
<h1 class="mb-4">PROFIL DESA</h1>

<section id="sejarah" class="reveal">
  <div class="container">
    <div class="row g-4 align-items-center">
      <div class="col-md-4 text-center">
        <img
          src="<?= base_url('uploads/profil/' . $sejarah['gambar']); ?>"
          alt="<?= esc($sejarah['alt_gambar']); ?>"
          style="width: 300px; height: 300px; object-fit: cover; border-radius: 8px;" />
      </div>

      <div class="col-md-8">
        <h3><?= esc(strtoupper($sejarah['judul'])); ?></h3>
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
<section id="vm" class="reveal">
  <h2 class="mb-4 text-center">VISI & MISI</h2>
  <div class="row g-4">
    <div class="col-md-4 text-center">
      <h3 class="card-title">VISI</h3>
      <p class="card-text">
        <?= esc($vimi['visi'] ?? 'Belum ada visi yang ditetapkan.'); ?>
      </p>
    </div>
    <div class="col-md-4 text-center">
      <img
        src="<?= base_url('assets/img/' . $vimi['gambar']); ?>"
        alt="<?= esc($vimi['alt_gambar'] ?? 'visimisi'); ?>"
        class="img-fluid shadow rounded"
        style="width: 300px; height: 300px; object-fit: cover;" />
    </div>
    <div class="col-md-4 text-center">
      <h3 class="card-title">MISI</h3>
      <p class="card-text">
        <?= $vimi['misi'] ?? 'Belum ada misi yang ditetapkan.'; ?>
      </p>
    </div>
  </div>
</section>

<!-- Struktur Organisasi -->
<section id="struktur" class="reveal">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h3>STRUKTUR DESA</h3>
      <a href="<?= base_url('struktur'); ?>" class="btn-bg">Selengkapnya</a>
    </div>

    <?php if (!empty($struktur)): ?>
      <div class="row g-4">
        <?php foreach ($struktur as $i => $row):
          // variabel aman + fallback
          $nama       = esc($row['nama'] ?? 'Tanpa Nama');
          $jabatan    = esc($row['jabatan'] ?? '—');
          $slug       = esc($row['slug'] ?? '');
          $img        = !empty($row['gambar']) ? base_url('uploads/struktur/' . $row['gambar']) : base_url('uploads/struktur/pejabat.jpeg');
          $alt        = esc($row['alt_gambar'] ?? $nama);
        ?>
          <div class="col-md-6">
            <div class="d-flex align-items-center gap-3">
              <img
                src="<?= $img ?>"
                alt="<?= $alt ?>"
                style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;" />
              <div>
                <h5 class="mb-1"><?= $nama ?></h5>
                <p class="text-muted mb-0"><?= $jabatan ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

    <?php else: ?>
      <div class="alert alert-info">Belum ada data struktur.</div>
    <?php endif; ?>

  </div>
</section>

<!-- Perangkat Desa -->
<section id="perangkat" class="reveal">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3>PERANGKAT DESA</h3>
    <a href="<?= base_url('perangkat'); ?>" class="btn-bg">Selengkapnya</a>
  </div>

  <div class="row g-4 mb-4">
    <?php if (!empty($perangkat)): ?>
      <?php foreach ($perangkat as $p): ?>
        <?php
        // Path foto perangkat (fallback jika kosong)
        $fileName = $p['foto'] ?? '';
        $imgSrc   = $fileName
          ? base_url('uploads/perangkat/' . $fileName)
          : base_url('uploads/perangkat/pejabat.jpeg');
        $altFoto  = !empty($p['alt_foto'])
          ? $p['alt_foto']
          : 'Foto ' . ($p['nama'] ?? 'Perangkat Desa');
        ?>
        <div class="col-md-6">
          <div class="d-flex align-items-center gap-3">
            <img
              src="<?= esc($imgSrc) ?>"
              alt="<?= esc($altFoto) ?>"
              style="width: 100px; height: 100px; object-fit: cover;"
              class="rounded-circle" />
            <div>
              <h5 class="mb-1"><?= esc($p['nama'] ?? '-') ?></h5>
              <p class="text-muted mb-0"><?= esc($p['jabatan'] ?? '-') ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="col-12">
        <div class="alert alert-info text-center mb-0">
          Belum ada data perangkat.
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- Berita -->
<h1 class="mb-4">BERITA</h1>

<section id="berita" class="reveal">
  <h3 class="mb-4 text-center">BERITA</h3>

  <div class="row g-4 mb-4">
    <?php if (!empty($berita)): ?>
      <?php foreach ($berita as $b): ?>
        <?php
        // Path gambar berita
        $imgPath = !empty($b['gambar'])
          ? base_url('uploads/berita/' . $b['gambar'])
          : base_url('uploads/berita/gtong.jpg'); // fallback

        $altFoto  = !empty($b['alt_gambar']) ? $b['alt_gambar'] : 'Gambar Berita';
        $tanggal  = !empty($b['tanggal']) ? date('d F Y', strtotime($b['tanggal'])) : '-';
        ?>
        <div class="col-md-6">
          <div class="d-flex align-items-center gap-3">
            <img
              src="<?= esc($imgPath) ?>"
              alt="<?= esc($altFoto) ?>"
              style="width: 100px; height: 100px; object-fit: cover;"
              class="rounded" />
            <div>
              <h5 class="mb-1">
                <a href="<?= base_url('berita/' . esc($b['slug'])) ?>" class="text-dark text-decoration-none">
                  <?= esc($b['judul']) ?>
                </a>
              </h5>
              <p class="text-muted mb-0">
                <?= character_limiter(strip_tags($b['deskripsi']), 50) ?>...
              </p>
              <p class="text-muted mb-2"><?= esc($tanggal) ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="col-12 text-center">
        <div class="alert alert-info">Belum ada berita untuk ditampilkan.</div>
      </div>
    <?php endif; ?>
  </div>

  <div class="text-center">
    <a href="<?= base_url('berita'); ?>" class="btn-bg"> Selengkapnya </a>
  </div>
</section>

<!-- Pengumuman Desa -->
<section id="pengumuman" class="reveal">
  <h2 class="mb-4 text-center">PENGUMUMAN DESA</h2>

  <div class="row g-4 mb-4">
    <?php if (!empty($pengumuman)): ?>
      <?php foreach ($pengumuman as $p): ?>
        <?php
        // Path gambar
        $img = !empty($p['gambar'])
          ? base_url('uploads/pengumuman/' . $p['gambar'])
          : base_url('uploads/pengumuman/pengumuman-default.jpeg'); // fallback otomatis

        $alt = !empty($p['alt_gambar']) ? $p['alt_gambar'] : 'Gambar Pengumuman';
        $tanggal = !empty($p['tanggal']) ? date('d F Y', strtotime($p['tanggal'])) : '-';
        ?>
        <div class="col-md-6">
          <div class="d-flex align-items-center gap-3">
            <img
              src="<?= esc($img) ?>"
              alt="<?= esc($alt) ?>"
              style="width: 100px; height: 100px; object-fit: cover"
              class="rounded" />
            <div>
              <h5 class="mb-1">
                <a href="<?= base_url('pengumuman/' . esc($p['slug'])) ?>" class="text-dark text-decoration-none">
                  <?= esc($p['judul']) ?>
                </a>
              </h5>
              <p class="text-muted mb-0">
                <?= character_limiter(strip_tags($p['deskripsi']), 100) ?>...
              </p>
              <p class="text-muted mb-2"><?= esc($tanggal) ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="col-12">
        <div class="alert alert-info text-center">Belum ada pengumuman untuk ditampilkan.</div>
      </div>
    <?php endif; ?>
  </div>

  <div class="text-center">
    <a href="<?= base_url('pengumuman'); ?>" class="btn-bg"> Selengkapnya </a>
  </div>
</section>

<!-- Agenda Desa -->
<section id="agenda" class="reveal">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">AGENDA DESA</h3>
    <a href="<?= base_url('agenda'); ?>" class="btn-bg"> Selengkapnya </a>
  </div>

  <div class="row g-4">
    <?php if (!empty($agenda)): ?>
      <?php foreach ($agenda as $item): ?>
        <?php
        // Path gambar + fallback jika kosong
        $gambar = !empty($item['gambar'])
          ? base_url('uploads/agenda/' . $item['gambar'])
          : base_url('uploads/agenda/agenda-default.jpeg');

        $alt = !empty($item['alt_gambar']) ? $item['alt_gambar'] : $item['judul'];
        ?>
        <div class="col-md-3 text-center">
          <div class="align-items-center">
            <img
              src="<?= esc($gambar) ?>"
              alt="<?= esc($alt) ?>"
              class="mb-3"
              style="width: 150px; height: 150px; object-fit: cover" />
            <div>
              <h5>
                <a href="<?= base_url('agenda/' . esc($item['slug'])) ?>"
                  class="text-dark text-decoration-none">
                  <?= esc($item['judul']) ?>
                </a>
              </h5>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="col-12 text-center">
        <div class="alert alert-info">Belum ada agenda desa saat ini.</div>
      </div>
    <?php endif; ?>
  </div>
</section>

<h1 class="mb-4">DATA DESA</h1>

<!-- Jumlah Penduduk -->
<section id="penduduk" class="reveal">
  <h3 class="mb-4 text-center">JUMLAH PENDUDUK</h3>
  <div class="row g-4 d-flex align-items-center">
    <div class="col-md-6">
      <!-- canvas untuk grafik -->
      <canvas id="myChartDetail" width="300" height="200"></canvas>
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

  <p class="text-muted">
    Wilayah Desa Makmur Jaya terbagi menjadi beberapa dusun, RW, dan RT dengan karakteristik geografis yang beragam.
    Setiap wilayah memiliki peran penting dalam penyelenggaraan pemerintahan desa serta pengelolaan potensi sumber daya alam dan masyarakatnya.
  </p>

  <?php
  $total_rw = array_sum(array_column($wilayah, 'jumlah_rw'));
  $total_rt = array_sum(array_column($wilayah, 'jumlah_rt'));
  ?>

  <div class="row g-4 mb-3 align-items-center text-center">
    <div class="col-md-4">
      <div class="stat-item">
        <div class="stat-number" data-value="<?= count($wilayah) ?>">
          <?= count($wilayah) ?>
        </div>
        <div class="stat-label">Dusun</div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="stat-item">
        <div class="stat-number" data-value="<?= $total_rw ?>">
          <?= $total_rw ?>
        </div>
        <div class="stat-label">RW</div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="stat-item">
        <div class="stat-number" data-value="<?= $total_rt ?>">
          <?= $total_rt ?>
        </div>
        <div class="stat-label">RT</div>
      </div>
    </div>
  </div>

  <a href="<?= base_url('wilayah'); ?>" class="btn-bg"> Lihat Detail </a>
</section>

<!-- Lembaga -->
<section id="lembaga" class="reveal">
  <h3 class="mb-4 text-center">LEMBAGA</h3>

  <p class="text-center mb-5">
    Berikut adalah informasi mengenai berbagai lembaga yang berperan dalam mendukung jalannya pemerintahan dan pembangunan desa.
  </p>

  <div class="row g-4 mb-4">
    <?php if (!empty($lembaga)): ?>
      <?php foreach ($lembaga as $l): ?>
        <div class="col-md-3">
          <div class="d-flex align-items-center gap-3">
            <img
              src="<?= base_url('uploads/lembaga/' . esc($l['gambar'])) ?>"
              alt="<?= esc($l['alt_gambar']) ?>"
              style="width: 50px; height: 50px; object-fit: cover"
              class="rounded-circle" />
            <div>
              <h5 class="mb-1">
                <a href="<?= base_url('lembaga/' . esc($l['slug'])) ?>" class="text-decoration-none text-dark">
                  <?= esc($l['nama_lembaga']) ?>
                </a>
              </h5>
              <p class="text-muted mb-0">
                <?= esc($l['jabatan']) ?> : <?= esc($l['nama']) ?>
              </p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <div class="text-center text-muted alert alert-info">Belum ada data lembaga ditampilkan.</div>
    <?php endif; ?>
  </div>

  <a href="<?= base_url('lembaga'); ?>" class="btn-bg d-block mx-auto" style="width: max-content;">
    Lihat Detail
  </a>
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
    (APBDes <?= esc($apbdes['tahun'] ?? '') ?>)
  </h5>

  <?php if (!empty($apbdes)) : ?>
    <div class="mb-3 align-items-center text-center">

      <div class="mb-3 state-item">
        <div class="state-number">Rp <?= number_format($apbdes['total_pendapatan'], 0, ',', '.') ?></div>
        <div class="state-label">PENDAPATAN</div>
      </div>

      <div class="mb-3 state-item">
        <div class="state-number">Rp <?= number_format($apbdes['total_rencana_belanja'], 0, ',', '.') ?></div>
        <div class="state-label">RENCANA BELANJA</div>
      </div>

      <div class="mb-3 state-item">
        <div class="state-number">Rp <?= number_format($apbdes['total_belanja'], 0, ',', '.') ?></div>
        <div class="state-label">REALISASI BELANJA</div>
      </div>

      <div class="mb-3 state-item">
        <div class="state-number">Rp <?= number_format($apbdes['total_pembiayaan'], 0, ',', '.') ?></div>
        <div class="state-label">PEMBIAYAAN (SiLPA)</div>
      </div>

      <div class="mb-3 state-item">
        <div class="state-number">
          Rp <?= number_format($sisa_anggaran, 0, ',', '.') ?>
        </div>
        <div class="state-label">SISA ANGGARAN</div>
      </div>

    </div>

  <?php else: ?>
    <p class="text-center text-muted">Data APBDes belum tersedia.</p>
  <?php endif; ?>

  <a href="<?= base_url('APBDes'); ?>" class="btn-bg"> Selengkapnya </a>
</section>


<!-- Realisasi Anggaran -->
<section id="realisasi" class="reveal">
  <div class="container">
    <div class="text-center mb-4">
      <h3>Realisasi Anggaran Desa</h3>
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
        style="width: 500px; height: 300px; object-fit: cover" />
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