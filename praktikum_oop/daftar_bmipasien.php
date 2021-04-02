<?php
require_once 'class_bmipasien.php';

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data BMI Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<div class="container">
<h1>Daftar BMI Pasien</h1></div><br/>
<div class="container">
    <table class="table table-dark table-sm">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Gender</th>
        <th scope="col">Umur</th>
        <th scope="col">Berat (Kg)</th>
        <th scope="col">Tinggi (cm)</th>
        <th scope="col">BMI</th>
        <th scope="col">Hasil</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"></td>
            <td scope="col"><?=$_array[0];?></td>
            <td scope="col"><?=$_array[1];?></td>
            <td scope="col"><?=$_array[2];?></td>
            <td scope="col"><?=$_array[3];?></td>
            <td scope="col"><?=$_array[4];?></td>
            <td scope="col"><?=$_array[5];?></td>
            <td scope="col"><?=$_array[6];?></td>
        </tr>
    </tbody>
    </table>
</div>
</body>
</html>
