<?php
require_once 'header.php';
require_once 'sidebar.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Praktikum02</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Belanja Online</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <form action="form_belanja.php" method="POST">
                                        <div class="form-group row">
                                            <label for="customer" class="col-4 col-form-label">Customer</label>
                                            <div class="col-8">
                                                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-4">Pilih Produk</label>
                                            <div class="col-8">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required">
                                                    <label for="produk_0" class="custom-control-label">TV</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required">
                                                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required">
                                                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                                            <div class="col-8">
                                                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-4 col-8">
                                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                    <?php
                                    $customer = "";
                                    $produk = "";
                                    $jumlah = "";
                                    $harga = "0";
                                    ?>

                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $customer = $_POST['customer'];
                                        $produk = $_POST['produk'];
                                        $jumlah = $_POST['jumlah'];

                                        if ($produk == "TV") {
                                            $harga = 4200000 * $jumlah;
                                        } elseif ($produk == "Kulkas") {
                                            $harga = 3100000 * $jumlah;
                                        } elseif ($produk == "Mesin Cuci") {
                                            $harga = 3800000 * $jumlah;
                                        } else {
                                            echo "Produk Tidak di temukan";
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="col-md-4">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item list-group-item-action active">DAFTAR HARGA</a>
                                        <div class="list-group-item list-group-item-primary">
                                            TV : RP. 4.200.000
                                        </div>
                                        <div class="list-group-item list-group-item-primary">
                                            Kulkas : Rp. 3.100.000
                                        </div>
                                        <div class="list-group-item list-group-item-primary justify-content-between">
                                            Mesin Cuci : Rp. 3.800.000
                                        </div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">HARGA DAPAT BERUBAH SETIAP SAAT</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="container">
                                        <table class="table table-bordered text-uppercase">
                                            <br>
                                            <tr class="table-primary">
                                                <th>Nama</th>
                                                <th>Produk</th>
                                                <th>Jumlah</th>
                                                <th>Total Harga</th>
                                            </tr>
                                            <tr>
                                                <td><?= $customer; ?></td>
                                                <td><?= $produk; ?></td>
                                                <td><?= $jumlah; ?></td>
                                                <td><?= "Rp " . number_format($harga, 0, ",", "."); ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            Created by Imad
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require_once 'footer.php';
?>