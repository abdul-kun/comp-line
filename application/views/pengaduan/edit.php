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
                        <h1>Edit Keluhan</h1>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="header-section">
                        <ul class="breadcrumb breadcrumb-top">
                            <li><a href="<?php echo site_url('') ?>">Comp-Line</a></li>
                            <li><a href="<?php echo site_url('Pengaduan') ?>">Keluhan</a></li>
                            <li>Edit Keluhan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Table Styles Header -->
        <!-- END Forms Components Header -->

        <!-- Form Components Row -->
        <div class="row">
            <div class="col-md-8">
                <!-- Horizontal Form Block -->
                <div class="block">
                    <!-- Horizontal Form Title -->
                    <div class="block-title">
                        <h2>Edit Keluhan</h2>
                    </div>
                    <!-- END Horizontal Form Title -->

                    <!-- Horizontal Form Content -->
                    <form action="<?php echo site_url('Pengaduan/edit_proses2/' . $pengaduan['id_pengaduan']) ?>" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
                        <div class="row gallery">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <div class="gallery-image-container animation-fadeInQuick2" data-category="travel">
                                    <img src="<?php echo base_url('upload/' . $pengaduan['file']) ?>">
                                    <a href="<?php echo base_url('upload/' . $pengaduan['file']) ?>" class="gallery-image-options" data-toggle="lightbox-image" title="<?php echo "Keluhan " . $pengaduan['nama'] ?>">
                                        <h2 class="text-light"><strong><?php echo "Keluhan " . $pengaduan['nama'] ?></strong></h2>
                                        <i class="fa fa-search-plus fa-3x text-light"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-4"></div>
                            <input type="hidden" name="foto_lama" value="<?php echo $pengaduan['file'] ?>">
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Ubah Foto</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" id="example-file-input" name="foto">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Keluhan</label>
                            <div class="col-md-9">
                                <textarea name="pengaduan" class="form-control"><?php echo $pengaduan['pengaduan'] ?></textarea>
                                <?php echo form_error('pengaduan'); ?>
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-md-9 col-md-offset-3">
                                <button type="submit" class="btn btn-effect-ripple btn-primary">Simpan</button>
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