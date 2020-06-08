<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   @include('layout.head_login')
   
    <body>
        <div class="bg" id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <div class="col-md-11 pull-left"><a class="navbar-brand pull-left" href="{{ url('/') }}"> RoadMap</a> </div>
                        <div class="col-md-1 pull-right">
                            <a  href="{{url('logout')}}">Logout</a>
                        </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                        </ul>
                    </div>
                </div>
            </nav>

            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>