@extends('gallerylayout')

@section('content')





    <h1 class="title">Прийняти участь у конкурсі</h1>
    <h2 class="subtitle subtitle_margin-down">
        Оберіть конкурс, ознайомтесь з правилами та зареєструйте свою
        роботу. Успіху!
    </h2>
    <div class="contests">

        @if (!$contests)
            <h2 class="subtitle subtitle_margin-down">
                Нажаль конкурсів для реєстрації не має!!!
            </h2>
        @endif

        @foreach ($contests as $contest)

            <div class="card card_active animated bounceIn">
                <div class="card__active-wrapper">
                    <p class="card__active-text card-title card-title_yellow">
                        Реєстрація
                    </p>
                    {{-- <div class="card__active-icon">
                            <svg width="35" height="32" viewBox="0 0 35 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.5 0L21.429 12.0922L34.1435 12.0922L23.8572 19.5656L27.7862 31.6578L17.5 24.1844L7.21376 31.6578L11.1428 19.5656L0.85651 12.0922L13.571 12.0922L17.5 0Z"
                                    fill="#EBFF00" />
                            </svg>
                        </div> --}}
                </div>
                <a href="{{route('form.registration.contest',$contest->id)}} ">
                    <div class="image card__image">
                        <img src="{{ Storage::disk('public')->url($contest->cover) }}" alt="" />
                    </div>
                    <div class="card__line">
                        <div class="contests__contest-name card-title">
                            {{ $contest->title }}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach




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
