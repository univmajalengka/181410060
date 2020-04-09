<!DOCTYPE html>
<html>
<head>
	<body bgcolor="87D1D8">
    <title>Sistem Arsip Desa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 align="center">DATA ARSIP MASUK</h1>
	<p><a href="index.php">Kembali Beranda</a>
    <table align="center" border="3" cellpadding="10" cellspacing="1">
        <tr>
        <tr bgcolor='navy'>
			<th>NO</th>
			<th>ID</th>
			<th>KODE</th>
			<th>NO AGENDA</th>
			<th>INDEX BERKAS</th>
			<th>ISI RINGKAS</th>
			<th>DARI</th>
			<th>NO ARSIP</th>
			<th>TANGGAL ARSIP</th>
			<th>TANGGAL DITERIMA</th>
			<th>KETERANGAN</th>
			<th>FILE</th>
			<th>PENGOLAH</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from arsip_masuk");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['Id']; ?></td>
				<td><?php echo $d['Kode']; ?></td>
				<td><?php echo $d['No_Agenda']; ?></td>
				<td><?php echo $d['Index_Berkas']; ?></td>
				<td><?php echo $d['Isi_Ringkas']; ?></td>
				<td><?php echo $d['Dari']; ?></td>
				<td><?php echo $d['No_Arsip']; ?></td>
				<td><?php echo $d['Tgl_Arsip']; ?></td>
				<td><?php echo $d['Tgl_Diterima']; ?></td>
				<td><?php echo $d['Keterangan']; ?></td>
				<td><?php echo $d['File']; ?></td>
				<td><?php echo $d['Pengolah']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href=>|</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>