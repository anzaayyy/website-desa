<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriPengaduanModel extends Model
{
    protected $table            = 'tb_kategori_pengaduan';
    protected $primaryKey       = 'id_kategori_pengaduan';
    protected $useAutoIncrement = true;

    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $protectFields    = true;
    protected $allowedFields    = [
        'nama_kategori',
    ];

    // timestamps
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // (opsional) Validasi
    protected $validationRules = [
        'nama_kategori' => 'required|min_length[3]',
    ];
}
