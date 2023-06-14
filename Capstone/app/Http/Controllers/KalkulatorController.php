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

        if ($angka_format < 18.5) {
            return redirect('/kurus')->with('hasil', 'Hasil dari perhitungan anda adalah ' . $angka_format . '. Anda termasuk dalam kategori kurus');
        } elseif ($angka_format >= 18.5 && $angka_format < 25) {
            return redirect('/normal')->with('hasil', 'Hasil dari perhitungan anda adalah ' . $angka_format . '. Anda termasuk dalam kategori normal');
        } elseif ($angka_format >= 25 && $angka_format < 30) {
            return redirect('/gemuk')->with('hasil', 'Hasil dari perhitungan anda adalah ' . $angka_format . '. Anda termasuk dalam kategori gemuk');
        } else {
            return redirect('/obesitas')->with('hasil', 'Hasil dari perhitungan anda adalah ' . $angka_format . '. Anda termasuk dalam kategori obesitas');
        }

        return redirect('/formpenghitungan')->with('hasil', 'Hasil dari perhitungan anda adalah ' . $angka_format);
    }

    public function index()
    {
        return view('formpenghitungan', [
            "title" => "Form Penghitungan"
        ]);
    }
    public function kurus()
    {
        return view('kurus', [
            "title" => "Form Penghitungan"
        ]);
    }
    public function normal()
    {
        return view('normal', [
            "title" => "Form Penghitungan"
        ]);
    }
    public function gemuk()
    {
        return view('gemuk', [
            "title" => "Form Penghitungan"
        ]);
    }
    public function profil()
    {
        return view('profil', [
            "title" => "Profil"
        ]);
    }
    public function obesitas()
    {
        return view('obesitas', [
            "title" => "obesitas"
        ]);
    }
}
