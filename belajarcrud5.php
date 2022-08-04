<html>

<head>
    <title>Menampilkan Database Web</title>
</head>

<body>
    <h2>CRUD data perpustakaan</h2>
    <br />
    <br />
    <br />
    <h1>Anggota</h1>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>No Telp</th>
            <th>Alamat</th>
            <th>Email</th>
        </tr>

        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($connect, "select * from anggota");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['no_tlp']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['email']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>