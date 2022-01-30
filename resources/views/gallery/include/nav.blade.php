<header class="header">

    <div class="header_logo_wrapper">
        <a href="{{route('main')}}" class="logo_link">
            <img class="header_logo" src="{{asset('public/img/logo.svg')}}" alt="" />
            <p class="header_text">
                ГАЛЕРЕЯ ДЕТСКОГО <br />
                ТВОРЧЕСТВА
            </p>
        </a>
    </div>

    <div class="burger__wrapper">
        <input type="checkbox" id="checkbox" class="burger__checkbox" />
        <label for="checkbox" class="burger__button">
            <span class="burger__button-line"></span>
            <span class="burger__button-line"></span>
            <span class="burger__button-line"></span>
        </label>
        <div class="burger__menu">
            <a href="index.html" class="burger__menu-link">Головна</a>
            <a href="competition_work.html" class="burger__menu-link">Прийняти работ</a>
            <a href="form.html" class="burger__menu-link">Учавствовать в конкурсе</a>
            <a href="#" class="burger__menu-link">Вхід</a>
        </div>
    </div>

    <nav class="nav">
        <a href="{{route('main')}}">Головна</a>
        <a href="{{route('contest.for.participate')}}">Прийняти участь</a>
        <a href="#">Вхід</a>
    </nav>


</header>
