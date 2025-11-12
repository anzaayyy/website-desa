<?= $this->extend('layouts/template') ?>
<?= $this->section('content') ?>

<section id="sarpra">
  <h3 class="mb-4 text-center">SARANA DAN PRASARANA DESA</h3>
  <p class="text-center mb-5">
    Berikut adalah data lengkap mengenai berbagai sarana dan prasarana yang mendukung kegiatan masyarakat desa.
  </p>

  <?php if (!empty($sarpras)): ?>
    <div class="row g-4">
      <?php foreach ($sarpras as $row): ?>
        <!-- SARANA -->
        <div class="col-md-6">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
              <h5 class="mb-3 text-primary"><?= esc($row['judul_sarana']) ?></h5>
              <ul class="mb-0">
                <?php foreach (explode(',', $row['isi_sarana']) as $item): ?>
                  <li><?= esc(trim($item)) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>

        <!-- PRASARANA -->
        <div class="col-md-6">
          <div class="card border-0 shadow-sm h-100">
            <div class="card-body">
              <h5 class="mb-3 text-success"><?= esc($row['judul_prasarana']) ?></h5>
              <ul class="mb-0">
                <?php foreach (explode(',', $row['isi_prasarana']) as $item): ?>
                  <li><?= esc(trim($item)) ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <p class="text-center text-muted">Belum ada data sarana dan prasarana.</p>
  <?php endif; ?>
</section>

<?= $this->endSection() ?>
