<title>{{ config('app.name') }} | Add Academic Year</title>
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
                              <span class="text-muted fw-light">Form Wizard/</span> Numbered
                          </h4>
                          <!-- <div class="col-12">
                             <h5>Add Academy Year</h5>
                          </div> -->
                            <div class="row">
                                <div class="col-md-6">
                                  <div class="card mb-4">
                                    <h5 class="card-header">Basic</h5>
                                    <div class="card-body demo-vertical-spacing demo-only-element">
                                      <div class="input-group">
                                        <span class="input-group-text" id="basic-addon11">@</span>
                                        <input
                                          type="text"
                                          class="form-control"
                                          placeholder="Username"
                                          aria-label="Username"
                                          aria-describedby="basic-addon11" />
                                      </div>

                                      <div class="form-password-toggle">
                                        <label class="form-label" for="basic-default-password12">Password</label>
                                        <div class="input-group">
                                          <input
                                            type="password"
                                            class="form-control"
                                            id="basic-default-password12"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="basic-default-password2" />
                                          <span id="basic-default-password2" class="input-group-text cursor-pointer"
                                            ><i class="bx bx-hide"></i
                                          ></span>
                                        </div>
                                      </div>

                                      <div class="input-group">
                                        <input
                                          type="text"
                                          class="form-control"
                                          placeholder="Recipient's username"
                                          aria-label="Recipient's username"
                                          aria-describedby="basic-addon13" />
                                        <span class="input-group-text" id="basic-addon13">@example.com</span>
                                      </div>

                                      <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">https://example.com/users/</span>
                                        <input
                                          type="text"
                                          class="form-control"
                                          placeholder="URL"
                                          id="basic-url1"
                                          aria-describedby="basic-addon14" />
                                      </div>

                                      <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input
                                          type="number"
                                          class="form-control"
                                          placeholder="Amount"
                                          aria-label="Amount (to the nearest dollar)" />
                                        <span class="input-group-text">.00</span>
                                      </div>

                                      <div class="input-group">
                                        <span class="input-group-text">With textarea</span>
                                        <textarea class="form-control" aria-label="With textarea" placeholder="Comment"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Merged -->
                                <div class="col-md-6">
                                  <div class="card mb-4">
                                    <h5 class="card-header">Merged</h5>
                                    <div class="card-body demo-vertical-spacing demo-only-element">
                                      <div class="input-group input-group-merge">
                                        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
                                        <input
                                          type="text"
                                          class="form-control"
                                          placeholder="Search..."
                                          aria-label="Search..."
                                          aria-describedby="basic-addon-search31" />
                                      </div>

                                      <div class="form-password-toggle">
                                        <label class="form-label" for="basic-default-password32">Password</label>
                                        <div class="input-group input-group-merge">
                                          <input
                                            type="password"
                                            class="form-control"
                                            id="basic-default-password32"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="basic-default-password" />
                                          <span class="input-group-text cursor-pointer" id="basic-default-password"
                                            ><i class="bx bx-hide"></i
                                          ></span>
                                        </div>
                                      </div>

                                      <div class="input-group input-group-merge">
                                        <input
                                          type="text"
                                          class="form-control"
                                          placeholder="Recipient's username"
                                          aria-label="Recipient's username"
                                          aria-describedby="basic-addon33" />
                                        <span class="input-group-text" id="basic-addon33">@example.com</span>
                                      </div>

                                      <div class="input-group input-group-merge">
                                        <span class="input-group-text" id="basic-addon34">https://example.com/users/</span>
                                        <input type="text" class="form-control" id="basic-url3" aria-describedby="basic-addon34" />
                                      </div>

                                      <div class="input-group input-group-merge">
                                        <span class="input-group-text">$</span>
                                        <input
                                          type="number"
                                          class="form-control"
                                          placeholder="100"
                                          aria-label="Amount (to the nearest dollar)" />
                                        <span class="input-group-text">.00</span>
                                      </div>

                                      <div class="input-group input-group-merge">
                                        <span class="input-group-text">With textarea</span>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
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
    <!-- </div> -->
  @include('inc.update')
    <!-- / Layout wrapper -->
 @include('inc.script')