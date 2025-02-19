<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img width="250" src="/home/images/logo.png" alt="#" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">
                            Home <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('products')}}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('show_order')}}">Order</a>
                    </li>
{{--                    <form class="form-inline nav-item">--}}
{{--                        <button class="btn btn-outline-light my-2 my-sm-0 nav_search-btn" type="submit">--}}
{{--                            <i class="fa fa-search" aria-hidden="true"></i>--}}
{{--                        </button>--}}
{{--                    </form>--}}

                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <x-app-layout></x-app-layout>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-primary mx-2" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                            </li>
                        @endauth
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>
