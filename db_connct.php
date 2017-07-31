<html>
<head>
<title>Contoh Koneksi Database</title>
</head>
<body>
<b>
<?php
//Simpan sebagai file koneksi dengan nama "Db_connect.php"
$host = 'localhost';	// Nama host server kita,
$username = 'root';		// Username database kita,
$password = '';			// Password akses database,
$koneksi = mysql_connect($host, $username, $password);
if($koneksi)
	{echo "Koneksi server berhasil <br><br>";}
else
	{echo "Gagal koneksi ke server <br><br>";}
$dtabase = 'Db_Online';	//Database mysql yang kita gunakan 
$mydb = mysql_select_db($dtabase, $koneksi);
if($mydb)
	{echo "Berhasil memilih database";}
else
	{echo "Tidak dapat memilih database";}
?>
</b>
</body>
</html>