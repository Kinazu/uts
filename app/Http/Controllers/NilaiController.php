<?php

namespace App\Http\Controllers;

use App\Student;
use App\Subject;
use App\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    // Fungsi untuk menghitung nilai akhir
    public function hitungNilaiAkhir($nilaiHarian, $nilaiUTS, $nilaiUAS)
    {
        return $nilaiHarian * 0.1 + $nilaiUTS * 0.3 + $nilaiUAS * 0.6;
    }

    // Metode lain dalam controller bisa ditambahkan di sini

    public function Nilai()
    {
    // Menyimpan informasi mahasiswa dan subjek
$student = Student::create(['name' => 'John Doe', 'registration_number' => '123456']);
$subject1 = Subject::create(['name' => 'Math']);
$subject2 = Subject::create(['name' => 'English']);

// Menyimpan nilai ujian
Nilai::create(['student_id' => $student->id, 'subject_id' => $subject1->id, 'exam_type' => 'harian', 'score' => 86]);
Nilai::create(['student_id' => $student->id, 'subject_id' => $subject1->id, 'exam_type' => 'harian', 'score' => 92]);
Nilai::create(['student_id' => $student->id, 'subject_id' => $subject1->id, 'exam_type' => 'uts', 'score' => 94]);

// Mengambil nilai ujian
$scores = Nilai::where('student_id', $student->id)
    ->where('subject_id', $subject1->id)
    ->where('exam_type', 'harian')
    ->get();

// Menghitung rata-rata nilai
$averageScore = $scores->avg('score');
echo "Rata-rata Nilai: $averageScore";
    }
}