<HTML>
<HEAD><TITLE>SIMPAN</TITLE></HEAD>
<link rel="stylesheet" type="text/css" href="layout.css">
<BODY>
<div class="cover">
	<div class="string">
		<h2>Biodata</h2>
		<?PHP
			$nama=$_POST['Masukkan_Nama_Anda'];
			$sex=$_POST['sex'];
			$date=$_POST['tanggal_lahir'];
			$no_telefon = ($_POST["no_telefon"]);
			$alamat=$_POST['alamat'];


			echo ("Halo, Nama saya $nama.<br>");
			echo ("Jenis kelamin saya $sex.<br>");
			echo ("Saya lahir pada tanggal $date;<br>");
			echo ("Nomor telefon saya $no_telefon;<br>");
			echo ("Saya tinggal di $alamat;<br>");
			echo ("Terima Kasih <br>");
		?>
	</div>
</div>
</BODY>
</HTML>