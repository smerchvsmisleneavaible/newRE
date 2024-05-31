<x-admin-layout>
    <x-slot name="title">
        {{$chara['charname']}}
    </x-slot>
    <div class="container-fluid m-5 justify-content-center d-flex flex-column">
        <form class="d-flex flex-column" action="{{ route('char-update', $chara['id']) }}" method="post">
            @csrf
            <label>Имя персонажа</label>
            <input value="{{$chara['charname']}}" id="charname" name="charname" />

            <label>Ссылка на изображение персонажа</label>
            <input value="{{$chara['charimage']}}" id="charimage" name="charimage" />

            <label>Описание персонажа</label>
            <input value="{{$chara['chardesc']}}" id="chardesc" name="chardesc" />

            <label>Класс персонажа</label>
            <select class="form-control" name="class" id="class">
                <option>Выберите класс</option>
                @foreach ($classes as $class)
                    <option value="{{ $class->id }}" {{ ( $chara->charclass == $class->id) ? 'selected' : '' }}>
                        {{ $class->classname }}
                    </option>
                @endforeach
            </select>

            <label>Ранг персонажа</label>
            <select class="form-control" name="rank" id="rank">
                <option>Выберите ранг</option>
                @foreach ($ranks as $rank)
                    <option value="{{ $rank->id }}" {{ ( $chara->charrank == $rank->id) ? 'selected' : '' }}>
                        {{ $rank->ranktype }}
                    </option>
                @endforeach
            </select>

            <label>Тип урона персонажа</label>
            <select class="form-control" name="dmg" id="dmg">
                <option>Выберите тип урона</option>
                @foreach ($dmgs as $dmg)
                    <option value="{{ $dmg->id }}" {{ ( $chara->dmgtype == $dmg->id) ? 'selected' : '' }}>
                        {{ $dmg->typedmg }}
                    </option>
                @endforeach
            </select>

            <label>Сет стигм для персонажа</label>
            <select class="form-control" name="set" id="set">
                <option>Выберите сет</option>
                @foreach ($sets as $set)
                    <option value="{{ $set->id }}" {{ ( $chara->stigset == $set->id) ? 'selected' : '' }}>
                        {{ $set->stigmaname }}
                    </option>
                @endforeach
            </select>

            <label>Оружие персонажа</label>
            <select class="form-control" name="weap" id="weap">
                <option>Выберите оружие</option>
                @foreach ($weaps as $weap)
                    <option value="{{ $weap->id }}" {{ ( $chara->weap == $weap->id) ? 'selected' : '' }}>
                        {{ $weap->weapname }}
                    </option>
                @endforeach
            </select>

            <label>Тип персонажа</label>
            <select class="form-control" name="type" id="type">
                <option>Выберите тип персонажа</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ ( $chara->chartype == $type->id) ? 'selected' : '' }}>
                        {{ $type->typename }}
                    </option>
                @endforeach
            </select>

            <div class="mt-lg-5 mt-sm-2 btn-group-lg">
                <button class="mr-lg-5 mr-sm-2 btn-dark rounded btn-lg" type="submit">Сохранить изменения</button>
            <button class="mr-lg-5 mr-sm-2 btn-dark btn-outline-danger rounded btn-lg" type="submit">Удалить персонажа</button>
            </div>
        </form>
    </div>
</x-admin-layout>
