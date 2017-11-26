<?php 


define("DATABASE_HOST", "localhost"); //database host
define("DATABASE_NAME", "vmr"); //nama database
define("DATABASE_USER", "root"); //user database
define("DATABASE_PASSWORD", ""); // password 
//connect it!
mysql_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD) or die("<p>Koneksi Gagal! cek konfigurasi koneksi:<br />" .mysql_error(). "</p>");
//echo "<p>Koneksi server suskes!</p>";  // uncomment for displaying success connection test message.
mysql_select_db(DATABASE_NAME) or die ("Database <strong>".DATABASE_NAME."</strong> tidak bisa dibuka! pastikan database <big><strong>".DATABASE_NAME."</strong></big> ada dalam sistem.");
/*		mysql_connect("localhost",'root','') or die("Server off");
		mysql_select_db("vmr") or die("database not found");*/
		
 ?>