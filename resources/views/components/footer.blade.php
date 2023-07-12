        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>

      </div>
      <!-- / Layout wrapper -->

      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="{{ asset('assets/sneat/') }}/assets/vendor/libs/jquery/jquery.js"></script>
      <script src="{{ asset('assets/sneat/') }}/assets/vendor/libs/popper/popper.js"></script>
      <script src="{{ asset('assets/sneat/') }}/assets/vendor/js/bootstrap.js"></script>
      <script src="{{ asset('assets/sneat/') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

      <script src="{{ asset('assets/sneat/') }}/assets/vendor/libs/hammer/hammer.js"></script>
      <script src="{{ asset('assets/sneat/') }}/assets/vendor/libs/i18n/i18n.js"></script>
      <script src="{{ asset('assets/sneat/') }}/assets/vendor/libs/typeahead-js/typeahead.js"></script>
      <script src="{{ asset('assets/sneat/') }}/assets/vendor/js/menu.js"></script>
      <!-- endbuild -->

      <!-- Vendors JS -->
      <script src="{{ asset('assets/sneat/') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

      <!-- Main JS -->
      <script src="{{ asset('assets/sneat/') }}/assets/js/main.js"></script>

      <!-- Page JS -->
      <script src="{{ asset('assets/sneat/') }}/assets/js/dashboards-analytics.js"></script>

      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>

      <!-- BS table js -->
      <script src="{{ asset('assets/sneat/') }}/libs/datatables-bs5/datatables-bootstrap5.js"></script>
      <script src="{{ asset('assets/sneat/') }}/assets/js/tables-datatables-advanced.js"></script>

      <!-- Flat Picker -->
      <script src="{{ asset('assets/sneat/') }}/assets/vendor/libs/moment/moment.js"></script>
      <script src="{{ asset('assets/sneat/') }}/assets/vendor/libs/flatpickr/flatpickr.js"></script>

      <script src="{{ asset('assets/sneat/') }}/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>

      @stack('script')
