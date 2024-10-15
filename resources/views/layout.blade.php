<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset ('template/css/bootstrap.css') }}">
</head>
<body>

    <h1 class="text-center mt-3">Tugas pertama CRUD</h1>
    @if(Auth::check())
        <div class="text-center">
        <b>Halo {{ Auth::user()->name }}, anda berhasil login</b>
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="btn btn-sm btn-danger">logout</button>
        </form>
        </div>
    @endif
    <div class="mt-2 container">
        @yield('konten')
    </div>
    
</body>
</html>