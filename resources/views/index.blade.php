<!doctype html>
<html lang="en">
<x-boostrap />
<head>
    <title>Header</title>
</head>

<body>
    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="#" style="color:white">Web Innovation</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsiblenavId" aria-controls="collapsiblenavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsiblenavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}" style="color: white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/register') }}" style="color: white">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/customer') }}" style="color: white">Customer</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block float-sm-end">
        <a class="" href="{{url('/guj')}}">Gujarati</a> 
        <a class="" href="{{url('/')}}">English</a> 
        <a class="" href="{{url('/rus')}}">Rusian</a> 
        <a class="" href="{{url('/hi')}}">Hindi</a> 
    </div>
    <div class="container">
        <h1 class="text-cente mt-5">@lang('lang.welcome')</h1>
    </div>

</body>
</html>
