<html>

<head>
    <title>Menampilkan Database Web</title>
</head>

<body>
    <h2>CRUD data perpustakaan</h2>
    <br />
    <a href="tambah.php">Tambah Data</a>
    <br />
    <br />

    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "db_perpusweb";

        $connect = mysqli_connect($servername, $username, $password, $database);

        $no = 1;
        $data = mysqli_query($connect,"select * from anggota");
        while($d = mysqli_fetch_array($data)){
            
        }

        ?>
        <tr>
            <td>Buku</td>
            <td>High school dxd</td>
            <td>baku no pico</td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>

</html>