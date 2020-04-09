<!DOCTYPE html>
<html>
<head>
	<body bgcolor="87D1D8">
    <title>Sistem Arsip Desa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 align="center">DATA DISPOSISI</h1>
	<p><a href="index.php">Kembali Beranda</a>
    <table align="center" border="3" cellpadding="10" cellspacing="1">
		<tr>
		<tr bgcolor='navy'>
			<th>NO</th>
			<th>ID</th>
			<th>ID ARSIP</th>
			<th>KPD YTH</th>
			<th>ISI DISPOSISI</th>
			<th>SIFAT</th>
			<th>BATAS WAKTU</th>
			<th>CATATAN</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from Disposisi");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Id']; ?></td>
				<td><?php echo $d['Id_Arsip']; ?></td>
				<td><?php echo $d['Kpd_Yth']; ?></td>
				<td><?php echo $d['Isi_Disposisi']; ?></td>
				<td><?php echo $d['Sifat']; ?></td>
				<td><?php echo $d['Batas_Waktu']; ?></td>
				<td><?php echo $d['Catatan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>