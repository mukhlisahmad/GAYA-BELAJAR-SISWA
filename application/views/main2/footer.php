
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Anda yakin ingin keluar ?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">Pilih tombol logout untuk keluar</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="<?php echo base_url(); ?>C_login/logout">Logout</a>
      </div>
    </div>
  </div>
</div>


            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                  <div>
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , Psikologi by gus Syam sudhuha
                  </div>
                  <div class="d-none d-lg-inline-block">

                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

  <!-- / Footer -->
    <!-- END: Footer-->
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
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

</body>
<!-- END: Body-->

</html>

