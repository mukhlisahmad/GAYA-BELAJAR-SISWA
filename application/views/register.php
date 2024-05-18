
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="<?=base_url('assets/vue/')?>"
  data-template="vertical-menu-template-no-customizer">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Gaya Belajar</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?=base_url('assets/')?>vue/img/if.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/css/demo.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <!-- vue/Vendors CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css" />
	    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/animate-css/animate.css" />
		<link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/datatables-fixedheader-bs5/fixedheader.bootstrap5.css" />

		<link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/datatables-select-bs5/select.bootstrap5.css" />

<link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/datatables-fixedcolumns-bs5/fixedcolumns.bootstrap5.css" />
<link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
<link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/flatpickr/flatpickr.css" />
<!-- Row Group CSS -->
<link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
    <!-- Page CSS -->
		<link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/css/pages/app-chat.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/css/pages/cards-advance.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/css/pages/page-auth.css" />
	    <!-- Page CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/css/pages/cards-advance.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/css/pages/page-profile.css" />
    <link rel="stylesheet" href="<?=base_url('assets/')?>vue/vendor/libs/@form-validation/umd/styles/index.min.css" />
    <!-- Helpers -->
    <script src="<?=base_url('assets/')?>vue/vendor/js/helpers.js"></script>
		<script src="<?=base_url('assets/')?>vue/vendor/js/template-customizer.js"></script>
    <script src="<?=base_url('assets/')?>js/config.js"></script>
		<script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
		<link rel="stylesheet" href="<?php echo base_url('assets/') ?>vue/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>vue/vendor/css/pages/page-auth.css" />
    <!-- BEGIN: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <!-- END: Custom CSS-->
    <script src="<?=base_url('assets/')?>vue/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?=base_url('assets/')?>vue/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?=base_url('assets/')?>vue/js/config.js"></script>
</head>
<!-- END: Head-->

<div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Login -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center mb-4 mt-2">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                 <img src="<?=base_url('assets/')?>img/if.png" width="25px"alt="">
                  </span>
                  <span class="app-brand-text demo text-body fw-bold ms-1">Psikologi Test</span>
                </a>
              </div>
              <!-- /Logo -->
							<?=$this->session->flashdata('message_regis');?>
              <h4 class="mb-1 pt-2">Selamat Datang  👋</h4>
              <p class="mb-4">Please Register to your account and start </p>

						<!-- form -->
			<form class="user" method="post" action="<?=base_url('C_login/prosesDaftar')?>">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
				  <input class="form-control" type="text" name="nama" value="<?=set_value('nama')?>" placeholder="Nama " autocomplete="off">
    							<?=form_error('nama', '<small class="text-danger pl-3">', '</small>');?>
                </div>
								<div class="mb-3">
                  <label for="usia" class="form-label">Usia</label>
				  <input class="form-control" type="text" name="usia" value="<?=set_value('usia')?>" placeholder="Usia" autocomplete="off">
    							<?=form_error('usia', '<small class="text-danger pl-3">', '</small>');?>
                </div>
								<div class="mb-3">
									<label for="jk" class="form-label">Jenis Kelamin</label>
									<select class="form-select" name="jk">
											<option value="" selected disabled>Pilih Jenis Kelamin</option>
											<option value="Laki-laki" <?=set_select('jk', 'Laki-laki')?>>Laki-laki</option>
											<option value="Perempuan" <?=set_select('jk', 'Perempuan')?>>Perempuan</option>
									</select>
									<?=form_error('jk', '<small class="text-danger pl-3">', '</small>');?>
							</div>
							<div class="mb-3">
                  <label for="instansi" class="form-label">Instansi</label>
				  <input class="form-control" type="text" name="instansi" value="<?=set_value('instansi')?>" placeholder="instansi" autocomplete="off">
    							<?=form_error('instansi', '<small class="text-danger pl-3">', '</small>');?>
                </div>
				<hr>
    						<div class="form-group row">
    							<div class="col-sm-6 mb-3 mb-sm-0">
								<label for="nik" class="form-label">User Id/NIK</label>
    								<input type="text" class="form-control form-control-user" id="exampleInputId_User" placeholder="User ID" name="nik">
    								<?=form_error('nik', '<small class="text-danger pl-3">', '</small>');?>
    							</div>
    							<div class="col-sm-6">
								<label for="password" class="form-label">Password</label>
    								<input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Password" name="password">
    								<?=form_error('password', '<small class="text-danger pl-3">', '</small>');?>
    							</div>
    						</div>
							<hr>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Register</button>
                </div>
              </form>
              <p class="text-center">
			  <p>Sudah Memiliki Akun? <a href="<?=base_url('C_login')?>" class="text-secondary">Login
    							Disini!</a></p>

                </a>
								<br><hr>
								<p><a href="<?=base_url('')?>" class="text-secondary">Kembali Ke Halaman Utama</a></p>
              </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

	<script src="<?=base_url('assets/')?>vue/vendor/libs/jquery/jquery.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/libs/popper/popper.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/js/bootstrap.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/libs/node-waves/node-waves.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/libs/hammer/hammer.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/libs/i18n/i18n.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/js/menu.js"></script>

<!-- endbuild -->
<script src="<?=base_url('assets/')?>vue/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="<?=base_url('assets/')?>libs/js/main-js.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<!-- Add these lines to include SweetAlert files -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- vue/Vendors JS -->
<script src="<?=base_url('assets/')?>vue/vendor/libs/apex-charts/apexcharts.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/libs/swiper/swiper.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
<script src="<?=base_url('assets/')?>vue/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>
<!-- Main JS -->
<script src="<?=base_url('assets/')?>vue/js/main.js"></script>
<script src="<?=base_url('assets/')?>vue/js/forms-editors.js"></script>
<script src="<?=base_url('assets/')?>vue/js/pages-auth.js"></script>
<!-- Page JS -->
<script src="<?=base_url('assets/')?>vue/js/dashboards-analytics.js"></script>

</body>
<!-- END: Body-->

</html>

