<!DOCTYPE html>
<html>
<head>
	<title>Belajar Codeigniter</title>
</head>
<body>
	<h1>Belajar Codeigniter di warungbelajar.com</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
		</tr>
        <?php 
        foreach($pegawai->result() as $row)
        { 
        ?>
            <tr>
                <td><?php echo $row->nama_pegawai ?></td>
                <td><?php echo $row->jenis_kelamin ?></td>
                <td><?php echo $row->alamat_pegawai ?></td>
            </tr>
        <?php 
        } 
        ?>
	</table>
</body>
</html>