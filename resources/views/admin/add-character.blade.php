<x-admin-layout>
    <x-slot name="title">
        Добавить персонажа
    </x-slot>
    <div class="container-fluid m-5 justify-content-center d-flex flex-column">
        <form class="d-flex flex-column" action="{{ route('add-char') }}" method="post">
            @csrf
            <label>Имя персонажа</label>
            <input value="" id="charname" name="charname" />
            <label>Ссылка на изображение персонажа</label>
            <input value="" id="charimage" name="charimage" />
            <label>Описание персонажа</label>
            <input value="" id="chardesc" name="chardesc" />
            <label>Класс персонажа</label>
            <select class="form-control" name="class" id="class">
                <option>Выберите класс</option>
                @foreach ($classes as $class)
                    <option value="{{ $class->id }}">
                        {{ $class->classname }}
                    </option>
                @endforeach
            </select>
            <label>Ранг персонажа</label>
            <select class="form-control" name="rank" id="rank">
                <option>Выберите ранг</option>
                @foreach ($ranks as $rank)
                    <option value="{{ $rank->id }}">
                        {{ $rank->ranktype }}
                    </option>
                @endforeach
            </select>
            <label>Тип урона персонажа</label>
            <select class="form-control" name="dmg" id="dmg">
                <option>Выберите тип урона</option>
                @foreach ($dmgs as $dmg)
                    <option value="{{ $dmg->id }}">
                        {{ $dmg->typedmg }}
                    </option>
                @endforeach
            </select>
            <label>Сет стигм для персонажа</label>
            <select class="form-control" name="set" id="set">
                <option>Выберите сет</option>
                @foreach ($sets as $set)
                    <option value="{{ $set->id }}">
                        {{ $set->stigmaname }}
                    </option>
                @endforeach
            </select>
            <label>Оружие персонажа</label>
            <select class="form-control" name="weap" id="weap">
                <option>Выберите оружие</option>
                @foreach ($weaps as $weap)
                    <option value="{{ $weap->id }}">
                        {{ $weap->weapname }}
                    </option>
                @endforeach
            </select>
            <label>Тип персонажа</label>
            <select class="form-control" name="type" id="type">
                <option>Выберите тип персонажа</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">
                        {{ $type->typename }}
                    </option>
                @endforeach
            </select>
            <div class="mt-lg-5 mt-sm-2 btn-group-lg">
                <button class="mr-lg-5 mr-sm-2 btn-dark rounded btn-lg" type="submit">Создать</button>
            </div>
        </form>
    </div>
</x-admin-layout>
