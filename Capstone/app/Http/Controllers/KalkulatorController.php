<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function penghitungan(Request $request)
    {
        $berat = $request->input('berat');
        $tinggi = (float) $request->input('tinggi');
        $result = $berat / ($tinggi * $tinggi);

        $angka_format = number_format($result, 1, ',', '');

        return redirect('/formpenghitungan')->with('hasil','Hasil dari perhitungan anda adalah ' . $angka_format);
    }

    public function index()
    {
        return view('formpenghitungan');
    }
}
