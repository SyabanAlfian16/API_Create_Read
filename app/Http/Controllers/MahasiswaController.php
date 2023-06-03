<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $model = new Mahasiswa();
        $data = $model->all();
        foreach($data ad $dt) {
            $balikan[]=[
                'nim' => $dt->nim,
                'nama' => $dt->nama,
                'umur' => $dt->umur,
                'alamat' => $dt->alamat,
                'kota' => $dt->kota,
                'kelas' => $dt->kelas,
                'jurusan' => $dt->jurusan,
                'created_at' => $dt->created_at,
                'updated_at' => $dt->updated_at,
            ];
        }
        return response()->json($balikan);
    }
}
