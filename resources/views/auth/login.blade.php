<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset("/admin/assets/vendors/mdi/css/materialdesignicons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/admin/assets/vendors/css/vendor.bundle.base.css") }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset("/admin/assets/css/style.css") }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset("/admin/assets/images/favicon.png") }}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                  <div class="form-group">
                    <label>email *</label>
                    <input type="email" class="form-control p_input" name="email" :value="old('email')" required autofocus autocomplete="username" id="email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                  </div>

                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" class="form-control p_input" name="password" required autocomplete="current-password" id="password" >
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                  </div>

                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                        <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" id="togglePassword"> Show Password </label>
                      </div>
                    <a href="{{ url("#") }}" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="{{ route("register") }}"> Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset("/admin/assets/vendors/js/vendor.bundle.base.js") }}"></script>
    <!-- endinject -->
    <!-- show password check -->
    <!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
      // Target the show password checkbox
      $('#togglePassword').change(function() {
        // Target the password input fields
        var passwordField = $('#password');

        // Change the input type based on the checkbox state
        if ($(this).is(':checked')) {
          passwordField.attr('type', 'text');
        } else {
          passwordField.attr('type', 'password');
        }
      });
    });
  </script>

<!-- show password check end -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset("/admin/assets/js/off-canvas.js") }}"></script>
    <script src="{{ asset("/admin/assets/js/hoverable-collapse.js") }}"></script>
    <script src="{{ asset("/admin/assets/js/misc.js") }}"></script>
    <script src="{{ asset("/admin/assets/js/settings.js") }}"></script>
    <script src="{{ asset("/admin/assets/js/todolist.js") }}"></script>
    <!-- endinject -->
  </body>
</html>
