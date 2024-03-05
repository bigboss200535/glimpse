<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default"  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title> Vertical Layouts - Forms | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-bootstrap-html-admin-template/">

    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5DDHKGP');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon/favicon.ico')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/fonts/boxicons.css')}}" />
    <link rel="stylesheet" href="{{ asset('vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{ asset('vendor/fonts/flag-icons.css')}}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('css/demo.css')}}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{ asset('vendor/libs/typeahead-js/typeahead.css')}}" /> 
    <link rel="stylesheet" href="{{ asset('vendor/libs/flatpickr/flatpickr.css')}}" />
    <link rel="stylesheet" href="{{ asset('vendor/libs/select2/select2.css')}}" />
    <script src="{{ asset('vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('vendor/js/template-customizer.js')}}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('js/config.js')}}"></script>
    
</head>

<body>

  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
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
            
            
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>



<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <h5 class="card-header">Multi Column with Form Separator</h5>
  <form class="card-body">
    <h6>1. Account Details</h6>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">Username</label>
        <input type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-email">Email</label>
        <div class="input-group input-group-merge">
          <input type="text" id="multicol-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="multicol-email2" />
          <span class="input-group-text" id="multicol-email2">@example.com</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-password">Password</label>
          <div class="input-group input-group-merge">
            <input type="password" id="multicol-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-password2" />
            <span class="input-group-text cursor-pointer" id="multicol-password2"><i class="bx bx-hide"></i></span>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-confirm-password">Confirm Password</label>
          <div class="input-group input-group-merge">
            <input type="password" id="multicol-confirm-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-confirm-password2" />
            <span class="input-group-text cursor-pointer" id="multicol-confirm-password2"><i class="bx bx-hide"></i></span>
          </div>
        </div>
      </div>
    </div>
    <hr class="my-4 mx-n4" />
    <h6>2. Personal Info</h6>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-first-name">First Name</label>
        <input type="text" id="multicol-first-name" class="form-control" placeholder="John" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-last-name">Last Name</label>
        <input type="text" id="multicol-last-name" class="form-control" placeholder="Doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-country">Country</label>
        <select id="multicol-country" class="select2 form-select" data-allow-clear="true">
          <option value="">Select</option>
          <option value="Australia">Australia</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="Belarus">Belarus</option>
        </select>
      </div>
      <div class="col-md-6 select2-primary">
        <label class="form-label" for="multicol-language">Language</label>
        <select id="multicol-language" class="select2 form-select" >
          <option value="en" selected>English</option>
          <option value="fr" selected>French</option>
          <option value="de">German</option>
          <option value="pt">Portuguese</option>
        </select>
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-birthdate">Birth Date</label>
        <input type="text" id="multicol-birthdate" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-phone">Phone No</label>
        <input type="text" id="multicol-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
      </div>
    </div>
    <label class="form-check-label">Address Type</label>
              <div class="col mt-2">
                <div class="form-check form-check-inline">
                  <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-home" checked="" />
                  <label class="form-check-label" for="collapsible-address-type-home">Home (All day delivery)</label>
                </div>
                <div class="form-check form-check-inline">
                  <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-office" />
                  <label class="form-check-label" for="collapsible-address-type-office"> Office (Delivery between 10 AM - 5 PM) </label>
                </div>
              </div>
    <div class="pt-4">
      <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-label-secondary">Cancel</button>
    </div>
  </form>
</div>

