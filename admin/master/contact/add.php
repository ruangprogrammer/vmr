<?php
if (isset($_POST['simpan'])) {   //print_r($_FILES); exit();

   $queryInsert = mysql_query( "INSERT INTO contact SET 
                         contact_name='" . $_POST['contact_name'] . "',
                         contact_desc='".$_POST['contact_desc']."',
                         contact_create_date=NOW()");

    if ($queryInsert) {
        echo "<script> alert('Data Berhasil Disimpan'); location.href='index.php?hal=master/contact/list' </script>";
        exit;
    }
}

?>
<!--body wrapper start-->
<div class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    ADD CONTACT
                </header>
                <div class="panel-body">
                    <div class=" form">
                        <form class="cmxform form-horizontal adminex-form" method="POST" enctype="multipart/form-data"
                              action="">

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2" style="text-align: left;">Name</label>
                                <div class="col-lg-5">
                                    <input class=" form-control" id="cname" name="contact_name" minlength="2"
                                           type="text" required/>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="cname" class="control-label col-lg-2" style="text-align: left;">Description</label>
                                <div class="col-lg-5">
                                    <textarea class=" form-control" id="cname" name="contact_desc" ></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit" name="simpan">Save</button>
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
