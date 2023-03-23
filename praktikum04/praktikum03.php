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
                    <h1>Praktikum03</h1>
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
                            <h3 class="card-title">Form Registrasi</h3>

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
                            <?php
                            $prodi = ['Sistem Informasi', 'Teknik Informatika', 'Bisnis Digital'];
                            $skills = [
                                'HTML' => 10,
                                'CSS' => 10,
                                'JavaScript' => 20,
                                'RWD Bootstrap' => 20,
                                'PHP' => 30,
                                'Python' => 30,
                                'Java' => 50,
                            ];
                            $domisili = ['Jakarta', 'Depok', 'Bogor', 'Tanggerang', 'Bekasi', 'Lainnya'];
                            ?>
                            <form method="POST" action="form_submit.php">
                                <div class="form-group row">
                                    <label for="nim" class="col-4 col-form-label">NIM</label>
                                    <div class="col-8">
                                        <input id="nim" name="nim" placeholder="Masukan NIM" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama" class="col-4 col-form-label">Nama</label>
                                    <div class="col-8">
                                        <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Jenis Kelamin</label>
                                    <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-Laki" required="required">
                                            <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan" required="required">
                                            <label for="gender_1" class="custom-control-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="prodi" class="col-4 col-form-label">Program Studi</label>
                                    <div class="col-8">
                                        <select id="prodi" name="prodi" class="custom-select" required="required">
                                            <?php foreach ($prodi as $ps) : ?>
                                                <option value="<?php echo $ps ?>"><?php echo $ps ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Skill Programming</label>
                                    <div class="col-8">
                                        <?php foreach ($skills as $key => $value) : ?>
                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                <input name="skill[]" id="<?php echo $key ?>" type="checkbox" class="custom-control-input" value="<?php echo $key ?>">
                                                <label for="<?php echo $key ?>" class="custom-control-label"><?php echo $key ?></label>
                                            </div>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
                                    <div class="col-8">
                                        <select id="domisili" name="domisili" class="custom-select" required="required">
                                            <?php foreach ($domisili as $tt) : ?>
                                                <option value="<?= $tt ?>"><?= $tt ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-4 col-form-label">Email</label>
                                    <div class="col-8">
                                        <input id="email" name="email" placeholder="Masukan Email" type="text" class="form-control" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
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