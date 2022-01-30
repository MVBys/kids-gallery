@extends('gallerylayout')

@section('content')




    <div class="container animated bounceIn">
        <h1 class="title">
           {{ $message}}
        </h1>
        <div class="button_container">

            <a class="btn_rate message_btn"  href="{{route('main')}}"> Перейти до головної сорінки </a>
            {{-- <button class="btn_rate">наступна робота</button> --}}
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
