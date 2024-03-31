<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('login_page/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('login_page/css/owl.carousel.min.css') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('login_page/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('login_page/css/style.css') }}">

    <link rel="icon" href="{{ asset('images/portfolio/favicon.png') }}">
    <title>Register | Rental System</title>
</head>

<style>
    * {
        overflow: hidden;
    }
</style>

<body>
    <div class="d-lg-flex half">
        <div class="bg order-0 order-md-0" style="background-image: url('login_page/images/bg_2.jpg');"></div>
        <div class="contents order-1 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Registration to <strong>Rental System</strong></h3>
                        <p class="mb-4">
                            Sign up to proceed with logging in.
                        </p>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group first">
                                <label for="name">{{ __('Name') }}</label>
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                    placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group first">
                                <label for="email">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email">
                            </div>

                            <div class="form-group first">
                                <label for="date_of_birth">{{ __('Date of Birth') }}</label>
                                <input id="date_of_birth" type="date"
                                    class="form-control @error('date_of_birth') is-invalid @enderror"
                                    name="date_of_birth" value="{{ old('date_of_birth') }}" required
                                    autocomplete="date_of_birth" placeholder="Date of Birth">

                                @error('date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <label for="sex"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                <div class="col-md-6">
                                    <select id="sex" class="form-control @error('sex') is-invalid @enderror"
                                        name="sex" required>
                                        <option value="" selected disabled>Choose Gender</option>
                                        <option value="Male" {{ old('sex') == 'Male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="Female" {{ old('sex') == 'Female' ? 'selected' : '' }}>Female
                                        </option>
                                        <option value="Others" {{ old('sex') == 'Others' ? 'selected' : '' }}>Others
                                        </option>
                                    </select>

                                    @error('sex')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group last mb-3">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" placeholder="Password">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm Password">
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Register') }}
                            </button>

                            <div class="d-flex my-3 align-items-center">
                                <span class="mr-auto">
                                    <a href="/" class="">Login</a>
                                </span>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
