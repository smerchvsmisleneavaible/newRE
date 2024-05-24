<x-admin-layout>
    <x-slot name="title">
        АВТОРИЗАЦИЯ
    </x-slot>

    <div>
        <form method="POST">
            @csrf
            <input type="text" placeholder="Введите логин" title="Логин">
            <input type="password">
            <button type="submit">Войти</button>
        </form>
    </div>
</x-admin-layout>
