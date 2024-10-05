<!doctype html>
<html lang="en">
<x-boostrap />
<head>
    <title>Customers Trash</title>
    {{-- <style>
    #add{
        float:right;
    }
    </style> --}}
</head>

<body>

    <div class="container-fluid bg-dark">
        <div class="container">
            <nav class="navbar navbar-expand-sm">
                <a class="navbar-brand" href="#" style="color:white">
                    {{-- {{ session()->get('user_name') }} --}}
                    @if (session()->has('user_name'));
                    {{ session()->get('user_name') }}
                    @else
                    Guest
                    @endif
                </a>
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
    <div class="container">
        <a href="{{ route('customer.creat') }}">
            <button id="add" class="btn btn-primary d-inline-block m-2 float-sm-end">Add</button>
        </a>
          <a href="{{ url('customer') }}">
            <button id="add" class="btn btn-success d-inline-block m-2 float-sm-end">Customer View</button>
        </a>
       
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Dob</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>
                        @if ($customer->gender == "M")
                        male
                        @elseif($customer->gender == "F")
                        female
                        @else
                        other
                        @endif
                    </td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->dob }}</td>
                    <td>
                        @if ($customer->status == "1")
                        <a href="">
                            <span class="btn btn-success">Active</span>
                        </a>
                        @else
                        <a href="">
                            <span class="btn btn-danger">Inactive</span>
                        </a>
                        @endif
                    </td>
                    <td>
                        {{-- <a href="{{ url('/customer/delete/') }}/{{ $customer->customers_id }}"><button class="btn btn-danger">Delete</button></a> --}}

                        {{-- OR --}}

                        <a href="{{ route('customer.ForceDelete',['id' =>  $customer->customers_id]) }}"><button class="btn btn-danger">Delete</button></a>
                        <a href="{{ route('customer.restore',['id'=> $customer->customers_id]) }}"><button class="btn btn-primary">Restore</button>
                    </td>
                </tr>
                @endforeach
            <tbody>
        </table>

    </div>


</body>
</html>
