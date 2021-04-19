@extends('layouts.app')

@section('title-block')Інформаційна@endsection

@section('content')
    <h1>У нас Ви можете придбати</h1>
    @foreach($data as $element)
        @if($element->id & 1)
            <div class="row mt-5 myrow">
                <div class="col-5">
                    @php
                    echo '<img src="images/'.$element['id'].'.jpg" alt="image" class="image">';
                    @endphp
                </div>
                <div class="col-7">
                    <p>
                        Ім'я: {{ $element->name_dog }}<br>
                        Вік(місяців): {{ $element->age_m }}<br>
                        Вид: {{ $element->type }}<br><br>
                        {{ $element->about }}
                    </p> 
                    <a href="{{ route('deleting', $element->id) }}"><button class="btn btn-warning">Забрати</button></a>
                </div>
            </div>
        @else 
            <div class="row mt-5 myrow">
                <div class="col-7 for_p">
                    <p>
                        Ім'я: {{ $element->name_dog }}<br>
                        Вік(місяців): {{ $element->age_m }}<br>
                        Вид: {{ $element->type }}<br><br>
                        {{ $element->about }}
                    </p>
                    <a href="{{ route('deleting', $element->id) }}"><button class="btn btn-warning">Забрати</button></a>
                </div>
                <div class="col-5">
                    @php
                        echo '<img src="images/'.$element['id'].'.jpg" alt="image" class="image">';
                    @endphp
                </div>
            </div>
        @endif
    @endforeach
@endsection