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
                <a href=""><strong>Webiste Aduan Masyarakat</strong></a>
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
                        <h1>Detail Keluhan</h1>
                    </div>
                </div>
                <div class="col-sm-6 hidden-xs">
                    <div class="header-section">
                        <ul class="breadcrumb breadcrumb-top">
                            <li><a href="<?php echo site_url('') ?>">Comp-Line</a></li>
                            <li><a href="<?php echo site_url('Pengaduan') ?>">Keluhan</a></li>
                            <li>Detail</li>
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
                        <h2>Detail Keluhan</h2>
                    </div>

                    <!-- Partial Responsive Content -->
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
                    </div>
                    <table class="table table-border table-vcenter">
                        <tbody>
                            <tr>
                                <td><strong>Status</strong></td>
                                <td>
                                    <br>
                                    <div class="progress progress-striped active">
                                        <?php
                                        if ($pengaduan['status'] == 1) {
                                            $bar = 'progress-bar-danger';
                                            $wd = '50%';
                                            $text = '50% (Menunggu Verifikasi)';
                                        } else {
                                            $bar = 'progress-bar-success';
                                            $wd = '100%';
                                            $text = '100% (Sudah Diverifikasi)';
                                        }
                                        ?>
                                        <div class="progress-bar <?php echo $bar ?>" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $wd ?>"><?php echo $text ?></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Diverifikasi Oleh</strong></td>
                                <td>
                                    <?php
                                    if ($pengaduan['status'] == 0) {
                                        echo $pengaduan['nama_admin'];
                                    } else {
                                        echo "<i>Masih Menunggu</i>";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Isi Aduan</strong></td>
                                <td>
                                    <?php echo $pengaduan['pengaduan'] ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- END Horizontal Form Block -->
            </div>
        </div>
    </div>
    <!-- END Page Content -->
</div>
<!-- END Main Container -->

<?php $this->load->view('footer'); ?>