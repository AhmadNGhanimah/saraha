<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" as="style">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title')</title>
    {{--  Add Meta Tag Here   --}}
    <meta name="keyword" content="@yield('meta_keyword')">
    <meta name="description" content="@yield('meta_description')">
    <link rel="icon" href="{{asset('image/favicon.ico')}}"/>
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{Request::url()}}">
    <meta property="og:title" content="@yield('title_Page',config('app.name'))">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:image" content="@yield('og_image',asset('image/LogoWebsite.png'))">
    <!-- Twitter -->
    <meta property="twitter:card" content="{{asset('image/LogoWebsite.png')}}">
    <meta property="twitter:url" content="{{Request::url()}}">
    <meta property="twitter:title" content="@yield('title_Page',config('app.name'))">
    <meta property="twitter:description" content="@yield('meta_description')">
    <meta property="twitter:image" content="{{asset('image/LogoWebsite.png')}}">
    <meta name="robots" content="@yield('robots','index, follow')"/>
    <link rel="canonical" href="{{Request::url()}}"/>
    <title>@yield('title_Page',config('app.name'))</title>



</head>
