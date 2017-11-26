<?php
if (isset($_GET['hapus'])) {
    $cekGambar = mysql_query("SELECT * FROM service WHERE service_id='".$_GET['hapus']."'");
    $data = mysql_fetch_array($cekGambar);
    if(!empty($data['service_images'])){
        $file = "assets/images/service/".$data['service_images'];
        unlink($file);
    }
    $queryHapus = mysql_query("DELETE FROM service where service_id = '" . $_GET['hapus'] . "'");
    if ($queryHapus) {
        echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=master/service/list' </script>";
        exit;
    }
}
?>
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Data service
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">

                            <div class="btn-group">
                                <a href="?hal=master/service/add">
                                    <button data-toggle="modal" class="btn btn-primary">
                                        Add New <i class="fa fa-plus"></i>
                                    </button>
                                </a>
                            </div>

                            <div class="btn-group pull-right">
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                            <tr>
                                <th width="300px">Images</th>
                                <th width="30%">service Name</th>
                                <th>Description</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 0;
                            $queryPortofolio = mysql_query("SELECT * FROM service ORDER BY service_id DESC");
                            while ($rowservice = mysql_fetch_array($queryPortofolio)) {
                                ?>
                                <tr class="">
                                    <td><img src="../images/service/<?php echo $rowservice['service_images']; ?>"
                                             width="100%"></td>
                                    <td><?php echo $rowservice['service_name'] ?></td>
                                    <td><?php echo $rowservice['service_desc']; ?></td>
                                    <td>
                                        <a href="?hal=master/service/edit&id=<?php echo $rowservice['service_id']; ?>">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-edit"
                                                                                             aria-hidden="true"></i>
                                                Edit
                                            </button>
                                        </a>
                                        <a href="?hal=master/service/list&hapus=<?php echo $rowservice['service_id']; ?>">
                                        <button class="btn btn-danger" type="submit" name="hapus"><i
                                                        class="fa fa-trash-o"></i> Delete
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>