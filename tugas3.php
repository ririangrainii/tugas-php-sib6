<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Nilai Mahasiswa</title>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
    padding: 8px;
    text-align: center;
}

thead{
    background-color: orange;
}

tfoot {
    font-weight: bold;
    background-color: orange;
}
</style>
</head>
<body>

<?php
$data_mahasiswa = [
    ['no' => 1, 'nama' => 'Budi Santoso', 'nim' => '21040201', 'nilai' => 85],
    ['no' => 2, 'nama' => 'Ani Rahmawati', 'nim' => '21040202', 'nilai' => 75],
    ['no' => 3, 'nama' => 'Michael Johnson', 'nim' => '21040203', 'nilai' => 60],
    ['no' => 4, 'nama' => 'Emily Davis', 'nim' => '21040204', 'nilai' => 95],
    ['no' => 5, 'nama' => 'Siti Nurlela', 'nim' => '21040205', 'nilai' => 65],
    ['no' => 6, 'nama' => 'Hadi Prasetyo', 'nim' => '21040206', 'nilai' => 50],
    ['no' => 7, 'nama' => 'Rini Indah', 'nim' => '21040207', 'nilai' => 40],
    ['no' => 8, 'nama' => 'Dian Permata', 'nim' => '21040208', 'nilai' => 90],
    ['no' => 9, 'nama' => 'Agus Setiawan', 'nim' => '21040209', 'nilai' => 85],
    ['no' => 10, 'nama' => 'Dewi Lestari', 'nim' => '21040210', 'nilai' => 73],
    ['no' => 11, 'nama' => 'Ari Wibowo', 'nim' => '21040211', 'nilai' => 66],
    ['no' => 12, 'nama' => 'Maya Sari', 'nim' => '21040212', 'nilai' => 50],
    ['no' => 13, 'nama' => 'Nia Ramadhani', 'nim' => '21040213', 'nilai' => 95],
];

// Inisialisasi variabel agregat
$nilai_tertinggi = 0;
$nilai_terendah = 100;
$total_nilai = 0;
$jumlah_mahasiswa = count($data_mahasiswa);

echo '<table>';
echo '<thead><tr><th>No</th><th>Nama</th><th>NIM</th><th>Nilai</th><th>Keterangan</th><th>Grade</th><th>Predikat</th></tr></thead>';
echo '<tbody>';

foreach ($data_mahasiswa as $mahasiswa) {
    // Mendapatkan nilai tertinggi, nilai terendah, dan total nilai
    $nilai = $mahasiswa['nilai'];
    $nilai_tertinggi = max($nilai_tertinggi, $nilai);
    $nilai_terendah = min($nilai_terendah, $nilai);
    $total_nilai += $nilai;

    // Mendapatkan keterangan (Lulus/Tidak Lulus)
    $keterangan = $nilai >= 65 ? 'Lulus' : 'Tidak Lulus';

    // grade
    if ($nilai >= 80) {
        $grade = 'A';
    } elseif ($nilai >= 70) {
        $grade = 'B';
    } elseif ($nilai >= 60) {
        $grade = 'C';
    } elseif ($nilai >= 50) {
        $grade = 'D';
    } else {
        $grade = 'E';
    }

    // Mendapatkan predikat
    switch ($grade) {
        case 'A':
            $predikat = 'Memuaskan';
            break;
        case 'B':
            $predikat = 'Bagus';
            break;
        case 'C':
            $predikat = 'Cukup';
            break;
        case 'D':
            $predikat = 'Kurang';
            break;
        default:
            $predikat = 'Buruk';
            break;
    }

    echo '<tr>';
    echo '<td>' . $mahasiswa['no'] . '</td>';
    echo '<td>' . $mahasiswa['nama'] . '</td>';
    echo '<td>' . $mahasiswa['nim'] . '</td>';
    echo '<td>' . $mahasiswa['nilai'] . '</td>';
    echo '<td>' . $keterangan . '</td>';
    echo '<td>' . $grade . '</td>';
    echo '<td>' . $predikat . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
echo '<table>';
echo '<tfoot>';
echo '<tr>';
echo '<td>Nilai Tertinggi:</td>';
echo '<td>' . $nilai_tertinggi . '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Nilai Terendah:</td>';
echo '<td>' . $nilai_terendah . '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Nilai rata-rata:</td>';
echo '<td>' . number_format(($total_nilai / $jumlah_mahasiswa), 2) . '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Jumlah Mahasiswa:</td>';
echo '<td>' . $jumlah_mahasiswa . '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>Jumlah keseluruhan nilai:</td>';
echo '<td>' . $total_nilai . '</td>';
echo '</tr>';
echo '<tr>';
echo '<td colspan="2">© 2024- RIRI ANGRAINI</td>';
echo '</tr>';
echo '</tfoot>';
echo '</table>';


?>

</body>
</html>
