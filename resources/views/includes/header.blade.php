<header class="py-3 border-bottom">
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <ul class="list-unstyled d-flex">
                    <li class="me-3">
                        <a href="{{ route('home') }}">
                            Главная
                        </a>
                    </li>

                    <li class="me-3">
                        <a href="{{ route('blog') }}">
                            Блог
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3">
                        <a href="{{ route('register') }}">
                            Регистрация
                        </a>
                    </li>

                    <li class="ms-3">
                        <a href="{{ route('login') }}">
                            Вход
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</header>
