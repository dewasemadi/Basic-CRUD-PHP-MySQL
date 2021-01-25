<?php
include("./config.php");

if (isset($_POST['deletedata'])) {
    // ambil id dari query string
    $id = $_POST['delete_id'];

    // query hapus
    $sql = "DELETE FROM mahasiswa WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // apa query berhasil dihapus?
    if ($query) {
        header('Location: ./index.php?hapus=sukses');
    } else
        die('Location: ./index.php?hapus=gagal');
} else
    die("akses dilarang...");
