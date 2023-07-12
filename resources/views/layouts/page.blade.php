<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    @include('components.header')
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('components.sidebar')
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
        @include('components.navbar')

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container">
                @yield('content')

            </div>
            <!-- / Content -->

               <!-- Footer -->
               <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    © Copyright 1999 - <script>document.write(new Date().getFullYear());</script>
                    <a href="https://cmsmaju.co.id" target="_blank" class="footer-link fw-bolder">PT. CMS Maju Sejahtra</a>
                    All Right Reserved.
                  </div>
                  {{-- <div>
                    <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                    <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>
                    <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>
                    <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link me-4">Support</a>
                  </div> --}}
                </div>
              </footer>
              <!-- / Footer -->

              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>


            @include('components.footer')
  </body>
</html>
