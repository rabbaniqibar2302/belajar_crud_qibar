<html>

<head>
    <title>
        Tambah data Anggota
    </title>
</head>

<body>
    <h2>Silahkan Tambah data anggota</h2>
    <br>
    <form method="post" action="proses.php">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="no_tlp">No Telp</label>
        <input type="number" name="no_tlp" id="no_tlp">
        <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="submit">
    </form>
</body>

</html>