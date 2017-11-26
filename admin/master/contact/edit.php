<?php 
error_reporting(0);
$id = $_GET['id'];
$queryRowcontact = mysql_query("SELECT * FROM contact where contact_id = '".$id."'");
$rowcontact = mysql_fetch_array($queryRowcontact);
    if (isset($_POST['ubah'])) {  
         $queryUpdate=mysql_query("UPDATE contact SET 
                                    contact_name      = '".$_POST['contact_name']."',
                                    contact_desc      = '".$_POST['contact_desc']."'
                                    WHERE contact_id     = '".$id."'
                                     ");     
      if ($queryUpdate) {
         echo "<script> alert('Data Berhasil diubah'); location.href='index.php?hal=master/contact/list' </script>";exit;
      }
    }
 ?>
        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Edigt contact
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal adminex-form" id="commentForm" method="POST" enctype="multipart/form-data"  action="">
                                   
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-2" style="text-align: left;">Nama</label>
                                        <div class="col-lg-5">
                                            <input class=" form-control" id="cname" name="contact_name" minlength="2" type="text" value="<?php echo $rowcontact['contact_name']  ?>" required/>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="ccomment" class="control-label col-lg-2" style="text-align: left;">Deskripsi</label>
                                        <div class="col-lg-5">
                                            <textarea class="form-control " id="ccomment" name="contact_desc" required><?php echo $rowcontact['contact_desc']; ?></textarea>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-5">
                                            <button class="btn btn-primary" type="submit" name="ubah">UPDATE</button>
                                            <a href="?hal=master/contact/list">
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

