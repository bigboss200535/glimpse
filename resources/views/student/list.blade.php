  <title>{{ config('app.name') }} | Anywhere, Everywhere</title>
 @include('inc.header')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
  
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<body>
    <noscript>
       <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe>
    </noscript>
  
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
                      <table class="table table-striped table-bordered" id="student_list">
                        <thead>
                          <tr>
                            <th>Reg No</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Birth Date</th>
                            <th>Address</th>
                            <th>Joined Date</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @foreach($students as $student_list)
                          <tr> 
                            <td>{{ $student_list->StudentIdNo }}</td>
                            <td>
                              <span class="fw-medium">{{ $student_list->Fullname }}</span>
                            </td>
                            <td>{{ strtoupper($student_list->Gender) }}</td>
                            <td>{{ \Carbon\Carbon::parse($student_list->DOB)->format('d-m-Y') }}</td>
                            <td>{{ strtoupper($student_list->Address) }}</td>
                            <td>{{ \Carbon\Carbon::parse($student_list->DateJoined)->format('d-m-Y') }}</td>
                            <td>
                                @if ($student_list->Status === 'ACTIVE')
                                <span class="badge bg-label-info me-1">Active</span>
                                  @else
                                  <span class="badge bg-label-danger me-1">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="editstudent&studentid=$student_list->StudentId"><i class="bx bx-edit-alt me-1"></i> Edit
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i class="bx bx-trash me-1"></i> Delete
                                                  </a>
                                           </div>
                                </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                            <!-- <th></th> -->
                            <th></th>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Adress</th>
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
 <script type="text/javascript">
     $(document).ready( function () {
    $('#student_list').DataTable();
} );
   // new DataTable('#student_list');
   // let table = new DataTable('#student_list');
 </script>

