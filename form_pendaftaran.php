<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran Siswa</title>

    <style>
        body{
            background-color: yellow;
        }
    </style>
</head>

<body>
    <header>
        <h3> Pendaftaran penyewaan</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>
            <p>
            <label for="id">id </label>
            <input type="number" name="id" placeholder="masukkan angka 1-5" min="1" max="5" required />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Isi nama anda" required />
        </p>
        <p>
            <label for="typemobil">Type mobil: </label>
            <input type="text" name="typemobil" placeholder="nama" required />
        </p>
        <p>
            <label for="hargamobil">Harga mobil: </label>
            <input type="text" name="hargamobil" placeholder="alamat" required />
        </p>
        <p>
        <input type="submit" value="Daftar" name="daftar" />
        </p>
        <p><a href="member_page.php"> kembali </a></p>

        </fieldset>

    </form>
<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran penyewa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>


