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
            <div class="d-flex flex-column h-100 text-center justify-content-center align-content-center">
                <h1 class="display-3 text-white">Новая версия уже доступна!</h1>
                <p class="lead mb-0"><a href="https://honkaiimpact3.hoyoverse.com/global/en-us/fab">Присоединяйтесь</a></p>
                <button class="bg-transparent align-self-center border-light rounded mt-2 p-2 w-25">
                    <a href="#about" style="scroll-behavior: smooth">Узнать больше о событиях</a>
                </button>
            </div>
        </div>
    </header>
    <div class="container-fluid vh-100" id="about">
        <h4>О событиях</h4>
    </div>
</x-app-layout>
