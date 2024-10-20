<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tempes</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-lg font-bold">
                <a href="{{ url('/') }}">Tempes</a>
            </div>
            <nav>
                <ul class="flex space-x-4">
                    <li>
                        <a href="{{ url('/products') }}" class="hover:underline">Продукты</a>
                    </li>
                    <li>
                        <a href="{{ url('/orders') }}" class="hover:underline">Заказы</a>
                    </li>
                    <li>
                        <a href="{{ url('/sales') }}" class="hover:underline">Продажи</a>
                    </li>
                    <li>
                        <a href="{{ url('/suppliers') }}" class="hover:underline">Поставщики</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>
</html>