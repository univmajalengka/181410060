<!DOCTYPE html>
<head>
    <body bgcolor="87D1D8">
    <title>Sistem Arsip Desa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1 align="center">SISTEM ARSIP DESA</h1>
    <h3 align="center">Selamat Datang Di Sistem Arsip Desa</h3>
    <h3 align="center">Silahkan Pilih List Menu Dibawah Ini Sesuai kebutuhan Anda</h3>
    <table align="center" border="3" cellpadding="10" cellspacing="1" width="800px">
        <tr>
        <tr bgcolor='navy'>
            <th>NO</th>
            <th>LIST MENU</th>
        <tr>
            <th><?php $no = 1; echo $no++; ?></th>
            <th><a href="admin.php">Data Admin</a></th>
        </tr>
        <tr>
            <th><?php echo $no++; ?></th>
            <th><a href="arsip_masuk.php">Data Arsip Masuk</a></th>
        </tr>
         <tr>
            <th><?php echo $no++; ?></th>
            <th><a href="arsip_keluar.php">Data Arsip Keluar</a></th>
        </tr>
         <tr>
            <th><?php echo $no++; ?></th>
            <th><a href="disposisi.php">Data Disposisi</a></th>
        </tr>>
         <tr>
            <th><?php echo $no++; ?></th>
            <th><a href="klasifikasi.php">Data klasifikasi</a></th>
    </table>
</body>
</html>