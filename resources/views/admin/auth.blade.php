<x-admin-layout>
    <x-slot name="title">
        АВТОРИЗАЦИЯ
    </x-slot>

    <div>
        @auth("web")
            <h4>Вы уже авторизованы!</h4>
        @endauth
        @guest("web")
        <form action="{{ route('login') }}" method="post" >
            @csrf
            <input type="text" placeholder="Введите логин" title="Логин" id="email" name="email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <input type="password" id="password" name="password">
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
            <button type="submit">Войти</button>
        </form>
        @endguest
    </div>
</x-admin-layout>
