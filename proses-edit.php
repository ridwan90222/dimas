
<?php

include("connection.php");


if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $typemobil = $_POST['typemobil'];
    $hargamobil= $_POST['hargamobil'];
    
    $sql = "UPDATE list SET id='$id',nama='$nama',typemobil='$typemobil',hargamobil='$hargamobil'
    WHERE id=$id";
    $query = mysqli_query($db, $sql);

    
    if( $query ) {
          header('Location: member_page.php');
    } else {
        
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}
?>
