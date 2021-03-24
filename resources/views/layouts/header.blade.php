@section('navbar')
    <style>
        .nav-item a{
            color: #ffffff !important;
        }
    </style>
@endsection

<nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background: #131313;font-family: 'Montserrat', sans-serif;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('images_assets/logo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">BRAND</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">STORE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
