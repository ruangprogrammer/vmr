<?php


//include('admin/config.php'); 
$product_id = $_POST['product_id'];
$order_name = $_POST['order_name'];
$order_email = $_POST['order_email'];
$order_bbm = $_POST['order_bbm'];
$order_wa = $_POST['order_wa'];
$order_alamat = $_POST['order_alamat'];

 $queryInsert = mysql_query("INSERT INTO order_pelanggan SET 
                         order_name ='" .$order_name. "',
                         order_email='" .$order_email. "',
                         order_bbm ='".$order_bbm."',
                         order_wa = '".$order_wa."',
                         order_alamat = '".$order_alamat."',
                         product_id = '".$product_id."'");
                      //   echo $sql; exit();
if($queryInsert){
	"berhasil order";
}else{
	echo "gagal Order";
}
?>