<!-- Form with Tabs -->
<div class="row">
  <div class="col">
    <h6 class="mt-4"> Form with Tabs </h6>
    <div class="nav-align-top mb-3">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal" role="tab" aria-selected="true">Personal Info</button>
        </li>
        <li class="nav-item">
          <button class="nav-link " data-bs-toggle="tab" data-bs-target="#form-tabs-account" role="tab" aria-selected="false">Account Details</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-social" role="tab" aria-selected="false">Social Links</button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" for="formtabs-first-name">First Name</label>
                <input type="text" id="formtabs-first-name" class="form-control" placeholder="John" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="formtabs-last-name">Last Name</label>
                <input type="text" id="formtabs-last-name" class="form-control" placeholder="Doe" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="formtabs-country">Country</label>
                <select id="formtabs-country" class="select2 form-select" data-allow-clear="true">
                  <option value="">Select</option>
                  <option value="Australia">Australia</option>
                  <option value="Bangladesh">Bangladesh</option>
                  <option value="Belarus">Belarus</option>
                  <option value="Brazil">Brazil</option>
                  <option value="Canada">Canada</option>
                  <option value="China">China</option>
                  <option value="France">France</option>
                  <option value="Germany">Germany</option>
                  <option value="India">India</option>
                  <option value="Indonesia">Indonesia</option>
                  <option value="Israel">Israel</option>
                  <option value="Italy">Italy</option>
                  <option value="Japan">Japan</option>
                  <option value="Korea">Korea, Republic of</option>
                  <option value="Mexico">Mexico</option>
                  <option value="Philippines">Philippines</option>
                  <option value="Russia">Russian Federation</option>
                  <option value="South Africa">South Africa</option>
                  <option value="Thailand">Thailand</option>
                  <option value="Turkey">Turkey</option>
                  <option value="Ukraine">Ukraine</option>
                  <option value="United Arab Emirates">United Arab Emirates</option>
                  <option value="United Kingdom">United Kingdom</option>
                  <option value="United States">United States</option>
                </select>
              </div>
              <div class="col-md-6 select2-primary">
                <label class="form-label" for="formtabs-language">Language</label>
                <select id="formtabs-language" class="select2 form-select" multiple>
                  <option value="en" selected>English</option>
                  <option value="fr" selected>French</option>
                  <option value="de">German</option>
                  <option value="pt">Portuguese</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label" for="formtabs-birthdate">Birth Date</label>
                <input type="text" id="formtabs-birthdate" class="form-control dob-picker" placeholder="YYYY-MM-DD" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="formtabs-phone">Phone No</label>
                <input type="text" id="formtabs-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
              </div>
            </div>
            <div class="pt-4">
              <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
              <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" for="formtabs-username">Username</label>
                <input type="text" id="formtabs-username" class="form-control" placeholder="john.doe" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="formtabs-email">Email</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="formtabs-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="formtabs-email2" />
                  <span class="input-group-text" id="formtabs-email2">@example.com</span>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-password-toggle">
                  <label class="form-label" for="formtabs-password">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="formtabs-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="formtabs-password2" />
                    <span class="input-group-text cursor-pointer" id="formtabs-password2"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-password-toggle">
                  <label class="form-label" for="formtabs-confirm-password">Confirm Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="formtabs-confirm-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="formtabs-confirm-password2" />
                    <span class="input-group-text cursor-pointer" id="formtabs-confirm-password2"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="pt-4">
              <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
              <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" for="formtabs-twitter">Twitter</label>
                <input type="text" id="formtabs-twitter" class="form-control" placeholder="https://twitter.com/abc" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="formtabs-facebook">Facebook</label>
                <input type="text" id="formtabs-facebook" class="form-control" placeholder="https://facebook.com/abc" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="formtabs-google">Google+</label>
                <input type="text" id="formtabs-google" class="form-control" placeholder="https://plus.google.com/abc" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="formtabs-linkedin">Linkedin</label>
                <input type="text" id="formtabs-linkedin" class="form-control" placeholder="https://linkedin.com/abc" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="formtabs-instagram">Instagram</label>
                <input type="text" id="formtabs-instagram" class="form-control" placeholder="https://instagram.com/abc" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="formtabs-quora">Quora</label>
                <input type="text" id="formtabs-quora" class="form-control" placeholder="https://quora.com/abc" />
              </div>
            </div>
            <div class="pt-4">
              <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
              <button type="reset" class="btn btn-label-secondary">Cancel</button>
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

     @include('inc.update')
  <script src="{{ asset('vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('vendor/libs/hammer/hammer.js') }}"></script>
  <script src="{{ asset('vendor/libs/i18n/i18n.js') }}"></script>
  <script src="{{ asset('vendor/libs/typeahead-js/typeahead.js') }}"></script>
  <script src="{{ asset('vendor/js/menu.js') }}"></script>
  <!-- endbuild -->
  <!-- Vendors JS -->
  <script src="{{ asset('vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('vendor/libs/cleavejs/cleave-phone.js') }}"></script>
<script src="{{ asset('vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('vendor/libs/select2/select2.js') }}"></script>
  <!-- Main JS -->
  <script src="{{ asset('js/main.js') }}"></script>
  

  <!-- Page JS -->
  <script src="{{ asset('js/form-layouts.js') }}"></script>
  
</body>

</html>

<!-- beautify ignore:end -->

