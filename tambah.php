<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['tambah'])) {
    // ambil data dari form
    $nama = $_POST['nama'];
    $NIM = $_POST['NIM'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $agama = $_POST['agama'];
    $IPK = $_POST['IPK'];

    // query
    $sql = "INSERT INTO mahasiswa(nama, NIM, jenis_kelamin, jurusan, agama, IPK)
    VALUES('$nama', '$NIM', '$jenis_kelamin', '$jurusan', '$agama', '$IPK')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Akses dilarang...");
