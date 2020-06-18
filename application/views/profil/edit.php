<?php $this->load->view('header'); ?>

<!-- Main Container -->
<div id="main-container">
    <header class="navbar navbar-inverse navbar-fixed-top">
        <!-- Left Header Navigation -->
        <ul class="nav navbar-nav-custom">
            <!-- Main Sidebar Toggle Button -->
            <li>
                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                    <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini"></i>
                    <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full"></i>
                </a>
            </li>
            <!-- END Main Sidebar Toggle Button -->

            <!-- Header Link -->
            <li class="hidden-xs animation-fadeInQuick">
                <a href=""><strong>Website Aduan Masyarakat RT 10 RW 12</strong></a>
            </li>
            <!-- END Header Link -->
        </ul>
        <!-- END Left Header Navigation -->

        <?php $this->load->view('right_menu'); ?>

    </header>
    <!-- END Header -->

    <!-- Page content -->
    <div id="page-content">
        <!-- Forms Components Header -->
        <!-- Table Styles Header -->
        <div class="content-header">
            <div class="row">
                <div class="col-sm-6">
                    <div class="header-section">
                        <h1>Edit Profil</h1>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="header-section">
                        <ul class="breadcrumb breadcrumb-top">
                            <li><a href="<?php echo site_url('') ?>">Comp-Line</a></li>
                            <li>Edit Profil <?php echo $profil['nama'] ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Table Styles Header -->
        <!-- END Forms Components Header -->

        <!-- Form Components Row -->
        <?php
        if ($this->session->flashdata('sukses_edit') != "") {
            echo '<div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Sukses!</strong> Data Berhasil Diedit
                      </div>';
        }
        ?>
        <div class="row">
            <div class="col-md-9">
                <!-- Horizontal Form Block -->
                <div class="block">
                    <!-- Horizontal Form Title -->
                    <div class="block-title">
                        <h2>Edit Profil</h2>
                    </div>
                    <!-- END Horizontal Form Title -->

                    <!-- Horizontal Form Content -->
                    <form action="<?php echo site_url('profil/edit_proses/' . $profil['nik']) ?>" method="post" class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label">NIK</label>
                            <div class="col-md-9">
                                <input type="text" name="nik" class="form-control" value="<?php echo $profil['nik'] ?>" readonly>
                                <?php echo form_error('nik'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama</label>
                            <div class="col-md-9">
                                <input type="text" name="nama" class="form-control" value="<?php echo $profil['nama'] ?>">
                                <?php echo form_error('nama'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tempat Lahir</label>
                            <div class="col-md-9">
                                <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $profil['tempat_lahir'] ?>">
                                <?php echo form_error('tempat_lahir'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Tanggal Lahir</label>
                            <div class="col-md-9">
                                <input id="example-datepicker3" type="text" name="tanggal_lahir" class="form-control input-datepicker" placeholder="Tanggal/Bulan/Tahun" data-date-format="dd-mm-yyyy" value="<?php echo $profil['tanggal_lahir'] ?>">
                                <?php echo form_error('tanggal_lahir') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">No. Handphone / Telp</label>
                            <div class="col-md-9">
                                <input type="text" name="nohp" class="form-control" value="<?php echo $profil['nohp'] ?>">
                                <?php echo form_error('nohp'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Jenis Kelamin</label>
                            <div class="col-md-9">
                                <select name="jk" id="example-chosen" class="select-chosen" required>
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="L" <?php if ($profil['jk'] == 'L') {
                                                            echo "selected";
                                                        } ?>>Laki-Laki</option>
                                    <option value="P" <?php if ($profil['jk'] == 'P') {
                                                            echo "selected";
                                                        } ?>>Perempuan</option>
                                </select>
                                <?php echo form_error('jk') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Agama</label>
                            <div class="col-md-9">
                                <select name="id_agama" id="example-chosen" class="select-chosen" required>
                                    <option value="">--Pilih Agama--</option>
                                    <?php foreach ($agama as $row) : ?>
                                        <option value="<?php echo $row->id_agama ?>" <?php if ($row->id_agama == $profil['id_agama']) {
                                                                                            echo "selected";
                                                                                        } ?>><?php echo $row->nama_agama ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('id_agama') ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Alamat</label>
                            <div class="col-md-9">
                                <input type="text" name="alamat" class="form-control" value="<?php echo $profil['alamat'] ?>">
                                <?php echo form_error('alamat'); ?>
                            </div>
                        </div>

                        <div class="form-group form-actions">
                            <div class="col-md-9 col-md-offset-4">
                                <button type="submit" class="btn btn-effect-ripple btn-primary">Edit</button>
                                <button type="reset" class="btn btn-effect-ripple btn-danger">Reset</button>
                            </div>
                        </div>
                    </form>
                    <!-- END Horizontal Form Content -->
                </div>
                <!-- END Horizontal Form Block -->
            </div>
        </div>
    </div>
    <!-- END Page Content -->
</div>
<!-- END Main Container -->

<?php $this->load->view('footer'); ?>