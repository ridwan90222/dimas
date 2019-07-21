<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Pendaftaran Online</title>

<style>
    body{
        background-color: yellow;
    </style>
</head>

<body>
    <header>
        <h3 style="text-align: center;">List penyewa</h3>
    </header>

    <div style="text-align: center;">
    <p> mendaftar klik <a href="form_pendaftaran.php">disini</a></p>
    </div>

    <br>

    <table border="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Type mobil</th>
            <th>Harga mobil</th>
            <th>Ubah</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM list ";
        $query = mysqli_query($db, $sql);

        while($p = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$p['id']."</td>";
            echo "<td>".$p['nama']."</td>";
            echo "<td>".$p['typemobil']."</td>";
            echo "<td>".$p['hargamobil']."</td>";
            echo "<td>";
            echo "<a href='ubah.php?id=".$p['id']."'>Ubah</a>  ";
            echo "</td>";
            echo "<td>";
            echo "<a href='hapus.php?id=".$p['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

 <button style="background-color: black; color: cyan; width: 150px height: 30px;" onclick="window.location.href = 'index.php';">kembali ke awal</button>

    </body>
</html>