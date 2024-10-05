<html>
    <x-boostrap />
    <head>
        <title>Submited form</title>
    </head>
    <body>
        {{-- <form action="{{url('/')}}/register" method="post">
            @csrf
            <div class="main">
            <h1>Register Form</h1>
            <div>
                <label for="">Name :</label>
                <input type="text" name="name" placeholder="name" value="{{old('name')}}">
                <span>
                    @error('name')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div>
                <label for="">Email :</label>
                <input type="email" name="email" placeholder="Email">
                <span>
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div>
                <label for="">Password :</label>
                <input type="password" name="password" placeholder="Password">
                <span>
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div>
                <label for="">Confirm_Password :</label>
                <input type="password" name="password" placeholder="Password">
            </div>

            <button>
                Submit
            </button>
        </div>
        </form> --}}

        <div class="container-fluid bg-dark">
            <div class="container">
                <nav class="navbar navbar-expand-sm">
                    <a class="navbar-brand" href="#" style="color:white">Web Innovation</a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsiblenavId" aria-controls="collapsiblenavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsiblenavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link"href="{{ url('/') }}" style="color: white">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"href="{{ url('/register') }}" style="color: white">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"href="{{ url('/customer') }}" style="color: white">Customer</a>
                            </li>
                        </ul>
                    </div>    
                </nav>
            </div>
        </div>

        <form action="{{url('/')}}/register" method="post">
            @csrf
            <div class="main">
                <x-input type="text" name="name" label="Name :" placeholder="Enter_name"/>
                <x-input type="email" name="email" label="Email :" placeholder="Enter_Email"/>
                <x-input type="password" name="password" label="Password :" placeholder="Password"/>
                <x-input type="password" name="password" label="Confirm_password :" placeholder="Confirm_password"/>
            <button>
                Submit
            </button>
        </div>
        </form>
    </body>
</html>
<style>
form{
    width:600px;
    margin:auto;
    padding:10px;
}
input{
    width:100%;
    padding:6px;
}
button{
    background-color:#73f;
    color:White;
    border:none;
    margin-top:10px;
    padding:7px;
    font-size:17px;
}
span{
    background-color:#8f;
    color:#f32;
}
</style>