<!DOCTYPE html>
<html>
<head>
	<body bgcolor="87D1D8">
    <title>Sistem Arsip Desa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1 align="center">DATA KLASIFIKASI</h1>
	<p><a href="index.php">Kembali Beranda</a>
    <table align="center" border="3" cellpadding="10" cellspacing="1">
		<tr>
		<tr bgcolor='navy'>
			<th>NO</th>
			<th>ID</th>
			<th>KODE</th>
			<th>NAMA</th>
			<th>URAIAN</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from Klasifikasi");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Id']; ?></td>
				<td><?php echo $d['Kode']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['Uraian']; ?></td>
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