<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #ff0000;">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard') ?>" class="brand-link" style="color: #ffffff;">
        <img src="<?= base_url() ?>dist/img/sahaware.jpg" alt="Sahaware"
            class="brand-image img-circle elevation-3" width="85" height="85">
        <h3>HRIS</h3>
    </a>
    <!-- Sidebar -->
    <div class="sidebar mt-2">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link" style="color: #ffffff;">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" style="color: #ffffff;">
                        <i class="nav-icon fas fa-database"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('master/datakaryawan') ?>" class="nav-link"
                                style="background-color: #ffffff; color: black;">
                                <p>Data Karyawan</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('master/dataposisi') ?>" class="nav-link"
                                style="background-color: #ffffff; color: black;">
                                <p>Data Posisi</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="background-color: #ffffff; color: black;">
                                <p>Data Akun</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="background-color: #ffffff;color: black;">
                                <p>Data Mitra</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('master/soalkuesioner') ?>" class="nav-link"
                                style="background-color: #ffffff;color: black;">
                                <p>Soal Kuesioner</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: #ffffff;">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>
                            Performances
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Performences/penilaiankinerja') ?>" class="nav-link "
                                style="background-color: #ffffff; color: black;">
                                <p>Penilaian Kinerja</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link " style="background-color: #ffffff; color: black;">
                                <p>Penilaian Kuesioner</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link " style="background-color: #ffffff; color: black;">
                                <p>Akumulasi Keseluruhan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: #ffffff;">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Training
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link " style="background-color: #ffffff; color: black;">
                                <p>Pelatihan</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link " style="background-color: #ffffff; color: black;">
                                <p>Dokumentasi</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link " style="background-color: #ffffff; color: black;">
                                <p>Nilai</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: #ffffff;">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>
                            Payroll
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview nav-sidebar nav-child-indent">
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="background-color: #ffffff; color: black;">
                                <p>
                                    Setting Pajak
                                    <i class="right fas fa-angle-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link " style="background-color: #ffffff; color: black;">
                                        <p>Data Pajak</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link " style="background-color: #ffffff; color: black;">
                                        <p>Pajak Karyawan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview nav-sidebar nav-child-indent">
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="background-color: #ffffff; color: black;">
                                <p>
                                    Setting BPJS Kesehatan
                                    <i class="right fas fa-angle-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link " style="background-color: #ffffff; color: black;">
                                        <p>Data BPJS</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link " style="background-color: #ffffff; color: black;">
                                        <p>BPJS Karyawan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link " style="background-color: #ffffff; color: black;">
                                <p>Perhitungan Gaji</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link " style="background-color: #ffffff; color: black;">
                                <p>Contract Mitra</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview nav-sidebar nav-child-indent">
                        <li class="nav-item">
                            <a href="#" class="nav-link" style="background-color: #ffffff; color: black;">
                                <p>
                                    Laporan
                                    <i class="right fas fa-angle-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link " style="background-color: #ffffff; color: black;">
                                        <p>Laporan Gaji Karyawan</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link " style="background-color: #ffffff; color: black;">
                                        <p>Laporan Mitra</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: #ffffff;">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>
                            Recruitment
                            <i class="right fas fa-angle-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Recruitment/kelola') ?>" class="nav-link "
                                style="background-color: #ffffff; color: black;">
                                <p>Kelola Pekerjaan</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('berkas') ?>" class="nav-link "
                                style="background-color: #ffffff; color: black;">
                                <p>Berkas Pelamar</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('jadwal') ?>" class="nav-link "
                                style="background-color: #ffffff; color: black;">
                                <p>Jadwal Interview</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('soal') ?>" class="nav-link "
                                style="background-color: #ffffff; color: black;">
                                <p>Soal Test Pelamar</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('lamaran') ?>" class="nav-link "
                                style="background-color: #ffffff; color: black;">
                                <p>Penilaian & Laporan Recruitment</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" style="color: #ffffff;">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">