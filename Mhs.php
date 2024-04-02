<?php
require_once 'mahasiswa.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h1 align="center">Form Nilai Ujian</h1>
<form action="objMahasiswa.php" method="post">
<div class="form-group row">
    <label for="nim" class="col-3 col-form-label">Nim</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-3 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kuliah" class="col-3 col-form-label">Kuliah</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="kuliah" name="kuliah" placeholder="---Tempat Kuliah---" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">
            <i class="fa fa-unsorted"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matakuliah" class="col-3 col-form-label">Matakuliah</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="matakuliah" name="matakuliah" placeholder="---Pilih Matakuliah---" type="text" class="form-control"> 
        <div class="input-group-append">
          <div class="input-group-text">
            <i class="fa fa-unsorted"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-3 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-3 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Selesai</button>
    </div>
  </div>

 </form>
</body>
</html>
 







