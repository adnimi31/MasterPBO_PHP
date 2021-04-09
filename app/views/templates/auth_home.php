<!-- auth adalah singkatan autentifikasi -->
<!-- mengecek apakah sudah login atau belum, dan hak aksesnya apa -->
<?php error_reporting(0);
if ($_SESSION['role']=='Admin') {
	header('Location:'.BASEURL.'/dashboard');	
}elseif($_SESSION['role']=='SAdmin'){
	header('Location:'.BASEURL.'/sadashboard');
}else{

}
 ?>
