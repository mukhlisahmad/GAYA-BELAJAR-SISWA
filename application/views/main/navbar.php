
<!-- BEGIN: Body-->
<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
<div class="app-brand demo">
            <a href="index.html" class="app-brand-link">

              <span class="app-brand-text demo menu-text fw-bold">Gaya Belajar</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
          </div>
<div class="menu-inner-shadow"></div>


        <!-- Sidebar Menu -->
        <ul class="menu-inner py-1">

                <li class="menu-item">
                    <a href="<?php echo site_url('User/index') ?>" class="menu-link">
                    <i class="menu-icon tf-icons fa-solid fa-people-roof"></i>
                        <div data-i18n="Akun Users">Akun Users</div>
                    </a>
                </li>
                <!-- Master Data GB-->
                <li class="menu-item">
                    <a href="" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons fa-solid fa-people-group"></i>

                        <div data-i18n="Gaya Belajar Siswa">Gaya Belajar Siswa</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="<?php echo base_url('C_admin/pertanyaan_gb'); ?>" class="menu-link">

                            <div data-i18n="Data Pertanyaan">Data Pertanyaan</div>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="<?php echo base_url('C_admin/saran_gb'); ?>" class="menu-link">

                            <div data-i18n="Data Saran">Data Saran</div>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="<?php echo base_url('/gb/C_soalgb/index') ?>" class="menu-link">

                            <div data-i18n="Data Soal">Data Soal</div>
                            </a>
                        </li>
                    </ul>

                </li>

            <!-- Logout -->
            <li class="menu-item">
                <a  href="#" data-bs-toggle="modal" data-bs-target="#logoutModal" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-person-walking-arrow-loop-left"></i>
                    <div data-i18n="Log-out">Log-out</div>
                </a>
            </li>
        </ul>

</aside>

<div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item menu-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


              <ul class="navbar-nav flex-row align-items-center ms-auto">

                <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                  <a class="menu-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <i class="ti ti-md"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                        <span class="align-middle"><i class="ti ti-sun me-2"></i>Light</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                        <span class="align-middle"><i class="ti ti-moon me-2"></i>Dark</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                        <span class="align-middle"><i class="ti ti-device-desktop me-2"></i>System</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- / Style Switcher-->
                &nbsp;&nbsp; &nbsp;
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="menu-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="<?=base_url('assets/')?>img/usr.jpg" alt class="h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="pages-account-settings-account.html">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="<?=base_url('assets/')?>img/usr.jpg" alt class="h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
													<?php $nama = $this->session->userdata('nama');?>
                            <span class="fw-medium d-block"><?php echo $nama; ?></span>
                            <small class="text-muted"></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>

                    <li>
                      <a class="dropdown-item"  href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
					  <i class="menu-icon tf-icons fa-solid fa-person-walking-arrow-loop-left"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div class="navbar-search-wrapper search-input-wrapper d-none">
              <input
                type="text"
                class="form-control search-input container-xxl border-0"
                placeholder="Search..."
                aria-label="Search..." />
              <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
            </div>
          </nav>

          <!-- / Navbar -->

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
