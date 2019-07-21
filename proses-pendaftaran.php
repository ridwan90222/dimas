<?php

include("connection.php");

if(isset($_POST['daftar'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $typemobil = $_POST['typemobil'];
    $hargamobil = $_POST['hargamobil'];

    $sql = "INSERT INTO list ( id ,nama, typemobil, hargamobil ) 
    VALUE ('$id','$nama', '$typemobil', '$hargamobil')";
    $query = mysqli_query($db, $sql);

    
    if( $query ) {
    
        header('Location: form_pendaftaran.php?status=sukses');
    } else {
        header('Location: form_pendaftaran.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>