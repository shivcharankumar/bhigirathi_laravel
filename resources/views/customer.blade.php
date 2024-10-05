<html>
<x-boostrap />
<head>
    <title>Customer Form</title>
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
    <form action="{{$url}}" method="post" class="customer-form">
        @csrf
        <div class="container mt-4 card p-3 bg-white">
            <h2 class="text-center text-primary">{{ $title }}</h2>
            <div class="row">
                <div class="form-group col-md-6 required">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="" placeholder="Enter your name" class="form-control" value="{{optional($customers)->name }}">
                </div>

                <div class="form-group col-md-6 required">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="" placeholder="Enter your email" class="form-control" value="{{optional( $customers)->email }}">
                </div>

                <div class="form-group col-md-6 required">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="" placeholder="Enter your password" class="form-control">
                </div>

                <div class="form-group col-md-6 required">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" name="confirm_password" id="" placeholder="Confirm your password" class="form-control">
                </div>
                <div class="form-group col-md-6 required">
                    <label for="state">Status:</label>
                    <input type="text" name="status" id="" placeholder="Enter your status" class="form-control">
                </div>

                <div class="form-group col-md-12 required">
                    <label for="address">Address:</label>
                    <textarea name="address" placeholder="Enter your address" class="form-control">{{optional($customers)->address }}</textarea>
                </div>

                <div class="form-group col-md-6 required">
                    <label for="">Gender:</label><br>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" id="" value="M" 
                        {{optional($customers)->gender == "M" ? "checked" : "" }}/>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" id="" value="F"
                        {{optional($customers)->gender == "F" ? "checked" : "" }}/>
                        <label class="form-check-label" for="female">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" id="" value="O" 
                        {{optional($customers)->gender == "O" ? "checked" : "" }}/>
                        <label class="form-check-label" for="other">Other</label>
                    </div>

                </div>
                <div class="form-group col-md-6 required">
                    <label for="email">Date of Birth</label>
                    <input type="date" name="dob" id="" placeholder="dd---yy" class="form-control" value="{{optional($customers)->dob }}">
                </div>
            </div>
            <button class="btn btn-primary mt-4" type="submit">Register</button>
        </div>
    </form>
</body>
</html>
