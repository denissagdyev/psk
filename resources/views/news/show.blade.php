@extends('layouts.app')

@section('content')
    <h1>{{ $news->title }}</h1>
    <img src="" alt="{{ $news->title }}" class="img-fluid mb-3">
    <p>{{ $news->content }}</p>
    <p class="text-muted">{{ $news->date ? $news->date->format('d.m.Y') : '' }}</p>
    <a href="{{ route('news.index') }}" class="btn btn-secondary">Назад к новостям</a>
@endsection