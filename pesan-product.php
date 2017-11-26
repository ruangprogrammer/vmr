<section class="inner-w3ls">
    <div class="container">
		<h3 class="text-center">Form Pemesanan Product </h3>

        <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Form Pemesanan Product</li>
                </ol>
            </div>
        </div>

	</div>
</section>
<!-- 
<section class="contact-w3layouts">
    <div class="container">
        <div class="col-md-6" data-aos="flip-left">
				<figure><img class="img-responsive img-hover" src="images/artikel/IMG-20170726-WA0013.jpg" alt="w3layouts"></figure>
        </div>
        <div class="col-md-6" data-aos="flip-right">
            <h3>Form Pesan Product</h3>
           Pemasangan Noken as satria FU in In : cara : Pastikan posisi piston berada pas di TMA , Posisikan Noken As standar IN seperti biasa yang mana garis noken sejajar head dan nose atau puncak noken menghadap karburator,Copot Noken as EX dan ganti dengan IN yang baru ( seterusnya Noken IN yang terpasang di EX akan disebut IN2 ), Pasang IN2 di Ex , jika sudah terpasang keduanya kencangkan rantai teming atau bisa ditekan dengan tangan
        </div>
    </div>
</section> -->
<?php

if(isset($_POST['pesan'])){
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
}



$id = $_GET['id'];
$sqlProduct = mysql_query("SELECT * FROM product WHERE product_id ='".$id."'");
$dataProduct = mysql_fetch_array($sqlProduct);
?>
<section class="contact-w3ls">	
	<div class="container">	
		<div class="col-md-12">
		<!-- 	<h3 class="text-center" >Send us a Message</h3> -->
			<form action="" method="post" name="sentMessage" id="contactForm" novalidate>
                <input type="hidden" name="product_id" value="<?php echo $dataProduct['product_id']; ?>">
                <div class=" form-group" >
                    <div class="controls">
                        <label>Nama product:</label>
                        <input type="text" class="form-control" value="<?php echo $dataProduct['product_name']; ?>" disabled="">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class=" form-group" >
                    <div class="controls">
                        <label>Deskripsi:</label>
                        <textarea class="form-control" id="message"  maxlength="999" style="resize:none" disabled="">
                            <?php echo $dataProduct['product_desc']; ?>
                        </textarea>
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class=" form-group" >
                    <div class="controls">
                        <label>Nama :</label>
                        <input type="tel" class="form-control" name="order_name" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div> 

                <div class=" form-group" >
                    <div class="controls">
                        <label>Email </label>
                        <input type="email" class="form-control"  name="order_email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>

                <div class=" form-group" >
                    <div class="controls">
                        <label>Pin BBM:</label>
                        <input type="email" class="form-control"  name="order_bbm" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>

                <div class=" form-group" >
                    <div class="controls">
                        <label>Nomor WhatsApp </label>
                        <input type="email" class="form-control"  name="order_wa" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>


				<div class=" form-group" >
                    <div class="controls">
						<label>Alamat Langkap:</label>
                        <textarea rows="10" cols="100" class="form-control" name="order_alamat" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <button type="submit" name="pesan" class="btn btn-primary" >PESAN SEKARANG</button>
            </form>
		</div>
	</div>
</section>	