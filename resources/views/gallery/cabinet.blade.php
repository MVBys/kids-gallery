@extends('gallerylayout')

@section('content')


    <div class="container">
        <div class="contests-tite">
            <h2 class="contests-tite__title">Створити конкурс</h2>
        </div>
        <!-- form for creating contest -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('contest.store') }}" method="POST" enctype="multipart/form-data"
            class="form cabinet_form bottom-50">
            @csrf
            <div class="personal-area">
                <div class="personal-area__container grid">
                    <p class="standart-text important-field">Назва</p>
                    <div class="gradient-wrapper">
                        <input type="text" class="input" name="title" value="{{ old('title') }}" required>
                    </div>
                    <p class="standart-text important-field">Опис</p>
                    <div class="gradient-wrapper">
                        <textarea class="text-area personal-area__text-area" rows="1" id=""
                            style="width: 355px; height: 33px;" name="description"
                            required>{{ old('description') }}</textarea>
                    </div>
                    <input type="file" hidden="" id="personal-area-file-input" name="cover" value="{{ old('cover') }}"
                        required>

                    <label class="button button_blue" for="personal-area-file-input">
                        Завантажити опкладинку</label>
                </div>
                <div class="personal-area__container personal-area__container_wide grid">
                    <p class="standart-text important-field">дата початку реєстрації</p>
                    <div class="gradient-wrapper">
                        <input type="datetime-local" class="input" name="started_at"
                            value="{{ old('started_at') }}" required>
                    </div>
                    <p class="standart-text important-field">
                        дата закінчення реєстрації
                    </p>
                    <div class="gradient-wrapper">
                        <input type="datetime-local" class="input" name="end_registration_at"
                            value="{{ old('completion_at') }}" required>
                    </div>
                    <p class="standart-text important-field">дата закінчення конкурсу</p>
                    <div class="gradient-wrapper">
                        <input type="datetime-local" class="input" name="completion_at"
                            value="{{ old('completion_at') }}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="button button_purple button_center-huge">
                Створити
            </button>
        </form>
        <div class="contests-tite">
            <div class="contests-tite__icon">
                <img src="{{ asset('public/img/svg/Hands/hend21.svg') }}" alt="">
            </div>
            <h2 class="contests-tite__title">Ваші конкурси</h2>
        </div>
        <div class="contests">

            @foreach ($contests as $contest)
                <div class="card card_center">

                    <div class="card__active-wrapper">
                        @if ($contest->status = 0)
                            <p class="card__active-text card-title card-title_yellow">
                                Не активний
                            </p>
                        @elseif($contest->status = 1)
                            <p class="card__active-text card-title card-title_yellow">
                                Реєстрація
                            </p>
                        @elseif($contest->status = 2)
                            <p class="card__active-text card-title card-title_yellow">
                                Голосування
                            </p>
                        @elseif($contest->status = 3)
                            <p class="card__active-text card-title card-title_yellow">
                                Закінчився
                            </p>
                        @else
                            <p class="card__active-text card-title card-title_yellow">
                                Закінчився!!
                            </p>

                        @endif

                    </div>

                    <div class="card__settings animated bounceInDown">
                        <div class="card__settings-bg"></div>
                        <div class="card__settings-body">
                            Параметры появления в .card__settings
                        </div>
                    </div>
                    <div class="image card__image card__image_big-height">
                        <img src="{{ Storage::disk('public')->url($contest->cover) }}" alt="">
                    </div>
                    <div class="card__line">
                        <div class="contests__contest-name card-title">
                            {{ $contest->title }}
                        </div>
                        <button class="card__dots-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 16 16">
                                <path
                                    d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
            @endforeach



        </div>
    </div>




@endsection
