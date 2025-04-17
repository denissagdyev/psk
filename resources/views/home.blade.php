@extends('layouts.app')

@section('content')
<div class="home-page">
@if($banners->isNotEmpty())
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($banners as $key => $banner)
                <li data-target="#carouselExampleCaptions" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}">
                </li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($banners as $key => $banner)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ $banner->url }}" class="d-block w-100" alt="{{ $banner->title }}">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $banner->title }}</h5>
                        <p>{{ $banner->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@else
    <p>Нет активных баннеров.</p>
@endif

<!-- Блок услуг -->
<div class="row mt-4">
    <div class="col-md-4">
        <div class="card">
            <img src="images/u1.jpg" class="card-img-top" alt="Обследование зданий">
            <div class="card-body">
                <h5 class="card-title">Обследование зданий и сооружений</h5>
                <a href="{{ route('service1') }}" class="btn btn-primary">Подробнее</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="images/u2.jpg" class="card-img-top" alt="Проектная документация"> 
            <div class="card-body">
                <h5 class="card-title">Проектная документация</h5>
                <a href="{{ route('service2') }}" class="btn btn-primary">Подробнее</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <img src="images/u3.jpg" class="card-img-top" alt="Строительно-монтажные работы">
            <div class="card-body">
                <h5 class="card-title">Строительно-монтажные работы</h5>
                <a href="{{ route('service3') }}" class="btn btn-primary">Подробнее</a>
            </div>
        </div>
    </div>
</div>


<div class="mt-4">
    <h2 class="map_zag">Наши объекты</h2>
    <div class="map" id="map" style="width: 100%; height: 300px;">
        <img src="images/map.png" alt="Клиент 1" class="img-fluid">
    </div>
</div>


<div class="clients-section">
    <h2>Наши клиенты</h2>
    <div class="row">
        <div class="col-md-2">
            <img src="images/k1.jpg" alt="Клиент 1" class="img-fluid"> 
        </div>
        <div class="col-md-2">
            <img src="images/k2.jpg" alt="Клиент 2" class="img-fluid">
        </div>
        <div class="col-md-2">
            <img src="images/k3.jpg" alt="Клиент 3" class="img-fluid">
        </div>
        <div class="col-md-2">
            <img src="images/k4.jpg" alt="Клиент 4" class="img-fluid">
        </div>
        <div class="col-md-2">
            <img src="images/k5.jpg" alt="Клиент 5" class="img-fluid">
        </div>
        <div class="col-md-2">
            <img src="images/k6.png" alt="Клиент 6" class="img-fluid">
        </div>
    </div>
</div>


<div class="contact-form-section">
    <h2>Оставить заявку</h2>
    <form action="{{ route('contacts.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Номер телефона</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="question">Ваш вопрос</label>
            <input type="text" class="form-control" id="question" name="question" required>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
</div>
@endsection