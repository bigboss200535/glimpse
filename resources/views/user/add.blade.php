<title>{{ config('app.name') }} | Add Student</title>
@include('inc.header')
  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
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
                        @include ('inc.preloader')
                       <div class="container-xxl flex-grow-1 container-p-y">
                          <!-- <h4 class="py-3 mb-4">
                              <span class="text-muted fw-light">Form Wizard/</span> Numbered
                          </h4> -->
                          <div class="col-12">
                             <h5>Add Staff</h5>
                          </div>
                            
                       </div>
                      <!-- / Content -->
                        <!-- Footer -->
                        @include('inc.footer')
                        <!-- / Footer -->
                        <div class="content-backdrop fade"></div>
                    </div>
                  <!-- Content wrapper -->
               </div>
              <!-- / Layout page -->
            </div>
            <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>
          </div>
             <div class="drag-target"></div>
    <!-- </div> -->
  @include('inc.update')
    <!-- / Layout wrapper -->
 @include('inc.script')