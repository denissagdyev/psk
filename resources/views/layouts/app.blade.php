<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ПСК-Групп</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Ссылка на ваш файл стилей --}}
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="images/logo.png" alt="ПСК-Групп" width="100"> {{-- Замените на путь к вашему логотипу --}}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <a href="{{ route('home') }}">Главная</a>
                <a href="{{ route('about') }}">О компании</a>
                <a href="{{ route('contacts') }}">Контакты</a>
                <a href="{{ route('news') }}">Новости</a>
            </div>


        </nav>
    </header>

    <main class="container mt-4">
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="images/logo.png" alt="ПСК-Групп" width="100">
                </div>
                <div class="col-md-6 text-right">
                    <p class="zag">Контакты:</p>
                    <p><b>ООО "ПСК-Групп"</b></p>
                    <p>Телефон: 8 (342)-278-75-59</p>
                    <p>Email: info@psk-grupp.ru</p>
                    <p>Адрес: г. Пермь, ул. О. Кошевого, 40</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>