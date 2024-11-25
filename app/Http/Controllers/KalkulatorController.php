<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('kalkulator.index');
    }
    public function tambah()
    {
        $title = "Form Tambah";
        $jumlah = 0;
        return view('kalkulator.tambah', compact('title', 'jumlah'));
    }
    public function storeTambah(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 + $angka2;
        $title = "Hasil dari " . $angka1 . " + " . $angka2 . " adalah : " . $jumlah;
        return view('kalkulator.tambah', compact('jumlah'));
    }
    public function kurang()
    {
        $title = "Form Kurang";
        $jumlah = 0;
        return view('kalkulator.kurang', compact('jumlah'));
    }
    public function storeKurang(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 - $angka2;
        $title = "Hasil dari " . $angka1 . " - " . $angka2 . " adalah : " . $jumlah;
        return view('kalkulator.kurang', compact('jumlah'));
    }
    public function kali()
    {
        $title = "Form Kali";
        $jumlah = 0;
        return view('kalkulator.kali', compact('jumlah'));
    }
    public function storeKali(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 * $angka2;
        $title = "Hasil dari " . $angka1 . " x " . $angka2 . " adalah : " . $jumlah;
        return view('kalkulator.kali', compact('jumlah'));
    }
    public function bagi()
    {
        $title = "Form Bagi";
        $jumlah = 0;
        return view('kalkulator.bagi', compact('jumlah'));
    }
    public function storeBagi(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;
        $jumlah = $angka1 * $angka2;
        $title = "Hasil dari " . $angka1 . " / " . $angka2 . " adalah : " . $jumlah;
        return view('kalkulator.bagi', compact('jumlah'));
    }
}
