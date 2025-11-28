<?= $this->extend('admin/template/template') ?>
<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-2">
  <h3 class="fw-bold">Manajemen kritik Masyarakat</h3>
</div>

    <div class="table-responsive shadow-sm bg-white p-3 rounded">
        <table class="table table-bordered table-striped align-middle">
          <thead class="table-light">
            <tr class="text-center">
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Kritikan</th>
              <th>Tanggal</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody id="dataPengaduan">
            <!-- Masukkan Data tabel Disini -->
          </tbody>
        </table>
      </div>
    </div>
<?= $this->endSection() ?>
