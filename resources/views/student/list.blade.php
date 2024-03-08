  <title>{{ config('app.name') }} | Anywhere, Everywhere</title>
 @include('inc.header')
<body>
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">
    <!-- Menu -->
    @include('inc.aside')
    <!-- / Menu -->
   <!-- Layout container -->
  <div class="layout-page">
   <!-- Navbar -->
   @include('inc.topmenu')
   <!-- / Navbar -->
      <!-- Content wrapper -->
        <div class="content-wrapper">
             <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">    
                  <h4 class="py-3 mb-4">
                    <span class="text-muted fw-light">Student /</span> Registered
                  </h4>
                  <!-- Fixed Header -->
                  <div class="card">
                    <h5 class="card-header">List of Students</h5>
                    <div class="card-datatable table-responsive">
                      <table class="dt-fixedheader table border-top" id="">
                        <thead>
                          <tr>
                            <th></th>
                            <th></th>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Salary</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th></th>
                            <th></th>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Salary</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
          </div>
        <!-- / Content -->    
        <!-- Footer -->
           @include('inc.footer')
        <!-- / Footer -->
        <div class="content-backdrop fade"></div>
      </div>
    </div>
  </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>
</div>
  <!-- / Layout wrapper -->
    @include('inc.update')
 <!--  <script src="{{ asset('vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('vendor/libs/hammer/hammer.js') }}"></script>
  <script src="{{ asset('vendor/libs/i18n/i18n.js') }}"></script>
  <script src="{{ asset('vendor/libs/typeahead-js/typeahead.js') }}"></script>
  <script src="{{ asset('vendor/js/menu.js') }}"></script>
  <script src="{{ asset('vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
  <script src="{{ asset('vendor/libs/moment/moment.js') }}"></script>
  <script src="{{ asset('vendor/libs/flatpickr/flatpickr.js') }}"></script>
  <script src="{{ asset('vendor/libs/@form-validation/popular.js') }}"></script>
  <script src="{{ asset('vendor/libs/@form-validation/bootstrap5.js') }}"></script>
  <script src="{{ asset('vendor/libs/@form-validation/auto-focus.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/tables-datatables-basic.js') }}"></script> 
</body>
</html>-->
 @include('inc.script')