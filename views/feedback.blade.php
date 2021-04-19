@extends('layouts.app')

@section('title-block')Подати заявку@endsection

@section('content')
<h1>Залиште заявку на придбання</h1>

<div class="send">
    <form action="{{ route('feedback-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Ваше ім'я</label>
            <input type="text" name="name" placeholder="Введіть ім'я" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введіть email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">Ваш контактний номер</label>
            <input type="text" name="phone" placeholder="Введіть телефон" id="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Тема</label>
            <input type="text" name="subject" placeholder="Введіть тему" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Повідомлення або питання</label>
            <textarea type="text" name="message" id="message" class="form-control" placeholder="Введіть повідомлення"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Надіслати</button>
    </form>
</div>
@endsection