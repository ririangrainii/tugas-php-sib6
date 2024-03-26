<!-- TUGAS:
buatlah atau gunakan web company profile (layoutit)sudah ada
lalu ubah extension ubah ke .php.
untuk bagian nama,email,nomor telepon dan data diri lainnya di ubah menjadi sebuah variable 
yang kemudian ditampilkan pada web yg sudah ada -->

<?php
$nama="Riri Angraini";
$email="ririangrainii.02.com";
$telepon='081364393157';
$tempat_lahir="Pekanbaru";
$tgl_lahir="2 Juni 2003";
$alamat="Jl. Permadi IV Pancoran Mas Blok Lili No.25A";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portopolio</title>
</head>
<body bgcolor="lightgrey">
    <h1 align="center">
        <p>
        Personal Profile
        </p>
        <img src="https://media.licdn.com/dms/image/D5603AQGFmGZlyp_ONw/profile-displayphoto-shrink_800_800/0/1708419985240?e=1714003200&v=beta&t=zQYLMh0SY1UElFRRgV-Gkyr3qiULp5eL23f7aoy9Hlc" 
        alt="" width="15%" align="center" hspace="10">
    </h1>

    <p align="justify">
    Hai semua! Saya Riri Angraini, teman-teman boleh panggil saya Riri. Saya mahasiswa dari Fakultas Ilmu Komputer, Program Studi Sistem Informasi di Universitas Muhammadiyah Riau, 
sedang menempuh semester 6. Saya sangat tertarik dengan dunia teknologi.
Saat ini, saya sedang mengikuti program Kampus Merdeka, khususnya MSIB, dan baru saja lulus dari program Academy Fullstack Web Developer. 
Ini adalah langkah tambahan saya untuk mengembangkan diri di luar lingkungan kampus.  
    </p>

    <fieldset>
        <legend>
        <font size="6" color="DarkCyan" face="calibri" >
            About Me
        </font> 
        </legend>

        <h2>Bio Data Lengkap</h2>
        <ol>
        <li><b>Nama Lengkap:</b> <?=$nama ?></li>
        <li><b>Email:</b> <?= $email ?></li>
        <li><b>Nomor Telepon:</b> <?= $telepon ?></li>
        <li><b>Tempat Lahir:</b> <?= $tempat_lahir ?></li>
        <li><b>Tanggal Lahir: </b><?= $tgl_lahir ?></li>
        <li><b>Alamat:</b> <?= $alamat ?></li>
        </ol>
    </fieldset>
</body>
</html>