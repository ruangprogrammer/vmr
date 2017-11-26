<?php
if (isset($_GET['hapus'])) {
    $cekGambar = mysql_query("SELECT * FROM download WHERE download_id='".$_GET['hapus']."'");
    $data = mysql_fetch_array($cekGambar);
    if(!empty($data['download_images'])){
        $file = "../images/download/".$data['download_images'];
        unlink($file);
    }
    $queryHapus = mysql_query("DELETE FROM download where download_id = '" . $_GET['hapus'] . "'");
    if ($queryHapus) {
        echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=master/download/list' </script>";
        exit;
    }
}
?>
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Data download
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">

                            <div class="btn-group">
                                <a href="?hal=master/download/add">
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
                                <th>Code</th>
                                <th width="30%">Judul</th>
                                <th width="30%">File</th>
                     <!--            <th>Description</th> -->
                                <th width="20%">Create date</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 0;
                            $queryPortofolio = mysql_query("SELECT * FROM download ORDER BY download_id DESC");
                            while ($rowdownload = mysql_fetch_array($queryPortofolio)) {
                                ?>
                                <tr class="">
                               <!--      <td><img src="assets/images/download/<?php echo $rowdownload['download_file']; ?>"
                                             width="100%"></td> -->
                                    <td><?php echo $rowdownload['download_code']; ?></td>
                                    <td><?php echo $rowdownload['download_judul']; ?></td>
                                    <td><?php echo $rowdownload['download_file']; ?></td>
                                    <td><?php echo $rowdownload['download_date']; ?></td>
                                    <td>
                                        <a href="?hal=master/download/edit&id=<?php echo $rowdownload['download_id']; ?>">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-edit"
                                                                                             aria-hidden="true"></i>
                                                Edit
                                            </button>
                                        </a>
                                        <a href="?hal=master/download/list&hapus=<?php echo $rowdownload['download_id']; ?>">
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