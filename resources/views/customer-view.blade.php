<!doctype html>
<html lang="en">
<x-boostrap />
<head>
    <title>Customers_page</title>
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
        <form action="" class="col-9">
            <div class="mb-3">
                <input type="search" name="search" value="{{ $search }}" class="form-control mt-5" placeholder="Search by name or Email" />
            </div>
            <button class="btn btn-info">Search</button>
            <a href="{{ url('/customer') }}">
                <button class="btn btn-primary" type="button">Reset</button>
        </form>
        <a href="{{ route('customer.creat') }}">
            <button id="add" class="btn btn-primary d-inline-block ml-2 float-sm-end">Add</button>
        </a>
        <a href="{{ url('customer/tras') }}">
            <button id="add" class="btn btn-danger d-inline-block ml-2 float-sm-end">Go To Trash</button>
        </a>
        <table class="table" border="2px solid" cellspacing="1px" cellpadding="5px">
            <thead>
                <tr>
                    <th>Sr.</th>
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
                @php
                $i = 1;
                @endphp
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $i }}</td>
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

                        <a href="{{ route('customer.delete',['id' =>  $customer->customers_id]) }}"><button class="btn btn-danger">Trash</button></a>
                        <a href="{{ route('customer.edit',['id'=> $customer->customers_id]) }}"><button class="btn btn-primary">Edit</button>
                    </td>
                </tr>
                @php
                $i++;
                @endphp
                @endforeach
            <tbody>
        </table>
        <div class="row">
            {{ $customers->links() }}
        </div>
    </div>


</body>
</html>
