<x-app-layout>
    <x-slot name="title">
        ГЛАВНАЯ
    </x-slot>

    <header class="">
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="public/upload/files/video/v7.4 Invitation to the Mad Banquet Trailer — Honkai Impact 3rd.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="text-white w-100">
                    <h1 class="display-3">Новая версия уже доступна!</h1>
                    <p class="lead mb-0"><a href="https://honkaiimpact3.hoyoverse.com/global/en-us/fab">Присоединяйтесь</a></p>
                    <button class="bg-transparent border-light rounded mt-2 p-2">
                        <a href="#about-events" style="scroll-behavior: smooth">Узнать больше о событиях</a>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid vh-100" id="about-events">

    </div>
</x-app-layout>
