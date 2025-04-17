@extends('layouts.app')

@section('content')
<div class="contact-page">
    <h1>Контакты</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <p><b>ООО "ПСК-Групп"</b></p>
            <p>Телефон: 8 (342)-278-75-59</p>
            <p>Email: info@psk-grupp.ru</p>
            <p>Адрес: г. Пермь, ул. О. Кошевого, 40</p>
            <p>
                <a href="#" target="_blank">Whatsapp</a> |
                <a href="#" target="_blank">Telegram</a>
            </p>
        </div>
        <div class="col-md-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedbackModal">
                Задать вопрос
            </button>
        </div>
    </div>

    <div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="feedbackModalLabel">Задать вопрос</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                            <input type="text" class="form-control" id="question" name="message" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection