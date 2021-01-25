<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $nama = $_POST['edit_nama'];
    $NIM = $_POST['edit_NIM'];
    $jenis_kelamin = $_POST['edit_jenis_kelamin'];
    $jurusan = $_POST['edit_jurusan'];
    $agama = $_POST['edit_agama'];
    $IPK = $_POST['edit_ipk'];


    // query
    $sql = "UPDATE mahasiswa SET nama='$nama', NIM='$NIM', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', agama='$agama', IPK='$IPK' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
