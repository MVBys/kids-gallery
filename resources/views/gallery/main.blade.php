@extends('gallerylayout')







@section('content')
@include('gallery.include.header_main')

<form action="" class="search-form">
    <div class="contests-tite">
        <div class="contests-tite__icon">
            <img src="{{asset('public/img/svg/Hands/hend21.svg')}}" alt="" />
        </div>
        <h2 class="contests-tite__title">Конкурси</h2>
    </div>
    <div class="search-form__item">
        <span class="standart-text search-form__text"> Сортувати</span>
        <div class="select-container gradient-wrapper">
            <select class="select" type="text">
                <option value="default">Конкурс не выбран</option>
                <option value="value1">Значение 1</option>
                <option value="value2">Значение 2</option>
                <option value="value3">Значение 3</option>
            </select>
        </div>
    </div>
    <div class="search-form__item">
        <span class="standart-text search-form__text"> Шукати</span>
        <div class="gradient-wrapper">
            <div class="input-container">
                <input class="input" type="text" />
                <button class="input-search">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</form>



<div class="contests">
    <div class="card card_active animated bounceIn">

        <div class="card__active-wrapper">
            <p class="card__active-text card-title card-title_yellow">
                Активен
            </p>
            <div class="card__active-icon">
                <svg width="35" height="32" viewBox="0 0 35 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.5 0L21.429 12.0922L34.1435 12.0922L23.8572 19.5656L27.7862 31.6578L17.5 24.1844L7.21376 31.6578L11.1428 19.5656L0.85651 12.0922L13.571 12.0922L17.5 0Z"
                        fill="#EBFF00" />
                </svg>
            </div>
        </div>

        <div class="image card__image">
            <img src="{{asset('public/img/Cards/image.png')}}" alt="" />
        </div>
        <div class="card__line">
            <div class="contests__contest-name card-title">
                Открытки к дню рождения школы
            </div>
        </div>
    </div>



</div>

@endsection
