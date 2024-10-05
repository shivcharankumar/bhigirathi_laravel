{{-- <html>
    <head>
        <x-boostrap>
        <title>Home</title>
    </head>
    <body> --}}

    @extends('layout.main')

        @section('main-section')  

         <h1 class="text-center"> Home page</h1>
         
        @endsection

        {{-- <h2>Welcome to home page {{$name ?? "user"}}</h2> --}}
         
         {{-- @if ($name == "")
             {{"Name is  empty"}}

            @elseif ($name == "Shivcharan")
                {{"Nmae is correct"}}
                @else
                {{"Nmes is incorrect"}}
         @endif --}}
        
        {{-- @unless ($name == "webschool")
            the name is incorrerct --}}
        {{-- @endunless --}}
        
        {{-- @isset($name)
            welcome {{$name}}
             @endisset --}}


        {{-- blade looping directives --}}

         {{-- @for ($i = 1;$i <= 10;$i++)
            <h2>
            {{$i}}
            </h2>
        @endfor --}}

         {{-- @php
            $i=1;
        @endphp
        @while ($i < 10)
            <h2>{{$i}}</h2>
            @php $i++;   @endphp            
        @endwhile  --}}

        {{-- @php
            $array = [1,2,3,4,5,6,7,8,9,10];
        @endphp
        @foreach ($array as $i )
            {{$i}}
            
        @endforeach --}}
        {{-- @for ($i = 1; $i < 10; $i++)

            @if ($i == 5)
                @continue;
                @break;
            @endif
                {{$i}}
              @endfor --}}


              {{-- Other blade Directives --}}

              
    {{-- </body>
</html --}}