<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\AgendaModel;

class AgendaController extends BaseController
{
    public function index()
    {
        $agendaModel = new AgendaModel();
        $data['agenda'] = $agendaModel->orderBy('tanggal_mulai','DESC')->findAll();
        return view('agenda', $data);
    }

    /**
     * Halaman detail agenda (akses via slug)
     * Contoh URL: /agenda/rapat-desa-2025
     */
    public function detail($slug)
    {
        $agendaModel = new AgendaModel();
        $agenda = $agendaModel->where('slug', $slug)->first();

        // Jika slug tidak ditemukan
        if (!$agenda) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Agenda tidak ditemukan.');
        }

        $data['agenda'] = $agenda;

        // Kirim data ke view detail
        return view('agenda_detail', $data);
    }
}
