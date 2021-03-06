<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('back/')}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('back/')}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('back/')}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('back/')}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('back/')}}/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="{{asset('back/')}}/#">
                                <img src="{{asset('back/')}}/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('admin.login.post') }}" method="post">
                                @if ($errors->any())
                                <div class="bg-red-200 relative text-red-600 py-3 px-3 my-3 rounded-lg">
                                    {{ $errors->first() }}
                                </div>
                                @endif
                                @csrf
                                <div class="form-group">
                                    <label>Email Adresiniz</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Parolanız</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="">
                                </div>
                                <div class="login-checkbox">
                                    {{-- <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label> --}}
                                    <label>
                                        {{-- <a href="{{asset('back/')}}/#">Forgotten Password?</a> --}}
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('back/')}}/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('back/')}}/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{asset('back/')}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('back/')}}/vendor/slick/slick.min.js">
    </script>
    <script src="{{asset('back/')}}/vendor/wow/wow.min.js"></script>
    <script src="{{asset('back/')}}/vendor/animsition/animsition.min.js"></script>
    <script src="{{asset('back/')}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{asset('back/')}}/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{asset('back/')}}/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{asset('back/')}}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('back/')}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset('back/')}}/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{asset('back/')}}/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{asset('back/')}}/js/main.js"></script>

</body>

</html>
<!-- end document-->
