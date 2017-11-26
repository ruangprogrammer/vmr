<?php
if (isset($_GET['hapus'])) {
    $queryHapus = mysql_query("DELETE FROM inbox where inbox_id = '" . $_GET['hapus'] . "'");
    if ($queryHapus) {
        echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=master/inbox/list' </script>";
        exit;
    }
}
?>
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Data Inbox
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group pull-right">
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                            <tr>
                                <td>No.</td>
                                <th width="20%">Name</th>
                                <th width="20%">Email</th>
                                <th width="15%">Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $no = 0;
                            $queryinbox = mysql_query("SELECT * FROM inbox ORDER BY inbox_id DESC");
                            while ($rowinbox = mysql_fetch_array($queryinbox)) {
                            $no++;
                                ?>
                                <tr class="">
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $rowinbox['inbox_name']; ?></td>
                                    <td><?php echo $rowinbox['inbox_email']; ?></td>
                                    <td><?php echo $rowinbox['inbox_subject']; ?></td>
                                    <td><?php echo $rowinbox['inbox_message']; ?></td>
                                    <td>
                                        <a href="?hal=master/inbox/detail&id=<?php echo $rowinbox['inbox_id']; ?>">
                                            <button class="btn btn-primary" type="submit"><i class="fa fa-search"
                                                                                             aria-hidden="true"></i>
                                                Detail
                                            </button>
                                        </a>
                                        <a href="?hal=master/inbox/list&hapus=<?php echo $rowinbox['inbox_id']; ?>">
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