<?php

namespace App\Models;

use CodeIgniter\Model;

class PendudukModel extends Model
{
    protected $table            = 'tb_penduduk';
    protected $primaryKey       = 'id_penduduk';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nik', 'nama', 'jenis_kelamin', 'alamat','pekerjaan', 'dusun','status_keluarga'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // Hitung total per kategori
    public function getSummary()
    {
        return [
            'total'       => $this->countAllResults(),
            'laki'        => $this->where('jenis_kelamin', 'L')->countAllResults(),
            'perempuan'   => $this->where('jenis_kelamin', 'P')->countAllResults(),
            'kk'          => $this->distinct()->select('alamat')->countAllResults(), // anggap 1 alamat = 1 KK
        ];
    }

    // Rekap per dusun
    public function getRekapDusun()
    {
        return $this->select("dusun,
                SUM(jenis_kelamin='L') AS laki,
                SUM(jenis_kelamin='P') AS perempuan,
                COUNT(*) AS total")
            ->groupBy('dusun')
            ->findAll();
    }
}
