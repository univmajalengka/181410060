<!DOCTYPE html>
<html>
<head>
	<body bgcolor="87D1D8">
    <title>Sistem Arsip Desa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 align="center">DATA ADMIN</h1>
	<p><a href="index.php">Kembali Beranda</a>
    <a href="tambah_admin.php">Tambah Data Admin</a>
    <table align="center" border="3" cellpadding="10" cellspacing="1">
        <tr>
        <tr bgcolor='navy'>
			<th>NO</th>
			<th>ID</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>NAMA</th>
			<th>KODE PEGAWAI</th>
			<th>LEVEL</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from admin");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['ID']; ?></td>
				<td><?php echo $d['Username']; ?></td>
				<td><?php echo $d['Password']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['Kode_Pegawai']; ?></td>
				<td><?php echo $d['Level']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['ID']; ?>">EDIT</a>
					<a href=>|</a>
					<a href="hapus.php?id=<?php echo $d['ID']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>