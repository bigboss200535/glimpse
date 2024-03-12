
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
                <div class="row">
                  <div class="col">
                    <h6 class="mt-4"> Add New Student </h6>
                    <div class="nav-align-top mb-3">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" role="tab" aria-selected="true">Personal Info</button>
                        </li>
                        <li class="nav-item">
                          <button class="nav-link " data-bs-toggle="tab" data-bs-target="#form-tabs-account" role="tab" aria-selected="false">Academic Details</button>
                        </li>
                        <li class="nav-item">
                          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-social" role="tab" aria-selected="false">Parents/Guardians Details</button>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <!-- Personal Info -->
                        <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                          <form method="post" id="student_form_submission">
                              @csrf
                            <div class="row">
                              <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">First Name <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class="bx bx-user"></i
                                    ></span>
                                    <!-- <input type="text" id="multicol-first-name" class="form-control" placeholder="John" /> -->
                                    <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="First name" />
                                  </div>
                              </div>

                              <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Last Name <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge rounded-pill">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class="bx bx-user"></i
                                    ></span>
                                    <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Last name" aria-label="Last name" aria-describedby="basic-icon-default-fullname2" />
                                  </div>
                              </div>
                               <div class="col-md-4 col-sm-4 p-1">
                                  <label class="col-form-label" for="basic-icon-default-fullname">Gender <label class="text-danger" style="font-size: 15px;">*</label></label>
                                    <div class="input-group input-group-merge rounded-pill">
                                      <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="bx bx-user"></i
                                      ></span>
                                      <select class="form-select" name="gender">
                                        <option value="" disabled selected>-select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                      </select>
                                    </div>
                                </div>

                               <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Nationality <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge rounded-pill">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class="bx bx-globe"></i
                                    ></span>
                                    <select class="form-select" name="nationality">
                                      <option value="" disabled selected>-select</option>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                    </select>
                                  </div>
                              </div>

                               <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Region <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge rounded-pill">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class="bx bx-table"></i
                                    ></span>
                                    <select class="form-select" name=region>
                                      <option value="" disabled selected>-select</option>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                    </select>
                                  </div>
                              </div>

                               <div class="col-md-4 col-sm-4 p-1">
                                  <label class="col-form-label" for="basic-icon-default-fullname">Religion <label class="text-danger" style="font-size: 15px;">*</label></label>
                                    <div class="input-group input-group-merge rounded-pill">
                                      <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="bx bx-table"></i
                                      ></span>
                                      <select class="form-select" name=religion>
                                        <option value="" disabled selected>-select</option>
                                        <option value="christian">Christian</option>
                                        <option value="muslim">Muslim</option>
                                        <option value="traditional">Traditional</option>
                                      </select>
                                    </div>
                                </div>

                                 <div class="col-md-4 col-sm-4 p-1">
                                  <label class="col-form-label" for="basic-icon-default-fullname">Address <label class="text-danger" style="font-size: 15px;">*</label></label>
                                    <div class="input-group input-group-merge rounded-pill">
                                      <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="bx bx-book"></i
                                      ></span>
                                      <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Address" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>

                                 <div class="col-md-4 col-sm-4 p-1">
                                  <label class="col-form-label" for="basic-icon-default-fullname">Complete Date</label>
                                    <div class="input-group input-group-merge rounded-pill">
                                      <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="bx bx-calendar"></i
                                      ></span>
                                      <input type="date" name="dob" class="form-control">
                                    </div>
                                </div>

                             <div class="col-md-4 col-sm-4 p-1">
                              <label class="col-form-label" for="basic-icon-default-fullname">Student's Image <label class="text-danger" style="font-size: 15px;">*</label></label>
                                <div class="input-group input-group-merge rounded-pill">
                                  <span id="basic-icon-default-fullname2" class="input-group-text"
                                    ><i class="bx bx-book"></i
                                  ></span>
                                  <input type="file" class="form-control" id="basic-icon-default-fullname"  />
                                </div>
                            </div>

                            </div>
                            <!-- <div class="row mt-4">
                              <div class="col-md-6">
                                <div class="row justify-content-end">
                                  <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                          <!-- </form> -->
                        </div>
                        <!-- Account Details -->
                        <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
                          <!-- <form> -->
                            <div class="row">
                               <div class="col-md-4 col-sm-4 p-1">
                                  <label class="col-form-label" for="basic-icon-default-fullname">Previous School Attended <label class="text-danger" style="font-size: 15px;">*</label></label>
                                    <div class="input-group input-group-merge rounded-pill">
                                      <span id="basic-icon-default-fullname2" class="input-group-text"
                                        ><i class="bx bx-book"></i
                                      ></span>
                                      <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Previous School Attended" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>
                              <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Previous Class <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge rounded-pill">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class="bx bx-table"></i
                                    ></span>
                                    <select class="form-select" name=religion>
                                      <option value="" disabled selected>-select</option>
                                      <option value="christian">Christian</option>
                                      <option value="muslim">Muslim</option>
                                      <option value="traditional">Traditional</option>
                                    </select>
                                  </div>
                              </div>

                              <div class="col-md-4 col-sm-4 p-1">
                                <label class="col-form-label" for="basic-icon-default-fullname">Current Class <label class="text-danger" style="font-size: 15px;">*</label></label>
                                  <div class="input-group input-group-merge rounded-pill">
                                    <span id="basic-icon-default-fullname2" class="input-group-text"
                                      ><i class="bx bx-table"></i
                                    ></span>
                                    <select class="form-select" name=religion>
                                      <option value="" disabled selected>-select</option>
                                      <option value="christian">Christian</option>
                                      <option value="muslim">Muslim</option>
                                      <option value="traditional">Traditional</option>
                                    </select>
                                  </div>
                              </div>
                            <div class="col-md-4 col-sm-4 p-1">
                              <label class="col-form-label" for="basic-icon-default-fullname">Section <label class="text-danger" style="font-size: 15px;">*</label></label>
                                <div class="input-group input-group-merge rounded-pill">
                                  <span id="basic-icon-default-fullname2" class="input-group-text"
                                    ><i class="bx bx-table"></i
                                  ></span>
                                  <select class="form-select" name=religion>
                                    <option value="" disabled selected>-select</option>
                                    <option value="opokuware">Opoku Ware</option>
                                    <option value="prempeh">Prempeh</option>
                                    <option value="yaaasantewaa">Yaa Asantewaa</option>
                                  </select>
                                </div>
                            </div>
                            </div>
                           <!--  <div class="row mt-4">
                              <div class="col-md-6">
                                <div class="row justify-content-end">
                                  <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                          <!-- </form> -->
                        </div>
                        <!-- Social Links -->

                        <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
                          <!-- <form> -->
                            <div class="row">
                            
                             <div class="col-md-4 col-sm-4 p-2">
                            <label class="col-form-label" for="basic-icon-default-fullname">Father's Full name</label>
                              <div class="input-group input-group-merge rounded-pill">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-book"></i
                                ></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Father's Full name" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                              </div>
                          </div>

                          <div class="col-md-4 col-sm-4 p-2">
                            <label class="col-form-label" for="basic-icon-default-fullname">Father's Address</label>
                              <div class="input-group input-group-merge rounded-pill">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-book"></i
                                ></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Father's Address" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                              </div>
                          </div>

                          <div class="col-md-4 col-sm-4 p-2">
                            <label class="col-form-label" for="basic-icon-default-fullname">Father's Contact</label>
                              <div class="input-group input-group-merge rounded-pill">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-book"></i
                                ></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Father's Contact" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                              </div>
                          </div>

                          <div class="col-md-4 col-sm-4 p-2">
                            <label class="col-form-label" for="basic-icon-default-fullname">Occupation</label>
                              <div class="input-group input-group-merge rounded-pill">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-book"></i
                                ></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Occupation" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                              </div>
                          </div>

                          <div class="col-md-4 col-sm-4 p-2">
                            <label class="col-form-label" for="basic-icon-default-fullname">Mother's Full name</label>
                              <div class="input-group input-group-merge rounded-pill">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-book"></i
                                ></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Mother's Full name" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                              </div>
                          </div>

                          <div class="col-md-4 col-sm-4 p-2">
                            <label class="col-form-label" for="basic-icon-default-fullname">Mother's Address</label>
                              <div class="input-group input-group-merge rounded-pill">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-book"></i
                                ></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Mother's Address" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                              </div>
                          </div>

                          <div class="col-md-4 col-sm-4 p-2">
                            <label class="col-form-label" for="basic-icon-default-fullname">Mother's Contact</label>
                              <div class="input-group input-group-merge rounded-pill">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-book"></i
                                ></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Mother's Contact" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                              </div>
                          </div>

                          <div class="col-md-4 col-sm-4 p-2">
                            <label class="col-form-label" for="basic-icon-default-fullname">Occupation</label>
                              <div class="input-group input-group-merge rounded-pill">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-book"></i
                                ></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Occupation" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                              </div>
                          </div>

                          <div class="col-md-4 col-sm-4 p-2">
                            <label class="col-form-label" for="basic-icon-default-fullname">Guadian's Fullname</label>
                              <div class="input-group input-group-merge rounded-pill">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-book"></i
                                ></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Guadian's Fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                              </div>
                          </div>

                             <div class="col-md-4 col-sm-4 p-2">
                            <label class="col-form-label" for="basic-icon-default-fullname">Guadian's Address</label>
                              <div class="input-group input-group-merge rounded-pill">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-book"></i
                                ></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Guadian's Address" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                              </div>
                          </div>
                             <div class="col-md-4 col-sm-4 p-2">
                            <label class="col-form-label" for="basic-icon-default-fullname">Guadian's Contact</label>
                              <div class="input-group input-group-merge rounded-pill">
                                <span id="basic-icon-default-fullname2" class="input-group-text"
                                  ><i class="bx bx-book"></i
                                ></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="Guadian's Contact" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                              </div>
                            </div>
                           <!--  <div class="row mt-4">
                              <div class="col-md-6">
                                <div class="row justify-content-end">
                                  <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                  </div>
                                </div>
                              </div>
                            </div> -->
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="row mt-4">
                              <div class="col-md-6">
                                <div class="row justify-content-end">
                                  <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
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