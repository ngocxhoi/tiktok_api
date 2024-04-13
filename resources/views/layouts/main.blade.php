<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data backend</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  @include('components.nav');

  <div class="min-h-[400px] bg-gray-100 border-box p-4">
    @yield('body')
  </div>

  @include('components.footer');
</body>
</html>