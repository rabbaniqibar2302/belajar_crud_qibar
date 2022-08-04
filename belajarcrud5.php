<html>

<head>
    <title>Menampilkan Database Web</title>
</head>

<body>
    <h2>CRUD data perpustakaan</h2>
    <br />
    <br />
    <br />
    <a href="tambah.php">Tambah Data</a>
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
    <h1>Admin</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Id Admin</th>
            <th>Nama</th>
        </tr>

        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($connect, "select * from admin");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_admin']; ?></td>
                <td><?php echo $d['username']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <h1>Buku</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
        </tr>

        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($connect, "select * from buku");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['judul_buku']; ?></td>
                <td><?php echo $d['pengarang']; ?></td>
                <td><?php echo $d['thn_terbit']; ?></td>
                <td><?php echo $d['penerbitan']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>