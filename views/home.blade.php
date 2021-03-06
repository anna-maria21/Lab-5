@extends('layouts.app')

@section('title-block')Головна@endsection

@section('content')
    <h2>Головна сторінка</h2>
    <div class="row">
            <p>Акіта-іну — порода собак, виведена в префектурі Акіта на японському острові Хонсю. 
            Предками могли бути китайські шпіцеподібні породи, схрещені з мастифами. Акіта є одним з 
            найбільших японських собак зі шпіцеподібних. Спочатку його називали «акіта матагі» (з перекладі «хороший мисливець»).
             Довгий час цей собака використовувався для полювання на ведмедя і як бійцівська. 
             Ймовірно, що ця порода дуже давня. Про це говорять дані археологічних досліджень, в результаті 
             яких були знайдені рештки шпіцеподібних собак, які датуються приблизно другим тисячоліттям до нашої ери. 
             Крім усього іншого, збереглися древні малюнки із зображенням собак, що нагадують сучасних акіта.</p>
             <p>Для збереження і розвитку мисливських якостей в Японії в VI ст. були засновані клуби любителів цих собак. 
             Вони складали інструкції з утримання, розведення, навчання. У XV ст. були засновані племінні книги, в яких 
             записувалися кличка, походження, забарвлення та інші відомості.</p>
             <p>Під час Другої світової війни частіше використовували німецьких вівчарок і власники акіта стали схрещувати 
             їх з ними. Після Другої світової війни порода розділилася на три типи: акіта матагі, бійцівський акіта, 
             акіта-вівчар (акіта матагі, схрещений з німецькою вівчаркою).</p>
        
            <img src="{{asset('images/akita.jpg')}}" alt="dog" class="first_dog">
    </div>
@endsection

