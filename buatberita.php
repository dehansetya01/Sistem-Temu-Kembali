<?php
include 'index.php';
include 'koneksi.php';
?>

<form method='POST'>
<table>
<tr><td><b>Judul Berita: </b></td> <td><input  type='text' name='judul' style='width:500px' /></td></tr>
<tr><td><b>Isi berita: </b> </td><td><textarea name='isi' cols='100' rows='10' tabindex='4'></textarea></td><tr>

</table>
          <input type="submit" value="Tambah!" name="BtnAdd" ></td>
		  
</form>

<?php
if(isset($_POST['BtnAdd'])){ // jika tombol 'BtnAdd' di klik, lakukan proses:
// ambil judul, isi berita
$judul1 = $_POST['judul'];
$isi1 = $_POST['isi'];

$id1 = str_replace(" ", "_", $judul1); // replace spasi dgn '_' utk dijadikan id_berita/

// masukkan ke database
		$query = "INSERT INTO berita VALUES ('$id1','$judul1','$isi1')"; 
		$insert_query  = mysqli_query($koneksi,$query);
}

?>