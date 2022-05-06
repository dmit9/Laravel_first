<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body class="bg-dark text-white">
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center  text-white">

          <span class="fs-4">Погодное приложение</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
          <a class="me-3 py-2  text-white" href="/">Главная</a>
          <a class="me-3 py-2  text-white" href="/about">Информация</a>
          <a class="me-3 py-2 btn btn-outline-warning" href="/review">отзывы</a>
        </nav>
      </div>

<div class="container">
    @yield('main_content')
</div>
</body>
</html>
