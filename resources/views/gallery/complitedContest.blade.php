@extends('gallerylayout')

@section('content')




            <h1 class="title">{{ $works[0]->contest->title }}</h1>


            @foreach ($works as $work)


                <div class="card card_center card_winner animated bounceIn">
                    <div class="card__active-wrapper">
                        <p class="card__active-text card-title card-title_yellow">
                            Активен
                        </p>
                        <div class="card__active-icon">
                            <svg width="35" height="32" viewBox="0 0 35 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M17.5 0L21.429 12.0922L34.1435 12.0922L23.8572 19.5656L27.7862 31.6578L17.5 24.1844L7.21376 31.6578L11.1428 19.5656L0.85651 12.0922L13.571 12.0922L17.5 0Z"
                                    fill="#EBFF00" />
                            </svg>
                        </div>
                    </div>

                    @if ($loop->first)
                        <div class="card__cup image">
                            <img src="{{asset('public/img/winner/cup.png')}}" alt="" />
                        </div>
                    @endif

                    <div class="card__line">
                        <div class="contests__contest-name card-title">
                            {{$work->participant_name." ". $work->particapant_lastname}}
                        </div>
                    </div>
                    <div class="image card__image card__image_big-height">
                        <img src="{{ Storage::disk('public')->url($work->file) }}" alt="" />
                    </div>
                    <div class="card__line">
                        <div class="contests__contest-name card-title">
                           {{ $work->title}}
                        </div>
                        <p class="card-title">{{$work->sum_of_points / $work->number_of_votes }}</p>
                    </div>
                </div>

            @endforeach




        {{-- <div class="background-wrapper background-wrapper_bottom">
            <div class="background-wrapper__shape animated pulse">
                <img src="./img/svg/Polygon4.svg" alt="" />
            </div>
            <div class="background-wrapper__shape animated pulse">
                <img src="./img/svg/Polygon3.svg" alt="" />
            </div>
        </div> --}}








@endsection
