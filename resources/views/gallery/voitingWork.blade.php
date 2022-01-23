@extends('gallerylayout')

@section('content')




    <div class="container animated bounceIn">
        <h1 class="title">Конкурс - {{ $contestTitle }}</h1>

        <div class="card card_center card_full-width">
            <p class="work__header">{{ $work->title }}</p>
            <div class="image card__image card__image_big-height card__image_margin">
                <img src="{{Storage::disk('public')->url($work->file)}}" alt="{{ $work->title }}" />
            </div>
            <form action="{{route('next.voting.work', $work->contest_id)}}" method="post">
                @csrf
                <div class="rating">
                    <div class="rating__items">
                        <input id="rating__item_5" type="radio" class="rating__item" name="rate" value="5" />
                        <label for="rating__item_5" class="rating__item_label">5</label>
                        <input id="rating__item_4" type="radio" class="rating__item" name="rate" value="4" />
                        <label for="rating__item_4" class="rating__item_label">4</label>
                        <input id="rating__item_3" type="radio" class="rating__item" name="rate" value="3" />
                        <label for="rating__item_3" class="rating__item_label">3</label>
                        <input id="rating__item_2" type="radio" class="rating__item" name="rate" value="2" />
                        <label for="rating__item_2" class="rating__item_label">2</label>
                        <input id="rating__item_1" type="radio" class="rating__item" name="rate" value="1" />
                        <label for="rating__item_1" class="rating__item_label">1</label>
                    </div>
                    <div class="button_container">
                        <input class="btn_rate" type="submit" value="наступна робота">
                        {{-- <button class="btn_rate">наступна робота</button> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>






    {{-- <div class="background-wrapper background-wrapper_bottom">
            <div class="background-wrapper__shape animated pulse">
                <img src="./img/svg/Polygon4.svg" alt="" />
            </div>
            <div class="background-wrapper__shape animated pulse">
                <img src="./img/svg/Polygon3.svg" alt="" />
            </div>
        </div> --}}








@endsection
