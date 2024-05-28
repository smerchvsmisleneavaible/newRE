<x-admin-layout>
    <x-slot name="title">
        АВТОРИЗАЦИЯ
    </x-slot>

    <div>
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
    </div>
</x-admin-layout>
