<?php

namespace App\Http\Controllers;

use App\Ujian;
use App\Student;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    function hitungNilaiAkhir($nilaiHarian, $nilaiUTS, $nilaiUAS)
{

    $student = Student::all();

    return $nilaiHarian * 0.1 + $nilaiUTS * 0.3 + $nilaiUAS * 0.6;

// Contoh penggunaan
$nilaiHarian = $student->harian;
                    $nilaiUTS = $student->uts;
                    $nilaiUAS = $student->uas;

$hasil = hitungNilaiAkhir($nilaiHarian, $nilaiUTS, $nilaiUAS);
echo "Nilai Akhir: $hasil";
}
}