<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
   <nav class="navbar navbar-expand bg-black">
    <div class="container-fluid">
        <a href="/" class="navbar-brand text-light">Wear & Wow </a>
    </div>

   </nav>
   <div class="container mt-5">
        
    <div class="row">
      @if($message=Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show">
        <strong>Success</strong> {{$message}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close" button>
      </div>
      @endif
      @yield('main')
    </div>
    <!--Container end-->
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>