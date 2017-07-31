<html>
<head>
<title>Contoh Membuat Tabel</title>
</head>
<body>
<?php
include_once("db_connect.php");
$tabel = mysql_query("CREATE TABLE IF NOT EXISTS tamu (
Id INT NOT NULL,
Nama VARCHAR(30) NOT NULL,
Alamat VARCHAR(50) NOT NULL,
Email VARCHAR(30) NOT NULL,
Komentar VARCHAR(255) NOT NULL,
PRIMARY KEY(Id))");
echo "<br><br>";
if($tabel)
	{echo "Berhasil membuat tabel Tamu melalui script php";}
else
	{echo "Gagal membuat tabel";}
?>
</body>
</html>