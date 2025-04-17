@extends('layouts.app')

@section('content')
    <h1>Новости</h1>
    @foreach ($news as $item)
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="" class="card-img" alt="{{ $item->title }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text">{{ Str::limit($item->content, 200) }}</p>  {{-- Отображаем первые 200 символов --}}
                        <p class="card-text"><small class="text-muted">{{ $item->date ? $item->date->format('d.m.Y') : '' }}</small></p>
                        <a href="{{ route('news.show', $item) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{ $news->links() }}  {{-- Пагинация --}}
@endsection