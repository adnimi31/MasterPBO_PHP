<!-- auth adalah singkatan autentifikasi -->
<!-- mengecek apakah sudah login atau belum, dan hak aksesnya apa -->
<?php 
if ($_SESSION['role']!='Admin') {
	session_unset();
	header('Location:'.BASEURL.'');
}else{
}
 ?>