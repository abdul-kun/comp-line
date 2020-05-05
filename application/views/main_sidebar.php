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
                                    <a href="<?php echo site_url('Home') ?>" class="<?php if ($aktif == 'home') {
                                                                                        echo " active";
                                                                                    } ?>">
                                        <i class="gi gi-compass sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span>
                                    </a>
                                </li>

                                <li class="sidebar-separator">
                                    <i class="fa fa-ellipsis-h"></i>
                                </li>

                                <li>
                                    <a href="<?php echo site_url('Pengaduan') ?>" class="<?php if ($aktif == 'pengaduan' || $aktif == 'data') {
                                                                                                echo " active";
                                                                                            } ?>">
                                        <i class="gi gi-file sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Data Keluhan</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo site_url('Penduduk') ?>" class="<?php if ($aktif == 'penduduk') {
                                                                                            echo " active";
                                                                                        } ?>">
                                        <i class="gi gi-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Data Penduduk</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo site_url('Admin') ?>" class="<?php if ($aktif == 'admin') {
                                                                                            echo " active";
                                                                                        } ?>">
                                        <i class="fa fa-users sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Admin Sistem</span>
                                    </a>
                                </li>

                                <li class="sidebar-separator">
                                    <i class="fa fa-ellipsis-h"></i>
                                </li>

                                <li>
                                    <?php
                                    $user = $this->session->userdata('userdata_desa');
                                    ?>
                                    <a href="<?php echo site_url('Profil/profil_admin/' . $user['id_admin']) ?>" class="<?php if ($aktif == 'profil') {
                                                                                                                            echo " active";
                                                                                                                        } ?>">
                                        <i class="fa fa-user-plus sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Profil</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo site_url('Profil/edit_akun_admin/' . $user['id_admin']) ?>" class="<?php if ($aktif == 'akun') {
                                                                                                                                echo " active";
                                                                                                                            } ?>">
                                        <i class="fa fa-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Edit Password</span>
                                    </a>
                                </li>

                                <!-- END Sidebar Navigation -->

                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->

                    <!-- Sidebar Extra Info -->
                    <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
                        <div class="text-center">
                            <small><span></span> &copy; 2020 @ Copyright by Kelompok 3</a></small>
                        </div>
                    </div>
                    <!-- END Sidebar Extra Info -->
                </div>
                <!-- END Main Sidebar -->