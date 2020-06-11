                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Sidebar Brand -->
                    <div id="sidebar-brand" class="themed-background-social">
                        <a href="<?php echo site_url('') ?>" class="sidebar-title">
                            <i class="fa fa-cube"></i> <span class="sidebar-nav-mini-hide"><strong>Comp-Line</strong></span>
                        </a>
                    </div>
                    <!-- END Sidebar Brand -->

                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="<?php echo site_url('Home/dashboard') ?>" class="<?php if ($aktif == 'home') {
                                                                                                    echo " active";
                                                                                                } ?>">
                                        <i class="gi gi-compass sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span>
                                    </a>
                                </li>

                                <li class="sidebar-separator">
                                    <i class="fa fa-ellipsis-h"></i>
                                </li>

                                <li>
                                    <a href="<?php echo site_url('Pengaduan/tambah') ?>" class="<?php if ($aktif == 'input') {
                                                                                                    echo " active";
                                                                                                } ?>">
                                        <i class="gi gi-bookmark sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Input Keluhan</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo site_url('Pengaduan/data') ?>" class="<?php if ($aktif == 'data') {
                                                                                                    echo " active";
                                                                                                } ?>">
                                        <i class="gi gi-file sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Data Keluhan</span>
                                    </a>
                                </li>

                                <li class="sidebar-separator">
                                    <i class="fa fa-ellipsis-h"></i>
                                </li>

                                <li>
                                    <?php
                                    $user = $this->session->userdata('userdata_desa');
                                    ?>
                                    <a href="<?php echo site_url('Profil/profil_user/' . $user['nik']) ?>" class="<?php if ($aktif == 'profil') {
                                                                                                                        echo " active";
                                                                                                                    } ?>">
                                        <i class="fa fa-user-plus sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Profil</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo site_url('Profil/edit_akun/' . $user['nik']) ?>" class="<?php if ($aktif == 'akun') {
                                                                                                                    echo " active";
                                                                                                                } ?>">
                                        <i class="fa fa-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Edit Password</span>
                                    </a>
                                </li>

                            </ul>
                            <!-- END Sidebar Navigation -->

                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->

                    <!-- Sidebar Extra Info -->
                    <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
                        <div class="text-center">
                            <small><span></span>2020 @ Copyright by Kelompok 5</small>
                        </div>
                    </div>
                    <!-- END Sidebar Extra Info -->
                </div>
                <!-- END Main Sidebar -->