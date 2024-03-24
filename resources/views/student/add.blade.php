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
                <h4 class="py-3 mb-4">
                              <span class="text-muted fw-light">Registration/</span> Student
                          </h4>
                <div class="row">
                  <div class="col">
                    <!-- <h6 class="mt-4"> Add New Student </h6> -->
                    <div class="nav-align-top mb-3">
                      <ul class="nav nav-tabs" role="tablist">
                       <!--  <li class="nav-item">
                          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" role="tab" aria-selected="true">Personal Info</button>
                        </li> -->
                       <!--  <li class="nav-item">
                          <button class="nav-link " data-bs-toggle="tab" data-bs-target="#form-tabs-account" role="tab" aria-selected="false">Academic Details</button>
                        </li> -->
                       <!--  <li class="nav-item">
                          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-social" role="tab" aria-selected="false">Parents/Guardians Details</button>
                        </li> -->
                      </ul>
                      <div class="tab-content">
                        <!-- Personal Info -->
                        <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                          <form method="post" id="student_form_submission" action="{{ url('studentstore') }}">
                              @csrf
                            <div class="row">
                             <!--  <table class="table-border-bottom-0 table">
                                <tr>
                                  <td>
                                    <div class="col-md-12" align="center">
                                <img src="{{ asset('img/avatars/blank.png')}}" height="150px" alt="Profile_phone">
                              </div>
                                  </td>
                                  <td align="left"> 
                                     <input type="file" name="student_picture" align="center">
                                  </td>
                                </tr>
                              </table> -->
                              <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">First Name <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                      <i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control" placeholder="First name" name="firstname" id="firstname" />
                                  </div>
                              </div>
                              <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Middle Name <label class="" style="font-size: 15px; color: white;">*</label></label>
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                      <i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control"  name="middlename" id="middlename" placeholder="Middle name" aria-label="Middle name" aria-describedby="basic-icon-default-fullname2"/>
                                  </div>
                              </div>
                              <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Last Name <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                      <i class="bx bx-user"></i></span>
                                    <input type="text" class="form-control"  name="lastname" id="lastname" placeholder="Last name" aria-label="Last name" aria-describedby="basic-icon-default-fullname2"/>
                                  </div>
                              </div>
                               <div class="col-md-4 col-sm-4 p-1">
                                  <label class="col-form-label" for="basic-icon-default-fullname">Gender <label class="text-danger" style="font-size: 15px;">*</label></label>
                                    <div class="input-group input-group-merge">
                                      <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="bx bx-user"></i></span>
                                      <select class="form-select" name="gender" id="gender">
                                        <option disabled selected>-select-</option>
                                        <option value="FEMALE">FEMALE</option>
                                        <option value="MALE">MALE</option>
                                      </select>
                                    </div>
                                </div>
                               <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Nationality <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-globe"></i></span>
                                    <select class="form-select" name="nationality" id="nationality">
                                      <option value="" disabled selected>-select-</option>
                                       @foreach($national_id as $nation)
                                          <option value="{{ $nation->NationalityId }}">{{ $nation->Nationality }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                              </div>
                                 <div class="col-md-4 col-sm-4 p-1">
                                  <label class="col-form-label" for="basic-icon-default-fullname">Date of Birth <label class="text-danger" style="font-size: 15px;">*</label></label>
                                    <div class="input-group input-group-merge">
                                      <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-book"></i></span>
                                      <input type="date" class="form-control" name="birth_date" id="birth_date" aria-label="John Doe" onchange="calculateAge()" aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 p-1">
                                  <label class="col-form-label" for="basic-icon-default-fullname">Age <label class="text-danger" style="font-size: 15px;">*</label></label>
                                    <div class="input-group input-group-merge">
                                      <span id="basic-icon-default-fullname2" class="input-group-text">
                                        <i class="bx bx-book"></i></span>
                                      <input type="text" class="form-control" name="age" id="age" aria-describedby="basic-icon-default-fullname2" disabled />
                                    </div>
                                </div>
                               <div class="col-md-4 col-sm-4 p-1">
                                  <label class="col-form-label" for="basic-icon-default-fullname">Religion <label class="text-danger" style="font-size: 15px;">*</label></label>
                                    <div class="input-group input-group-merge">
                                      <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-table"></i></span>
                                      <select class="form-select" name="religion" id="religion">
                                        <option value="" disabled selected>-select-</option>
                                        @foreach($student_religion as $religion)
                                          <option value="{{ strtoupper($religion->ReligionId) }}">{{ strtoupper($religion->Religion) }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                </div>
                                 <div class="col-md-4 col-sm-4 p-1">
                                  <label class="col-form-label" for="basic-icon-default-fullname">Address <label class="text-danger" style="font-size: 15px;">*</label></label>
                                    <div class="input-group input-group-merge">
                                      <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="bx bx-book"></i></span>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Address" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"/>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Region <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                      <i class="bx bx-table"></i>
                                    </span>
                                    <select class="form-select" name="region" id="region">
                                      <option disabled selected>-select-</option>
                                      @foreach($student_region as $region)
                                          <option value="{{ strtoupper($region->RegionId) }}">{{ strtoupper($region->Region) }}</option>
                                        @endforeach
                                    </select>
                                  </div>
                              </div>
                              <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Last Known School
                                   <label style="font-size: 15px;color: white;">*</label>
                               </label>
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                      <i class="bx bx-table"></i>
                                    </span>
                                    <input type="text" class="form-control" id="last_known_school" name="last_known_school" placeholder="Enter Previous School" aria-describedby="basic-icon-default-fullname2"/>
                                  </div>
                              </div>
                              <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Last Known Class
                                 <label style="font-size: 15px;color: white;">*</label>
                               </label>
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                      <i class="bx bx-table"></i>
                                    </span>
                                    <input type="text" class="form-control" id="last_known_class" name="last_known_class" placeholder="" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"/>
                                  </div>
                              </div>
                               <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">User
                                 <label class="text-danger" style="font-size: 15px;">*</label>
                               </label>
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text">
                                      <i class="bx bx-table"></i>
                                    </span>
                                    <input type="text" class="form-control" id="user_id" name="user_id" value="{{ session('user')->UserId }}" aria-describedby="basic-icon-default-fullname2"/>
                                  </div>
                              </div>
                              <!-- <input type="text" class="form-control" id="user_id" name="user_id" aria-describedby="basic-icon-default-fullname2" value="{{ session('user')->UserId }}" hidden /> -->
                             <div class="row mt-4">
                              <div class="col-md-6">
                                <div class="row justify-content-end">
                                  <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    <button type="reset" class="btn btn-label-secondary">Clear</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                        </div>
                        </div>
                      </div>
                    </div>
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
</div>
  @include('inc.update')
    <!-- / Layout wrapper -->
 @include('inc.script')

 <script type="text/javascript">
   $(document).ready(function() {
    $('#student_form_submission').submit(function(e) {
        e.preventDefault(); 

        // Collect form data
        var formData = new FormData(this);
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var gender = $('#gender').val();
        var nationality = $('#nationality').val();
        var birth_date = $('#birth_date').val();
        var religion = $('#religion').val();
        var address = $('#address').val();
        var region = $('#region').val();
        var user_id = $('#user_id').val();
        // Client-side validation
        if (firstname.length < 3 ) {
            // Display SweetAlert error message
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'First name must be at least 3 characters long.'
            });
            return;
        }
         if (lastname.length < 3) {
            // Display SweetAlert error message
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Last name must be at least 3 characters long.'
            });
            return;
        }

         if (!gender) {
            // Display SweetAlert error message
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Gender is required'
            });
            return;
        }
        if (!nationality) {
            // Display SweetAlert error message
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Nationality is required'
            });
            return;
        }
        if (!birth_date) {
            // Display SweetAlert error message
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Birth date is required.'
            });
            return;
        }

         if (!religion) {
            // Display SweetAlert error message
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Religion is required.'
            });
            return;
        }
        if (address.length === '') {
            // Display SweetAlert error message
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Address is required.'
            });
            return;
        }
        if (!region) {
            // Display SweetAlert error message
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'Region is required.'
            });
            return;
        }

        if (user_id.length === '') {
            // Display SweetAlert error message
            Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: 'There was a problem saving.'
            });
            return;
        }



        $.ajax({
            url: '/studentstore',
            type: 'POST',
            data: formData,
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(response) {
                // Handle success response
                
                // Display SweetAlert success message
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Data submitted successfully.'
                });
                
            },
            error: function(xhr, status, error) {
                // Handle error response
                // console.error(xhr.responseText);
                // Display SweetAlert error message
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred while submitting the form. Please try again later.'
                });
            }
        });
    });
});
 </script>
 <script type="text/javascript">
         // JavaScript
      document.addEventListener('DOMContentLoaded', function() {
          // Get the birth date input field
          var birthDateInput = document.getElementById('birth_date');

          // Add event listener for input change
          birthDateInput.addEventListener('input', function() {
              // Get the selected birth date value
              var dob = new Date(this.value);
              if (!isValidDate(dob)) return;

              // Calculate the age
              var age = calculateAge(dob);

              // Set the calculated age to the age input field
              document.getElementById('age').value = age;
          });
      });

      // Function to calculate age based on birth date
      function calculateAge(birthDate) {
          var now = new Date();
          var dob = new Date(birthDate);
          var age = now.getFullYear() - dob.getFullYear();
          var monthDiff = now.getMonth() - dob.getMonth();

          if (monthDiff < 0 || (monthDiff === 0 && now.getDate() < dob.getDate())) {
              age--;
          }

          return age;
      }

      // Function to check if date is valid
      function isValidDate(date) {
          return !isNaN(date.getTime());
      }
 </script>
