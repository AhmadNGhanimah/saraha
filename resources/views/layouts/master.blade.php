<!doctype html>
<html lang="en">
@include('layouts.head')

<body>
@include('layouts.header')

<div class="container-fluid">
    @yield('content')
</div>

@include('layouts.footer')
@section('headerr')

@endsection
</body>
</html>
