<x-admin-layout>
    <x-slot name="title">
        АВТОРИЗАЦИЯ
    </x-slot>
    <div class="d-flex align-items-center justify-content-center flex-column w-100">
        @auth("web")
            <h4>Вы уже авторизованы!</h4>
        @endauth
        @guest("web")
        <form class="d-flex align-items-center justify-content-center flex-column" action="{{ route('login') }}" method="post" >
            @csrf
            <input class="m-lg-5 m-sm-2" type="text" placeholder="Введите логин" title="Логин" id="login" name="login">
            @if ($errors->has('login'))
                <span class="text-danger">{{ $errors->first('login') }}</span>
            @endif
            <input type="password" id="password" placeholder="Введите пароль" name="password">
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
            <button class="m-lg-5 m-sm-2 char-button text-dark w-50" type="submit">Войти</button>
        </form>
        @endguest
    </div>
</x-admin-layout>
