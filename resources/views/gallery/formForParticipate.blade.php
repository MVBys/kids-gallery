@extends('gallerylayout')

@section('content')




    <div class="container">
        <h1 class="title">{{ $contest->title }}</h1>
        <h2 class="subtitle bottom-50">
            {{ $contest->description }}
        </h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="form" action="{{ route('reg.work.in.contest', $contest->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <h2 class="form-title">Заповніть анкету</h2>
            <p class="standart-text important-field">Ваше Им’я</p>
            <div class="gradient-wrapper">
                <input type="text" class="input" name="participant_name" required />
            </div>
            <p class="standart-text important-field">Ваша призвище</p>
            <div class="gradient-wrapper">
                <input type="text" class="input" name="particapant_lastname" required />
            </div>
            <p class="standart-text important-field">назва вашої роботи</p>
            <div class="gradient-wrapper">
                <input type="text" class="input" name="title" required />
            </div>

            <input type="file" id="form-file" name="file" hidden />
            <label class="button button_blue" for="form-file" name="file" required>Завантажте вашу роботу</label>
            <input type="submit" class="button button_full-width button_purple" value="відправити">

        </form>
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
