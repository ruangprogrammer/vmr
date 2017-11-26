<?php
if (isset($_POST['simpan'])) {   //print_r($_FILES); exit();
    if (!empty($_FILES) && $_FILES['download_file']['size'] > 0 && $_FILES['download_file']['error'] == 0) {

        $random = "vmrmekanikberdasi-download-".substr(number_format(time() * rand(), 0, '', ''), 0, 10);
        $images = $random . str_replace(" ", "", $_FILES['download_file']['name']); 

        $move = move_uploaded_file($_FILES['download_file']['tmp_name'], '../images/download/' . $file);
        $code = "123";
        if ($move) {
         $queryInsert = mysql_query( "INSERT INTO download SET 
                         download_code='".$code."',
                         download_judul='" . $_POST['download_judul'] . "',
                         download_file='" . $file . "',
                         download_link='".$_POST['download_link']."',
                         download_date=NOW()");
                         //echo $sql; exit();

        } else {
            $queryInsert = mysql_query("INSERT INTO download SET 
                         download_code = '".$code."',
                         download_judul = '".$_POST['download_judul']."',
                         download_link='" . $_POST['download_link'] . "',
                         download_date=NOW()");
        }
    } 
  //  if ($queryInsert) {
        echo "<script> alert('Data Berhasil Disimpan'); location.href='index.php?hal=master/download/list' </script>";
   //     exit();
   // }
}

?>
<!--body wrapper start-->
<div class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    ADD PORTPFOLIO
                </header>
                <div class="panel-body">
                    <div class=" form">
                        <form class="cmxform form-horizontal adminex-form" method="POST" enctype="multipart/form-data"
                              action="">

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2" style="text-align: left;">Nama</label>
                                <div class="col-lg-5">
                                    <input class=" form-control" id="cname" name="download_judul" minlength="2"
                                           type="text" required/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2" style="text-align: left;">File</label>
                                <!-- master footo startv -->
                                <div class="col-md-5">
                                    <input type="file" name="download_file" class="form-control">
                                </div>
                                <!-- master foto end -->
                            </div>

                             <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2" style="text-align: left;">Link</label>
                                <div class="col-lg-5">
                                    <input class=" form-control" id="cname" name="download_link" minlength="2"
                                           type="text" required/>
                                </div>
                            </div>

                            <!-- 
                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2" style="text-align: left;">Keterangan</label>
                                <div class="col-lg-5">
                                    <textarea class=" form-control" id="cname" name="download_desc" ></textarea>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit" name="simpan">Save</button>
                                    <a href="?hal=master/download/list">
                                        <button class="btn btn-default" type="button">Cancel</button>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>
<!--body wrapper end-->
