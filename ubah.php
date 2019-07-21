<?php

include("connection.php");


if( !isset($_GET['id']) ){
    header('Location: member_page.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM list WHERE id=$id";
$query = mysqli_query($db, $sql);
$p = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>EDIT PENYEWAAN</title>
    
    <style>
        body{
            background-color: yellow;
        }
    </style>
</head>

<body>
    <header>
        <h3>Formulir Edit </h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $p['id'] ?>" />

            <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="masukkan nama anda" 
            value="<?php echo $p['nama'] ?>" />
            </p>
            <p>
            <label for="typemobil">Type mobil </label>
            <input type="text" name="typemobil" placeholder="Type mobil" 
            value="<?php echo $p['typemobil'] ?>" />
            </p>
            <p>
            <label for="hargamobil"> Alamat: </label>
            <input  required type="text" name="hargamobil" placeholder="123456789"
                         value="<?php echo $p['hargamobil'] ?>"/>
            </p>


            <input type="submit" value="Simpan" name="simpan" />
            </p>
        </fieldset>
    </form>
</body>
</html>