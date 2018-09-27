<!DOCTYPE html>
<html>
<head>
    <title></title> 
</head>

<body>
<table>
    <form action="" method="post" enctype="multipart/form-data">
    <tr>
    <td>Nama<br></td>
    <td><input type="text" name="nama"></input></td>
    </tr>
    <tr>
    <td>Alamat<br></td>
    <td><input type="text" name="alamat"></input></td>
    </tr>
    <tr>
    <td>No Telepon<br></td>
    <td><input type="int" name="notlp"></input></td>
    </tr>
    <tr>
    <h3><td>Genre Film<br></td></h3>
    </tr>
    <tr>
    <td><input type="checkbox" name="Genre[]" value="Horror">Horror<br></td></tr>
    <tr>
	<td><input type="checkbox" name="Genre[]" value="Action">Action<br></td></tr>
	<tr>
	<td><input type="checkbox" name="Genre[]" value="Anime">Anime<br></td></tr>
	<tr>
	<td><input type="checkbox" name="Genre[]" value="Thriller">Thriller<br></td></tr>
	<tr>
	<td><input type="checkbox" name="Genre[]" value="Animasi">Animasi<br></td></tr>
	<tr>
	<h3><td>Tempat Wisata<br></h3></td></h3></tr>
	<tr>
	<td><input type="checkbox" name="wisata[]" value="Bali">Bali<br></td></tr>
	<tr>
	<td><input type="checkbox" name="wisata[]" value="Raja Ampat">Raja Ampat<br></td></tr>
	<tr>
	<td><input type="checkbox" name="wisata[]" value="Pulau Derawan">Pulau Derawan<br></td></tr>
	<tr>
	<td><input type="checkbox" name="wisata[]" value="Bangka Belitung">Bangka Belitung<br></td></tr>
	<tr>
	<td><input type="checkbox" name="wisata[]" value="Labuan Bajo">Labuan Bajo<br></td></tr>
	<tr>
	<td></td>
	<td><input type="submit" name="submit" value="submit"></input></td></tr>
	</table>
    </form> 
</body> 
</html>

<?php
if (isset($_POST['submit'])){
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$notlp = $_POST['notlp'];

$Genre = $_POST["Genre"];
$wisata = $_POST["wisata"];
echo "$nama<br>"."$alamat<br>"."$notlp<br>";
echo "<p>Genre Film & Trip yg anda pilih:</p>";

foreach ($Genre as $nilai) {
	echo "- $nilai <br />";
}
	foreach ($wisata as $nilai) {
echo "- $nilai <br />";
}
}
?>