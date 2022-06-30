<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Material Dash</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('/') }}/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('/') }}/assets/css/demo/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('/') }}/assets/images/favicon.png" />
</head>

<body>
    <script src="../assets/js/preloader.js"></script>
    <div class="body-wrapper">
        <div class="main-wrapper">
            <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
                <main class="auth-page">
                    <div class="mdc-layout-grid">
                        <div class="mdc-layout-grid__inner">
                            <div
                                class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet">
                            </div>
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                                <div class="mdc-card">
                                    <form method="POST" action="{{ route('admin.login') }}"
                                        aria-label="{{ __('Login') }}">
                                        @csrf
                                        <div class="mdc-layout-grid">
                                            <div class="mdc-layout-grid__inner">
                                                <div
                                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input id="email" type="email"
                                                            class="mdc-text-field__input @error('email') is-invalid @enderror"
                                                            name="email" value="{{ old('email') }}" required
                                                            autocomplete="email" autofocus>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input"
                                                            class="mdc-floating-label">Username</label>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input id="password" type="password"
                                                            class="mdc-text-field__input @error('password') is-invalid @enderror"
                                                            name="password" required autocomplete="current-password">

                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input"
                                                            class="mdc-floating-label">Password</label>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                                    <div class="mdc-form-field">
                                                        <div class="mdc-checkbox">
                                                            <input class="mdc-checkbox__native-control" type="checkbox"
                                                                name="remember" id="remember"
                                                                {{ old('remember') ? 'checked' : '' }}>

                                                            <div class="mdc-checkbox__background">
                                                                <svg class="mdc-checkbox__checkmark"
                                                                    viewBox="0 0 24 24">
                                                                    <path class="mdc-checkbox__checkmark-path"
                                                                        fill="none"
                                                                        d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                                </svg>
                                                                <div class="mdc-checkbox__mixedmark"></div>
                                                            </div>
                                                        </div>
                                                        <label for="checkbox-1">Remember me</label>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">
                                                    @if (Route::has('admin.password.request'))
                                                        <a class="btn btn-link"
                                                            href="{{ route('admin.password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                                <div
                                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    
                                                    <button type="submit" class="mdc-button mdc-button--raised w-100">
                                                        {{ __('Login') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div
                                class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet">
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <!-- plugins:js -->
    <script src="{{ asset('/') }}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('/') }}/assets/js/material.js"></script>
    <script src="{{ asset('/') }}/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>
