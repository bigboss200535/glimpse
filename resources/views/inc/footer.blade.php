 <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  © 
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , WebEdge Technologies
                </div>
                <div class="d-none d-lg-inline-block">
                  <!-- <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a> -->
                  <!-- <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a> -->
<!-- 
                  <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank" class="footer-link me-4" >Documentation</a> -->

                 <!--  <a ref="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank" class="footer-link">Support</a> -->
                </div>
              </div>
            </footer>

  <script>
            window.addEventListener('load', function() {
              // After 3 seconds, hide the preloader
              setTimeout(function() {
                document.getElementById('preloader').style.display = 'none';
              }, 3000); 
              // 3000 milliseconds = 3 seconds
            });



    $(document).ready(function() {
    $('#student_form_submission').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting normally
        
        // Validate all fields are not empty
        var isValid = true;
        $(this).find('input[type="text"], select, textarea').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                return false; // Exit loop early if any field is empty
            }
        });
        
        if (!isValid) {
            // Display error message if any field is empty
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Please fill out all fields.',
            });
            return;
        }

        var formData = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Handle success response
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: response.success,
                }).then((result) => {
                    // Redirect or perform any action after success
                    window.location.href = '/success-page';
                });
            },
            error: function(xhr, status, error) {
                // Handle error response
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: xhr.responseText,
                });
            }
        });
    });
});


</script>
