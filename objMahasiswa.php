<?php
require_once 'mahasiswa.php';

// create variable
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
   $nim = $_POST['nim'];
   $nama = $_POST['nama'];
   $kuliah = $_POST['kuliah'];
   $matakuliah = $_POST['matakuliah'];
   $nilai = $_POST['nilai'];
   // create oobject
   $mhs = new Mahasiswa($nim, $nama, $kuliah, $matakuliah, $nilai);


echo "<div style='text-align: center;'>
<h2>Daftar Nilai Ujian Mahasiswa</h2>
<table border='1' cellpadding='10'width='90%' cellspacing='2' align='center'>
        <tr bgcolor='orange'>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kuliah</th>
            <th>Matakuliah</th>
            <th>Nilai</th>
            <th>Grade</th>
            <th>Predikat</th>
            <th>Status</th>
        </tr>
    <tr>
         <td> {$mhs->nim} </td>
         <td> {$mhs->nama} </td>
         <td> {$mhs->kuliah} </td>
         <td> {$mhs->matakuliah} </td>
         <td> {$mhs->nilai} </td>
         <td> {$mhs->grade} </td>
         <td> {$mhs->predikat} </td>
         <td> {$mhs->status} </td> 
    </tr>
</table>
</div>";
}
?>



