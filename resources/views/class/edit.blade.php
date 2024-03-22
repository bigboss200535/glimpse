<title>{{ config('app.name') }} | Add Class</title>
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
                <div class="row">
                  <div class="col">
                    <h6 class="mt-4"> Add New Class </h6>                      
                      <div class="">
                        <form method="post" id="class_form_submission" action="{{url('classsave')}}">
                            <div class="card">
                              <div class="card-body">
                                <small>Fields with <label class="text-danger">*</label> are mandatory</small>
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Class Code <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class="bx bx-user"></i
                                    ></span>
                                    <input type="text" class="form-control" placeholder="Class name" name="classname" id="passInput" />
                                  </div>
                              </div>

                              <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Class Name <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class="bx bx-user"></i
                                    ></span>
                                    <input type="text" class="form-control" placeholder="Class name" name="classname" id="classname" />
                                  </div>
                              </div>

                              <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Number of Subjects taught <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class="bx bx-user"></i
                                    ></span>
                                    <!-- <input type="text" id="multicol-first-name" class="form-control" placeholder="John" /> -->
                                    <input type="number" class="form-control" placeholder="Number of Subjects taught" name="numberofsubjects" id="numberofsubjects" />
                                  </div>
                              </div>

                              <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label">Class Abbreviation <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class="bx bx-user"></i
                                    ></span>
                                    <select type="text" class="form-select" name="classabb" id="classabb">
                                      <option value="" disabled selected>-select-</option>
                                      <option value="JHS3"> JHS3</option>
                                      <option value="JHS2">JHS2</option>
                                      <option value="JHS1">JHS1</option>
                                      <option value="PRIM6">PRIM6</option>
                                      <option value="PRIM5">PRIM5</option>
                                      <option value="PRIM4">PRIM4</option>
                                      <option value="PRIM3">PRIM3</option>
                                      <option value="PRIM2">PRIM2</option>
                                      <option value="PRIM1">PRIM1</option>
                                      <option value="KG2">KG2</option>
                                      <option value="KG1">KG1</option>
                                      <option value="NUR2">NUR2</option>
                                      <option value="NUR1">NUR1</option>
                                    </select>
                                  </div>
                              </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div>
                                  <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
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

<script type="text/javascript" src="vendors/sweetalert.min.js"></script>
 <?php 
      if(isset($_SESSION['status']))
      { ?>
      
        <script>
        swal({
        title: "<?php echo $_SESSION['status'] ?>",
        text: "You have successfully saved a new class!",
        icon: "success",
        button: "Ok!",
      });
      </script>
      <?php
      unset($_SESSION['status']);
      }
     ?>